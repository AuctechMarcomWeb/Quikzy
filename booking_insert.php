<?php
header('Content-Type: application/json');

require_once "db_con.php";

/* Indian Timezone */
date_default_timezone_set('Asia/Kolkata');

function clean($data){
    return htmlspecialchars(trim($data));
}

/* Validation */
$required = [
    'name','age','phone','occupation',
    'start_destination','end_destination',
    'pickup_time','return_time'
];

foreach($required as $field){
    if(empty($_POST[$field])){
        echo json_encode([
            "status"=>"error",
            "message"=>"All fields are required."
        ]);
        exit;
    }
}

/* Data */
$name = clean($_POST['name']);
$age = (int)$_POST['age'];
$phone = clean($_POST['phone']);
$occupation = clean($_POST['occupation']);
$start = clean($_POST['start_destination']);
$end = clean($_POST['end_destination']);
$pickup = clean($_POST['pickup_time']);
$return = clean($_POST['return_time']);

$added_on = date("Y-m-d H:i:s");

/* Phone validation */
if(!preg_match('/^[0-9]{10}$/',$phone)){
    echo json_encode([
        "status"=>"error",
        "message"=>"Enter valid 10 digit phone number."
    ]);
    exit;
}

/* Insert */
$stmt = $con->prepare("INSERT INTO cab_bookings
(name,age,phone,occupation,start_destination,end_destination,pickup_time,return_time,added_on)
VALUES (?,?,?,?,?,?,?,?,?)");

$stmt->bind_param(
    "sisssssss",
    $name,
    $age,
    $phone,
    $occupation,
    $start,
    $end,
    $pickup,
    $return,
    $added_on
);

if($stmt->execute()){
    echo json_encode([
        "status"=>"success"
    ]);
}else{
    echo json_encode([
        "status"=>"error",
        "message"=>"Database insert failed."
    ]);
}

$stmt->close();
$con->close();
?>