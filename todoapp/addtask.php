<?php

require_once('init.php');

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $response = [
        'status'    =>  405,
        'message'   =>  'Method Not Allowed'
    ];

    echo json_encode($response);
    exit();
}

$postJSONData = file_get_contents('php://input');
$postData = json_decode($postJSONData, TRUE); //convert JSON into array

require_once('dbconnect.php');

$query = "INSERT INTO todos (task, date, time) values('".$postData['task']."', '".$postData['date']."', '".$postData['time']."')";

$result = mysqli_query($con, $query);

$response = [
    'status'    =>  200,
    'result'    =>  $result
];

echo json_encode($response);