<?php session_start();
$api_key = 'ad7ca008-d905-49b7-a70f-86dd69d53666';
$bolt_name = 'BOLT8023564';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cloud.boltiot.com/static/js/boltCommands.js"></script>
    <script>
        <?php
        echo "setKey($api_key, $bolt_name);"
        ?>
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
                            <p>Hello Welcome to Led Control Platform</p>
                            <br>
                            <p>Hello! Click on the <span><span class="text-sun">sun</span> / <span class="text-moon">moon</span></span> !!!</p>
                            <br>
                        </div>
                        <div class="actions">
                            <div class="container">
                                <center>
                                    <input type="checkbox" id="theme-toggle" onclick="digitalWrite(0,state)">
                                    <label for="theme-toggle"></label>
                                </center>
                            </div>
                            <?php
                            if (isset($_SESSION["useruid"])) {
                                echo "<br><a class='action' theme='light' href='weather.php'>Weather Dashboard</a>";
                                echo "<a class='action' theme='light' href='ledcontrol.php'>Led Control Panel</a>";
                                echo "<a class='action' theme='light' href='index.php'>HOME</a>";
                            } else {
                                echo "<br><a class='action' href='login.php'>Login</a>";
                            }
                            ?>
                    </form>
                </div>

            </div>
        </div>
        <div class="login-decoration" theme="light">
            <!-- <div class="container">
                <input type="checkbox" id="theme-toggle" onclick="digitalWrite(0,state)">
                <label for="theme-toggle"></label>
            </div> -->
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>