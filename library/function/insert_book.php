<?php
    include('connect_db.php');
    $sql = "INSERT INTO `book` ( `bk_nm`, `bk_wnm`, `bk_price`, `bk_cnm`) 
	VALUES (
 
	'".$_POST['bk_nm']."', 
    '".$_POST['bk_wnm']."', 
    '".$_POST['bk_price']."', 
    '".$_POST['bk_cnm']."'
	)";

    $result = mysqli_query($conn,$sql);
// $nom = mysqli_num_rows($result);
if($result){
    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false));

}

