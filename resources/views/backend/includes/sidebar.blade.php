<div class="app-menu">

    <!-- Sidenav Brand Logo -->
    <a href="{{ route('backend.index') }}" class="logo-box">
        <!-- Light Brand Logo -->
        <div class="logo-light">
            <img src="{{ Vite::asset('resources/images/backend/logo-light.png') }}" class="logo-lg h-6" alt="Light logo">
            <img src="{{ Vite::asset('resources/images/backend/logo-sm.png') }}" class="logo-sm" alt="Small logo">
        </div>

        <!-- Dark Brand Logo -->
        <div class="logo-dark">
            <img src="{{ Vite::asset('resources/images/backend/logo-dark.png') }}" class="logo-lg h-6" alt="Dark logo">
            <img src="{{ Vite::asset('resources/images/backend/logo-sm.png') }}" class="logo-sm" alt="Small logo">
        </div>
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
        <i class="mgc_round_line text-xl"></i>
    </button>

    <!--- Menu -->
    <div class="srcollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{ route('backend.index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>
            @can('newsletter.read')
                <li class="menu-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                        <span class="menu-icon"><i class="mgc_mail_send_line"></i></span>
                        <span class="menu-text"> {{ __('Newsletter') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
    
                    <ul class="sub-menu hidden">
                        <li class="menu-item">
                            <a href="{{ route('backend.newsletter.index') }}" class="menu-link">
                                <span class="menu-text">{{ __('List') }}</span>
                            </a>
                        </li>
                        @can('newsletter.create')
                        <li class="menu-item">
                            <a href="{{ route('backend.newsletter.create') }}" class="menu-link">
                                <span class="menu-text"> {{ __('Create') }} </span>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('event.read')
                <li class="menu-item">
                    <a href="{{ route('backend.event.index') }}" class="menu-link">
                        <span class="menu-icon"><i class="mgc_calendar_month_fill"></i></span>
                        <span class="menu-text"> {{ __('Event') }} </span>
                    </a>
                </li>
            @endcan
            {{--
            <li class="menu-title">Apps</li>

            <li class="menu-item">
                <a href="{{ route('backend.index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_calendar_line"></i></span>
                    <span class="menu-text"> Calendar </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('backend.index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_coupon_line"></i></span>
                    <span class="menu-text"> Tickets </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('backend.index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_folder_2_line"></i></span>
                    <span class="menu-text"> File Manager </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('backend.index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_task_2_line"></i></span>
                    <span class="menu-text">Kanban</span>
                </a>
            </li>
            --}}
            {{--

            <li class="menu-title">Custom</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_user_3_line"></i></span>
                    <span class="menu-text"> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'login']) }}" class="menu-link">
                            <span class="menu-text">Log In</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'register']) }}" class="menu-link">
                            <span class="menu-text">Register</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'recoverpw']) }}" class="menu-link">
                            <span class="menu-text">Recover Password</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'lock-screen']) }}" class="menu-link">
                            <span class="menu-text">Lock Screen</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_box_3_line"></i></span>
                    <span class="menu-text"> Extra Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'starter']) }}" class="menu-link">
                            <span class="menu-text">Starter</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'timeline']) }}" class="menu-link">
                            <span class="menu-text">Timeline</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'invoice']) }}" class="menu-link">
                            <span class="menu-text">Invoice</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'gallery']) }}" class="menu-link">
                            <span class="menu-text">Gallery</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'faqs']) }}" class="menu-link">
                            <span class="menu-text">FAQs</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'pricing']) }}" class="menu-link">
                            <span class="menu-text">Pricing</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'maintenance']) }}" class="menu-link">
                            <span class="menu-text">Maintenance</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'coming-soon']) }}" class="menu-link">
                            <span class="menu-text">Coming Soon</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', '404']) }}" class="menu-link">
                            <span class="menu-text">Error 404</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', '404-alt']) }}" class="menu-link">
                            <span class="menu-text">Error 404-alt</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', '500']) }}" class="menu-link">
                            <span class="menu-text">Error 500</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_layout_line"></i></span>
                    <span class="menu-text"> Layout </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['layouts-eg', 'hover-view']) }}" class="menu-link">
                            <span class="menu-text">Hovered Menu</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['layouts-eg', 'icon-view']) }}" class="menu-link">
                            <span class="menu-text">Icon View Menu</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['layouts-eg', 'compact-view']) }}" class="menu-link">
                            <span class="menu-text">Compact Menu</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['layouts-eg', 'mobile-view']) }}" class="menu-link">
                            <span class="menu-text">Mobile View Menu</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['layouts-eg', 'hidden-view']) }}" class="menu-link">
                            <span class="menu-text">Hidden Menu</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Elements</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_classify_2_line"></i></span>
                    <span class="menu-text"> Components </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'accordions']) }}" class="menu-link">
                            <span class="menu-text">Accordions</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'alerts']) }}" class="menu-link">
                            <span class="menu-text">Alerts</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'avatars']) }}" class="menu-link">
                            <span class="menu-text">Avatars</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'buttons']) }}" class="menu-link">
                            <span class="menu-text">Buttons</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'badges']) }}" class="menu-link">
                            <span class="menu-text">Badges</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'breadcrumbs']) }}" class="menu-link">
                            <span class="menu-text">Breadcrumb</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'cards']) }}" class="menu-link">
                            <span class="menu-text">Cards</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'collapse']) }}" class="menu-link">
                            <span class="menu-text">Collapse</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'dismissible']) }}" class="menu-link">
                            <span class="menu-text">Dismissible</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'dropdowns']) }}" class="menu-link">
                            <span class="menu-text">Dropdowns</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'progress']) }}" class="menu-link">
                            <span class="menu-text">Progress</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'skeleton']) }}" class="menu-link">
                            <span class="menu-text">Skeleton</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'spinners']) }}" class="menu-link">
                            <span class="menu-text">Spinners</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'list-group']) }}" class="menu-link">
                            <span class="menu-text">List Group</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'ratio']) }}" class="menu-link">
                            <span class="menu-text">Ratio</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'tabs']) }}" class="menu-link">
                            <span class="menu-text">Tab</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'modals']) }}" class="menu-link">
                            <span class="menu-text">Modals</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'offcanvas']) }}" class="menu-link">
                            <span class="menu-text">Offcanvas</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'popovers']) }}" class="menu-link">
                            <span class="menu-text">Popovers</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'tooltips']) }}" class="menu-link">
                            <span class="menu-text">Tooltips</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['ui', 'typography']) }}" class="menu-link">
                            <span class="menu-text">Typography</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_box_3_line"></i></span>
                    <span class="menu-text"> Extended </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'swiper']) }}" class="menu-link">
                            <span class="menu-text">Swiper</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'nestable']) }}" class="menu-link">
                            <span class="menu-text">Nestable List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'ratings']) }}" class="menu-link">
                            <span class="menu-text">Ratings</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'animation']) }}" class="menu-link">
                            <span class="menu-text">Animation</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'player']) }}" class="menu-link">
                            <span class="menu-text">Player</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'scrollbar']) }}" class="menu-link">
                            <span class="menu-text">Scrollbar</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'sweet-alert']) }}" class="menu-link">
                            <span class="menu-text">Sweet Alert</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'tour']) }}" class="menu-link">
                            <span class="menu-text">Tour Page</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'tippy-tooltips']) }}" class="menu-link">
                            <span class="menu-text">Tippy Tooltip</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'lightbox']) }}" class="menu-link">
                            <span class="menu-text">Lightbox</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_file_check_line"></i></span>
                    <span class="menu-text"> Forms </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'elements']) }}" class="menu-link">
                            <span class="menu-text">Form Elements</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'select']) }}" class="menu-link">
                            <span class="menu-text">Select</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'range']) }}" class="menu-link">
                            <span class="menu-text">Range</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'pickers']) }}" class="menu-link">
                            <span class="menu-text">Pickers</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'masks']) }}" class="menu-link">
                            <span class="menu-text">Masks</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'editor']) }}" class="menu-link">
                            <span class="menu-text">Editor</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'file-uploads']) }}" class="menu-link">
                            <span class="menu-text">File Uploads</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'validation']) }}" class="menu-link">
                            <span class="menu-text">Validation</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'layout']) }}" class="menu-link">
                            <span class="menu-text">Form Layout</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_layout_grid_line"></i></span>
                    <span class="menu-text"> Tables </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['tables', 'basic']) }}" class="menu-link">
                            <span class="menu-text">Basic Tables</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['tables', 'datatables']) }}" class="menu-link">
                            <span class="menu-text">Data Tables</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_dribbble_line"></i></span>
                    <span class="menu-text"> Icons </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['icons', 'mingcute']) }}" class="menu-link">
                            <span class="menu-text">Mingcute</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['icons', 'feather']) }}" class="menu-link">
                            <span class="menu-text">Feather</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['icons', 'material-symbols']) }}" class="menu-link">
                            <span class="menu-text">Material Symbols </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="{{ route('any', 'charts') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_chart_bar_line"></i></span>
                    <span class="menu-text"> Chart </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_location_line"></i></span>
                    <span class="menu-text"> Maps </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['maps', 'google']) }}" class="menu-link">
                            <span class="menu-text">Google Maps</span>
                        </a>
                    </li>
                </ul>
            </li>
            --}}
        </ul>

    </div>
</div>
<!-- Sidenav Menu End  -->
