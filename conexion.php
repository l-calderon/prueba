<?php
	$database="crud";
	$user='wachi';
	$password='leonardillo123';


try {
	
	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}

?>