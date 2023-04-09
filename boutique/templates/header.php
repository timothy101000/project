<?php 

$server = 'http://' . $_SERVER['SERVER_NAME'] . '/boutique/';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Timm fashion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
    <link rel="stylesheet" href="<?php echo $server; ?>css/style.css" type="text/css">
 
<!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
			 font-family: 2px'Brush Script MT' ; 
		     font-style: italic;
			 background-color:wheat;
			 overflow-x: hidden;
			 margin-bottom: 50px;
			 background-image: url('https://thumbs.dreamstime.com/b/top-view-white-clothes-hangers-pink-background-copy-space-flat-lay-minimalism-style-creative-layout-fashion-store-sale-150312375.jpg');
             background-repeat: no-repeat;
             background-attachment: fixed;  
             background-size: cover;
            }
		
		.wrapper { width: 250px; padding: 20px; }
		.nav-background {
        background-image: url('https://www.shutterstock.com/image-illustration/red-black-colored-halftone-backgroundillustration-260nw-1948942633.jpg');
        background-size: cover;

    }
	
      
    </style>
</head>
<body>
<header>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-background">
		<div class="navbar-collapse collapse justify-content-between">
			<ul class="navbar-nav" id="navbar">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo $server; ?>index.php"><i class="fa fa-shopping-bag text-white"></i> Shop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $server; ?>components/order/view.php">Orders</a>
				</li>
				<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['role'] == 'admin') {
					?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $server; ?>components/product/view-product.php">Products</a>
					</li>
				<?php } ?>
			</ul>
			<ul class="navbar-nav">
				<div class="d-flex my-1 my-lg-0">
				    <input id="searchInput" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				    <button id="searchBtn"class="btn btn-outline-light m-2 my-sm-0" type="button">Search</button>
				</div>
			</ul>
			<ul class="navbar-nav">
				<!-- <li class="nav-item mr-sm-2">
					<a class="nav-link btn btn-dark text-white" href="<?php // echo $server; ?>cart.php">Cart</a>
				</li> -->
				<?php 
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
					<li class="nav-item mr-sm-2">
						<a class="nav-link btn btn-secondary text-white" href="<?php echo $server; ?>logout.php"><span><i class="fa fa-sign-out text-white"></i></span>Log Out</a>
					</li>
				<?php } else { ?>
				    <li class="nav-item mr-sm-2">
						<a class="nav-link btn btn-primary text-white" href="<?php echo $server; ?>logout.php"><span><i class="fa fa-user-circle-o text-white"></i></span> Log In</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</>
	
</header>
