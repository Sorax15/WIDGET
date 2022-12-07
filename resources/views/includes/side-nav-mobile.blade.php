<nav class="sidebar-mobile flex">
    <div class="sidebar-mobile_ask" onclick="onOpenQuestionDialog('', 'center')">
        <img src="{{ asset('img/icons/ask.svg') }}" alt="ask">
    </div>
    <div class="sidebar-mobile_name">Express Buying at Homer Skeleton Ford</div>

    <div id="open-mobile" class="sidebar-mobile_toogle">
        <img src="{{ asset('img/icons/toogle.svg') }}" alt="toogle">
    </div>

    <div class="menu-bar" id="sidebar-mobile">
        <div class="menu">
            <div id="close-mobile" class="flex w-full flex-row justify-end mb-10">
                <i class="fa-solid fa-xmark fa-xl"></i>
            </div>

            <div class="dealer-name">Express Buying at Homer Skelton Ford</div>

            <div class="menu-items">
                <a href="{{ url('/welcome') }}"
                   class="menu-item flex flex-row items-center {{ request()->is('welcome*') ? 'active' : '' }}">
                    <div class="img img-home"></div>
                    <div class="text nav-text ml-2.5">Home</div>
                </a>

                <a href="{{ url('/choose-expert') }}"
                   class="menu-item flex flex-row items-center {{ request()->is('choose-expert*') || request()->is('expert-details*')  ? 'active' : '' }}">
                    <div class="img img-user"></div>

                    <div class="flex flex-col ml-2.5">
                        <span class="text nav-text">Choose your expert</span>

                        <div class="flex flex-row">
                                <span
                                    class="router-link uppercase text-xs mr-2 {{ request()->is('choose-expert*') || request()->is('expert-details*')  ? 'hidden' : '' }}">
                                    start now
                                </span>
                            <span class="text-xs common-color-4-fc not-done">SAVE 20 MIN</span>
                        </div>
                    </div>
                </a>

                <div class="menu-item flex flex-row items-center">
                    <div class="img img-trade"></div>

                    <div class="flex flex-col ml-2.5">
                        <span class="text nav-text">Value your trade</span>

                        <div class="flex flex-row">
                            <span class="router-link uppercase text-xs mr-2">start now</span>
                            <span class="text-xs common-color-4-fc not-done">SAVE 30 MIN</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item flex flex-row items-center">
                    <div class="img img-vehicle"></div>

                    <div class="flex flex-col ml-2.5">
                        <span class="text nav-text">Select your vehicle</span>

                        <div class="flex flex-row">
                            <span class="router-link uppercase text-xs mr-2">start now</span>
                            <span class="text-xs common-color-4-fc not-done">SAVE 30 MIN</span>
                        </div>
                    </div>
                </div>

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

            <div id="progress" class="progress rounded-r-full mr-3.5 py-2.5 pl-5 pr-9">
                <div class="flex flex-row items-center progress-white">
                    <i class="fa-solid fa-circle-check"></i>
                    <span class="text-lg font-bold">Your Progress</span>
                </div>

                <progress max="100" value="39" class="w-full"></progress>

                <div class="flex flex-row items-center justify-between progress-dark">
                    <span class="text-sm font-semibold">39%</span>
                    <span class="text-sm font-semibold">15 min saved</span>
                </div>
            </div>

        </div>
    </div>
</nav>

@include('modals.question')
