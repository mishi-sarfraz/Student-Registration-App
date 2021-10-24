<?php
  require ('config1.php');
  $sql="SELECT * from degree";
  if (mysqli_query($conn,$sql)){
    $result=mysqli_query($conn,$sql);
   }
    if (mysqli_query($conn,$sql)){
    $result1=mysqli_query($conn,$sql);
   }
   $sql1="SELECT * from course";
   if (mysqli_query($conn,$sql1)){
    $result2=mysqli_query($conn,$sql1);
  }
    $sql3="SELECT * from student";
   if (mysqli_query($conn,$sql3)){
    $result3=mysqli_query($conn,$sql3);

  }

?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <form class="" method="post" action="">
            <div class="form-group">
<div class="container-fluid">
  <h1>Filters</h1>
  <!-- <p>Resize the browser window to see the effect.</p> -->
  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">Degree List :  
       <select name='dlist' id='mylist' size='1'>
        <option value="0">Select Value</option>

        <?php
        while($rec = mysqli_fetch_array($result))
        {
        echo "<option>".$rec['DName']."</option>";
        }
        ?>
      </select>
    </div>
    <div class="col-sm-4" style="background-color:lavenderblush;">Fee List :  
       <select name='flist' id='mylist' size='1'>
        <option value="0">Select Value</option>
        <?php
        while($rec = mysqli_fetch_array($result1))
        {
        echo "<option>".$rec['Fees']."</option>";
        }
        ?>
        </select>
    </div>
    <div class="col-sm-4" style="background-color:lavender;">Course:
      <select name='clist' id='mylist' size='1'>
      <option value="0">Select Value</option>
      <?php
      while($rec = mysqli_fetch_array($result2))
      {
      echo "<option>".$rec['Name']."</option>";
      }
      ?>
      </select>
    </div>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" style="align:center">
  <div class ="row">
    <table class="table table-strived table-hover">
      <thead>
      <tr>
        <td>Name</td>
        <td>Degree</td>
      </tr>
    </thead>
    <tbody>
     <?php if((isset($_POST['dlist']))||(isset($_POST['clist']))||(isset($_POST['flist']))){
                 // SELECT * FROM student JOIN degree ON student.id = degree.Id JOIN course ON course.D_id = degree.Id
                   $sql4="SELECT * FROM `student` FULLOUTER JOIN `degree` ON Degree=degree.Id ";
                   if (mysqli_query($conn,$sql4)){
                      $result4=mysqli_query($conn,$sql4);
                        while($rec4 = mysqli_fetch_array($result4))
                          {
                           if ((($_POST['dlist'])==($rec4['DName']))||(($_POST['clist'])==($rec4['Course']))||(($_POST['flist'])==($rec4['Fees'])) )                          //if($val='0'){
                              {?>
                                <tr>
                                  <td>
                                    <?php echo $rec4['Name'] ;?>
                              <td> <?php echo $rec4['DName'] ;

                            }//if
                          }//while
                }//if
              }//if
              
              ?> </td>
              

              </td>
                </tr>
              
  
  
</tbody>
</div>
</body>

