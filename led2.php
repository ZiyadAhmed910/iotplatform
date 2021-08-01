<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Vikkey" content="Vivek Gupta & IoTMonk">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/led.css">
    <script src="js/light.js"></script>

    <!-- If you are opening this page from local machine, uncomment belwo line -->

    <!-- If you are opening this page from a web hosting server machine, uncomment belwo line -->

    <script type="text/javascript">
        document.write([
            "\<script src='",
            ("https:" == document.location.protocol) ? "https://" : "http://",
            "ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js' type='text/javascript'>\<\/script>"
        ].join(''));
    </script>


    <title>ESP 8266 Node MCU Web APP LED Control </title>


</head>

<body>
    <div class="wrapper">
        <div class="lamp">
            <div class="lamp-cord"></div>
            <div class="lamp-shade"></div>
            <form class="lamp-switch">
                <label>
                    <input id="D1-on" class="D1-on" type="checkbox" onClick="d1on()" checked>
                    <span></span>
                </label>
            </form>
            <h1 class="title">Light Mode</h1>
        </div>
        <a href="Led1.php">Led 1</a>
        <a href="Led2.php">Led 2</a>
        <a href="Led1.php">Led 3</a>
        <a href="ledcontrol.php">Back</a>
    </div>
</body>

<script>
    d1 = document.getElementById('D1-on');

    function d1on() {
        toggleDarkMode();
        if (document.getElementsByClassName('D1-on')) {
            d1.classList.toggle("D1-on");
            d1.classList.toggle("D1-off");
            var d1ison = document.getElementsByClassName('D1-on');

            if (d1ison.length > 0) {
                var url = "http://localhost/ledprojectapp/api/led/update.php?id=2&status=on";
                $.getJSON(url, function(data) {
                    console.log("led on");
                    console.log(data);
                });
            } else {
                var url = "http://localhost/ledprojectapp/api/led/update.php?id=2&status=off";
                $.getJSON(url, function(data) {
                    console.log("led off");
                    console.log(data);
                });
            }
        }
    }
</script>

</html