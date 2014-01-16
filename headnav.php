<div>
	<img src="img/Home/family1.jpg" id="logoimage">
	<div id="head">
		Information Travel
	</div>
	<div id="underhead">
		Luxury Holiday Made Affordable
	</div>
</div>
			
<div id="linkdiv">				
	<li class="link">
		<a href="Home.php">Home</a>
	</li>
	<li class="link">
		<a href="India Tourism.php">Indian Tourism</a>
	</li>
	<li class="link">
		<a href="Destination.php" >Destination</a>
	</li>
	<li class="link">
		<a href="ContactUs.php" >ContactUs</a>
	</li>				
</div>
			

<div id="slidediv">
	<script type="text/javascript">
	
						var image1=new Image()
						image1.src="image/Home/pr1.jpg"
						var image2=new Image()
						image2.src="image/Home/pr2.jpg"
						var image3=new Image()
						image3.src="image/Home/pr3.jpg"
						var image4=new Image()
						image4.src="image/Home/pr4.jpg"
						var image5=new Image()
						image5.src="image/Home/pr5.jpg"
						var image6=new Image()
						image6.src="image/Home/pr6.jpg"
						var image7=new Image()
						image7.src="image/Home/pr7.jpg"
						var image8=new Image()
						image8.src="image/Home/pr8.jpg"
						var image9=new Image()
						image9.src="image/Home/pr9.jpg"
						var image10=new Image()
						image10.src="image/Home/pr10.jpg"
						var image11=new Image()
						image11.src="image/Home/pr11.jpg"
				
					</script>
	<img src="<?php echo $url ?>" name="slide" class="imgslide"/><br>
	<script>		
		var step=1
		function slideit()
		{
			if (!document.images)
			return
			document.images.slide.src=eval("image"+step+".src")
			if (step<11)
				step++
			else
				step=1
			setTimeout("slideit()",3000)
		}
		slideit();
	</script>
</div>
		
<div id="subhead">
	<?php echo $subheading; ?>
</div>

<div id="headline">
</div>
