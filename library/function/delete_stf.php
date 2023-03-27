<?php
    include('connect_db.php');
   
    $sql = "DELETE FROM `staff` WHERE `stf_id` ='".$_POST['stf_id']."'";

    $result = mysqli_query($conn,$sql);

if($result){

    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false));

}