<?php
    include('connect_db.php');

    //$sql = 'SELECT * FROM `regform` WHERE `name` = '.$_POST['name'];

    $stf_id = $_POST['stf_id'];
    $sql = "SELECT * FROM `staff` WHERE `stf_id` = '".$stf_id."'"; 



    $result = mysqli_query($conn,$sql);
// $nom = mysqli_num_rows($result);
if($result){
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    print json_encode($rows);
}else{
    print json_encode('nodata');

}

