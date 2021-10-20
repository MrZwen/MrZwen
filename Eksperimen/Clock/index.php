<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- BOX Icon CDN -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>JAM</title>
</head>
<body>
    <section>
        <div class="container">
             <div class="icons">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
            </div>
            <div class="time">
                <div class="time-colon">
                    <div class="time-text">
                        <span class="num hour_num"></span>
                        <span class="text">Hours</span>
                    </div>
                    <span class="colon">:</span>
                </div>
                <div class="time-colon">
                    <div class="time-text">
                        <span class="num min_num"></span>
                        <span class="text">Minutes</span>
                    </div>
                    <span class="colon">:</span>
                </div>
                <div class="time-colon">
                    <div class="time-text">
                        <span class="num sec_num"></span>
                        <span class="text">Seconds</span>
                    </div>
                    <span class="am_pm">AM</span>
                </div>
            </div>
        </div>
    </section>

    <script src="js/main.js"></script>
</body>
</html>