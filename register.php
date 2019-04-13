<?php
include("db_conection.php");



 if(isset($_POST['submit'])) {
  
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      $con=$_POST['con'];
	  $usertype=$_POST['usertype'];
      

      
      $update=mysqli_query($dbcon,"INSERT INTO users(Firstname, Lastname, user_email,Password,Contact,Position)
VALUES
('$fname','$lname','$username','$password','$con','$usertype')");
header("location: login.php");
      exit();
    
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

      .panelcala{
  background-color: #033c73s;
  
}
.panel-title{
  color:blue;
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
                            
                            <li><a href="logout.php"> Today Auction</a></li>
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
<section >
     <div class="container-fluid marginless">
		  <div class="row">
		  <div class="col-md-3">
		  </div>		   
		     <div class="col-md-6">
        
           <div id="welcome" class="panel panel-success contactback">
         <div class="panel-heading panelcala">
          <h3 class="panel-title text-center"><b>Seller and Buyer Registration</b></h3>
         </div>
         <div class="panel-body">
          <form role="form" method="post" id="regno" name="regno" class="form-horizontal">


              <div class="form-group  col-lg-6">
                <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user  small"></i></span>
                <label>First Name</label>
                <div>
                  <input name="fname" type="text" class="form-control col-md-offset-1" required placeholder="Enter First Name...">
                </div>
              </div>
              <div class="form-group col-lg-6">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user small"></i></span>
                <label >Last Name</label>
                <div>
                  <input name="lname" type="text" class="form-control col-md-offset-2" required placeholder="Enter Last Name...">
                </div>
              </div> 
              
              <div class="form-group col-lg-6">
                <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user small"></i></span>
                <label>Username</label>
                <div>
                  <input name="username" type="text" class="form-control col-md-offset-1" required placeholder="Enter Username...">
                </div>
              </div>
              <div class="form-group col-lg-6">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-lock small"></i></span>
                <label>Password</label>
                <div>
                  <input name="password" type="password" class="form-control col-md-offset-2"  required placeholder="Enter Password ...">
                </div>
              </div>    
               <div class="form-group col-lg-6">
                <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user small"></i></span>
                <label>Contact</label>
                <div>
                  <input name="con" type="text" class="form-control col-md-offset-1" required placeholder="Enter Contact...">
                </div>
              </div>
<div class="form-group col-lg-6">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-lock small"></i></span>
                <label>Position</label>
                <div>
                   <select name="usertype" type="text" class="form-control col-md-offset-2" >
                 <option value="seller">Seller</option>
                 <option value="buyer">Buyer</option>
                 
             </select>
                </div>
              </div>			  
              
              
              
              <div id="divfix" class="col-md-4 col-md-offset-8">
                <button type="submit" name="submit" class="btn btn-large btn-success full-width"><span class="glyphicon glyphicon-save "></span><b>SUBMIT</b></button><br/><br/>
              </div>
        </form>

         </div>
         </div>
      
         
        </div>
        <div id="sidebar" class="col-md-3">

        </div>
				
			 </div>	
			</div>
	    </div>
	</selection>

  <script src="js/gen_validatorv4.js"></script>
  <script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("regno");
  
  frmvalidator.addValidation("fname","req","Please enter First Name");
  frmvalidator.addValidation("fname","maxlen=20", "Max length for First Name is 10");
  frmvalidator.addValidation("fname","minlen=3",  "Min length for First Name is 5");
  frmvalidator.addValidation("fname","alpha","Alphabetic chars only");
  
  f
  
  
  frmvalidator.addValidation("lname","req","Please enter Last Name");
  frmvalidator.addValidation("lname","maxlen=20", "Max length for Last Name is 10");
  frmvalidator.addValidation("lname","minlen=3",  "Min length for  Last Name is 3");
  frmvalidator.addValidation("lname","alpha","Alphabetic chars only");

  
  
  frmvalidator.addValidation("username","req","Please enter Username ");
  frmvalidator.addValidation("username","maxlen=30", "Max length for Username is 30");
  frmvalidator.addValidation("username","minlen=3",  "Min length for  Username is 3");

  frmvalidator.addValidation("password","req","Please enter Password ");
  frmvalidator.addValidation("password","maxlen=30", "Max length for Password is 30");
  frmvalidator.addValidation("password","minlen=3",  "Min length for  Password is 5");


  
  
//]]></script>
  

