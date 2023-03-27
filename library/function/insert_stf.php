<?php
    include('connect_db.php');
    $sql = "INSERT INTO `staff` (`stf_id`, `stf_pass`, `stf_name`, `stf_address`, `stf_ph`) 
	VALUES (
 
	'".$_POST['stf_id']."',
	'".$_POST['stf_pass']."', 
    '".$_POST['stf_name']."', 
    '".$_POST['stf_address']."', 
    '".$_POST['stf_ph']."'
	)";

    $result = mysqli_query($conn,$sql);
// $nom = mysqli_num_rows($result);
if($result){
    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false));

}

