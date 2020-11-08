<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> Sign-Up/Login </title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/signUp.css">

</head>

<body>

  <div class="form">
    <img src="img/logo-b.png" alt="logo" class="logo">

    <div class="tab-content">
      <div id="signup">

        <form method="post" action="register.php">

          <?php include('errors.php'); ?>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="first_name" value="<?php echo $firstname; ?>">
            </div>

            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="last_name" value="<?php echo $lastname; ?>">
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" value="<?php echo $email; ?>">
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password_1">
          </div>

          <div class="field-wrap">
            <label>
            Confirm password<span class="req">*</span>
            </label>
            <input type="password" name="password_2">
          </div> 
          <button type="submit" class="btn button button-block" name="reg_user">Create Account</button>
          <!-- <input type="submit" class="button button-block" name="submit" value="Create Account"> -->
          <!-- <button type="submit" class="button button-block"/>Get Started</button> -->
          <p class="tab">Already have an account? <a href="#login">Log In</a></p>
        </form>

      </div>


      <div id="login">

        <form action="register.php" method="post">
        <?php include('errors.php'); ?>
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>

          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->

          <button class="button button-block" name="login_user">Log In</button>
          <p class="tab">Don’t have an account? <a href="#signup">Sign Up</a></p>
        </form>

      </div>

    </div><!-- tab-content -->

  </div> <!-- /form -->
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/script.js"></script>

</body>

</html>