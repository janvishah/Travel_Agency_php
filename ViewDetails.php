<?php
echo '<html>';
	$page_name = 'Tour';					//used by PageName.php file
	include ('./PageName.php');
	echo '<body>';
		echo'<div class="page">';
			$id=$_GET['id'];
			$name = $_GET['Name'];
?>
			<script type="text/javascript">
				var image1=new Image()
				image1.src="image/Home/pr1.jpg"
				
				var image2=new Image()
				image2.src="image/Home/pr2.jpg"
				
				var image3=new Image()
				image3.src="image/Home/pr3.jpg"
				
				var image4=new Image()
				image4.src="image/Home/pr4.jpg"
			</script>						
<?php
			include ('./connection.php');
			$subheading= $name;															//Used by headnav.php for sub title
			$url = "image/Home/pr7.jpg";												//Used by headnav.php for image url
			include ('./headnav.php');
			$result = mysql_query("SELECT * FROM tours where Id=$id");	
			$row=mysql_fetch_array($result);
?>
			<div>
				<li class="bookinglink">
					<a href="Hotels.php">Hotels</a>
				</li>
				
				<li class="bookinglink">
					<a href="IncludeExclude.php" >Include/Exclude </a>
				</li>
				
				<li class="bookinglink">
					<a href="BookNow.php?id=<?php echo $id ?>">Book Now</a>
				</li>
			</div>

			<div>
				<p>
					<?php Print $row['Text']; ?>
				</p>
			</div>

		</div>
	</body>
</html>