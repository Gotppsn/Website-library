<?php
    include('connect_db.php');
    $sql = "INSERT INTO `booked` (`std_id_booked`, `book_id_booked`, `dated_booked`, `stf_booked`) 
	VALUES (
 
	'".$_POST['std_id_booked']."',
	'".$_POST['book_id_booked']."', 
    '".$_POST['dated_booked']."', 
    '".$_POST['stf_booked']."'
	)";

    $result = mysqli_query($conn,$sql);
// $nom = mysqli_num_rows($result);
if($result){
    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false));

}

