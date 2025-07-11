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

        <div class="tabbers">
            <div class="tab active">General</div>
            <div class="tab">Opay</div>
        </div>

        <div id="container01" class="container default">
            <div class="note">Do not pay with Opay here</div>
            <ul id="buttons03" class="buttons">
                <li>
                    <a href="#" onclick="_clipboard(event, '3002639573');" class="button n01" role="button">
                        <span class="label">3002639573</span>
                        <i class="ri-file-copy-line"></i>
                    </a>
                </li>
            </ul>
            <ul id="buttons04" class="buttons">
                <li><a href="#" class="button n01" role="button">Kuda Microfinance Bank</a></li>
            </ul>
            <ul id="buttons05" class="buttons">
                <li><a href="#" class="button n01" role="button">ETHEREAL WEBSITE</a></li>
            </ul>
            <ul id="buttons02" class="buttons">
                <li><a href="#" class="button n01" role="button">GET STARTED IMMEDIATELY</a></li>
            </ul>
        </div>

        <div id="container02" class="container default" style="display: none;">
            <ul id="buttons03" class="buttons">
                <li>
                    <a href="#" onclick="_clipboard(event, '8109177523');" class="button n01" role="button">
                        <span class="label">8109177523</span>
                        <i class="ri-file-copy-line"></i>
                    </a>
                </li>
            </ul>
            <ul id="buttons04" class="buttons">
                <li><a href="#" class="button n01" role="button">Opay (PAYCOM)</a></li>
            </ul>
            <ul id="buttons05" class="buttons">
                <li><a href="#" class="button n01" role="button">David Chigozirim Obilor</a></li>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/toast.js"></script>
    <script src="js/checkout.js"></script>
</body>

</html>