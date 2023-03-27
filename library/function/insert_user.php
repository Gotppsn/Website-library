<?php
    include('connect_db.php');
    $sql = "INSERT INTO `user` (`id_user`, `password`, `fullname`, `address`, `type`, `group`, `phone`) 
	VALUES (
 
	'".$_POST['id_user']."',
	'".$_POST['password']."', 
    '".$_POST['fullname']."', 
    '".$_POST['address']."', 
    '".$_POST['type']."', 
    '".$_POST['group']."', 
    '".$_POST['phone']."'
	)";

    $result = mysqli_query($conn,$sql);
// $nom = mysqli_num_rows($result);
if($result){
    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false));

}

