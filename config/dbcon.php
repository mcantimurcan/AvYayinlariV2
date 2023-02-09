<?php

try {
	$con=new PDO("mysql:host=localhost;dbname=avyayindb;charset=utf8",'root','');
}

catch (PDOExpception $e) {
	echo $e->getMessage();
}


?>