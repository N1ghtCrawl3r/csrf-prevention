<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login.css">
  <title>Login</title>
</head>

<body>
  <div class="main">
    <p class="sign" align=center>Sign in</p>
    <form class="log-form" method='POST' action='login.php'>
      <input class="uname" type="text" name='email' placeholder="Username" required>
      <input class="pwd" type="password" name='password' placeholder="Password" required><span
        class="fas fa-camera"></span>
      <input type="submit" class="submit" value="Log In" name="submit">
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
    </form>
  </div>
</body>


</html>

<?php
    if(isset($_POST['submit'])) {
      user_login();
    }
?>

<?php
    function user_login()
    {
        $my_email = 'jona@gmail.com';
        $my_password = 'yolo';
        $email_in = $_POST['email'];
        $password_in = $_POST['password'];
        if(($email_in == $my_email)&&($password_in == $my_password)) {
          session_start();
          $session_id = session_id();
          setcookie('SesT',$session_id,time()+60*60*24*365,'/');
          
          header("Location: Feedback.php");
          
      }
      else{
          echo "<script> alert('Invalid Credentials, Please try again.') </script>";
      }
  }
 
?>