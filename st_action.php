<?php
session_start();
if(!isset($_SESSION['id'])){
echo'<script type="text/javascript">
      window.location.replace("login.php");
</script>';}
require ('config1.php');
require('header.php');
//$std=(object)$_POST;
$std=(object)$_POST;
print_r($std);
$sql3="SELECT * FROM degree WHERE DName ="."'".$std->dname."'";
				print($sql3);

				$row1=mysqli_query($conn,$sql3);
                if(mysqli_query($conn,$sql3)){
				$row2=mysqli_fetch_array($row1);
				print_r($row2);
				$degree_Id=$row2['Id'];
				/*echo($degree_Id);*/
				$name=$std->fname." ".$std->lname;
			//	echo($name);
				}
				else echo"nahi chali";


$sqlst="INSERT INTO `student`(`Name`, `Degree`) VALUES 

						('{$name}',$degree_Id)";	
						echo($sqlst);
						if(mysqli_query($conn,$sqlst)){
							header('Location:studentlist.php');
						}
						else
							echo "MAAF KARO BABA";

?>
