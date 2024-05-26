/**
 * Created by Zura on 12/25/2021.
 */
import axios from "axios";
import store from "./store";
import router from "./router/index.js";

const axiosClient = axios.create({
  baseURL: `${import.meta.env.VITE_API_BASE_URL}/api`
})

axiosClient.interceptors.request.use(config => {
  config.headers.Authorization = `Bearer ${store.state.user.access_token}`
  return config;
})

axiosClient.interceptors.response.use(response => {
  return response;
}, async (error) => {
  if (error.response.status === 401) {
    const refreshToken = localStorage.getItem('refresh_token');
    if (!refreshToken) {
      store.commit('setToken', null)
      store.commit('setRefreshToken', null)
      router.push({ name: 'login' })
      return
    }

    try {
      const { data } = await axiosClient.post('/refresh', { refresh_token: refreshToken })
      if (data) {
        localStorage.setItem('access_token', data.access_token);
        localStorage.setItem('refresh_token', data.refresh_token);
      }
    } catch (error) {
      router.push({ name: 'login' })
    }
  }
  throw error;
})

export default axiosClient;
