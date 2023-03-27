<?php session_start();?>
<?php 
 
if (!$_SESSION["id_user"]){
 
	  Header("Location: index.php");
 
}else{?>

<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '', 'library');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM book,booking,booked";
    $sql1 = "SELECT * FROM booking";
    $sql2 = "SELECT * FROM booked";
    $result = $connect->query($sql);
    $result1 = $connect->query($sql1);
    $result2 = $connect->query($sql2);

?>
<!doctype html>
<html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Book Shop</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <link rel="stylesheet" type="text/css" href="css/style.css">
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container-fluid px-0" id="bg-div">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-12">
            <div class="card card0">
                <div class="d-flex" id="wrapper">
                    <!-- Menu -->
                    <div class="bg-light border-right" id="sidebar-wrapper">
                        <div class="sidebar-heading pt-5 pb-4"><strong>Add Book</strong></div>
                        <div class="list-group list-group-flush"> <a data-toggle="tab" href="#menu1" id="tab1" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-home"></div> &nbsp;&nbsp; Booking details
                                </div>
                            </a> <a data-toggle="tab" href="#menu2" id="tab2" class="tabs list-group-item active1">
                                <div class="list-div my-2">
                                    <div class="fa fa-qrcode"></div> &nbsp;&nbsp; Book
                                </div>
                            </a> <a data-toggle="tab" href="#menu4" id="tab4" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-qrcode"></div> &nbsp;&nbsp; Student
                                </div>
                            </a> <a data-toggle="tab" href="#menu5" id="tab5" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-qrcode"></div> &nbsp;&nbsp; Staff
                                </div>
                            </a> <a data-toggle="tab" href="#menu6" id="tab6" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-qrcode"></div> &nbsp;&nbsp; Booking
                                </div>
                            </a> <a data-toggle="tab" href="#menu7" id="tab7" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-qrcode"></div> &nbsp;&nbsp; Booked
                                </div>
                            </a> <a data-toggle="tab" href="#menu3" id="tab3" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <div class="fa fa-qrcode"></div> &nbsp;&nbsp;&nbsp; Create By
                                </div>
                            </a> </div>
                    </div> <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <div class="row pt-3" id="border-btm">
                            <div class="col-4"> <button class="btn btn-success mt-4 ml-3 mb-3" id="menu-toggle">
                                    <div class="bar4"></div>
                                    <div class="bar4"></div>
                                    <div class="bar4"></div>
                                </button> </div>
                            <div class="col-8">
                                <div class="row justify-content-right">
                                    <div class="col-12">
                                        <p class="mb-0 mr-4 mt-4 text-right">SHOP</p>
                                    </div>
                                </div>
                                <div class="row justify-content-right">
                                    <div class="col-12">
                                        <p class="mb-0 mr-4 text-right">Pay <span class="top-highlight">BOOK</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- show infomation -->
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Details For Book</h3>
                                            <form onsubmit="event.preventDefault()">
                                            <div class="container">
        <h1>ข้อมูลหนังสือ</h1>
        <table>
            <thead>
                <tr>
                    <td>รหัสหนังสือ</td>
                    <td>ชื่อหนังสือ </td>
                    <td>ชื่อผู้เขียน </td>
                    <td>สำนักพิมพ์</td>
                    <td>ราคา (บาท) </td>

                    </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['bk_id']; ?></td>
                        <td class="name"><?php echo $row['bk_nm'];?></td>
                        <td><?php echo $row['bk_wnm']; ?></td>
                        <td class="name"><?php echo $row['bk_cnm'];?></td>
                        <td><?php echo $row['bk_price']; ?></td>
                   
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        </div>                    


        <div class="container">
        <h1>ข้อมูลการยืม</h1>
        <table>
            <thead>
                <tr>
                    <td>รหัสการทำรายการ</td>
                    <td>รหัสผู้ยืม</td>
                    <td>รหัสการยืม </td>
                    <td>วันที่ยืม</td>
                    <td>วันที่คืน</td>
                    <td>รหัสผู้ให้ยืม</td>

                    </tr>
            </thead>
            <tbody>
                <?php while($row = $result1->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id_booking']; ?></td>
                        <td class="name"><?php echo $row['std_id_book'];?></td>
                        <td><?php echo $row['book_id_book']; ?></td>
                        <td class="name"><?php echo $row['date_book'];?></td>
                        <td><?php echo $row['date_booked']; ?></td>
                        <td class="name"><?php echo $row['stf_book'];?></td>
                   
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        </div>                    



        <div class="container">
        <h1>ข้อมูลการคืน</h1>
        <table>
            <thead>
                <tr>
                    <td>รหัสการทำรายการ</td>
                    <td>รหัสผู้คืน </td>
                    <td>รหัสการคืน </td>
            
                    <td>วันที่คืน</td>
                    <td>รหัสผู้ให้คืน</td>

                    </tr>
            </thead>
            <tbody>
                <?php while($row = $result2->fetch_assoc()): ?>
                    <tr>
                    <td><?php echo $row['id_booked']; ?></td>
                        <td class="name"><?php echo $row['std_id_booked'];?></td>
                        <td><?php echo $row['book_id_booked']; ?></td>
                        <td class="name"><?php echo $row['dated_booked'];?></td>
                        <td><?php echo $row['stf_booked']; ?></td>
                      
                   
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        </div>                    
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Add book -->
                            <div id="menu2" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Book Update</h3>
                                            <form onsubmit="event.preventDefault()">
                                            <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="bk_id" placeholder="Book id"> <label>BOOK ID</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="find_book()" value="Find Book to Edit" class="btn btn-success placeicon"> </div>
                                                </div>

                                            <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="bk_nm" placeholder="Book name"> <label>BOOK NAME</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="bk_wnm" placeholder="Book author name"> <label>PEN NAME</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="bk_price" placeholder="Price"> <label>PRICE</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="bk_cnm" placeholder="Publisher"> <label>PUBLISHER</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="insert_book()" value="Add Book" class="btn btn-success placeicon"> </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="edit_book()" value="Edit Book" class="btn btn-success placeicon"> </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="delete_book()" value="Delete Book" class="btn btn-success placeicon"> </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!-- Add Create by -->
                            <div id="menu3" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <h3 class="mt-0 mb-4 text-center">Panupol Sonnuam PWS.2/27 No.3</h3>
                                        <div class="row justify-content-center">
                                            <div id="qr"><img src="img/babygot.jpg" width="100%" height="300"> </div>

                                          <p>สำเนาถูกต้อง</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!-- Add Student -->
                            <div id="menu4" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Student Update</h3>
                                            
                                            <form onsubmit="event.preventDefault()">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="std_id" placeholder="Student id"> <label>STUDENT ID</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="find_std()" value="Find Book to Edit" class="btn btn-success placeicon"> </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="std_nm" placeholder="Student name"> <label>STUDENT NAME</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="std_address" placeholder="Address"> <label>ADDRESS</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="std_type" placeholder="Type"> <label>TYPE</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="std_group" placeholder="Unit"> <label>GROUP</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="insert_std()" value="Add Student" class="btn btn-success placeicon"> </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="edit_std()" value="Edit Student" class="btn btn-success placeicon"> </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="delete_std()" value="Delete Student" class="btn btn-success placeicon"> </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <!-- Add Staff -->
                            <div id="menu5" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Staff Update</h3>
                                            <form onsubmit="event.preventDefault()">
                                            <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="stf_id" placeholder="Staff ID"> <label>STAFF ID</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="find_stf()" value="Find Book to Edit" class="btn btn-success placeicon"> </div>
                                                </div>

                         

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="stf_pass" placeholder="Password"> <label>PASSWORD</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="stf_name" placeholder="Fill-name"> <label>FILL-NAME</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="stf_address" placeholder="Address"> <label>ADDRESS</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="stf_ph" placeholder="Phone number"> <label>PHONE NUMBER</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="insert_stf()" value="Add Staff" class="btn btn-success placeicon"> </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="edit_stf()" value="Edit Staff" class="btn btn-success placeicon"> </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="delete_stf()" value="Delete Staff" class="btn btn-success placeicon"> </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Booking -->
                            <div id="menu6" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Booking Update</h3>
                                            <form onsubmit="event.preventDefault()">
                                            <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="std_id_book" placeholder="Student ID"> <label>STUDENT ID</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="book_id_book" placeholder="Book ID"> <label>BOOK ID</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="date" id="date_book" placeholder="Date book"> <label>DATE BOOK</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="date" id="date_booked" placeholder="Date booked"> <label>DATE BOOKED</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="stf_book" placeholder="Staff"> <label>STAFF ID</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="insert_booking()" value="Save" class="btn btn-success placeicon"> </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Booked -->
                            <div id="menu7" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Booked Update</h3>
                                            <form onsubmit="event.preventDefault()">
                                            <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="std_id_booked" placeholder="Student ID"> <label>STUDENT ID</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="book_id_booked" placeholder="Password"> <label>BOOK ID</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="date" id="dated_booked" placeholder="Date"> <label>DATE</label> </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="stf_booked" placeholder="Staff"> <label>STAFF ID</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="insert_booked()" value="Save" class="btn btn-success placeicon"> </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'>$(document).ready(function(){
    //Menu Toggle Script
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
    
    // For highlighting activated tabs
    $("#tab1").click(function () {
    $(".tabs").removeClass("active1");
    $(".tabs").addClass("bg-light");
    $("#tab1").addClass("active1");
    $("#tab1").removeClass("bg-light");
    });
    $("#tab2").click(function () {
    $(".tabs").removeClass("active1");
    $(".tabs").addClass("bg-light");
    $("#tab2").addClass("active1");
    $("#tab2").removeClass("bg-light");
    });
    $("#tab3").click(function () {
    $(".tabs").removeClass("active1");
    $(".tabs").addClass("bg-light");
    $("#tab3").addClass("active1");
    $("#tab3").removeClass("bg-light");
    });
    $("#tab4").click(function () {
    $(".tabs").removeClass("active1");
    $(".tabs").addClass("bg-light");
    $("#tab4").addClass("active1");
    $("#tab4").removeClass("bg-light");
    });
    $("#tab5").click(function () {
    $(".tabs").removeClass("active1");
    $(".tabs").addClass("bg-light");
    $("#tab5").addClass("active1");
    $("#tab5").removeClass("bg-light");
    });
    $("#tab6").click(function () {
    $(".tabs").removeClass("active1");
    $(".tabs").addClass("bg-light");
    $("#tab6").addClass("active1");
    $("#tab6").removeClass("bg-light");
    });
    $("#tab7").click(function () {
    $(".tabs").removeClass("active1");
    $(".tabs").addClass("bg-light");
    $("#tab7").addClass("active1");
    $("#tab7").removeClass("bg-light");
    });
    })
</script>

<script src="js/main.js"></script>
<script src="js/std.js"></script>
<script src="js/book.js"></script>
<script src="js/staff.js"></script>
<script src="js/booking.js"></script>
<script src="js/booked.js"></script>
</body>
</html>
<?php }?>