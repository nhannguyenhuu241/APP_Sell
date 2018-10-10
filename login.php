<?php
	include "connect.php";
	session_start();
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	if(isset($_POST['username'])){
        
        $username = $_POST['username'];
        
    }
    
    if(isset($_POST['password'])){
        
        $password = $_POST['password'];
        
    }
	$sql = "SELECT id, username, password FROM user";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
		} 
	}
	else {
    echo "0 results";
	}
		$message['message']='Dang nhap that bai!';
		$json=json_encode($message);
		echo $json;
?>
