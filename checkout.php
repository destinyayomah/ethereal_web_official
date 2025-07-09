<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <a href="packages"><i class="ri-home-9-fill"></i></a>

        <h1 id="text01">Proceed to your bank app to complete the transfer</h1>

        <div id="container01" class="container default">
            <ul id="buttons03" class="buttons">
                <li>
                    <a onclick="_clipboard(event, '3002634073');" class="button n01" role="button">
                        <span class="label">3002634073</span>
                        <i class="ri-file-copy-line"></i>
                    </a>
                </li>
            </ul>
            <ul id="buttons04" class="buttons">
                <li><a href="#" class="button n01" role="button">Kuda Microfinance Bank</a></li>
            </ul>
            <ul id="buttons05" class="buttons">
                <li><a href="#" class="button n01" role="button">ETHEREALWEBSERVICES</a></li>
            </ul>
            <ul id="buttons02" class="buttons">
                <li><a href="#" class="button n01" role="button">GET STARTED IMMEDIATELY</a></li>
            </ul>
        </div>

        <a href="https://wa.me/+2348105221152" class="done-btn" role="button">
            <i class="ri-checkbox-circle-fill"></i>
            <span class="label">I have made the transfer</span>
        </a>
    </div>

    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/toast.js"></script>
    <script src="js/checkout.js"></script>
</body>

</html>