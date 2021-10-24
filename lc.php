<?php require('config1.php');?>
<div id="login">
<form method="post">
<label for="user">User</label>
<input type="text" id="user" name="user" tabindex="1" autofocus>
<label for="password">Password</label>
<input type="password" id="password" name="password" tabindex="2">
<input type="submit" name="submit" value="sign in">
</form>
</div>
<br>
<?php
if(isset($_POST["submit"])) {
  $_SESSION["user"] = $_POST["user"];
  $_SESSION["password"] = $_POST["password"];
 // require "config1.php";
//print_r($_POST);
if(isset($_POST['password'])){
//echo "<pre>
$data=(object) $_POST;
print_r($data);
$mysql="SELECT * FROM `logintable` WHERE Name='{$data->user}'AND Password='{$data->password}'";
$results=mysqli_query($conn,$mysql);
if($row=mysqli_fetch_array($results)){
  //  $msg=0;
    //session_start();
    $_SESSION['user']=$row['user'];
  //  $_SESSION['username']=$row['Name'];
    $_SESSION['password']=$row['password'];
    header("Location:filtertry.php");
}

}
}
?>