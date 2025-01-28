<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title> FEEDBACK </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="Admincss/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="icon" href="image/logo.jpg" type="image/x-icon">
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <!--alert message-->
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <!--alert message end-->

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
      <div class="col-5">
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
        <span style="font-size:30px;cursor:pointer" id="navicon" onclick="openNav()">&#9776;</span>
        <ul class="nav nav-pills pt-4">
          <li class="nav-item"><a href="index.php" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="#" data-toggle="modal" data-target="#developers">Developer</a></li>
          <li class="nav-item"><a href="#" data-toggle="modal" data-target="#login">Admin Login</a></li>
          <li class="nav-item"><a href="about.php">About Us</a></li>
          <li class="nav-item"><a href="feedback.php">Feedback</a></li>
        </ul>
      </div>
      <div class="col">
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
      </div>
    </header>
  </div>
  <!--header end-->

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
              <img src="image/M.Uzair Zulfiqar.jpg" width=100 height=100 alt="uzair" class="img-rounded">
            </div>
            <div class="col-md-5 developer">
              <a href="#"  title="Find on Facebook" class="developer">RAVI PRAKASH REDDY</a>
              <h4  class="title1 developer">+923077768525</h4>
              <h4 class="developer">uzairmian395@gmail.com</h4>
              <h4 class="developer">Final Year Project</h4>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-md-4">
              <img src="image/fuyiz.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
            </div>
            <div class="col-md-5 developer">
              <a href="#"  title="Find on Facebook" class="developer">M.Fuyiz Khan</a>
              <h4  class="title1 developer">+923017267329</h4>
              <h4 class="developer">fuyizkhan@gmail.com</h4>
              <h4 class="developer">Final Year Project</h4>
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

  <div class="bg1">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 panel" style="background-image:url(image/bg1.jpg); min-height:430px;">
        <h2 align="center" style="font-family:'typo'; color:#000066">FEEDBACK/REPORT A PROBLEM</h2>
        <div style="font-size:14px">
          <?php if (@$_GET['q']) echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;' . @$_GET['q'] . '</span>';
          else {
            echo ' 
You can send us your feedback through e-mail on the following e-mail id:<br />
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<a href="raviprakashreddy2004@gmail.com" style="color:#000000">raviprakashreddy2004@gmail.com</a><br /><br />
</div><div class="col-md-1"></div></div>
<p>Or you can directly submit your feedback by filling the enteries below:-</p>
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>E-Mail address:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
</div>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>';
          } ?>
        </div><!--col-md-6 end-->
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>
  </div><!--container end-->

  <!--Footer start-->
  <div class="footer-basic">
    <footer>
      <p class="copyright">Copy Right © Online Quiz  System 2024</p>
    </footer>
  </div>
  <!-- Footer-End -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>