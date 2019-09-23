<!DOCTYPE html>
<html lang="en">
<head>
  <title>chatcamp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <style>
      .navbar-inverse {
            background-color: #8f2694;
            border-color: #c82bd0;
        }
        .nav-top{
            background-color: #8f2694;
            font-family: Abel;
            bottom: 0px;
            position: fixed;
            width: 100%;
            color: white;
            font-weight: regular;
            font-size: 18px;
            padding: 10px;
            z-index: 99999;
          }
        .bot_mes{
            padding:0px 7px;
        }
        .login-form {
          width: 385px;
          margin: 30px auto;
        }
          .login-form form {        
            margin-bottom: 15px;
              background: #f7f7f7;
              box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
              padding: 30px;
          }
          .login-form h2 {
              margin: 0 0 15px;
          }
          .form-control, .login-btn {
              min-height: 38px;
              border-radius: 2px;
          }
          .input-group-addon .fa {
              font-size: 18px;
          }
          .login-btn {
              font-size: 15px;
              font-weight: bold;
          }
        .social-btn .btn {
          border: none;
              margin: 10px 3px 0;
              opacity: 1;
        }
          .social-btn .btn:hover {
              opacity: 0.9;
          }
        .social-btn .btn-primary {
              background: #507cc0;
          }
        .social-btn .btn-info {
          background: #64ccf1;
        }
        .social-btn .btn-danger {
          background: #df4930;
        }
          .or-seperator {
              margin-top: 20px;
              text-align: center;
              border-top: 1px solid #ccc;
          }
          .or-seperator i {
              padding: 0 10px;
              background: #f7f7f7;
              position: relative;
              top: -11px;
              z-index: 1;
          }   
  </style>
  <script>
       function myfun1(){
        document.getElementById("back").style.backgroundColor = "#F5FFFA";
       }
       function myfun2(){
        document.getElementById("back").style.backgroundColor = "#EEE8AA";
       }
       function myfun3(){
        document.getElementById("back").style.backgroundColor = "#CD5C5C";
       }
  </script>  
</head>
<body id="back">

     <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a class="navbar-brand" href="#">Chatcamp</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Theme
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#" onclick="myfun1()">Theme1</a></li>
                      <li><a href="#" onclick="myfun2()">Theme2</a></li>
                      <li><a href="#" onclick="myfun3()">Theme3</a></li>
                    </ul>
                  </li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="col-xs-12 nav-top ">
           <div class="row">
              <div class="col-xs-9 bot_mes">
                <input type="text" class="form-control" placeholder="Type Your Message">
              </div>
              <div class="col-xs-3 bot_mes">
                <button class="btn btn-success form-control">Enter</button> 
              </div>
           </div>
       </div>

<div class="container-fluid">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p> 
  <img src="ezgif.com-gif-maker.gif" >
</div>


   <!----------modal------->

  <!-- Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <div class="login-form">
                <form action="logincheck.php" method="post">
                  <h2 class="text-center">Sign in</h2>   
                  <div class="form-group">
                    <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control" name="username" placeholder="Username" required="required">       
                      </div>
                  </div>
              <div class="form-group">
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" class="form-control" name="password" placeholder="Password" required="required">       
                      </div>
                  </div>        
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary login-btn btn-block">Sign in</button>
                  </div>
                  <div class="clearfix">
                      <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                      <a href="#" class="pull-right">Forgot Password?</a>
                  </div>
              <div class="or-seperator"><i>or</i></div>
                  <p class="text-center">Login with your social media account</p>
                  <div class="text-center social-btn">
                      <a href="#" class="btn btn-primary"><i class="fab fa-facebook-f"></i>&nbsp; Facebook</a>
                      <a href="#" class="btn btn-info"><i class="fab fa-twitter"></i>&nbsp; Twitter</a>
                <a href="#" class="btn btn-danger"><i class="fab fa-google"></i>&nbsp; Google</a>
                  </div>
              </form>
              <p class="text-center text-muted small">Don't have an account? <a href="#">Sign up here!</a></p>    
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-------------      *************  --------------------->
</body>
</html>