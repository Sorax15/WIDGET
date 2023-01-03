class Dialog {
    dialog = null;
    handler = null;
    selector = null;

    onOpenDialog = (options, selector, handler) => {
        this.dialog = Swal.fire(options);

        this.selector = selector;
        this.handler = $(this.selector).click(handler);
    }

    onCloseDialog = () => {
        this.dialog.close();

        $(this.selector).off('click', this.selector, this.handler);
    }
}

export const dialogService = new Dialog();
