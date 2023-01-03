@extends('layout')

@section('title', 'Expert details')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="expert-wrapper px-16 w-full">
        <h2 class="mb-6">Choose your expert</h2>
        <h3 class="select-header-text">Please select your perfect salesperson in one click</h3>

        <div class="flex flex-row justify-between mb-8 mt-1 details-expert">
            <div class="flex flex-row">
                <div class="image mr-6">
                    <img src="https://via.placeholder.com/135x135" alt="img" class="rounded-full">
                </div>
                <div class="flex flex-col">
                    <h4>Amber Brock</h4>

                    <div class="flex flex-row mt-1">
                        <p class="mr-6 p1 sales-agent">Sales Agent</p>
                        <div class="badge simple mr-5">4.8 <i class="fa-solid fa-star"></i></div>
                        <div class="badge rounded-one blue uppercase mr-2.5">
                            <img src="{{ asset('img/icons/check-certified.svg') }}" alt="certified">
                            CERTIFIED
                        </div>
                        <div class="badge rounded-one green uppercase">
                            <img src="{{ asset('img/icons/coast-guard.svg') }}" alt="certified">
                            COAST GUARD
                        </div>
                    </div>

                    <div class="p1 mt-2">amber.brock@homerskeltonford.com</div>
                    <div class="p1">(901) 360-2122</div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-x-12">
                <div class="empty"></div>
                <button class="primary h-fit">Select Amber</button>
                <div class="flex flex-row justify-center items-center theme-color-4-fc h-11 h-fit cursor-pointer font-semibold text-base">Ask Me A Question</div>
                <button class="secondary h-fit" onclick="onChangeSalesPerson()">Change Expert</button>
            </div>
        </div>


        <div class="flex flex-row">
            <div class="flex flex-col mr-32">
                <div class="total">Total Reviews</div>
                <div class="text-2xl theme-color-4-fc font-bold">1 986</div>
            </div>
            <div class="flex flex-col mr-32">
                <div class="total">Reviews Last Month</div>
                <div class="text-2xl theme-color-4-fc font-bold">86</div>
            </div>
            <div class="flex flex-col mr-32">
                <div class="total">Started In Industry</div>
                <div class="text-2xl theme-color-4-fc font-bold">2021</div>
            </div>
        </div>

        <div class="mt-9 grid grid-cols-2 grid-rows-2 achievement gap-y-3">
            <div class="flex flex-row items-center">
                <div class="achievement-img mr-1.5"></div>
                Get a diving PMNB Ctrificate
            </div>
            <div class="flex flex-row items-center">
                <div class="achievement-img mr-1.5"></div>
                Worked as  Ford Motors  Associated Partner in Bangkok
            </div>
            <div class="flex flex-row items-center">
                <div class="achievement-img mr-1.5"></div>
                Finished piano and violin courses
            </div>
            <div class="flex flex-row items-center">
                <div class="achievement-img mr-1.5"></div>
                Has 6 dogs, 3 are champions
            </div>
        </div>

        <div class="h-px mt-7 w-full separator"></div>

        <div class="mt-7 flex flex-row">
            <div class="flex flex-col bio bio-block">
                <div class="mb-1">Bio</div>
                <div class="card-expert">
                    <div class="info mb-2">
                        Hi and thank you for learning more about me.
                        I’m from New York and have been in the car business for 10 years.
                        I fell in love with the industry and helping my customers find the perfect car to meet their needs.
                        I love people. I know that purchasing a car is the second largest expense you typically have so
                        I want to make it easy and enjoyable for you.
                    </div>

                    <img class="mt-2.5" src="https://via.placeholder.com/416x250" alt="img">
                </div>
            </div>
            <div class="flex flex-col review">
                <div class="mb-3.5">
                    <h4 class="mb-1">Reviews</h4>
                    <div class="card-expert">
                        <div class="info mb-2">
                            Hi and thank you for learning more about me.
                            I’m from New York and have been in the car business for 10 years.
                            I fell in love with the industry and helping my customers find the perfect car to meet their needs.
                            I love people. I know that purchasing a car is the second largest expense you typically have so
                            I want to make it easy and enjoyable for you.
                        </div>

                        <div class="flex flex-row review-details mt-4">
                            <img src="{{ asset('img/google.png') }}" alt="google">
                            <div class="ml-4 flex flex-col">
                                <div class="review-date">14 OCT 2020</div>
                                <div class="review-creator">Jordan Wilkinson</div>
                            </div>
                        </div>

                        <div class="review-navigation flex flex-row justify-between">
                            <button class="link">
                                <i class="fa-solid fa-arrow-left"></i>
                                Prev Review
                            </button>
                            <button class="link">
                                Next Review
                                <span class="ml-2"><i class="fa-solid fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mb-3.5">
                    <h4 class="mb-1">Gallery</h4>
                    <div class="card-expert gallery">
                        <div class="flex flex-row">
                            <div class="image">
                                <img src="https://via.placeholder.com/164x110" alt="img">
                            </div>
                            <div class="image">
                                <img src="https://via.placeholder.com/164x110" alt="img">
                            </div>
                            <div class="image">
                                <img src="https://via.placeholder.com/164x110" alt="img">
                            </div>
                            <div class="image">
                                <img src="https://via.placeholder.com/164x110" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        function onChangeSalesPerson() {
            window.location.replace('{{ route("choose-details") }}');
        }
    </script>
@endsection
