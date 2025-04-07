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

if($_SERVER['REQUEST_METHOD']== 'POST'){

	
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $password=$_REQUEST['password'];

    $sql = "INSERT INTO customers (firstname, lastname, email, password)
    VALUES ('$firstname', '$lastname', '$email', '$password')";

if(mysqli_query($conn, $sql)){
    echo "<h3 style='color:green;'>You are registered successfully. </h3>";
    echo "<br><a href='loggedpage.html'><button>Proceed</button></a>";
       
} else{
    echo "<h3 style='color:red;'>ERROR: Hush! Sorry $sql. </h3>";
    echo "<br><a href='test.html'><button>Home</button></a>";
    echo "<br><a href='signup.php'><button>Return</button></a>"
        . mysqli_error($conn);
}

$conn->close();
};
?>