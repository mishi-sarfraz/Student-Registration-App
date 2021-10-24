<?php
session_start();
if(!isset($_SESSION['id'])){
echo'<script type="text/javascript">
      window.location.replace("login.php");
</script>';}
require "config1.php";
require "header.php";
$mysql="SELECT * FROM degree";
$results=mysqli_query($conn,$mysql);
/*while($record=mysqli_fetch_array($results)){
echo "<pre>";
print_r($record);
}*/

?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">.custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h3><?php if(isset($_GET['D'])&& ($_GET['D']=="deleted")) {
        echo "Record deleted Suceesfully....";} ?></h3>
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="degree.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Degree</a>
        <tr>
            <th>S.No</th>
            <th>D_Name</th>
            <th>Fees</th>
            
            <th class="text-center">Action</th>
        </tr>
    </thead>
        <?php $i=0 ;while($record=mysqli_fetch_array($results)){?>
            <tr>
                <td><?php echo $i=$i+1; ?></td>
                <td><?php echo $record['DName'] ?></td>
                <td><?php echo $record['Fees'] ?></td>
             

                <td class="text-center">
                    <a class='btn btn-info btn-xs' href="editdegree.php?id=<?php echo $record['Id']; ?>"
                        <span class="glyphicon glyphicon-edit"></span> Edit</a> 
                    <a href="deletedegree.php?id=<?php echo $record['Id']; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
        <?php } ?>
            
    </table>
    </div>
</div>