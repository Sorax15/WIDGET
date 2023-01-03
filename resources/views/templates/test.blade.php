@if($isSuccess)
    <div class="success-trade-in">
        <div class="flex flex-row justify-between mt-7">
            <div class="info">Trade-In Value</div>
            <div class="link-href">See Full Report</div>
        </div>

        <div class="estimated-trade-in flex flex-row">
            <div class="estimated-trade-in_value">
                <div class="title">Estimated Trade-In</div>
                <div class="value">$13 244</div>
            </div>
            <div class="estimated-trade-in_payoff">
                <div class="input">
                    <label for="payoff">Payoff</label>
                    <input id="payoff" placeholder="$">
                </div>
            </div>
            <div class="estimated-trade-in_text flex flex-row items-center">
                Enter your payoff so that you can see monthly payments with your equity built-in
            </div>
        </div>

        <div class="common-color-1-bg trade-in-equity flex flex-row items-center justify-between mt-2">
            <div class="flex flex-col">
                <div class="title">Your Trade-In Equity</div>
                <div class="subtitle">$13 244</div>
            </div>
            <div class="text">
                This is not an offer to purchase your vehicle.
                All values are derived from real market data and adjusted daily.
            </div>
        </div>

        @if($seePayments)
            <button class="primary w-full mt-3">See Payments including my Equity</button>
        @else
            <button class="primary w-full mt-3">Search Inventory</button>
        @endif

        <button id="sellMyCar" class="secondary w-full mt-4">Sell My Car</button>
    </div>

@else
    <div class="common-color-1-bg card-error">
        <div class="flex flex-row items-center">
            <img src="{{ asset('img/icons/error.svg')  }}" alt="error">
            <div class="title">Sorry, we cant calculate your value</div>
        </div>
        <div class="subtitle">
            Please check information you’ve entered above or try again later.
            You can contact us with “Ask a question” dialog if you have any questions
        </div>
        <button class="w-full link flex flex-row justify-center">
            Skip Trade-In Step
        </button>

        <button id="getTradeInValue" class="primary w-full mt-6" disabled>Get Trade-In Value</button>
        <button id="sellMyCar" class="secondary w-full mt-4" disabled>Sell My Car</button>
    </div>
@endif
