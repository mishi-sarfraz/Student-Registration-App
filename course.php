<?php 
session_start();
if(!isset($_SESSION['id'])){
echo'<script type="text/javascript">
      window.location.replace("login.php");
</script>';}
require "header.php";
require "config1.php" ;
//print_r($_POST);
if(isset($_POST['name'])){
//echo "<pre>
$data=(object) $_POST;

//print_r($data);
//$mysql="SELECT * FROM `employee` WHERE Name='{$data->email}'AND Password='{$data->password}'";
$sql="INSERT INTO `course`(`Name`, `C_Hrs`, `Created_By`, `Created_At`) VALUES 
							('{$data->name}',{$data->chour},1,NOW())";
//$results=mysqli_query($conn,$mysql);
	if (mysqli_query($conn,$sql)){
		
	header('Location:courselist.php');
}
}


?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type ="text/css">
	.main{
 	padding: 40px 0;
}
.main input,
.main input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
    padding: 10px 40px;
	background:#009edf;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

</style>


<!------ Include the above in your HEAD tag ---------->

	<div class="container">
			<div class="main">
				<div class="main-center">
				<h3>Enter New Course </h3>
					<form class="" method="post" action="">
						
						<div class="form-group">
							<label for="name">Course Name</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								

				<input type="text" class="form-control" name="name" id="name"  placeholder="Enter course Name"/>
							</div>
						</div>

						<div class="form-group">
							<label for="email">Credit Hours</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="number"  min="10" max="50" class="form-control" name="chour" placeholder="Enter Credit Hours"/>
							</div>
						</div>

						<!-- <div class="form-group">
							<label for="username"></label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" placeholder="Enter your Username"/>
								</div>
						</div>

						<div class="form-group">
							<label for="password">Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" placeholder="Enter your Password"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Confirm Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" placeholder="Confirm your Password"/>
								</div>
						</div>
 -->
				<button style="margin:auto;display:block;color:black" type="submit">SUBMIT</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
\		</div><!--container-->