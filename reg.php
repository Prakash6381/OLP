<?php
session_start();

$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "123456";
$dbname = "register";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fname = $_POST['fname'];
    $lname  = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // check if email already exists in the database
    $stmt = $conn->prepare("SELECT * FROM reg_table WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        echo "<script> alert('Email already exists!'); window.location='javascript:history.back()';</script>";
        exit();
    }

    // validate password
    if($password != $cpassword){
        echo "<script> alert('Passwords do not match!'); window.location='javascript:history.back()';</script>";
        exit();
    }

    if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()\-_=+{};:,<.>ยง?\\/|]).{6,}$/', $password)){
        echo "<script> alert ('Password must contain atleast one uppercase letter, one lowercase letter, one number, one special character, and be atleast 6 characters long !'); window.location='javascript:history.back()';</script>";
        exit();
    }

    // password validation passed, save data to the database
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO reg_table (fname, lname, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fname, $lname, $email, $hashedpassword);
    $stmt->execute();

    // redirect to login page
    echo "<script> alert('Reistered successfully!');</script>";
    header("location: login.html");
    exit();
}
?>
