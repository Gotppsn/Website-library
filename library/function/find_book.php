<?php
    include('connect_db.php');

    //$sql = 'SELECT * FROM `regform` WHERE `name` = '.$_POST['name'];

    $bk_id = $_POST['bk_id'];
    $sql = "SELECT * FROM `book` WHERE `bk_id` = '".$bk_id."'"; 



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

