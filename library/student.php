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
                            </a></div>
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