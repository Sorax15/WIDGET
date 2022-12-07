let questionModal = null;

window.onOpenQuestionDialog = (className = 'fixed right-9 bottom-32', position = 'bottom-end') => {
    questionModal = Swal.fire({
        customClass: className,
        template: '#question-dialog',
        width: '342px',
        backdrop: 'rgb(0 0 0 / 1%)',
        position: position,
        allowOutsideClick: true,
        showConfirmButton: false,
        allowEscapeKey: false
    });
}

window.onCloseQuestionDialog = () => {
    questionModal.close();
}

window.onChangeCheckbox = (value) => {
    document.getElementById("send-question").disabled = !value.checked;
}

window.onSendForm = function () {
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
