<?php
require_once ('connect.php');

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }

if(isset($_POST) & !empty($_POST)){
	$p_id = ($_POST['p_id']);
	$p_name = ($_POST['p_name']);
	$u_id = ($_POST['u_id']);
	$u_name = ($_POST['u_name']);
	$quantity = ($_POST['quantity']);
	$phone = ($_POST['phone']);
	$address = ($_POST['address']);

	$CreateSql = "INSERT INTO `orders` (p_id, p_name, u_id, u_name, quantity, u_contact, u_address) VALUES 
    ('$p_id', '$p_name', '$u_id', '$u_name', '$quantity', '$phone', '$address')";
	$res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
	if($res){
		$smsg = "Order Successful.Your items will be delivered within 2-3 days";
	}else{
		$fmsg = "Order Not Successful. Please try again later.";
	}
}
?>
<?php require('templates/header.php') ?>

	<type="text/css"
        <h1>Welcome back, 
        	<b><?php // check user login and output username
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			    echo $_SESSION['username'] . "!";
			} else {
			    echo "Guest !";
			}
        	?></b> 	
        </h1>
    </div>

    <div class="d-flex my-1">
	<?php // output success or failed message.
      	if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
    </div>

	<div class="row main-section">
      <?php 
		$SelSql = "SELECT * FROM `products`";
		$res = mysqli_query($connection, $SelSql);
		$num_of_rows = mysqli_num_rows($res);
		if ($num_of_rows > 0) {
	    	// output data of each row
		    while($num_of_rows > 0) {
		    	$num_of_rows--;
		    	$r = mysqli_fetch_assoc($res);
		        include('templates/product.php');
		    }
		} else {
		    echo "No Products";
		}
	?>
	</div>

<?php require('templates/footer.php') ?>