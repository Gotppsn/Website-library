<?php
    include('connect_db.php');
   
    
    $sql = "UPDATE student
    SET std_id = '".$_POST['std_id']."',
        std_nm = '".$_POST['std_nm']."',
        std_address = '".$_POST['std_address']."',
        std_type = '".$_POST['std_type']."',
        std_group = '".$_POST['std_group']."'
        WHERE std_id = '".$_POST['std_id']."'";
    $result = mysqli_query($conn,$sql);

    
if($result){

    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false, 'error'=>mysqli_error($conn)));

}