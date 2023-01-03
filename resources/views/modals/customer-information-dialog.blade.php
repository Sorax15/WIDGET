<template id="customer-information-dialog">
    <swal-html>
        <div class="customer-information-dialog">
            <div class="flex justify-between items-center mb-7">
                <h4>Customer information</h4>
                <div class="cursor-pointer customer-information-close">
                    <i class="fa-solid fa-xmark fa-xl"></i>
                </div>
            </div>

            <input type="hidden" id="informationToken" value="{{ csrf_token() }}">

            <div class="input mb-5">
                <label for="firstName">First name</label>
                <input id="firstName" type="text">
            </div>

            <div class="input mb-5">
                <label for="lastName">Last Name</label>
                <input id="lastName" type="text">
            </div>

            <div class="input mb-5">
                <label for="phone">Phone number</label>
                <input id="phone" type="number" placeholder="+1 NXX-NXX-XXXX">
            </div>

            <div class="input mb-5">
                <label for="email">Email</label>
                <input id="email" type="email">
            </div>

            <div class="checkbox mb-9">
                <input id="customerInfoCheckbox" type="checkbox">
                <label for="customerInfoCheckbox">
                    I agree to receive limited text messages from Homer Skelton Ford.
                    I understand that I can opt-out at any time by replying STOP.
                </label>
            </div>

            <button class="primary w-full" id="send-information">Submit</button>
            <button class="secondary w-full mt-4" id="back-information">Back</button>
        </div>
    </swal-html>
</template>
