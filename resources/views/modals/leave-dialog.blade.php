<template id="leave-dialog">
    <swal-html>

        <div class="flex justify-between items-center">
            <h3>We’re sorry that you leave</h3>
            <div class="cursor-pointer leave-dialog" id="exit-close">
                <i class="fa-solid fa-xmark fa-xl"></i>
            </div>
        </div>

        <h5>Would you like to save your progress?</h5>

        <div class="p2">
            We can save your current progress and send you a link with all information.
            You’ll be able to continue your journey with DEALER NAME anywhere and anytime
        </div>

        <div class="card common-color-1-bg theme-color-4-fc">
            <div class="flex flex-row">
                <img class="img" src="{{ asset('img/vehicle.png') }}" alt="vehicle">
                <div class="ml-3 phone:ml-0">
                    <div class="font-semibold car-name">Tacoma SR5 V6 Truck Double Cab</div>
                    <div class="font-semibold deal-price">Your Deal Price</div>
                    <div class="flex flex-row justify-between">
                        <div class="price theme-color-2-fc">$456.80 <span>/month</span></div>
                        <a href="#" class="theme-color-2-fc">Open Summary</a>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="send">Send me my deal link</h5>

        <input type="hidden" id="token" value="{{ csrf_token() }}">

        <div class="flex flex-row justify-between inputs row-gap-6">
            <div class="input w-full">
                <label for="firstName">First name</label>
                <input id="firstName" type="text">
            </div>

            <div class="input w-full">
                <label for="lastName">Last name</label>
                <input id="lastName" type="text">
            </div>
        </div>

        <div class="flex flex-row justify-between mt-4 phone">
            <div class="input">
                <label for="phone">Phone number</label>
                <input id="phone" type="number">
            </div>

            <div class="checkbox">
                <input id="checkbox" type="checkbox" onclick="onChangeCheckboxStatus(this)">
                <label for="checkbox">
                    I agree to receive limited text messages from Homer Skelton Ford.
                    I understand that I can opt-out at any time by replying STOP.
                </label>
            </div>
        </div>

        <div class="w-full mt-4">
            <div class="input">
                <label for="email">Email</label>
                <input id="email" type="text">
            </div>
        </div>

        <div class="flex flex-row justify-between items-center mt-9">
            <button class="secondary" id="exitWithoutSaving">
                Exit without saving
            </button>
            <button class="primary" id="sendDelaLinkAndExit">
                Send Deal Link & Exit
            </button>
        </div>
    </swal-html>
</template>
