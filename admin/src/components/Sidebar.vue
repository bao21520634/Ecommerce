<template>
  <div class="min-w-[240px] w-[240px]  transition-all bg-black text-white">
    <div class="h-[56px]"></div>
    <router-link :to="{name: 'app.dashboard'}"
                 class="flex items-center py-[14px] pl-6 transition-colors hover:bg-white hover:text-black">
      <span class="mr-2 text-gray-300">
        <HomeIcon class="w-5"/>
      </span>
      <span class="text-lg">
        Dashboard
      </span>
    </router-link>
    <router-link :to="{name: 'app.categories'}"
                 class="flex items-center py-[14px] pl-6 transition-colors hover:bg-white hover:text-black">
      <span class="mr-2 text-gray-300">
        <ViewListIcon class="w-5"/>
      </span>
      <span class="text-lg">
        Categories
      </span>
    </router-link>
    <router-link :to="{name: 'app.products'}"
                 class="flex items-center py-[14px] pl-6 transition-colors hover:bg-white hover:text-black">
      <span class="mr-2 text-gray-300">
        <ViewListIcon class="w-5"/>
      </span>
      <span class="text-lg">
        Products
      </span>
    </router-link>
    <router-link :to="{name: 'app.orders'}"
                 class="flex items-center py-[14px] pl-6 transition-colors hover:bg-white hover:text-black">
      <span class="mr-2 text-gray-300">
        <ViewListIcon class="w-5"/>
      </span>
      <span class="text-lg">
        Orders
      </span>
    </router-link>
    <router-link :to="{name: 'app.users'}"
                 class="flex items-center py-[14px] pl-6 transition-colors hover:bg-white hover:text-black">
      <span class="mr-2 text-gray-300">
        <UsersIcon class="w-5"/>
      </span>
      <span class="text-lg">
        Users
      </span>
    </router-link>
    <router-link :to="{name: 'app.customers'}"
                 class="flex items-center py-[14px] pl-6 transition-colors hover:bg-white hover:text-black">
      <span class="mr-2 text-gray-300">
        <UserGroupIcon class="w-5"/>
      </span>
      <span class="text-lg">
        Customers
      </span>
    </router-link>
    <router-link :to="{name: 'reports.orders'}"
                 class="flex items-center py-[14px] pl-6 transition-colors hover:bg-white hover:text-black">
      <span class="mr-2 text-gray-300">
        <ChartBarIcon class="w-5"/>
      </span>
      <span class="text-lg">
        Reports
      </span>
    </router-link>
  </div>
</template>

<script setup>
  import {HomeIcon, UserGroupIcon, UsersIcon, ViewListIcon, ChartBarIcon} from '@heroicons/vue/outline'
</script>

<style scoped>

</style>
