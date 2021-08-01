<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Access-Control-Allow-Origin" content="*">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/weather.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cloud.boltiot.com/static/js/boltCommands.js"></script>
    <script>
        setKey('ad7ca008-d905-49b7-a70f-86dd69d53666', 'BOLT8023564');
    </script>
    <title>IOT BOLT CONTROL SWITCH</title>
</head>


<body>
    <div class="wrapper" theme="light">
        <div class="login" theme="light">
            <div class="login-form" theme="light">
                <h1 class="login-title">DASHBOARD</h1>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo " <p>Hello " . $_SESSION["useruid"] . "</p><br>";
                }
                ?>
                <div class="form-wrapper">
                    <form name="myForm">
                        <div class="action-help">
                            <p>Hello Welcome to Live Weather Platform</p>
                        </div>
                        <p class="actions">
                            <?php
                            if (isset($_SESSION["useruid"])) {
                                echo "<a class='action' theme='light' href='viewdata.php'>View Complete Data</a>";
                                echo "<a class='action' theme='light' href='control.php'>Led Dashboard</a>";
                                echo "<a class='action' theme='light' href='index.php'>HOME</a>";
                            } else {
                                echo "<br><a class='action' href='login.php'>Login</a>";
                            }
                            ?>
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="weather-side">
                    <div class="weather-gradient"></div>
                    <div class="date-container">
                        <h2 class="date-dayname" id="date-dayname">Tuesday</h2>
                        <span id="date-day-day">15 </span>
                        <span id="date-day"> 15 Jan 2019</span>
                        <span id="date-year">2019</span>
                        <i class="location-icon" data-feather="map-pin"></i><span class="location">Hyderabad,HYD</span>
                    </div>
                    <div class="weather-container"><i class="weather-icon" data-feather="sun"></i>
                        <div id="weather-temp">
                            <h1 id='weather-temp' class='weather-temp'>0°C</h1>
                        </div>
                        <div id="weather-desc">Humidity: 0%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/weather.js"></script>
</body>

</html>