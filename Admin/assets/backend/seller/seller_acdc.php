<?php
    require('../../../../utility/utility.php');
    $id=get_safe_value($con,$_POST['id']);
    $status=get_safe_value($con,$_POST['status']);
    $q="update sellers set status='$status' where id='$id'";
    if(mysqli_query($con,$q)){
    echo 1;
    }else{
    echo 0;
    }
?>