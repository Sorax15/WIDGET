@extends('layout')

@section('title', 'Welcome Page')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="wrapper-welcome w-full relative">
        <div class="absolute cursor-pointer top-2 right-9">
            <button class="secondary">Exit</button>
        </div>

        <div class="max-w-3xl mx-auto">
            <h1 class="mb-5 mt-7">Welcome Sam!</h1>
            <h2 class="mb-6">Glad to see you here</h2>

            <div class="p1 mb-9 font-medium theme-color-4-fc">
                We can help you with all information you need.
                Save time by choosing a salesperson before coming to the dealership and
                by completing steps needed to expedite and ease the process when they arrive.
            </div>

            <div class="mb-10 card common-color-1-bg theme-color-4-fc">
                <div class="flex flex-row">
                    <img src="{{ asset('img/vehicle.png') }}" alt="vehicle">
                    <div class="ml-3">
                        <div class="flex flex-row items-center">
                            <div class="badge small uppercase primary font-bold mr-4">New</div>
                            <div class="text-xs mr-4 common-color-4-fc">
                                Stock# <span class="theme-color-4-fc font-medium">99618</span>
                            </div>
                            <div class="text-xs common-color-4-fc">
                                VIN <span class="theme-color-4-fc font-medium">1G1ZD5ST7JF159542</span>
                            </div>
                        </div>
                        <div class="font-semibold text-2xl mt-4">2012 Ford Mustang</div>
                        <div class="font-medium common-color-4-fc text-xs text-silver-color mt-2">34 655 miles</div>
                        <div class="font-semibold theme-color-3-fc font-size-32 text-3xl mt-2">$15,399.00</div>
                        <button class="primary mt-1">Continue Purchase</button>
                    </div>
                </div>
            </div>

            <h3 class="mb-7">Save time at the dealership</h3>

            <div class="grid grid-rows-3 grid-cols-2 gap-y-10">

                <a href="#" class="text-xl theme-color-3-fc font-semibold">
                    <i class="fa-solid fa-arrow-right fa-2xs"></i>
                    Select Your Salesperson
                </a>

                <a href="#" class="text-xl theme-color-3-fc font-semibold">
                    <i class="fa-solid fa-arrow-right fa-2xs"></i>
                    Select Your Vehicle
                </a>

                <a href="#" class="text-xl theme-color-3-fc font-semibold">
                    <i class="fa-solid fa-arrow-right fa-2xs"></i>
                    Value Your Trade-In
                </a>

                <a href="#" class="text-xl theme-color-3-fc font-semibold">
                    <i class="fa-solid fa-arrow-right fa-2xs"></i>
                    Schedule An Appointment
                </a>

                <a href="#" class="text-xl theme-color-3-fc font-semibold">
                    <i class="fa-solid fa-arrow-right fa-2xs"></i>
                    Get Pre-Approved
                </a>

            </div>

            <h3 class="mt-10 mb-3.5">Find your perfect car with Express Buying</h3>
            <div class="content-preview">
                <img src="https://via.placeholder.com/752x302" alt="test">
            </div>
        </div>

        <div class="question-icon fixed cursor-pointer theme-color-2-bg common-color-1-fc bottom-9 right-9 rounded-xl pt-2.5 px-3 pb-3" onclick="onOpenQuestionDialog()">
            <div class="flex flex-row items-center">
                <i class="fa-solid fa-circle-question fa-2xl"></i>
                <div class="flex flex-col ml-2.5">
                    <div class="font-semibold text-xl">Have some questions?</div>
                    <div class="font-semibold text-xs subtitle">Click here to contact us!</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('modals.question');

@section('scripts')
    <script type="text/javascript">
        let questionModal = null;

        function onOpenQuestionDialog() {
            questionModal = Swal.fire({
                customClass: 'fixed right-9 bottom-32',
                template: '#question-dialog',
                width: '342px',
                backdrop: 'rgb(0 0 0 / 1%)',
                position: 'bottom-end',
                allowOutsideClick: false,
                showConfirmButton: false,
                allowEscapeKey: false
            });
        }

        function onCloseQuestionDialog() {
            questionModal.close();
        }

        function onChangeCheckbox(value) {
            document.getElementById("send-question").disabled = !value.checked;
        }

        function onSendForm() {
            const token = $('#token').val();
            const name = $('#name').val();
            const phone = $('#phone').val();
            const question = $('#question').val();
            const checkbox = $('#checkbox').val();

            $(".errors").remove();

            if (checkbox) {
                $.ajax({
                    type: 'post',
                    url: "{{ url('/send-question') }}",
                    data: { _token: token, name: name, phone: phone, question: question, checkbox: checkbox },
                    success: function () {
                        onCloseQuestionDialog();
                    },
                    error: function (err) {
                        if (err.status === 422) {
                            $.each(err.responseJSON.errors, function (item, error) {
                               const element = $(document).find('input#'+ item +', textarea#'+ item);
                               element.after($('<div class="errors">' + error[0] + '</div>'));
                            });
                        }
                    }
                })
            }
        }
    </script>
@endsection
