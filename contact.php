<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title> Team-Contact Us </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="Admincss/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="icon" href="image/logo.jpg" type="image/x-icon">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <html>

<body>
    <!-- Header -->
    <div class="container-fluid row ">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-2 ">
            <div class="col">
                <a href="index.php" class="d-flex align-items-center mb-2 px-5 mb-lg-0 text-white text-decoration-none">
                    <img src="image/logo.jpg" alt="" width="80px" height="80px">
                </a>
            </div>
            <div class="col">
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <a href="index.php">Home</a>
                        <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
                        <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
                        <a href="about.php">About Us</a>
                        <a href="feedback.php">Feedback</a>
                    </div>
                </div>
            </div>

            <span style="font-size:30px;cursor:pointer" id="navicon" onclick="openNav()">&#9776;</span>
            <ul class="nav nav-pills pt-4">
                <li class="nav-item"><a href="index.php" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" data-toggle="modal" data-target="#developers">Developer</a></li>
                <li class="nav-item"><a href="#" data-toggle="modal" data-target="#login">Admin Login</a></li>
                <li class="nav-item"><a href="about.php">About Us</a></li>
                <li class="nav-item"><a href="feedback.php">Feedback</a></li>
            </ul>
            <div class="text-end" id="navbtn">
                <button type="button" data-toggle="modal" data-target="#myModal" class="nav-btn" id="nav-btn">Login</button>
            </div>
            <!--sign in modal start-->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content title1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                                <fieldset>


                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email"></label>
                                        <div class="col-md-6">
                                            <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
                                        </div>
                                    </div>


                                    <!-- Password input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="password"></label>
                                        <div class="col-md-6">
                                            <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
                                        </div>
                                    </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="button-login ">Log in</button>
                            </fieldset>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!--sign in modal closed-->
        </header>
    </div>
    <!-- Modal For Developers-->
    <div class="modal fade title1" id="developers">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
                </div>

                <div class="modal-body">
                    <p>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="image/yash.jpg" width=100 height=100 alt="uzair" class="img-rounded">
                        </div>
                        <div class="col-md-5 developer">
                            <a href="#" title="Find on Facebook" class="developer">K.RAVIPRAKASH REDDY</a>
                            <h4 class="title1 developer">6309293948</h4>
                            <h4 class="developer">raviprakashreddy2004@gmail.com</h4>
                            <h4 class="developer">web technology project</h4>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-4">
                            <img src="image/RAVI REDDY.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
                        </div>
                        <div class="col-md-5 developer">
                            <a href="#" title="Find on Facebook" class="developer">M.Yashwanth sai</a>
                            <h4 class="title1 developer">8247238271</h4>
                            <h4 class="developer">yash@gamil.com</h4>
                            <h4 class="developer">web technology project</h4>
                        </div>
                    </div>
                    </p>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Modal for admin login-->
    <div class="modal fade" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" method="post" action="admin.php?q=index.php">
                                <div class="form-group">
                                    <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
                                </div>
                                <div class="form-group" align="center">
                                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- ContactUs-Form -->
    <div class="container  my-5" id="contact-container">
        <form action="">
            <div class="row">
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name" id="firstname">
                </div>
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" id="lastname">
                </div>
            </div><br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter Email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="Check">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-info" onclick="whatsapp();">Submit</button>
        </form>
    </div>
    <!--Footer start-->
    <div class="footer-basic footer-fixed">
        <footer>
            <p class="copyright">Copy Right © Online Quiz Management System 2024</p>
        </footer>
    </div>
    <!--footer end-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script>
        function whatsapp() {
            var firstname = document.getElementById("firstname").value;
            var lastname = document.getElementById("lastname").value;
            var Email = document.getElementById("Email").value;
            var Password = document.getElementById("Password").value;
            var message = document.getElementById("message").value;
            var Check = document.getElementById("Check").value;
            var url = "https://wa.me/+923077768525?text&chat=" +
                "firstname : " + firstname + "%0a" +
                "lastname : " + lastname + "%0a" +
                "Email : " + Email + "%0a" +
                "Password : " + Password + "%0a" +
                "message : " + message + "%0a" +
                "Check : " + Check;
            window.open(url, '_blank').focus();
        }
    </script>
</body>

</html>