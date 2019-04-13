<?php
error_reporting(E_ERROR); 
  session_start(); 
  include("db_conection.php"); 
  ob_start();

  $message="";
if(count($_POST)>0) { 

$user_email=($_POST["user_email"]);
$password=($_POST["password"]);
$usertype=($_POST["usertype"]);

switch ($usertype) {
   
    case 'admin':

    $result = mysqli_query($dbcon,"SELECT * FROM admin WHERE user_email='" .$user_email. "' and Password = '". $password."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
      $_SESSION["id"] = $row['admin_id'];
      $_SESSION["user_email"] = $row['user_email'];
      header("Location: approval.php");
    } else {
      $message .= '
      <div> 
    
      <div class="alert alert-error">
    
        <a href="#" class="close" data-dismiss="alert">&times;</a>
    
        <strong>Error!</strong> Invalid Email Or Password.
    
      </div>
     </div> 
    
    ';
    }
   break;
    
  case 'seller':

    $result = mysqli_query($dbcon,"SELECT * FROM users WHERE user_email='" .$user_email. "' and Password = '". $password."' AND Position='seller' ");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
      $_SESSION["id"] = $row['user_id'];
      $_SESSION["user_email"] = $row['user_email'];
      header("Location: upload.php");
    } else {
      $message .= '
      <div> 
    
      <div class="alert alert-error">
    
        <a href="#" class="close" data-dismiss="alert">&times;</a>
    
        <strong>Error!</strong> Invalid Email Or Password.
    
      </div>
     </div> 
    
    ';
    }
   break;

  case 'buyer':

    $result = mysqli_query($dbcon,"SELECT * FROM users WHERE user_email='" .$user_email. "' and Password = '". $password."' AND Position='buyer' ");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
      $_SESSION["id"] = $row['id'];
      $_SESSION["user_email"] = $row['user_email'];
      header("Location: allproducts.php");
    } 

    else {
      $message .= '
      <div> 
    
      <div class="alert alert-error">
    
        <a href="#" class="close" data-dismiss="alert">&times;</a>
    
        <strong>Error!</strong> Invalid Username Or Password.
    
      </div>
     </div> 
    
    ';
    }
   break;
  
 }
 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sadera Online Auction</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />
      <link href="css/metro.css" rel="stylesheet">

    <link href="css/docs.css" rel="stylesheet">

    <link rel="stylesheet" href="css/custom.css">
   
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/datatables.min.js"></script>
  <style type="text/css">
 
    .marginless{
    margin-top:50px;
      }
.marginles{
    margin-top:-50px;
    background-color: maroon;
      }
    </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Sadera Online Auction</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                 <ul class="nav navbar-nav side-nav">
                    <li ><a href="buy.php">&nbsp; <i class="fa fa-truck"></i> &nbsp; &nbsp; &nbsp; Vehicles</a></li>
                    <li ><a href="furniture.php"> &nbsp; <i class="fa fa-bed"></i>&nbsp; &nbsp; &nbsp; Furniture</a></li>
                    <li><a href="computer.php">&nbsp; <i class="fa fa-desktop"></i> &nbsp; &nbsp; &nbsp;Computer Accessories</a></li>
                    
                    <li><a href="mobile.php">&nbsp; <span class='glyphicon glyphicon-phone'></span> &nbsp; &nbsp; &nbsp; Mobile Phones</a></li>
                    <li><a href="Jewellery.php">&nbsp; <i class="fa fa-life-ring"></i> &nbsp; &nbsp; &nbsp;Jewellery</a></li>
                    
                    <li><a href="arts.php">&nbsp; <i class="fa fa-clock-o"></i> &nbsp; &nbsp; &nbsp; Arts and Watches</a></li>

          
                    
                </ul>
                <ul class="nav navbar-nav navbar-left navbar-user">
                    <li ><a href="index.php" class="active">&nbsp; <span class='glyphicon glyphicon-home'></span> &nbsp;Home</a></li>
                                 <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">&nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> &nbsp;Auctions<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="todayauction.php"> Today Auction</a></li>
                            <li><a href="logout.php"> Join Auction</a></li>
                            
                        </ul>
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">&nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> &nbsp;Sell Product<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          
                            <li><a href="register.php"> For Individual</a></li>
                            <li><a href="register.php"> For Dealer</a></li>
                            <li><a href="register.php"> For Company</a></li>
                            
                        </ul>
                    </li>
                    <li ><a href="login.php"> &nbsp; <span class='glyphicon glyphicon-share'></span> &nbsp; Live Demo</a></li>
                                <li class="active"><a href="login.php">&nbsp; <span class='glyphicon glyphicon-log-in'></span> &nbsp;Login</a></li>
                                
                                <li><a href="contact.html">&nbsp; <span class='glyphicon glyphicon-earphone'></span> &nbsp;Contact Us</a></li>

                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
                    
                </ul>
            </div>
        </nav>

<div id="page-wrapper">

       
      
      
          <br />
        

<div class="container-fluid marginless">
          <div class="row">
          <div class="col-md-3">
          </div>           
           <div class="col-md-6">
    <div class="login-form padding20 block-shadow contactback">
        <form action="" method="post" name="loginform">
            <h1 class="text-light">Sadera Auction System </h1>
            <hr class="thin"/>
            <div class="col-lg-12 error text-center"><?php echo $message; ?></div>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">Username:</label>
                <input type="text" name="user_email" id="user_email">
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">Position:</label>
                <select name="usertype" type="text" class="form-control" >
                 <option value="admin">Admin</option>
                 <option value="seller">Seller</option>
                 <option value="buyer">Buyer</option>
             </select>
            </div>
            <br />
            <br />
            
            <div class="form-actions">
                <button type="submit" name="submit" class="button primary">Login</button>
                <a href="register.php" class="button primary">Sign Up</a>
            </div>
        </form>
    </div>
    <div class="col-md-3">
             
             </div>
             
             
                
             </div> 
            </div>
        </div>
    
    
    </div>
    <!-- /#wrapper -->

  
  <script >
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
</body>
</html>
