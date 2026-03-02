<?php
session_start();

if (isset($_POST['Submit'])) {
    include '../db_con.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepared statement
    $stmt = $con->prepare("SELECT * FROM add_user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

       
        if (password_verify($password, $row['password'])) {
            $_SESSION['login_status'] = true;
            $_SESSION['firstname'] = $row['name'];  
            $_SESSION['id'] = $row['id'];          

            header('Location: index.php');
            exit();
        } else {
            echo "<script>alert('Email or Password is incorrect!'); window.location = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('Email or Password is incorrect!'); window.location = 'login.php';</script>";
    }
} else {
    echo "No data submitted!";
}
?>

