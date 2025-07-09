function _clipboard(event, text) {
    event.preventDefault(); // Prevent default link behavior
    if (navigator.clipboard) {
        navigator.clipboard.writeText(text)
            .then(() => {
                ToastSuccess.fire('Copied');
            })
            .catch(err => {
                console.error('Failed to copy text: ', err);
            });
    } else {
        // Fallback for older browsers
        const textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        try {
            document.execCommand('copy');
            ToastSuccess.fire('Copied');
        } catch (err) {
            console.error('Fallback: Unable to copy', err);
        }
        document.body.removeChild(textarea);
    }
}
