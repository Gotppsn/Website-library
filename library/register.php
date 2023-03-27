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
                        <div class="list-group list-group-flush"> <a data-toggle="tab" href="#menu2" id="tab2" class="tabs list-group-item active1">
                                <div class="list-div my-2">
                                    <div class="fa fa-qrcode"></div> &nbsp;&nbsp; Register
                                </div>
                            </a> 
                
                          </div>
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

                            <!-- Add book -->
                            <div id="menu2" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Register</h3>

                                            <form onsubmit="event.preventDefault()">
                                            
                                            <div class="row">
                                                <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="id_user" placeholder="Student id"> <label>STUDENT ID</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                <div class="col-12">
                                                        <div class="input-group"> <input type="password" id="password" placeholder="Password"> <label>PASSWORD</label> </div>
                                                    </div>
                                                </div>

                                                 <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="fullname" placeholder="Student name"> <label>STUDENT NAME</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="address" placeholder="Address"> <label>ADDRESS</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="type" placeholder="Type"> <label>TYPE</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="group" placeholder="Unit"> <label>GROUP</label> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" id="phone" placeholder="Unit"> <label>PHONE</label> </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12"> <input type="button" onclick="insert_user()" value="Register" class="btn btn-success placeicon"> </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12"><center> <a href="index.php" type="button" class="btn btn-success placeicon"> Login </a></center> </div>
                                                </div><br>

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
    })
</script>

<script src="js/main.js"></script>
<script src="js/user.js"></script>
<script src="js/register.js"></script>
</body>
</html>