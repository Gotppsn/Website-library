<?php
    include('connect_db.php');
    $sql = "INSERT INTO `student` (`std_id`, `std_nm`, `std_address`, `std_type`, `std_group`) 
	VALUES (
 
	'".$_POST['std_id']."',
	'".$_POST['std_nm']."', 
    '".$_POST['std_address']."', 
    '".$_POST['std_type']."', 
    '".$_POST['std_group']."'
	)";

    $result = mysqli_query($conn,$sql);
// $nom = mysqli_num_rows($result);
if($result){
    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false));

}

