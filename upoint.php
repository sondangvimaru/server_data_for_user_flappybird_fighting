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
if(isset($_POST["id"]))
{
    $id=$_POST["id"];
    $sql="select top 1 winnumber from user where id='$id'";
    $result=$conn->query($sql);
    $winumber=$result+1;
    $sql_update="update user set winnumber='$winumber' where id='$id'";
    if ($conn->query($sql_update) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

}

?>