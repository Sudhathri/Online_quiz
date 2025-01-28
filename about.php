<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title> About </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="Admincss/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="icon" href="image/logo.jpg" type="image/x-icon">
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body id="about-body" style="margin: 0; padding: 0;">
  <!-- Header -->
  <div class="container-fluid row" id="header">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-2">
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
              <img src="image/RAVI REDDY.jpg" width=100 height=100 alt="uzair" class="img-rounded">
            </div>
            <div class="col-md-5 developer">
              <a href="#"  title="Find on Facebook" class="developer">RAVI PRAKASH REDDY K</a>
              <h4  class="title1 developer">+91 6309293948</h4>
              <h4 class="developer">raviprakashreddy20045@gmail.com</h4>
              <h4 class="developer">Web Technology Project</h4>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-md-4">
              <img src="image/yash1.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
            </div>
            <div class="col-md-5 developer">
              <a href="#"  title="Find on Facebook" class="developer">YASWANTH SAI</a>
              <h4  class="title1 developer">+91 123456789</h4>
              <h4 class="developer">YASH@gmail.com</h4>
              <h4 class="developer">Web Technology Project</h4>
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
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- OQMS-img -->
  <div class="container my-5">
    <div class="row">
      <div class="col about-bg">
        <!-- <img src="image/logo.jpg" alt="" class="img-fluid" width="1200px" height="700px" > -->
      </div>
    </div>
  </div>

  <!-- Our Mission -->
  <div class="container my-5">
    <h1 class="text-center"><b>Our Mission</b></h1>
    <p>
      The mission of an online quiz management system is to provide a platform that allows educators and administrators to create, manage, and deliver quizzes and assessments to students in an efficient and effective manner. The system should be designed to simplify the quiz creation process, automate grading, and provide insights into student performance through analytics and reporting. <br><br>
      In addition to providing a seamless user experience for educators and students, an online quiz management system should also prioritize data security and privacy. It should adhere to industry standards for data protection and ensure that student information is kept confidential. <br><br>
      Ultimately, the mission of an online quiz management system is to support student learning and academic success by providing educators with the tools they need to create and deliver high-quality assessments, while also giving students the opportunity to practice and demonstrate their knowledge in a digital environment.
    </p>
  </div>

  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h1><b>We Make it work with and for you.</b></h1>
      </div>
     
    </div>
  </div>
  <!-- Our Patners -->
  <div class="container my-5  text-center">
    <h1><b>Our Partners</b></h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 my-4  mx-5 px-5" style="display: flex; justify-content: space-between;">
      <div class="col">
        <div class="card h-100">
          <img src="./image/aqsa.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ACHSAH HIMAVARSHA</h5>
            <p class="card-text"> Front-End Designer (HTML AND CSS).</p>
            <P>Worked on the design and layout part</P>
            <a href="contact.php" class="btn btn-info">Contact Us</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="image/yashwanth.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">M.YASHWANTH SAI</h5>
            <p class="card-text">JAVA DEVELOPER (JAVA SCRIPT)</p>
            <P> Worked with java functionality admin log in as pop up</P>
            <a href="contact.php" class="btn btn-info">Contact Us</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="image/RAVI REDDY.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">K.RAVI PRAKSH REDDY</h5>
            <p class="card-text">BACKEND DEVELOPER .</p>
            <p>worked with database and backend connections in php</p>
            <a href="contact.php" class="btn btn-info">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Footer start-->
  <div class="footer-basic footer-fixed">
    <footer>
      <p class="copyright">Copy Right © Online Quiz systeam 2024</p>
    </footer>
  </div>
  <!--footer end-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
