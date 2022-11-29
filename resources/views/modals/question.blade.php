<template id="question-dialog">
    <swal-html>

        <div class="flex justify-between items-center">
            <h4>Need some help?</h4>
            <div class="cursor-pointer question-dialog" onclick="onCloseQuestionDialog()">
                <i class="fa-solid fa-xmark fa-xl"></i>
            </div>
        </div>

        <div class="p2 question-dialog-text mt-6 mb-4">
            We can help you with anything you need.
            Just type your question here and we’ll reply as fast as possible
        </div>

        <input type="hidden" id="token" value="{{ csrf_token() }}">

        <div class="input mb-4">
            <label for="name">Your name</label>
            <input id="name" type="text" placeholder="eg. SE, LX">
        </div>

        <div class="input mb-4">
            <label for="phone">Phone number</label>
            <input id="phone" type="number">
        </div>

        <div class="input mb-7 question-dialog">
            <label for="question">Your question</label>
            <textarea id="question"></textarea>
        </div>

        <div class="checkbox">
            <input id="checkbox" type="checkbox" onclick="onChangeCheckbox(this)">
            <label for="checkbox">
                I agree to receiving Text Messages from Homer Skelton Ford.
                You will receive a text message response from phone number
                <span class="font-bold">901-256-4132.</span>
            </label>
        </div>

        <button class="primary w-full mt-9" disabled id="send-question" onclick="onSendForm()">Send Question</button>
    </swal-html>
</template>
