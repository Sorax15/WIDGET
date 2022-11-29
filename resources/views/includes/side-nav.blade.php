<nav id="sidebar" class="sidebar flex flex-col justify-between">
    <div class="sidebar-content">
        <header class="relative">
            <span class="image" id="logo">
                <img src="https://via.placeholder.com/240x29" alt="test">
            </span>
            <div class="text logo-text">
                <span class="name">Express Buying at Homer Skeleton Ford</span>
            </div>

            <div id="toogle-icon" class="toogle-icon absolute theme-color-2-bg cursor-pointer rounded-full w-6 h-6 flex justify-center items-center">
                <i class="theme-color-1-fc fa-solid fa-chevron-left"></i>
            </div>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <div class="menu-items">
                    <a href="{{ url('/welcome') }}" class="menu-item flex flex-row items-center {{ request()->is('welcome*') ? 'active' : '' }}">
                        <div class="img img-home"></div>
                        <div class="text nav-text ml-2.5">Home</div>
                    </a>

                    <a href="{{ url('/choose-expert') }}" class="menu-item flex flex-row items-center {{ request()->is('choose-expert*') ||  request()->is('expert-details*')  ? 'active' : '' }}">
                        <div class="img img-user"></div>

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Choose your salesperson</span>

                            <div class="flex flex-row">
                                <span class="router-link uppercase text-xs mr-2">start now</span>
                                <span class="text-xs common-color-4-fc not-done">SAVE 20 MIN</span>
                            </div>
                        </div>
                    </a>

                    <div class="menu-item flex flex-row items-center">
                        <div class="img img-vehicle"></div>

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Select your vehicle</span>

                            <div class="flex flex-row">
                                <span class="text-xs common-color-4-fc not-done">SAVE 30 MIN</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item flex flex-row items-center">
                        <div class="img img-trade"></div>

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Value your trade</span>

                            <div class="flex flex-row">
                                <span class="router-link uppercase text-xs mr-2">start now</span>
                            </div>
                        </div>
                    </div>

{{--                    <div class="menu-item flex flex-row items-center">--}}
{{--                        <div class="img img-calculate"></div>--}}

{{--                        <div class="flex flex-col ml-2.5">--}}
{{--                            <span class="text nav-text">Calculate payments</span>--}}

{{--                            <div class="flex flex-row">--}}
{{--                                <span class="router-link uppercase text-xs mr-2">start now</span>--}}
{{--                                <span class="text-xs common-color-4-fc not-done">SAVE 20 MIN</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="menu-item flex flex-row items-center">
                        <div class="img img-schedule"></div>

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Schedule appointment</span>

                            <div class="flex flex-row">
                                <span class="router-link uppercase text-xs mr-2">start now</span>
                                <span class="text-xs common-color-4-fc not-done">SAVE 20 MIN</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item flex flex-row items-center">
                        <div class="img img-coins"></div>

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Get pre-approved</span>

                            <div class="flex flex-row">
                                <span class="router-link uppercase text-xs mr-2">start now</span>
                                <span class="text-xs common-color-4-fc not-done">SAVE 30 MIN</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item flex flex-row items-center">
                        <div class="img img-summary"></div>
                        <span class="text nav-text ml-2.5">Summary</span>
                    </div>
            </div>
        </div>
    </div>

    <div id="progress" class="progress rounded-r-full mr-3.5 py-2.5 pl-5 pr-9">
        <div class="flex flex-row items-center progress-white">
            <i class="fa-solid mr-1.5 fa-circle-check"></i>
            <span class="text-lg font-bold">Your Progress</span>
        </div>

        <progress max="100" value="39" class="w-full"></progress>

        <div class="flex flex-row items-center justify-between progress-dark">
            <span class="text-sm font-semibold">39%</span>
            <span class="text-sm font-semibold">15 min saved</span>
        </div>
    </div>

    <div id="progressClose" class="progress-close flex flex-col justify-center rounded-r-full mr-2 py-2.5 pl-5 pr-9">
        <i class="fa-solid mr-1.5 fa-circle-check progress-close-white"></i>
        <span class="text-sm font-semibold progress-close-dark">39%</span>
    </div>
</nav>
