import { dialogService } from './dialog';

export function onOpenResponseDialog(title, content) {
    const options = {
        template: '#response-dialog',
        width: '483px',
        customClass: 'response-dialog',
        backdrop: 'none',
        position: 'bottom-end',
        allowOutsideClick: true,
        showConfirmButton: false,
        allowEscapeKey: false,
        timer: 3000
    };

    dialogService.onOpenDialog(options, '.response-dialog-close', () => dialogService.onCloseDialog());

    $('.response-dialog .title').text(title);
    $('.response-dialog .message').text(content);
}
