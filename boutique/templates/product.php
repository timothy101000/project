<div class="col-3 my-20">
<div class="card m-auto product" style="width: 90%;">
	<img class="card-img-top" src="<?php echo 'http://' . $_SERVER['SERVER_NAME'] ?>/boutique/img/products/<?php echo $r['img'];?> ?>" alt="Card image cap">
	<div class="card-body">
		<h4 class="card-title"><?php echo $r['name']; ?></h4>
		<p class="card-text"><?php echo $r['detail']; ?></p>
		<p style="color:#D35400 ;"> Ksh.<?php echo $r['price']; ?></p>
	 <?php 
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
			<li class="nav-item ">
				<a class="nav-link " hef="<?php echo $server; ?>logout.hp"><span><i class="fa fa-bookmark text-white"></i></span> buy 5and more@ offer</a>
				</li>
		<?php } else { ?>
			 <li class="nav-item m-2 my-sm-0">
				<a class="nav-link btn btn-danger text-white" href="<?php echo $server; ?>logout.php"><span><i class="fa fa-shopping-cart text-white"></i></span> shop Now</a>
				</li>
	<?php } ?>

		<!-- show form only if the user is logged in -->
		<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
		<form method="post">
			<input type="text" name="p_id" value="<?php echo $r['id']; ?>" hidden="hidden" />
			<input type="text" name="p_name" value="<?php echo $r['name']; ?>" hidden="hidden" />
			<input type="text" name="u_id" value="<?php echo $_SESSION['id']; ?>" hidden="hidden" />
			<input type="text" name="u_name" value="<?php echo $_SESSION['username']; ?>" hidden="hidden" />
			<div class="d-flex mb-2">
				<label for="qty<?php echo $r['id']; ?>">No. </label>
				<input type="number" id="qty<?php echo $r['id']; ?>" name="quantity" class="mx-2" value="1" />
			</div>



			<!-- Button trigger modal -->
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#confirmOrder">
				<span class="text-white"><i class="fa fa-shopping-cart text-white"></i> Buy</span>
			</button>

			<!-- Modal -->
			<div class="modal" id="confirmOrder" tabindex="-1" role="dialog" aria-labelledby="confirmTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="modal-title" id="confirmTitle">Confirm Order</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="form-group">
					    <label>Contact</label>
					    <input type="text" name="phone" class="form-control" placeholder="Ex 07xxxxxxxx" required="true"minlength="10">
					</div>
					<div class="form-group">
					    <label>Location Delivery Address </label>
					    <input type="text" name="address" class="form-control" placeholder="Ex. Nairobi,Ruiru" required="true">
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			        <button type="submit" class="btn btn-primary">Confirm</button>
			      </div>
			    </div>
			  </div>
			</div>



		</form>
			<?php
		}else echo " 89% OFF"; ?>
	</div>
</div>
</div>
