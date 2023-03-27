<?php
    include('connect_db.php');
   
    
    $sql = "UPDATE staff
    SET stf_id = '".$_POST['stf_id']."',
        stf_pass = '".$_POST['stf_pass']."',
        stf_name = '".$_POST['stf_name']."',
        stf_address = '".$_POST['stf_address']."',
        stf_ph = '".$_POST['stf_ph']."'
        WHERE stf_id = '".$_POST['stf_id']."'";
    $result = mysqli_query($conn,$sql);

    
if($result){

    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false, 'error'=>mysqli_error($conn)));

}