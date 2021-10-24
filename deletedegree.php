<?php
session_start();
if(!isset($_SESSION['id'])){
echo'<script type="text/javascript">
      window.location.replace("login.php");
</script>';}
require 'config1.php';
echo "<pre>";
print_r ($_GET);
$id=$_GET['id'];
print_r($id);
$sql= "DELETE FROM `degree` WHERE `degree`.`Id` = $id";
if (mysqli_query($conn,$sql)){
	header("Location:degreelist.php?D=deleted");
}

?>