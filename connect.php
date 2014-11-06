<?php 
	
	// try{

	// 	$conn = new mysql_connect("localhost", "root", "list");
	// 	mysql_select_db('infinite');

	// }catch(Exception $e){
	// 	die("error".$e->getMessage());
	// }

// $connect = mysql_connect("localhost", "root", "list");
// mysql_select_db("infinite");

$servername = "localhost";
$username = "root";
$password ="";
$dbname = "infinite";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
	die("connection failed : ".$connect->connect_error);

}
// echo "connected successfully";

	
 ?>
