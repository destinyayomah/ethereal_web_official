<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethereal Web Official</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <meta name="description" content="Harness the Power of the Internet to your own Leverage.">
    <meta property="og:type" content="website">
    <meta name="og:description" content="Harness the Power of the Internet to your own Leverage.">
    <meta property="og:image" content="https://ethereal.crrt.site/images/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="800">
    <meta property="og:url" content="https://ethereal.crrt.site">
</head>

<body>
    <div id="wrapper">
        <div id="main">
            <div class="main-inner">
                <div id="image01" class="image">
                    <span class="logo">
                        <img src="images/logo.png" alt="">
                    </span>
                </div>
                <h2 id="text01">Sign Up</h2>
                <form enctype="multipart/form-data" id="signup-form" method="post">
                    <div class="field" data-type="text">
                        <input type="text" name="name" id="name" placeholder="Name" maxlength="256" required="">
                    </div>
                    <div class="field" data-type="email">
                        <input type="email" name="email" id="email" placeholder="Email" maxlength="128" required="">
                    </div>
                    <div class="field" data-type="text">
                        <input type="text" name="nickname" id="nickname" placeholder="Nickname" maxlength="256"
                            required="">
                    </div>
                    <div class="field" data-type="textarea">
                        <textarea data-gramm_editor="false" name="country" id="country" placeholder="Country"
                            required=""></textarea>
                    </div>

                    <button type="submit" id="signup-btn">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/toast.js"></script>
    <script src="js/app.js"></script>
</body>

</html>