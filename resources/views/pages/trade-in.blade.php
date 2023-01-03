@extends('layout')

@section('title', 'Trade In Page')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="wrapper-trade-in">
        <h2>Trade-In/Sell My Car</h2>

        <div class="theme-color-3-fc subtitle mt-7">Basic Information</div>
        <div class="separator"></div>

        <input type="hidden" id="token" value="{{ csrf_token() }}">

        <div class="flex flex-row items-end">
            <div class="input">
                <label for="vin">VIN (Optional)</label>
                <input id="vin" type="text" placeholder="AA1AA11A1AA111111">
            </div>
            <button class="secondary ml-2.5" id="checkByVin">Check by Vin</button>
        </div>

        <div class="input mt-4">
            <label for="yearMakeModel">Year Make & Model</label>
            <input id="yearMakeModel" placeholder="eg. Ford Taurus 2020">
        </div>

        <div class="select w-full mt-4">
            <label for="engine">Select Engine</label>
            <select name="select" id="engine"></select>
        </div>

        <div class="input mt-4 w-36">
            <label for="miles">Miles</label>
            <input id="miles" type="text">
        </div>

        <div id="dynamically-div">
            <button id="getTradeInValue" class="primary w-full mt-11" disabled>Get Trade-In Value</button>
            <button id="sellMyCar" class="secondary w-full mt-4" disabled>Sell My Car</button>
        </div>

        <div class="text-info mb-5">
            Accuracy of trade payoff and allowance must be verified by the dealer.
            Programs subject to change.
        </div>
    </div>

    @include('modals.customer-information-dialog')
    @include('modals.trade-in-sell-my-car-set-dialog')
@endsection

@section('scripts')
    <script src="{{ asset('js/pages/trade-in.js') }}"></script>
@endsection
