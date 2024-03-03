<?php

    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "123456";
    $dbname = "contect";


if(isset($_POST["submit"])){
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $unumber = $_POST["unumber"];
    $message = $_POST["message"];

       $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

    // Sanitize user inputs to prevent SQL injection
    $uname = mysqli_real_escape_string($conn, $uname);
    $email = mysqli_real_escape_string($conn, $email);
    $unumber = mysqli_real_escape_string($conn, $unumber);
    $message = mysqli_real_escape_string($conn, $message);

 

 

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO con_table(uname,email,unumber,message) VALUES('$uname','$email','$unumber','$message')";
    if(mysqli_query($conn, $query)){
        echo "<script> alert('Successfully submitted'); window.location='javascript:history.back()';</script>";
    } else{
        echo "Error: " . $query . "<br>" . mysqli_error(conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
