<?php
$servername = "localhost";
$username = "id11722714_son1998";
$password = "son1998";
$dbname = "id11722714_flappy_bird";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["gioitinh"]) && isset($_POST["winnumber"])   )
{
    $id=$_POST["id"];
    $name=$_POST["name"];
    $gt=$_POST["gioitinh"];
    $winnumber=$_POST["winnumber"];
    $sql = "INSERT INTO user (id, name, gioitinh,winnumber)VALUES ('$id', '$name', '$gt','$winnumber')";
if ($conn->query($sql) === TRUE) {
    echo "add thanh cong";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}




$conn->close();
?>