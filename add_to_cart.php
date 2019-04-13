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
		$stmt_edit->execute(array(':user_email'=>$user_email));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>
		<?php
 include("config.php");
		  $stmt_edit = $DB_con->prepare("select sum(order_total) as total from orderdetails where user_id=:user_id and order_status='Ordered'");
		$stmt_edit->execute(array(':user_id'=>$user_id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>
		
		
		<?php

	error_reporting( ~E_NOTICE );
	
	require_once 'config.php';
	
	if(isset($_GET['cart']) && !empty($_GET['cart']))
	{
		$id = $_GET['cart'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM items WHERE item_id =:item_id');
		$stmt_edit->execute(array(':item_id'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: allproducts.php");
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
                <a class="navbar-brand" href="customer.php">Sadera Online Auction - Buyer Panel </a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    >
                    <li class="active"><a href="allproducts.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Buy Now</a></li>
                    <li><a href="cart_items.php"> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a></li>
                    <li><a href="orders.php"> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> My Purchased Items</a></li>
                    
                    
                    
                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-shopping-cart'></span> Total Price Ordered: <?php echo $total; ?> </b></a>
                       
                    </li>
                    
                    
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user_email; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            
	
			
					
					
					
					
 <form role="form" method="post" action="save_order.php" >
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
   
    <div class="alert alert-default" style="color:white;background-color:#008CBA">
         <center><h3> <span class="glyphicon glyphicon-info-sign"></span> Product Details</h3></center>
        </div>
		
		 <td><input class="form-control" type="hidden" name="order_name" value="<?php echo $item_name; ?>" /></td>
		<td><input class="form-control" type="hidden" name="order_price" value="<?php echo $item_price; ?>" /></td>
		<td><input class="form-control" type="hidden" name="stock" value="<?php echo $Stock; ?>" /></td>
		<td><input class="form-control" type="hidden" name="item_id" value="<?php echo $item_id; ?>"/></td>
		<td><input class="form-control" type="hidden" name="user_id" value="<?php echo $user_id; ?>" /></td>
		
	<table class="table table-bordered table-responsive">
	 
	
	 
    <tr>
    	<td><label class="control-label">Name of Item.</label></td>
        <td><input class="form-control" type="text" name="v1" value="<?php echo $item_name; ?>" disabled/></td>
		
		
		
		
    </tr>
    

	 <tr>
    	<td><label class="control-label">Price.</label></td>
        <td><input class="form-control" type="text" name="v2" value="<?php echo $item_price; ?>" disabled/></td>
    </tr>
	
	
	
    <tr>
    	<td><label class="control-label">Image.</label></td>
        <td>
        	<p><img class="img img-thumbnail" src="item_images/<?php echo $item_image; ?>" style="height:100px;width:150px;" /></p>
        	
        </td>

         <tr>
        <td><label class="control-label">Quantity.</label></td>
        <td><input class="form-control" type="text" placeholder="Quantity" name="order_quantity" value="1" onkeypress="return isNumber(event)" onpaste="return false"  required />
        
            
        
        </td>
    </tr>
		
		 <tr>
    	<td><label class="control-label">Description.</label></td>
        <td><input class="form-control" type="text" name="description" value="<?php echo $description; ?>" disabled/></td>
    </tr>
     <tr>
        <td><label class="control-label">Seller's Name.</label></td>
        <td><input class="form-control" type="text" name="description" value="<?php echo $Name; ?>" disabled/></td>
    </tr>
     <tr>
        <td><label class="control-label">Seller's Contact.</label></td>
        <td><input class="form-control" type="text" name="description" value="<?php echo $Contact; ?>" disabled/></td>
    </tr>
	
	
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="order_save" class="btn btn-primary">
        <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
        </button>
        
        <a class="btn btn-danger" href="allproducts.php?id=1"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>
 <script>
            $(document).ready(function() {
                $("#order_quantity").on("change paste keyup", function (event) {
                    event.preventDefault();
                    var qty = $(this).val();
                    var stock = $("#stock").val();
                    if (parseInt(qty) > parseInt(stock)){
                        alert('the quantity is greater than the stock available');
                        $(this).val(1);
                    }else if(parseInt(qty) < parseInt(stock)){
//                        alert('the quantity is less than the stock available');
                    }
                });
            });
        </script>
					
					
					
					
					
					<br />
			
			<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                   © 2019 Makau Cosmetics Shop. All rights reserved | Design by Makau

						</p>
                        
                    </div>
            
                </div>
            </div>

           

           
        </div>
		
		
		
    </div>
    <!-- /#wrapper -->

	
	
	
	
</body>

<script>
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
</html>
