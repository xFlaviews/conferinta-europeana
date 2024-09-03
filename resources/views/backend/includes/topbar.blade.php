<!-- Topbar Start -->
<header class="app-header flex items-center px-4 gap-3">
    <!-- Sidenav Menu Toggle Button -->
    <button id="button-toggle-menu" class="nav-link p-2">
        <span class="flex items-center justify-center h-6 w-6">
            <i class="mgc_menu_line text-xl"></i>
        </span>
    </button>

    <!-- Topbar Brand Logo -->
    <a href="{{ route('backend.index') }}" class="logo-box">
        <!-- Light Brand Logo -->
        <div class="logo-light">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="logo-lg h-6" alt="Light logo">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="logo-sm" alt="Small logo">
        </div>

        <!-- Dark Brand Logo -->
        <div class="logo-dark">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="logo-lg logo-custom-light h-6" alt="Dark logo">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="logo-sm logo-custom-light" alt="Small logo">
        </div>
    </a>

    <!-- Topbar Search Modal Button -->
    <button type="button" data-fc-type="modal" data-fc-target="topbar-search-modal" class="nav-link p-2 me-auto">
        <span class="sr-only">{{ __('Search') }}</span>
        <span class="flex items-center justify-center h-6 w-6">
            <i class="mgc_search_line text-2xl"></i>
        </span>
    </button>
    <!-- Language Dropdown Button -->
    <div class="relative">
        <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2 fc-dropdown">
            <span class="flex items-center justify-center h-6 w-6">
                <img src="{{ Vite::asset('resources/images/backend/flags/'.app()->getLocale().'.jpg') }}" alt="locale image {{ app()->getLocale() }}" class="h-4 w-6">
            </span>
        </button>
        <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-40 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
            @foreach (getAllLocales() as $item)
                @if(app()->getLocale() != $item)
                <a href="{{ route('lang',['lang' => $item]) }}"
                    class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                    <img src="{{ Vite::asset('resources/images/backend/flags/'.$item.'.jpg') }}" alt="{{ __('language'). ' ' . __($item) }}"
                        class="h-4">
                    <span class="align-middle">{{ __($item) }}</span>
                </a>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Fullscreen Toggle Button -->
    <div class="md:flex hidden">
        <button data-toggle="fullscreen" type="button" class="nav-link p-2">
            <span class="sr-only">Fullscreen Mode</span>
            <span class="flex items-center justify-center h-6 w-6">
                <i class="mgc_fullscreen_line text-2xl"></i>
            </span>
        </button>
    </div>
    {{-- 
    <!-- Notification Bell Button -->
    <div class="relative md:flex hidden">
        <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2">
            <span class="sr-only">{{ __('View notifications') }}</span>
            <span class="flex items-center justify-center h-6 w-6">
                <i class="mgc_notification_line text-2xl"></i>
            </span>
        </button>
        <div
            class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-80 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg">

            <div class="p-2 border-b border-dashed border-gray-200 dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <h6 class="text-sm"> Notification</h6>
                    <a href="javascript: void(0);" class="text-gray-500 underline">
                        <small>Clear All</small>
                    </a>
                </div>
            </div>

            <div class="p-4 h-80" data-simplebar>

                <h5 class="text-xs text-gray-500 mb-2">Today</h5>

                <a href="javascript:void(0);" class="block mb-4">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary">
                                    <i class="mgc_message_3_line text-lg"></i>
                                </div>
                            </div>
                            <div class="flex-grow truncate ms-2">
                                <h5 class="text-sm font-semibold mb-1">Datacorp <small
                                        class="font-normal text-gray-500 ms-1">1 min ago</small></h5>
                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0);" class="block mb-4">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white">
                                    <i class="mgc_user_add_line text-lg"></i>
                                </div>
                            </div>
                            <div class="flex-grow truncate ms-2">
                                <h5 class="text-sm font-semibold mb-1">Admin <small
                                        class="font-normal text-gray-500 ms-1">1 hr ago</small></h5>
                                <small class="noti-item-subtitle text-muted">New user registered</small>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0);" class="block mb-4">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ Vite::asset('resources/images/backend/users/avatar-2.jpg') }}"
                                    class="rounded-full h-9 w-9" alt="">
                            </div>
                            <div class="flex-grow truncate ms-2">
                                <h5 class="text-sm font-semibold mb-1">Cristina Pride <small
                                        class="font-normal text-gray-500 ms-1">1 day ago</small></h5>
                                <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next
                                    meeting</small>
                            </div>
                        </div>
                    </div>
                </a>

                <h5 class="text-xs text-gray-500 mb-2">Yesterday</h5>

                <a href="javascript:void(0);" class="block mb-4">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white">
                                    <i class="mgc_message_1_line text-lg"></i>
                                </div>
                            </div>
                            <div class="flex-grow truncate ms-2">
                                <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0);" class="block">
                    <div class="card-body">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ Vite::asset('resources/images/backend/users/avatar-4.jpg') }}"
                                    class="rounded-full h-9 w-9" alt="">
                            </div>
                            <div class="flex-grow truncate ms-2">
                                <h5 class="text-sm font-semibold mb-1">Karen Robinson</h5>
                                <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome
                                    design</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <a href="javascript:void(0);"
                class="p-2 border-t border-dashed border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold">
                View All
            </a>
        </div>
    </div>
    --}}

    <!-- Light/Dark Toggle Button -->
    <div class="flex">
        <button id="light-dark-mode" type="button" class="nav-link p-2">
            <span class="sr-only">Light/Dark Mode</span>
            <span class="flex items-center justify-center h-6 w-6">
                <i class="mgc_moon_line text-2xl"></i>
            </span>
        </button>
    </div>

    <!-- Profile Dropdown Button -->
    <div class="relative">
        <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link">  
            <img src="https://api.dicebear.com/9.x/identicon/svg?seed={{ md5(auth()->user()->email) }}" alt="user-image" class="rounded-full h-10">
        </button>
        <div
            class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-[margin,opacity] duration-300 mt-2 bg-white shadow-lg border rounded-lg p-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
            
            <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                href="{{ route('profile.edit') }}">
                <i class="mgc_user_3_line  me-2"></i>
                <span>{{ __('Profile') }}</span>
            </a>
               {{--
            <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                href="apps-kanban.html">
                <i class="mgc_task_2_line  me-2"></i>
                <span>Kanban</span>
            </a>
            <a class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                href="{{ route('backend.index') }}">
                <i class="mgc_lock_line  me-2"></i>
                <span>Lock Screen</span>
            </a>
             --}}
            <hr class="my-2 -mx-2 border-gray-200 dark:border-gray-700">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                    href="{{ route('backend.index') }}">
                    <i class="mgc_exit_line  me-2"></i>
                    <span>{{ __('Log Out') }}</span>
                </button>
            </form>


        </div>
    </div>
</header>
<!-- Topbar End -->

<!-- Topbar Search Modal -->
<div>
    <div id="topbar-search-modal" class="fc-modal hidden w-full h-full fixed top-0 start-0 z-50">
        <div
            class="fc-modal-open:opacity-100 fc-modal-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-12 sm:mx-auto">
            <div
                class="mx-auto max-w-2xl overflow-hidden rounded-xl bg-white shadow-2xl transition-all dark:bg-slate-800">
                <div class="relative">
                    <div
                        class="pointer-events-none absolute top-3.5 start-4 text-gray-900 text-opacity-40 dark:text-gray-200">
                        <i class="mgc_search_line text-xl"></i>
                    </div>
                    <input type="search"
                        class="h-12 w-full border-0 bg-transparent ps-11 pe-4 text-gray-900 placeholder-gray-500 dark:placeholder-gray-300 dark:text-gray-200 focus:ring-0 sm:text-sm"
                        placeholder="Search...">
                </div>
            </div>
        </div>
    </div>
</div>
