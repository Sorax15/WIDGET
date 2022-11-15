let questionModal = null;

function onOpenQuestionDialog() {
    questionModal = Swal.fire({
        template: '#question-dialog',
        allowOutsideClick: false,
        showConfirmButton: false,
        allowEscapeKey: false
    });
}
