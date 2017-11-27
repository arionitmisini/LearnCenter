<?php
try{
	$conn= new PDO("mysql:host=localhost;dbname=learncenter","root","");
}catch(PDOException $conn){
	echo "Error DB".$conn->getMessage();
}
?>	