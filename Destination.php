<?php
echo '<html>';
	$page_name = 'Home';					//used by PageName.php file
	include ('./PageName.php');
?>
	<body>
		<div class="page">
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
			$subheading="Destination Packages";											//Used by headnav.php for sub title
			$url = "image/Home/pr7.jpg";												//Used by headnav.php for image url
			include ('./headnav.php');
			include ('./DestinationPackage.php');
?>
		</div>
	</body>
</html>