<?php
    include('connect_db.php');
   
    $sql = "DELETE FROM `book` WHERE `bk_id` ='".$_POST['bk_id']."'";

    $result = mysqli_query($conn,$sql);

if($result){

    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false));

}