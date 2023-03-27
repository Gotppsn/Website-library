<?php 
session_start();
        if(isset($_POST['id_user'])){
				//connection
                  include("connect_db.php");
				//รับค่า user & password
                  $id_user = $_POST['id_user'];
                  $password = $_POST['password'];
				//query 
                  $sql="SELECT * FROM user WHERE id_user='".$id_user."' and password='".$password."' ";
 
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
                  
                      $_SESSION["id_user"] = $row["id_user"];
                      $_SESSION["fullname"] = $row["fullname"];
                      $_SESSION["type"] = $row["type"];
                
 
                      if($_SESSION["type"]=="Student" or "Teacher"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                        Header("Location: ../student.php");
 
                      }
 
                      if ($_SESSION["type"]=="admin"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: ../staff.php");
 
                      }
 
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
 
        }else{
 
 
             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>