<?
session_start();
include("connection.php");
if(!isset($_SESSION['id'])){
   header("Location:login.php");
}
$query="SELECT diary FROM example WHERE id='$sessionid' LIMIT 1";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
$diary=$row['diary'];

?>
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
    <div class="container">
   
      <div class="navbar-header pull-left">
        <a href="" class="navbar-brand">My Secret Diary</a>
        
      </div>
      <div class="pull-right">
        <ul class="navbar-nav nav">
          <li><a href="index.php?logout=1">Log Out</a></li>
        </ul>
      </div>
   </div>

  </div>
 <div class="container contentContainer">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            
              <textarea class="form-control"><?php echo $diary ?></textarea>

            </div>

        </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(".contentContainer").css("min-height",$(window).height()); 
        $("textarea").css("height",$(window).height()-70); 
        $("textarea").keyup(function(){
          $.post("updatediary.php",{diary:$("textarea").val()});
        });
    </script>
  </body>
</html>
