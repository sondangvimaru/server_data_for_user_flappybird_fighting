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
$datajson = array();
$id=$_GET["id"];
$sql = "SELECT id,name,gioitinh,winnumber FROM user where id=$id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $datajson[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'gioitinh' => $row['gioitinh'],
            'winnumber'=>$row['winnumber'],
           
      
         );
    }
} else {
    echo "0 results";
}

$conn->close();
$json = json_encode($datajson,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
echo '{"data":'.$json.'}';

?>