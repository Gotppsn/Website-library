<?php
    include('connect_db.php');
   
    
    $sql = "UPDATE book
    SET bk_id = '".$_POST['bk_id']."',
        bk_nm = '".$_POST['bk_nm']."',
        bk_wnm = '".$_POST['bk_wnm']."',
        bk_price = '".$_POST['bk_price']."',
        bk_cnm = '".$_POST['bk_cnm']."'
        WHERE bk_id = '".$_POST['bk_id']."'";
    $result = mysqli_query($conn,$sql);

    
if($result){

    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false, 'error'=>mysqli_error($conn)));

}