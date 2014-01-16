<?php
$id=$_GET['id'];
include ('./connection.php');?>

<form name=form1 method=post action="Bookingconfirmation.php?id=<?php echo $id ?> ">
	<div class="form">
		<div class="fname">
			<span>
				Name:
			</span>
			<span class="forminfo">
				<input type="text" name="Name" size="15" />
			</span>
		</div>
			
		<div class="fname">
			<span>
				Address:
			</span>
			<span class="forminfo">
				<input type="text" name="Address" size="15" />
			</span>
		</div>
		<div class="fname">
			<span>
				Ph.No:
			</span>
			<span class="forminfo">
				<input type="text" name="Ph_No" size="15" />
			</span>
		</div>
		<div class="fname">
			<span>
				Email:
			</span>
			<span class="forminfo"> 
				<input type="text" name="Email" size="15" />
			</span>
		</div>
		<div class="fname">
			<span>
				Children:
			</span>
			<span class="forminfo">
				<input type="text" name="Child" size="15" />
			</span>
		</div>
		<div class="fname">
			<span>
				Adult:
			</span>
			<span class="forminfo">
				<input type="text" name="Adult" size="15" />
			</span>
		</div>
		<div>
			<input type="submit"  name="Booking" value="Booking" class="btn">				
		</div>
	</div>
</form>