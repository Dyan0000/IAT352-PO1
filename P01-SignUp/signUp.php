<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Sign-Up/Login </title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./signUp.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
      <img src="img/logo.png" alt="logo" class="logo">   
      
      <!-- <ul class="tab-group"> -->
        <!-- <li class="tab active"><a href="#signup">Sign Up</a></li> -->
        <!-- <li class="tab"><a href="#login">Log In</a></li> -->
      <!-- </ul> -->
      
      <div class="tab-content">
        <div id="signup">   
          
          <form method="get" action="signUpProcess.php">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="firstName" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lastName" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"  name="emailAddress" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"  name="password"/>
          </div>
          <input type="submit" class="button button-block" name="submit" value="Create Account">
          <!-- <button type="submit" class="button button-block"/>Get Started</button> -->
          <p class="tab">Already have an account? <a href="#login">Log In</a></p>
          </form>

        </div>
        
        <div id="login">   
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          <p class="tab">Don’t have an account? <a href="#signup">Sign Up</a></p>
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
