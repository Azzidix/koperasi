<?php

try 
{
	$db = new PDO("mysql:host=localhost;dbname=koperasi_ci","root","");
} 
catch (PDOException $e) 
{
	echo $e->getMessage();
}

include_once "crud.php";
$crud = new crud($db);

?>