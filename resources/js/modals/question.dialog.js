import { dialogService } from './dialog';

$('#open-question-dialog').click(onOpenQuestionDialog);

$('.question-dialog-checkbox').change(() => {
    $('.send-question').prop('disabled', $(this).prop('checked'));
});

$('#send-question').click(onSendForm);

function onOpenQuestionDialog(className = 'fixed right-9 bottom-32', position = 'bottom-end') {
    const options = {
        customClass: className,
        template: '#question-dialog',
        width: '342px',
        backdrop: 'rgb(0 0 0 / 1%)',
        position: position,
        allowOutsideClick: true,
        showConfirmButton: false,
        allowEscapeKey: false
    }

    dialogService.onOpenDialog(
        options,
        '.question-dialog-close',
        () => dialogService.onCloseDialog()
    );
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
            url: "send-question",
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
