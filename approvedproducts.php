<?php
session_start();

if(!$_SESSION['user_email'])
{

    header("Location:");
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
                <a class="navbar-brand" href="index.php">AuctionsKenya - Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li><a href="approval.php">&nbsp; <span class='glyphicon glyphicon-remove'></span> &nbsp; &nbsp; &nbsp; Products Approval</a></li>
                    <li class="active" ><a href="approvedproducts.php">&nbsp; <span class='glyphicon glyphicon-ok'></span> &nbsp; &nbsp; &nbsp; Approved Products</a></li>
                    
                    <li><a href="#">&nbsp; <span class='glyphicon glyphicon-list'></span> &nbsp; &nbsp; &nbsp; Report Generation</a></li>

          

          
                    
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
            
      
      
      
      
      
      
      
      
  
       <div class="alert alert-danger">
                        
                          <center> <h3><strong>Approved Products </strong> </h3></center>
              
              </div>
              
              <br />
              
              <div class="table-responsive">
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Name of Item</th>
               
          <th>Price</th>
          
             <th>Category</th>
             
             <th>Description</th>
             <th>Location</th>
             <th>Type of Seller</th>
                  <th>Actions</th>
                 
                </tr>
              </thead>
              <tbody>
        <?php
include("config.php");
  $stmt = $DB_con->prepare('SELECT * FROM items where Action=1');
  $stmt->execute();
  
  if($stmt->rowCount() > 0)
  {
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
       $session=$row['Action'];
      extract($row);
      
      
      ?>
                <tr>
                  <td>
        <center> <img src="item_images/<?php echo $item_image; ?>" class="img img-rounded"  width="50" height="50" /></center>
         </td>
                 <td><?php echo $item_name; ?></td>
                 
         <td><?php echo $item_price; ?></td>
         
         <td><?php echo $Stock; ?></td>
         
         <td><?php echo $description; ?></td>
         <td><?php echo $location; ?></td>
         <td><?php echo $seller; ?></td>
         
        
        
         
        <td>
                          <?php
                            if(($session)=='0')
                            {
                            ?>
                            <a href="approve.php?session=<?php echo $row['item_id'];?>" class="btn btn-info"  onclick="return confirm('Approve <?php echo $row['item_name']; ?> '); " ><span class="glyphicon glyphicon-ok-circle"></span> Decline </a>
                            <?php
                            }
                            if(($session)=='1')
                            {
                            ?>
                            <a href="approve.php?session=<?php echo $row['item_id'];?>" class="btn btn-danger" onClick="return confirm('Decline <?php echo $row['Firstname']; ?> <?php echo $row['Middlename']; ?> <?php echo $row['Lastname']; ?>');"><span class="glyphicon glyphicon-remove-circle"></span> Approved </a>

                            <?php
                            }

                            ?>
                          </td> 
        
                  
        
                  </td>
                </tr>
               
              <?php
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "<br />";
    echo '<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                          © 2019 AuctionsKenya. All rights reserved | Design by Timothy Songoi

            </p>
                        
                    </div>
  </div>';
  
    echo "</div>";
  }
  else
  {
    ?>
    
      
       
        <?php
  }
  
?>
    
  </div>
  </div>
  
  <br />
  <br />
              
              
              
      
      
            
                </div>
            </div>

           

           
        </div>
    
    
    
    </div>
    <!-- /#wrapper -->

  
  <!-- Mediul Modal -->
        
    
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
<script type="text/javascript">
$(function() {


$(".btn-danger").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var id = element.attr("id");

//Built a url to send
var info = 'id=' + id;
 if(confirm("Are you sure you want to remove this Record?"))
      {
        var parent = $(this).parent().parent();
            $.ajax({
             type: "GET",
             url: "delete.php",
             data: info,
             success: function()
                   {
                    parent.fadeOut('slow', function() {$(this).remove();});
                   }
            });
         

          }
       return false;

    });

});
</script>

</body>
</html>