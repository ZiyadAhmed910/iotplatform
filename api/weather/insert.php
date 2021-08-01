<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// $filepath = realpath(dirname(__FILE__));
// require_once($filepath . "/gsapireq.php");
//Creating Array for JSON response
$response = array();

// Check if we got the field from the user
if (isset($_GET['temp']) && isset($_GET['hum'])) {

    $temp = $_GET['temp'];
    $hum = $_GET['hum'];
    $emptystring = '';
    $urlgs = "https://script.google.com/macros/s/AKfycbwGZUmKfP68CkXgyFiSgYeMjx0lUSOkZXYW5J8H8NgEX2RbNQCYYZPA09iXIQr8JlTCwQ/exec?func=addData&val=" . $temp;

    $clientgs = curl_init($urlgs);
    curl_setopt($clientgs, CURLOPT_RETURNTRANSFER, true);
    $responsegs = curl_exec($clientgs);
    $resultgs = json_decode($responsegs);
    echo "$resultgs";
    // Include data base connect class
    $filepath = realpath(dirname(__FILE__));
    require_once($filepath . "/db_connect.php");

    // Connecting to database 

    // Fire SQL query to insert data in weather
    $result = mysqli_query($conn, "INSERT INTO weather(temp,hum) VALUES('$temp','$hum')");

    // Check for succesfull execution of query
    if ($result) {
        // successfully inserted 
        $response["success"] = 1;
        $response["message"] = "Weather successfully created.";
        // $apiCall = APIcall('POST', 'https://script.google.com/macros/s/AKfycbwGZUmKfP68CkXgyFiSgYeMjx0lUSOkZXYW5J8H8NgEX2RbNQCYYZPA09iXIQr8JlTCwQ/exec?func=addData&' . $temp, json_encode($emptystring));
        // $response2 = json_decode($apiCall, true);
        // $errors = $response2['response']['errors'];
        // $data = $response2['response']['data'][0];
        // echo json_encode($response2);



        // Show JSON response
        echo json_encode($response);
    } else {
        // Failed to insert data in database
        $response["success"] = 0;
        $response["message"] = "Something has been wrong";

        // Show JSON response
        echo json_encode($response);
    }
} else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";

    // Show JSON response
    echo json_encode($response);
}
