<?php 
session_start();

$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "123456";
$dbname = "register";

// make connection between form and MySQL server 
$con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

// email and password received from the login page
$finaluser = mysqli_real_escape_string($con, $_POST['email']);
$finalpass = mysqli_real_escape_string($con, $_POST['password']);

// comparison between user input and database using prepared statements to prevent SQL injecion
$stmt = $con->prepare("SELECT * FROM reg_table WHERE email = ?");
$stmt->bind_param("s", $finaluser);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];
    if(password_verify($finalpass, $hashed_password)){
        $_SESSION['myuser'] = $finaluser;
        header("location:index.html");
        exit();
    } else {
        $_SESSION["error"] = "Invalid password";
        header("location:lerror.php");
        exit();
    }
} else {

    $_SESSION["error"] = "User not found";
    header("location:lerror.php");
    exit();
}
?>
