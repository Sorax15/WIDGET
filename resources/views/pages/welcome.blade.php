@extends('layout')

@section('title', 'Welcome Page')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="wrapper-welcome w-full mx-6 relative">
        <div class="flex flex-row justify-end w-full ">
            <button class="secondary">Exit</button>
        </div>

        <div class="max-w-3xl mx-auto">
            <h1 class="mb-4">Welcome Sam Williamson Jr.! </h1>
            <h2 class="mb-6">Glad to see you here</h2>

            <div class="text-base mb-7 font-medium text-blue-gray-100">
                We can help you with all information you need.
                Save time by choosing a salesperson before coming to the dealership and
                by completing steps needed to expedite and ease the process when they arrive.
            </div>

            <button class="secondary mb-8">
                <i class="fa-solid fa-circle-play"></i>
                Watch the video to learn how!
            </button>

            <div class="mb-8 card">
                <div class="flex flex-row">
                    <img src="{{ asset('img/vehicle.png') }}" alt="vehicle">
                    <div class="ml-3">
                        <div class="flex flex-row items-center	">
                            <div class="badge small primary font-bold mr-4">New</div>
                            <div class="text-xs text-silver-color mr-4">
                                Stock# <span class="text-iron-grey-120 font-medium">99618</span>
                            </div>
                            <div class="text-xs text-silver-color">
                                VIN <span class="text-iron-grey-120 font-medium">1G1ZD5ST7JF159542</span>
                            </div>
                        </div>
                        <div class="font-semibold text-2xl text-navy-blue-100 mt-5">2012 Ford Mustang</div>
                        <div class="font-semibold text-xs text-silver-color mt-1.5">34 655 miles</div>
                        <div class="font-semibold text-3xl text-orange-100 mt-1.5">$15,399.00</div>
                        <button class="primary mt-2">Continue Purchase</button>
                    </div>
                </div>
            </div>

            <h3 class="mb-10">Save time at the dealership</h3>

            <div class="grid grid-rows-3 grid-cols-2 gap-y-10">

                <a href="#" class="text-xl text-blue-100 font-semibold">
                    <i class="fa-solid fa-arrow-right fa-2xs"></i>
                    Select Your Salesperson
                </a>

                <a href="#" class="text-xl text-blue-100 font-semibold">
                    Value Your Trade-In
                </a>

                <a href="#" class="text-xl text-blue-100 font-semibold">
                    Get Pre-Approved
                </a>

                <a href="#" class="text-xl text-blue-100 font-semibold">
                    Select Your Vehicle
                </a>

                <a href="#" class="text-xl text-blue-100 font-semibold">
                    Schedule an Appointment
                </a>
            </div>

            <h3 class="mt-10 mb-3">Learn more about Homer Skelton Ford</h3>

        </div>

        <div class="absolute bottom-6 right-4 rounded-xl py-2.5 px-3 text-blue-10 background-blue-100">
            <div class="flex flex-row items-center">
                <i class="fa-solid fa-circle-question fa-2xl"></i>
                <div class="flex flex-col ml-2.5">
                    <div class="font-bold text-xl">Have some questions?</div>
                    <div class="font-bold text-xs">Click here to contact us!</div>
                </div>
            </div>
        </div>
    </div>
@endsection
