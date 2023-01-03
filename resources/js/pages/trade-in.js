import { dialogService } from '../modals/dialog';
import { onOpenResponseDialog } from '../modals/response-dialog';

const defaultDynamicHTML = `
<button id="getTradeInValue" class="primary w-full mt-11" disabled>Get Trade-In Value</button>
<button id="sellMyCar" class="secondary w-full mt-4" disabled>Sell My Car</button>`;

let isSubmitSellMyCar = false;

$('#checkByVin').click(onCheckByVin);
$('#getTradeInValue').click(onGetTradeInValue);
$('#sellMyCar').click(onSellMyCar);
$('#continue').click(onContinueAppointment);

$('.wrapper-trade-in :input, .wrapper-trade-in :selected').on('input', () => {
    const yearMakeModel = $('#yearMakeModel').val();
    const engineInput = $('#engine').val()
    const miles = $('#miles').val();
    const isDisabled = yearMakeModel && engineInput && miles;
    const dynamicDiv = $('#dynamically-div');

    if (dynamicDiv.attr('is-change') !== undefined) {
        dynamicDiv.html(defaultDynamicHTML);
        dynamicDiv.removeAttr('is-change');
        $('#getTradeInValue').click(onGetTradeInValue);
        $('#sellMyCar').click(onSellMyCar);
    }

    $('#getTradeInValue').prop('disabled', !isDisabled);
    $('#sellMyCar').prop('disabled', !isDisabled);
});

$('.wrapper-trade-in #yearMakeModel').on('input', () => {
    const token = $('#token').val();
    const value = $('#yearMakeModel').val();

    $.ajax({
        type: 'POST',
        url: "getAvailableYearMakeModel",
        data: {_token: token, data: value},
        success: function (response) {
            if (response && response.length) {
                $('.wrapper-trade-in #yearMakeModel').autocomplete({
                    source: response,
                    width: '100%',
                    autoFocus: true,
                    select: function (_, ui) {
                        const data = ui?.item?.value;

                        if (data) {
                            $.ajax({
                                type: 'POST',
                                url: 'getEngine',
                                data: {_token: token, data},
                                success: function (response) {
                                    if (response && response.engine) {
                                        response.engine.forEach((item) => {
                                            $('#engine').append($('<option>', {
                                                value: item,
                                                text: item
                                            }))
                                        })
                                    }
                                }
                            })
                        }
                    }
                })
            }
        },
    })
});

function onCheckByVin() {
    const token = $('#token').val();
    const vin = $('#vin').val();

    $(".errors").remove();

    if (vin && vin.length) {
        $.ajax({
            type: 'post',
            url: "trade-check-vin",
            data: {_token: token, vin},
            success: (response) => {
                const yearMakeModel = $('#yearMakeModel');
                const engineInput = $('#engine');
                const {year, make, model, id, engine, body} = response;

                yearMakeModel.attr('disabled', 'disabled');
                engineInput.attr('disabled', 'disabled');

                yearMakeModel.val(year + ' ' + make + ' ' + model);
                engineInput.append($('<option>', {value: id, text: engine + ' ' + body}));
            },
            error: (err) => {
                if (err.status === 422) {
                   onOpenResponseDialog('Vin not found', 'The vin ' + vin + ' not found');
                }
            }
        })
    }
}

function onGetTradeInValue() {
    // console.log(miles);

    const token = $('#token').val();
    const yearMakeModel = $('#yearMakeModel').val();
    const engineInput = $('#engine').find(":selected").val();
    const miles = $('#miles').val();

    console.log('sss');

    if (token && yearMakeModel && engineInput && miles) {
        $.ajax({
            type: 'POST',
            url: "get-trade-in-value",
            data: {_token: token, yearMakeModel, engineInput, miles},
            success: function (response) {
                isSubmitSellMyCar = false;

                if (!response.isCustomer) {
                    onOpenInformationDialog()
                } else if (response.isCustomer && response.html) {
                    const dynamicDiv = $('#dynamically-div');

                    if (dynamicDiv.attr('is-change') === undefined) {
                        dynamicDiv.attr('is-change', true);
                    }

                    dynamicDiv.html(response.html);
                    $('#sellMyCar').click(onSellMyCar);
                }
            }
        })
    }
}

function onSellMyCar() {
    const token = $('#token').val();
    const yearMakeModel = $('#yearMakeModel').val();
    const engineInput = $('#engine').val();
    const miles = $('#miles').val();

    if (token && yearMakeModel && engineInput && miles) {
        $.ajax({
            type: 'POST',
            url: "sell-my-car",
            data: {_token: token, yearMakeModel, engineInput, miles},
            success: function (response) {
                isSubmitSellMyCar = true;

                response.isCustomer ? onOpenSetAllDialog() : onOpenInformationDialog();
            }
        })
    }
}

function onSendInformation() {
    const token = $('#informationToken').val();
    const firstName = $('#firstName').val();
    const lastName = $('#lastName').val();
    const phone = $('#phone').val();
    const email = $('#email').val();
    const agree = $('#customerInfoCheckbox').prop('checked');

    $(".errors").remove();

    if (firstName && lastName && phone && email && agree) {
        $.ajax({
            type: 'POST',
            url: 'customer-information',
            data: {_token: token, firstName, lastName, phone, email},
            success: () => {
                if (isSubmitSellMyCar) {
                    onOpenSetAllDialog();
                } else {
                    onOpenResponseDialog('Information Saved', 'Your contact details are saved. We won’t ask you to re-enter them in a future ')
                }
            },
            error: (err) => {
                if (err.status === 422) {
                    $.each(err.responseJSON.errors, function (item, error) {
                        const element = $(document).find('input#' + item);
                        console.log(element);

                        element.after($('<div class="errors">' + error[0] + '</div>'));
                    });
                }
            }
        })
    }
}

function onContinueAppointment() {
    window.location = '/';
}

function onOpenInformationDialog() {
    const options = {
        customClass: 'customer-information-dialog',
        template: '#customer-information-dialog',
        width: '385px',
        allowOutsideClick: true,
        showConfirmButton: false,
        allowEscapeKey: false
    };

    dialogService.onOpenDialog(
        options,
        '.customer-information-close',
        () => dialogService.onCloseDialog()
    );

    $('#send-information').click(onSendInformation);
}

function onOpenSetAllDialog() {
    const options = {
        customClass: 'trade-in-sell-my-car-set-dialog',
        template: '#trade-in-sell-my-car-set-dialog',
        width: '720px', // need 654
        allowOutsideClick: true,
        showConfirmButton: false,
        allowEscapeKey: false
    }

    dialogService.onOpenDialog(
        options,
        '.trade-in-sell-my-car-close',
        () => dialogService.onCloseDialog()
    );
}
