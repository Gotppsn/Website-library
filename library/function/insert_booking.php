<?php
    include('connect_db.php');
    $sql = "INSERT INTO `booking` (`std_id_book`, `book_id_book`, `date_book`, `date_booked`, `stf_book`) 
	VALUES (
 
	'".$_POST['std_id_book']."',
	'".$_POST['book_id_book']."', 
    '".$_POST['date_book']."', 
    '".$_POST['date_booked']."', 
    '".$_POST['stf_book']."'
	)";

    $result = mysqli_query($conn,$sql);
// $nom = mysqli_num_rows($result);
if($result){
    print json_encode(array('status'=>true));
}else{
    print json_encode(array('status'=>false));

}

