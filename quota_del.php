<?php
     include('connection.php');

    $quota_id = $_GET["quota_id"];
    
    $query = "DELETE FROM quota WHERE quota_id='$quota_id'";
    mysqli_query($con,$query);

    ?>
       <script>history.go(-1);
</script>
