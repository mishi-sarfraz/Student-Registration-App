<?php
require 'config1.php';
echo "<pre>";
print_r ($_GET);
$id=$_GET['id'];
print_r($id);
$sql= "DELETE FROM `course` WHERE `course`.`Id` = $id";
if (mysqli_query($conn,$sql)){
	header("Location:courselist.php?D=deleted");
}

?>