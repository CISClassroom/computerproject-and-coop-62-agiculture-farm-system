<!DOCTYPE html>
<html>
<title>แก้ไขข้อมูลโควตาผัก</title>
<?php
include("navbar_tot.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="\Farm\assets\bootstrap\dist\css\glyphicon.css">
    <link rel="stylesheet" type="text/css" href="\Farm\assets\bootstrap\dist\css\style.css">
    <link rel="stylesheet" href="\Farm\assets\bootstrap\dist\css\bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link href="/Farm/css/jquery.datetimepicker.css" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
    <link href="/Farm/css/backtotop.css" rel="stylesheet">
    <link href="/Farm/css/table_overtext.css" rel="stylesheet">
    <link href="/Farm/css/fonts.css" rel="stylesheet">
 
  </head>
<br><br>
    <?php 
     include('connection.php');

    $quota_id = $_GET["quota_id"];
    $query = "SELECT * FROM quota WHERE quota_id = '$quota_id'";
    $res = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($res)){
    ?>
    <form action="./quota_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="quota_id" value="<?php echo $quota_id;?>">
        <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <h3 style="text-align:center;">แก้ไขข้อมูลโควต้า</h3><br>
            <div class="container">
          <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
            <div class="form-row">
            <div class="w3-row-padding">
            <div class="w3-half">
            <label for="lname">ชื่อโควตา</label><br>
            <input type="text" name="quota_name" class="form-control" value="<?php echo $row["quota_name"]?>" size="25" placeholder="กรุณากรอกชื่อโควตา"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกชื่อโควตา!
                   </div>
             </div>

             <div class="w3-half">
            <label for="lname">วันที่</label><br>
            <input type="date" name="quota_date" class="form-control" value="<?php echo $row["quota_date"]?>" size="25" placeholder=""onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกวันที่!
                   </div>
             </div>
        
             <div class="w3-half">
            <label for="lname">ลูกค้า</label><br>
            <input type="text" name="quota_customer" class="form-control" value="<?php echo $row["quota_customer"]?>" size="25" placeholder="กรุณากรอกลูกค้า"onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกลูกค้า!
                   </div>
             </div>
       
       
             <div class="w3-half">
            <label for="lname">วันที่ต้องการผลผลิต</label><br>
            <input type="date" name="quota_need" class="form-control" value="<?php echo $row["quota_need"]?>" size="25" placeholder=""onkeypress="not_number(event)" required>
            <div class="invalid-feedback">
                      กรุณากรอกวันที่ต้องการผลผลิต
                   </div>
             </div>
             </div>
             </div>
             <br><br>
             <div class="float-sm-right">
            <div class="form-row"> 
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="submit" value="Edit Now" onclick="if(confirm('ยืนยันการบันทึกข้อมูล?')) return true; else return false;"><h5>บันทึก</h5></button>
            <a class="btn btn-danger" href="javascript:history.back()"role="button" onclick="if(confirm('ต้องการยกเลิก?')) return true; else return false;"><h5>ยกเลิก</h5></a>
  </div>
</div>
</div>
    
    <?php
    }
    ?>
</body>

</html>
<br><br><br><br><br><br>