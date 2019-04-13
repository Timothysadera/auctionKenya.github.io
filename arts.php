
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

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
	
	<script type="text/javascript" src="jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.css?v=2.1.5" media="screen" />
	
	<link rel="stylesheet" type="text/css" href="jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="jquery.fancybox-buttons.js?v=1.0.5"></script>


	<link rel="stylesheet" type="text/css" href="jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="jquery.fancybox-thumbs.js?v=1.0.7"></script>


	<script type="text/javascript" src="jquery.fancybox-media.js?v=1.0.6"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	

   
    
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
                <a class="navbar-brand" href="home.php">AuctionsKenya</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li ><a href="buy.php">&nbsp; <i class="fa fa-truck"></i> &nbsp; &nbsp; &nbsp; Vehicles</a></li>
                    <li ><a href="furniture.php"> &nbsp; <i class="fa fa-bed"></i>&nbsp; &nbsp; &nbsp; Furniture</a></li>
                    <li ><a href="computer.php">&nbsp; <i class="fa fa-desktop"></i> &nbsp; &nbsp; &nbsp;Computer Accessories</a></li>
                    
                    <li ><a href="mobile.php">&nbsp; <span class='glyphicon glyphicon-phone'></span> &nbsp; &nbsp; &nbsp; Mobile Phones</a></li>
                    <li ><a href="Jewellery.php">&nbsp; <i class="fa fa-life-ring"></i> &nbsp; &nbsp; &nbsp;Jewellery</a></li>
                    
                    <li class="active"><a href="arts.php">&nbsp; <i class="fa fa-clock-o"></i> &nbsp; &nbsp; &nbsp; Arts and Watches</a></li>

          
                    
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

			 
			
	<!--
			 <div class="alert alert-default" style="color:white;background-color:#008CBA">
         <center><h3> <span class="glyphicon glyphicon-shopping-cart"></span> This is our Sadera Online Auction, Buy now!</h3></center>
        </div>
			-->
					<br />
					

<?php







include("db_conection.php");


$query=mysqli_query($dbcon,"select * from items where Action= 1  AND Stock='art'");


while($query2=mysqli_fetch_array($query))
{
	
	echo "<div class='col-sm-3'><div class='panel panel-default' style='border-color:#008CBA;'>
            <div class='panel-heading' style='color:white;background-color : #033c73;'>
            <center> 
<textarea style='text-align:center;background-color: white;' class='form-control' rows='1' disabled>".$query2['item_name']."</textarea>
			</center>
            </div>
            <div class='panel-body'>
           <a class='fancybox-buttons' href='item_images/".$query2['item_image']."' data-fancybox-group='button'  ".$query2['item_name']."'>
					
					<img src='item_images/".$query2['item_image']."' class='img img-thumbnail'  style='width:350px;height:150px;' />
					</a>
				
					
					<center><h4> Price: Ksh: ".$query2['item_price']." </h4></center>
		
					<a class='btn btn-block btn-info' href='login.php? ".$query2['item_id']."'><span class='glyphicon glyphicon-info-sign'></span> Read More </a>
            </div>
          </div>
        </div>";
			
	
}

echo "<div class='container'>";
echo "</div>";




?>		
					
					
					
					
					
					
					<br />
			
			<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                         © 2019 AuctionsKenya. All rights reserved | Design by Timothy Songoi
                     </p>
                        
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
