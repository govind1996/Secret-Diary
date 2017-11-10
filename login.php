<?php
session_start();
include("connection.php");
    if($_GET['logout']==1 AND $_SESSION['id'])
    {
      session_destroy();
      $message="You have logged out successfully.Have a nice day!";
    }
    if ($_POST['submit']=="Sign Up") {
      if(!$_POST['email'])
        $error.="<br>Please enter your email";
      else
      {
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
          $error.="<br>Please enter valid email";
      }
      if(!$_POST['password'])
        $error.="<br>Please enter passsword";
      else
      {
        if(strlen($_POST['password'])<8)
          $error.="<br>Password should contain 8 or more characters";
        if(!preg_match('`[A-Z]`', $_POST['password']))
          $error.="<br>Password should contain at least one capital letter";
      }
        if($error)
        {
         $error="There were some errors  during Sign Up:".$error;
        }      
      else
      {
        $email=mysqli_real_escape_string($link,$_POST['email']);
        $query="SELECT * FROM `example` WHERE email='$email'";
        $result=mysqli_query($link,$query);
        $results=mysqli_num_rows($result);
        if($results)
          $error="Your email is already registered.Do you want to sign up?";
        else
        {
          $query="INSERT INTO `example` (email,password) VALUES('$email','".md5(md5($_POST['email']).$_POST['password'])."')";
          mysqli_query($link,$query);
          $_SESSION['id']=mysqli_insert_id($link);
          echo '<script type="text/javascript">';
          echo 'window.location.href="mainpage.php";';
          echo '</script>';
        }
      }
    }
    if($_POST['submit']=="Log In")
    {
        $email=mysqli_real_escape_string($link,$_POST['loginemail']);
        $password=md5(md5($_POST['loginemail']).$_POST['loginpassword']);
        $query="SELECT * FROM `example` WHERE email='$email' AND password='$password'";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        if($row)
        {
          
            $_SESSION['id']=$row['id'];
          echo '<script type="text/javascript">';
          echo 'window.location.href="mainpage.php";';
          echo '</script>';
        }
        else
        {
          $error="We could not find user with that email and password.Please try again";
        }
    }
    ?>
