<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cardb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start(); 

if(isset($_POST['submit1'])){ 

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password']; 

    $select = " SELECT * FROM customers WHERE email = '$email' && password = '$password' "; 
    
    $result = mysqli_query($conn, $select); 
    
    if(mysqli_num_rows($result)>0){
      header('location:loggedpage.html');
  }else{
      echo '<script>alert("Incorrect email or password!")</script>';
}
};

?>