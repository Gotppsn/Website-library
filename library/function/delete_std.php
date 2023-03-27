<?php
    include('connect_db.php');
   
    $sql = "DELETE FROM `student` WHERE `std_id` ='".$_POST['std_id']."'";

    $result = mysqli_query($conn,$sql);

if($result){

    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false));

}