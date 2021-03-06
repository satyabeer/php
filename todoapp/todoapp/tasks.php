<?php

require_once('init.php');

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    $response = [
        'status'    =>  405,
        'message'   =>  'Method Not Allowed'
    ];

    echo json_encode($response);
    exit();
}

require_once('dbconnect.php');

$query = "SELECT * from todos";
$result = mysqli_query($con, $query);
$rows = mysqli_num_rows($result) ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];

$response = [
    'status'    =>  200,
    'result'    =>  $rows
];

echo json_encode($response);