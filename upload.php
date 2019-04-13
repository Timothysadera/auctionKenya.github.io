<?php
session_start();

if(!$_SESSION['user_email'])
{

    header("Location:");
}

?>
<?php
include("config.php");
extract($_SESSION);
$stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
$stmt_edit->execute(array(':user_email' => $user_email));
$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
extract($edit_row);

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

   
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/datatables.min.js"></script>

   
    
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
                <a class="navbar-brand" href="index.php">Sadera Online Auction - Seller Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li class="active"><a href="upload.php"> &nbsp; <span class='glyphicon glyphicon-upload'></span> &nbsp; &nbsp; &nbsp; Upload Product</a></li>
                    
                    
                    <li><a href="item.php"> &nbsp; <span class='glyphicon glyphicon-list'></span> &nbsp; &nbsp; &nbsp; Products Management</a></li>

          
                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
                       <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php   extract($_SESSION); echo $user_email; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            
              <div id="page-wrapper">
            
      
      
      
      
      
      
      
      
  
       <div class="alert alert-danger">
                        
                          <center> <h3><strong>Upload Product</strong> </h3></center>
              
              </div>
              
              <br />
          
        
         <form enctype="multipart/form-data" method="post" action="additems.php" name="regform">
                   <fieldset>
                  
                            <div class="form-group">
                              <input name="user_id" type="hidden" value="<?php  echo $user_id; ?>">
              
                                <input class="form-control" value="<?php  echo $Firstname; ?>" placeholder="fname" name="fname" type="hidden" required>
                           
               
              </div>
             
              
                            <div class="form-group">
              
                                <input class="form-control" value="<?php  echo $Contact; ?>" placeholder="contact" name="con" type="hidden" required>
                           
               
              </div>
          
            
                            <p>Name of Item:</p>
                            <div class="form-group">
              
                                <input class="form-control" placeholder="Name of Item" name="item_name" type="text" required>
                           
               
              </div>
              <p>Category:</p>
                            <div class="form-group">
                            
                                <select name="cat" type="text" class="form-control" >
                 <option value="vehicle">Vehicle</option>
                 <option value="computer">Computer Accessories</option>
                 <option value="art">Arts and SmartWatch </option>
                 <option value="furniture">Furniture</option>
                 <option value="jewellery">Jewellery</option>
                 <option value="Phone">Mobile Phones</option>
             </select>
                           
                             
                            </div>
              
              
           
              <p>Product Description:</p>
                            <div class="form-group">
                            
                                <input class="form-control" placeholder="Product Description" name="description" type="text" required>
                           
                             
                            </div>
                             <p>Location:</p>
                            <div class="form-group">
                            
                                <input class="form-control" placeholder="Location" name="location" type="text" required>
                           
                             
                            </div>
                            <p>Type of Seller:</p>
                            <div class="form-group">
                            
                                <select name="sell" type="text" class="form-control" >
                 <option value="Individual">Individual</option>
                 <option value="Company">Company/Institution</option>
                 <option value="Dealers">Dealers </option>
                 <option value="Business">Business</option>
                 
             </select>
                           
                             
                            </div>
              
              
              
              
              <p>Price:</p>
                            <div class="form-group">
              
                                <input id="priceinput" class="form-control" placeholder="Price" name="item_price" type="text" required>
                           
               
              </div>
              
              
              <p>Choose Image:</p>
              <div class="form-group">
            
               
                                <input class="form-control"  type="file" name="item_image" />
                           
              </div>
           
           
           </fieldset>
                  
            
              </div>
                            
                <button class="btn btn-success btn-md" name="item_save">Save</button>
        
         <a href="Upload.php" class="btn btn-danger btn-md">Cancel</a> <br><br>
        </form>
              
              <div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                       © 2019 Sadera Auction. All rights reserved | Design by Timothy Songo

            </p>
                        
                    </div>
  </div>
    
   
        
      
        
        
    
    <script src="js/gen_validatorv4.js"></script>

 <script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("regform");
  
  frmvalidator.addValidation("item_name","req","Please enter Name of the Item");
 
  
 
  
  
  frmvalidator.addValidation("item_price","req","Please enter Price of the Item ");
  

  frmvalidator.addValidation("item_image","req","Please enter Upload Image ");
  
  
//]]></script>
 <script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("regform");
  
  frmvalidator.addValidation("fname","req","Please enter First Name");
  frmvalidator.addValidation("fname","maxlen=20", "Max length for First Name is 10");
  frmvalidator.addValidation("fname","minlen=3",  "Min length for First Name is 5");
  frmvalidator.addValidation("fname","alpha","Alphabetic chars only");
 
  
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

  frmvalidator.addValidation("position","req","Please enter Position ");
  
  
//]]></script>
 <script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("regform");
  
  frmvalidator.addValidation("fname","req","Please enter First Name");
  frmvalidator.addValidation("fname","maxlen=20", "Max length for First Name is 10");
  frmvalidator.addValidation("fname","minlen=3",  "Min length for First Name is 5");
  frmvalidator.addValidation("fname","alpha","Alphabetic chars only");
 
  
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

  frmvalidator.addValidation("position","req","Please enter Position ");
  
  
//]]></script>
    
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('#example').dataTable();
  });
    </script>
    
        <script>
   
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
