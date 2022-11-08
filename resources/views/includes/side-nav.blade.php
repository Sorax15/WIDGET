<nav id="sidebar" class="sidebar flex flex-col justify-between">
    <div class="sidebar-content">
        <header class="relative">
            <span class="image"></span>
            <div class="text logo-text">
                <span class="name">Express Buying at Homer Skeleton Ford</span>
            </div>

            <div id="toogle-icon" class="toogle-icon absolute cursor-pointer rounded-full w-6 h-6 flex justify-center items-center -right-3 top-3">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <div class="menu-items">
                    <div class="menu-item flex flex-row items-center active">
                        <img src="{{ asset('img/icons/home.svg') }}" alt="home">
                        <a href="/test" class="text nav-text ml-2.5">Welcome</a>
                    </div>

                    <div class="menu-item flex flex-row items-center">
                        <img src="{{ asset('img/icons/user.svg') }}" alt="user">

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Choose your salesperson</span>

                            <div class="flex flex-row">
                                <span class="router-link uppercase text-xs mr-2">start now</span>
                                <span class="text-xs not-done">SAVE 20 MIN</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item flex flex-row items-center">
                        <img src="{{ asset('img/icons/vehicle.svg') }}" alt="vehicle">

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Select your vehicle</span>

                            <div class="flex flex-row">
                                <span class="router-link uppercase text-xs mr-2">start now</span>
                                <span class="text-xs not-done">SAVE 20 MIN</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item flex flex-row items-center">
                        <img src="{{ asset('img/icons/trade.svg') }}" alt="trade">

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Value your trade</span>

                            <div class="flex flex-row">
                                <span class="router-link uppercase text-xs mr-2">start now</span>
                                <span class="text-xs not-done">SAVE 20 MIN</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item flex flex-row items-center">
                        <img src="{{ asset('img/icons/calculator.svg') }}" alt="calculator">

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Calculate payments</span>

                            <div class="flex flex-row">
                                <span class="router-link uppercase text-xs mr-2">start now</span>
                                <span class="text-xs not-done">SAVE 20 MIN</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item flex flex-row items-center">
                        <img src="{{ asset('img/icons/schedule.svg') }}" alt="schedule">

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Schedule appointment</span>

                            <div class="flex flex-row">
                                <span class="router-link uppercase text-xs mr-2">start now</span>
                                <span class="text-xs not-done">SAVE 20 MIN</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item flex flex-row items-center">
                        <img src="{{ asset('img/icons/coins.svg') }}" alt="coins">

                        <div class="flex flex-col ml-2.5">
                            <span class="text nav-text">Get pre-approved</span>

                            <div class="flex flex-row">
                                <span class="router-link uppercase text-xs mr-2">start now</span>
                                <span class="text-xs not-done">SAVE 20 MIN</span>
                            </div>
                        </div>
                    </div>

                    <div class="menu-item flex flex-row items-center">
                        <img src="{{ asset('img/icons/summary.svg') }}" alt="summary">
                        <span class="text nav-text ml-2.5">Summary</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="progress" class="progress rounded-r-full mr-3.5 py-2.5 pl-5 pr-9">
        <div class="flex flex-row items-center">
            <i class="fa-solid mr-1.5 fa-circle-check"></i>
            <span class="text-lg font-bold">Your Progress</span>
        </div>

        <progress max="100" value="39" class="w-full"></progress>

        <div class="flex flex-row items-center justify-between">
            <span class="text-sm font-semibold">39%</span>
            <span class="text-sm font-semibold">15 min saved</span>
        </div>
    </div>

    <div id="progressClose" class="progress-close flex flex-col justify-center rounded-r-full mr-2 py-2.5 pl-5 pr-9">
        <i class="fa-solid mr-1.5 fa-circle-check"></i>
        <span class="text-sm font-semibold">39%</span>
    </div>
</nav>