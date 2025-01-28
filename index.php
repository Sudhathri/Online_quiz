<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OQMS</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="Admincss/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" href="image/logo.jpg" type="image/x-icon">
  <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value;
      var letters = /^[A-Za-z]+$/;
      if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
      }
      var z = document.forms["form"]["college"].value;
      if (z == null || z == "") {
        alert("college must be filled out.");
        return false;
      }
      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address.");
        return false;
      }
      var a = document.forms["form"]["password"].value;
      if (a == null || a == "") {
        alert("Password must be filled out");
        return false;
      }
      if (a.length < 5 || a.length > 25) {
        alert("Passwords must be 5 to 25 characters long.");
        return false;
      }
      var b = document.forms["form"]["cpassword"].value;
      if (a != b) {
        alert("Passwords must match.");
        return false;
      }
    }
  </script>
</head>
<body>
  <!-- Header -->
  <div class="container-fluid row">
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
        <li class="nav-item"><a href="#" aria-current="page">Home</a></li>
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
              <img src="image/RAVI REDDY.jpg" width=100 height=100 alt="RAVI" class="img-rounded">
            </div>
            <div class="col-md-5 developer">
              <a href="#"  title="Find on Facebook" class="developer">K.RAVI PRAKASH REDDY</a>
              <h4  class="title1 developer">6309293948</h4>
              <h4 class="developer">raviprakashreddy2004@gmail.com</h4>
              <h4 class="developer">web technology</h4>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-md-4">
              <img src="image/yashwanth.jpg" width=100 height=100 alt="yashwanth" class="img-rounded">
            </div>
            <div class="col-md-5 developer">
              <a href="#"  title="Find on Facebook" class="developer">M.YASHWANTH SAI</a>
              <h4  class="title1 developer">8247238271</h4>
              <h4 class="developer">yashwanthsai_mannem@gmail.com</h4>
              <h4 class="developer">web technology</h4>
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

  <!-- bg-image/singup form -->
  <div class="bg1">
    <div class="row" style="margin:0px">
      <div class="col-md-7"></div>
      <div class="col-md-4 panel">
        <!-- sign in form begins -->
        <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
          <fieldset>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="gender"></label>
              <div class="col-md-12">
                <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md">
                  <option value="Male">Select Gender</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="college" name="college" placeholder="Enter your school/college name" class="form-control input-md" type="text">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label title1" for="email"></label>
              <div class="col-md-12">
                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="mob"></label>
              <div class="col-md-12">
                <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="password"></label>
              <div class="col-md-12">
                <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">

              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12control-label" for="cpassword"></label>
              <div class="col-md-12">
                <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">

              </div>
            </div>
            <?php if (@$_GET['q7']) {
              echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
            } ?>
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-12 control-label" for=""></label>
              <div class="col-md-12">
                <input type="submit" class="sub" value="sign up" class="btn btn-primary" />
              </div>
            </div>

          </fieldset>
        </form>
      </div><!--col-md-6 end-->
    </div>
  </div>
  </div><!--container end-->

  <!--Footer start-->
  <div class="footer-basic">
    <footer>
      <p class="copyright">Copy Right © Online Quiz System 2024</p>
    </footer>
  </div>
  <!--footer end-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.height = "0%";
    }
  </script>
</body>

</html>