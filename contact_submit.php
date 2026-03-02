<?php
header('Content-Type: application/json');

require_once "db_con.php";

/* ===== TIMEZONE INDIA ===== */
date_default_timezone_set('Asia/Kolkata');

/* ===== HELPER FUNCTION ===== */
function clean($data){
    return htmlspecialchars(trim($data));
}

/* ===== CHECK POST ===== */
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo json_encode([
        "status"=>"error",
        "message"=>"Invalid request"
    ]);
    exit;
}

/* ===== GET DATA ===== */
$name       = clean($_POST['form_name'] ?? '');
$phone      = clean($_POST['form_phone'] ?? '');
$address    = clean($_POST['form_address'] ?? '');
$age        = clean($_POST['form_age'] ?? '');
$occupation = clean($_POST['form_occupation'] ?? '');
$message    = clean($_POST['form_message'] ?? '');

/* ===== VALIDATION ===== */

if(empty($name) || empty($phone)){
    echo json_encode([
        "status"=>"error",
        "message"=>"Please fill all required fields."
    ]);
    exit;
}

if(!preg_match('/^[0-9]{10}$/', $phone)){
    echo json_encode([
        "status"=>"error",
        "message"=>"Enter valid 10 digit phone number."
    ]);
    exit;
}

if(!empty($age) && !is_numeric($age)){
    echo json_encode([
        "status"=>"error",
        "message"=>"Age must be numeric."
    ]);
    exit;
}

/* ===== INSERT QUERY ===== */

$stmt = $con->prepare("
    INSERT INTO contact_inquiries
    (full_name, phone, address, age, occupation, message, added_on)
    VALUES (?,?,?,?,?,?,?)
");

$added_on = date("Y-m-d H:i:s");

$stmt->bind_param(
    "sssisss",
    $name,
    $phone,
    $address,
    $age,
    $occupation,
    $message,
    $added_on
);

if($stmt->execute()){
    echo json_encode([
        "status"=>"success"
    ]);
}else{
    echo json_encode([
        "status"=>"error",
        "message"=>"Database error"
    ]);
}

$stmt->close();
$con->close();