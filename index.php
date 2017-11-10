<?include("login.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Secret Diary</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">

    <style type="text/css">
     html,body{
            width: 100%;
            height: 100%;
            padding-top: 30px;
        }
        body{
            background-image:url("https://c2.staticflickr.com/4/3547/3544443947_b29157cd0e_o.jpg");
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;

        }
        h1,h4{
          text-align: center;
          padding: 5px;

        }
        h1{
          color: #5fdce8;
          font-family: 'Lobster', cursive;
        }
        h4{
          font-family: 'Lobster', cursive;
          color:#1e5e09;
          font-size: 140%;
        }
        h5{
          color: #5e2525;
          font-size: 120%;
        }
         #alertbox{
            margin-top: 20px;
            display: none;
            
        }
        #alertbox2{
            margin-top: 20px;
            display: none;
        }
    </style>
    
  </head>
  <body>
  <div class="navbar navbar-default navbar-fixed-top">
     <div class="navbar-inner">
    <div class="container">
   
      <div class="navbar-header">
        <a href="" class="navbar-brand">My Secret Diary</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      </div>
      <div class="collapse navbar-collapse">
        <form class="navbar-form navbar-right" method="post">
          <div class="form-group">
                <label for="loginemail">Email</label>
                <input type="text" name="loginemail" class="form-control" placeholder="Your Email" value="<?php echo addslashes($_POST['email'])?>">
          </div>
          <div class="form-group">
                <label for="loginpassword">Password</label>
                <input type="Password" name="loginpassword" class="form-control" placeholder="Your Password">
          </div>
          <input type="submit" name="submit" value="Log In" class="btn btn-success">             

        </form>
      </div>
      </div>
    </div>
  </div>
 <div class="container contentContainer">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <h1>My Secret Diary</h1>
            <h4>Carry your Diary anywhere</h4>
             <?php

            if($error)
            {
              echo '<div class="alert alert-warning">'.$error.'</div>';
            }
            if($message)
            {
              echo '<div class="alert alert-success">'.$message.'</div>';
            }

           ?>
            <h5>Interested? Sign Up below</h5>

            <form method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo addslashes($_POST['name'])?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Your Email" value="<?php echo addslashes($_POST['email'])?>">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="Password" name="password" class="form-control" placeholder="Your Password">
              </div>
              <div class="form-group">
                <label for="repassword">Re-enter password</label>
                <input type="Password" name="repassword" class="form-control" placeholder="Re-enter Password">
              </div> 
              <input type="submit" name="submit" value="Sign Up" class="btn btn-danger">             
            </form>
                
            </div>

        </div>
    </div>
    
 
   

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
        $(".contentContainer").css("min-height",$(window).height()); 
        
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
