<?php
session_start();
$page = $_SESSION["page"];


$user = $_POST["user"];
$pass = $_POST["pass"];

$servername = "localhost:3306";
$username = "owner";
$password = "Org17913";
$database = "webServer";
$newURL = "/retry.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($page == "login"){
  //checking if user exists
  $query = "SELECT password FROM users WHERE user ='$user'";
  $result = $conn->query($query);
  $row = mysqli_fetch_assoc($result);
  if($row["password"] == $pass){

  }else{
    header('Location: '.$newURL);
  }
  } else if($page == "new"){
    $query = "INSERT INTO users (user, password) VALUES ('$user', '$pass')";
    $result = $conn->query($query);
    if($_POST["mail"] != NULL){
      $mail = $_POST["mail"];
      $query = "UPDATE users SET email = '$mail' WHERE user = '$user'";
      $result = $conn->query($query);
    }
  }


$conn->close();
?>
