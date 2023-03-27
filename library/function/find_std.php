<?php
    include('connect_db.php');

    //$sql = 'SELECT * FROM `regform` WHERE `name` = '.$_POST['name'];

    $std_id = $_POST['std_id'];
    $sql = "SELECT * FROM `student` WHERE `std_id` = '".$std_id."'"; 



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

