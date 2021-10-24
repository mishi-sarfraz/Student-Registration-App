 <?php 
require "config1.php";
$sql="SELECT * from degree";

$sure=(object)$_POST;
print_r($sure);
if(mysqli_query($conn,$sql)){
	$result=mysqli_query($conn,$sql);}
	
   
	//$row=mysqli_fetch_array($result);
	

else
echo"Nahi chali";
$sql3="SELECT * FROM degree WHERE Name ="."'".$sure->mylist."'";

				$row1=mysqli_query($conn,$sql3);
                if(mysqli_query($conn,$sql3)){
				$row2=mysqli_fetch_array($row1);
				$degree_Id=$row2['Id'];
				echo($degree_Id);

				}
				else echo"nahi chali";

/*$sql4="UPDATE degree FROM course where Id=".*/
				$counter=count($sure->education);
				print($counter);
				$i=0;
				$update=0;
				While($i<=$counter-1){
				/*	$sql4="UPDATE degree FROM course where Id=";*/
					$sql4="UPDATE `course` SET 
					`Updated_At`=NOW(),
					 `D_Id`=$degree_Id
					 WHERE Id=".$sure->education[$i];
					//$row4=mysqli_query($conn,$sql4);
                	if(mysqli_query($conn,$sql4)){
					$update=1;}
					
					$i++;
				    
				}
					if ($update=0){
						echo"Course was not updated";
					}
					else echo"Course was updated";

							

/*if(isset($_POST['mylist'])){
	   //  header('Location:ls.php');
		
	}
}*/

//print_r($row['Name']);
//print_r(count($row));
//print_r($row[0],$row[1]);
//print_r($row);?>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style type="text/css">/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41}</style>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css>
    <title>degree-course module</title>
  </head>
  <body>
      <h1>Student Degree Selection<a href=""</a></h1>
      <div class="container">
   <form method="POST" >
  <!--  --><!-- <div class="form-row"> -->
       <div class="dropdown">
    	
    	Degree List :  
    	 <select name='mylist' id='mylist' size='1'>
		<?php
		while($rec = mysqli_fetch_array($result))
		{
    	echo "<option>".$rec['Name']."</option>";
		}
		?>
		</select>
        </div>
  <div class="form-group">
   <?php
  		$sql1="SELECT * from course";
			if (mysqli_query($conn,$sql1)){
			$result1=mysqli_query($conn,$sql1);}
			else echo"nahi chali";
			?>
			<?php 
				while($rec1 = mysqli_fetch_array($result1)){?>
				<input type="checkbox" name="education[]" value="<?php echo $rec1['Id']?>"><?php echo $rec1['Name'];}

				/*if (mysqli_query($conn,$sql3)){
				print($sql3);
				}
				else echo"nahi chali";*/
				?>
	            
			<br>
			<br>
 	
  	<button class="btn btn-primary" type="submit">Submit form</button>
	</div>

</form>
</div>
</div>