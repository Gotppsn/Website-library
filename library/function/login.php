<?php
session_start();
if(!session_is_registered(id_user)){
header("location:staff.php");
}
else{
header ("location:index.php");
}
?>