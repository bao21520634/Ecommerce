<header x-data="{
        mobileMenuOpen: false,
        cartItemsCount: {{ \App\Helpers\Cart::getCartItemsCount() }},
    }" @cart-change.window="cartItemsCount = $event.detail.count" style="background-color: white; height: 72px " class="flex justify-between text-black">
    <div>
        <a href="{{ route('home') }}" class="block py-navbar-item pl-5">
            <svg width="96" height="25" viewBox="0 0 96 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44.304 3.75V4.94049H44.0138C43.4817 4.94049 43.0302 4.98908 42.6594 5.08627C42.3047 5.18345 42.1273 5.38592 42.1273 5.69366V19.5665H45.2956C45.9728 19.5665 46.521 19.5342 46.9402 19.4694C47.3594 19.4046 47.6738 19.2912 47.8834 19.1292C48.1092 18.9673 48.2301 18.7405 48.2462 18.4489L48.5365 15.4606H50.036V21H37V19.8095H37.2419C37.7578 19.8095 38.1851 19.7528 38.5237 19.6394C38.8784 19.5261 39.0558 19.2912 39.0558 18.9349V5.81514C39.0558 5.4588 38.8784 5.22394 38.5237 5.11056C38.1851 4.99718 37.7578 4.94049 37.2419 4.94049H37V3.75H44.304Z" fill="black" />
                <path d="M51.9269 21V19.8095H52.193C52.5316 19.8095 52.8379 19.7771 53.112 19.7123C53.3861 19.6313 53.5957 19.5099 53.7409 19.3479C53.9021 19.1697 53.9827 18.9592 53.9827 18.7162V5.81514C53.9827 5.57218 53.9021 5.39401 53.7409 5.28063C53.5796 5.15106 53.362 5.06197 53.0879 5.01338C52.8299 4.96479 52.5316 4.94049 52.193 4.94049H51.9269V3.75H57.9249L65.761 18.1817L65.3741 18.2546V5.37782C65.3741 5.29683 65.2773 5.22394 65.0838 5.15916C64.8903 5.09437 64.6485 5.04577 64.3583 5.01338C64.068 4.96479 63.7617 4.94049 63.4392 4.94049H63.0523V3.75H69.0502V4.94049H68.76C68.4214 4.94049 68.1151 4.98099 67.841 5.06197C67.5669 5.12676 67.3492 5.24014 67.188 5.40211C67.0267 5.54789 66.9461 5.75035 66.9461 6.00951V21H64.068L55.1678 4.62465L55.579 4.60035V19.3722C55.579 19.4532 55.6757 19.5261 55.8692 19.5908C56.0627 19.6556 56.3045 19.7123 56.5947 19.7609C56.9011 19.7933 57.2155 19.8095 57.538 19.8095H57.9008V21H51.9269Z" fill="black" />
                <path d="M72.8303 18.9349V5.81514C72.8303 5.4588 72.653 5.22394 72.2983 5.11056C71.9597 4.99718 71.5324 4.94049 71.0164 4.94049H70.7746V3.75H77.9577V4.94049H77.7158C77.1999 4.94049 76.7645 4.99718 76.4098 5.11056C76.0712 5.22394 75.9019 5.4588 75.9019 5.81514V18.9349C75.9019 19.2912 76.0712 19.5261 76.4098 19.6394C76.7645 19.7528 77.1999 19.8095 77.7158 19.8095H77.9577V21H70.7746V19.8095H71.0164C71.5324 19.8095 71.9597 19.7528 72.2983 19.6394C72.653 19.5261 72.8303 19.2912 72.8303 18.9349Z" fill="black" />
                <path d="M79.7958 4.94049V3.75H86.8095V4.94049H86.4226C86.1646 4.94049 85.8985 4.94859 85.6244 4.96479C85.3665 4.98099 85.1407 5.00528 84.9473 5.03768C84.7699 5.07007 84.6812 5.11866 84.6812 5.18345L88.7685 11.3789L88.9137 11.4518L94.0168 19.0077C94.2586 19.3641 94.5086 19.5908 94.7665 19.688C95.0245 19.769 95.3551 19.8095 95.7581 19.8095H96V21H88.8411V19.8095H89.2281C89.4861 19.8095 89.744 19.8014 90.002 19.7852C90.2761 19.769 90.5018 19.7447 90.6792 19.7123C90.8727 19.6637 90.9694 19.6151 90.9694 19.5665L86.4951 12.9095L86.3742 12.8123L81.6338 5.71796C81.4887 5.475 81.3356 5.30493 81.1743 5.20775C81.0131 5.09437 80.8277 5.02148 80.6181 4.98908C80.4246 4.95669 80.1908 4.94049 79.9167 4.94049H79.7958ZM79.433 21V19.8095H79.6748C80.094 19.8095 80.4488 19.7285 80.739 19.5665C81.0292 19.3884 81.3275 19.0725 81.6338 18.619L86.4709 11.6947L87.4625 12.6908L82.8673 19.3479C82.8673 19.4289 82.956 19.5099 83.1333 19.5908C83.3107 19.6718 83.5364 19.7285 83.8105 19.7609C84.0846 19.7933 84.3668 19.8095 84.657 19.8095H85.0198V21H79.433ZM88.962 12.3264L87.9462 11.4032L91.9852 5.40211C91.9852 5.30493 91.8965 5.22394 91.7192 5.15916C91.5579 5.09437 91.3403 5.04577 91.0662 5.01338C90.8082 4.96479 90.526 4.94049 90.2197 4.94049H89.8569V3.75H95.3712V4.94049H95.2502C94.8149 4.94049 94.4521 5.02148 94.1619 5.18345C93.8717 5.32923 93.5734 5.61268 93.267 6.0338L88.962 12.3264Z" fill="black" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 0H0V5H5V10H0V15H5V20H0V25H5V20H10V25H15V20H20V25H25V20H20V15H15V10H20V5H25V0H20V5H15V10H10V5H5V0ZM10 15V20H15V15H10ZM10 15V10H5V15H10Z" fill="black" />
            </svg>
        </a>
    </div>

    <!-- Search -->
    <div style="width: 640px;" class="flex items-center p-3" x-data="{
            selectedSort: '{{ request()->get('sort', '-updated_at') }}',
            searchKeyword: '{{ request()->get('search') }}',
            updateUrl() {
                const params = new URLSearchParams(window.location.search)
                if (this.selectedSort && this.selectedSort !== '-updated_at') {
                    params.set('sort', this.selectedSort)
                } else {
                    params.delete('sort')
                }

                if (this.searchKeyword) {
                    params.set('search', this.searchKeyword)
                } else {
                    params.delete('search')
                }

                if (window.location.pathname?.includes('/category/')) {
                    window.location.href = window.location.origin + window.location.pathname + '?' + params.toString();
                } else {
                    window.location.href = window.location.origin + '?' + params.toString();
                }
            }
        }">
        <form action="" method="GET" class="flex-1" @submit.prevent="updateUrl">
            <x-input type="text" name="search" placeholder="Search..." x-model="searchKeyword" />
        </form>

        <x-input x-model="selectedSort" @change="updateUrl" type="select" name="sort" class="w-full focus:border-blue-600 focus:ring-blue-600 border-gray-300 rounded ml-1">
            <option value="price">Price (ASC)</option>
            <option value="-price">Price (DESC)</option>
            <option value="title">Title (ASC)</option>
            <option value="-title">Title (DESC)</option>
            <option value="-updated_at">Newest</option>
            <option value="updated_at">Latest</option>
        </x-input>
    </div>

    <!-- Responsive Menu -->
    <div class="block fixed z-10 top-0 bottom-0 height h-full w-[220px] transition-all md:hidden" :class="mobileMenuOpen ? 'left-0' : '-left-[220px]'">
        <ul>
            <li>
                <a href="{{ route('cart.index') }}" class="relative flex items-center justify-between py-2 px-3 transition-colors">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Cart
                    </div>
                    <!-- Cart Items Counter -->
                    <small x-show="cartItemsCount" x-transition x-text="cartItemsCount" x-cloak class="py-[2px] px-[8px] rounded-full bg-red-500"></small>
                    <!--/ Cart Items Counter -->
                </a>
            </li>
            @if (!Auth::guest())
            <li x-data="{open: false}" class="relative">
                <a @click="open = !open" class="cursor-pointer flex justify-between items-center py-2 px-3 hover:bg-slate-800">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        My Account
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <ul x-show="open" x-transition class="z-10 right-0 bg-slate-800 py-2">
                    <li>
                        <a href="{{ route('profile') }}" class="flex px-3 py-2 hover:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            My Profile
                        </a>
                    </li>
                    <li class="hover:bg-slate-900">
                        <a href="{{ route('order.index') }}" class="flex items-center px-3 py-2 hover:bg-slate-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            My Orders
                        </a>
                    </li>
                    <li class="hover:bg-slate-900">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" class="flex items-center px-3 py-2 hover:bg-slate-900" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
            @else
            <li>
                <a href="{{ route('login') }}" class="flex items-center py-2 px-3 transition-colors hover:bg-slate-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                    Login
                </a>
            </li>
            <li class="px-3 py-3">
                <a href="{{ route('register') }}" class="block text-center text-white bg-emerald-600 py-2 px-3 rounded shadow-md hover:bg-emerald-700 active:bg-emerald-800 transition-colors w-full">
                    Register now
                </a>
            </li>
            @endif
        </ul>
    </div>
    <!--/ Responsive Menu -->
    <nav class="hidden md:block">
        <ul class="grid grid-flow-col items-center">
            <li>
                <a href="{{ route('cart.index') }}" class="relative inline-flex items-center py-navbar-item px-navbar-item">

                    <div class="text-white">
                        <small x-show="cartItemsCount" x-transition x-cloak x-text="cartItemsCount" style="left: 6px; top: 18px; padding: 0px 5px; font-size: 10px;" class="absolute z-[100] rounded-full bg-red-600"></small>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Cart
                </a>
            </li>
            @if (!Auth::guest())
            <li x-data="{open: false}" class="relative">
                <a @click="open = !open" class="cursor-pointer flex items-center py-navbar-item px-navbar-item">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        {{Auth::user()->name}}
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <ul @click.outside="open = false" x-show="open" x-transition x-cloak class="absolute z-10 right-0 py-2 shadow rounded mr-2" style="background-color: white; width: 200px">
                    <li>
                        <a href="{{ route('profile') }}" class="flex px-4 py-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            My Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('order.index') }}" class="flex px-4 py-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            My Orders
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" class="flex px-4 py-2 items-center" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
            @else
            <li>
                <a href="{{ route('login') }}" class="inline-flex items-center py-navbar-item px-navbar-item py-2 px-6 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                    Login
                </a>
            </li>
            @endif
        </ul>
    </nav>
    <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-4 block md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
</header>