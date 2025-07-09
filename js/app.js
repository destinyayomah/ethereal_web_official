$(document).ready(function () {
    $('#signup-form').submit(function (e) {
        e.preventDefault();

        const name = $('#name').val();
        const email = $('#email').val();
        const nickname = $('#nickname').val();
        const country = $('#country').val();

        Swal.fire({
            html: '<center><img id="spinner" src="gif/spinner.svg" width="50" height="50" alt="spinner"></center>',
            showConfirmButton: false,
            allowOutsideClick: false,
            background: 'transparent'
        });

        axios.post('functions/send-email.php', { name, email, nickname, country, action: 'new-signup' },
            { headers: { 'content-type': 'application/x-www-form-urlencoded' } })
            .then(response => {
                if (response.data.statusCode == 200) {
                    setTimeout(() => {
                        window.location.href = 'packages';
                    }, 1500);
                } else {
                    setTimeout(() => {
                        window.location.href = 'packages';
                    }, 1500);
                }
            })
            .catch(error => {
                console.log(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error Encountered',
                    text: error.response.statusText
                });
            });

    });
});