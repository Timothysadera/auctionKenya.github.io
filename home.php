
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AuctionsKenya</title>
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
                <a class="navbar-brand" href="index.php">AuctionsKenya</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="buy.php">&nbsp; <i class="fa fa-truck"></i> &nbsp; &nbsp; &nbsp; Vehicles</a></li>
                    <li ><a href="furniture.php"> &nbsp; <i class="fa fa-bed"></i>&nbsp; &nbsp; &nbsp; Furniture</a></li>
                    <li><a href="computer.php">&nbsp; <i class="fa fa-desktop"></i> &nbsp; &nbsp; &nbsp;Computer Accessories</a></li>
                    
                    <li><a href="mobile.php">&nbsp; <span class='glyphicon glyphicon-phone'></span> &nbsp; &nbsp; &nbsp; Mobile Phones</a></li>
                    <li><a href="jewellery.php">&nbsp; <i class="fa fa-life-ring"></i> &nbsp; &nbsp; &nbsp;Jewellery</a></li>
                    
                    <li><a href="arts.php">&nbsp; <i class="fa fa-clock-o"> &nbsp; &nbsp; &nbsp; Arts and Watches</a></li>

          
                    
                </ul>
                <ul class="nav navbar-nav navbar-left navbar-user">
                    <li><a href="index.php" class="active">&nbsp; <span class='glyphicon glyphicon-home'></span> &nbsp;Home</a></li>
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
                            
                            <li><a href="logout.php"> For Individual</a></li>
                            <li><a href="logout.php"> For Dealer</a></li>
                            <li><a href="logout.php"> For Company</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="login.php"> &nbsp; <span class='glyphicon glyphicon-share'></span> &nbsp; Live Demo</a></li>
                                <li><a href="login.php">&nbsp; <span class='glyphicon glyphicon-log-in'></span> &nbsp;Login</a></li>
                                
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
            
			
			
			
			
			
			<div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
		<li data-target="#my-carousel" data-slide-to="3"></li>
        
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
		
            <img src="images/1.jpg" alt="Hero Slide" style="width:100%;height:500px;">

            <div class="carousel-caption">
                <h1 style="font-family:Century Gothic"><b></b></h1>

                <h2></h2>
            </div>
        </div>
        <div class="item">
            <img src="images/2.jpg" alt="..." style="width:100%;height:300px;">

            <div class="carousel-caption">
               
            </div>
        </div>
        <div class="item">
            <img src="images/3.jpg" alt="..." style="width:100%;height:300px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="images/4.jpg" alt="..." style="width:100%;height:400px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		
		
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
	
      <span class="icon-prev"></span>
       
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
       
       <span class="icon-next"></span>
    </a>

<!-- #my-carousel-->
			
			</div>
			
			
		<br />	
			 <div class="alert alert-danger">
                        
                        &nbsp; &nbsp;Auctionskenya
                    </div>
					<br />
			
			<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                       © 2019 AuctionsKenya. All rights reserved | Design by Timothy Songoi.

						</p>
                        
                    </div>
            
                </div>
            </div>

           

           
        </div>
		
		
		
    </div>
    <!-- /#wrapper -->

	
	<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Upload Items</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="additems.php">
                   <fieldset>
					
						
                            <p>Name of Item:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Name of Item" name="item_name" type="text" required>
                           
							 
							</div>
							
							
							<p>Stock:</p>
                            <div class="form-group">
                            
                                <input class="form-control" placeholder="Stock" name="cat" type="text" required>
                           
                             
                            </div>
							
							
							
							
							
							<p>Price:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Price" name="item_price" type="text" required>
                           
							 
							</div>
							
							
							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" required/>
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
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
