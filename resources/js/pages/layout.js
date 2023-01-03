import { dialogService } from '../modals/dialog';

$('#exit-button').click(onOpenExitDialog);

function onOpenExitDialog() {
    const options = {
        customClass: 'leave-dialog',
        template: '#leave-dialog',
        width: '669px',
        backdrop: 'rgb(0 0 0 / 80%)',
        position: 'center',
        allowOutsideClick: true,
        showConfirmButton: false,
        allowEscapeKey: false
    }

    dialogService.onOpenDialog(
        options,
        '#exit-close',
        () => dialogService.onCloseDialog()
    );
}
