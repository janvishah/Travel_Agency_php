<?php
echo '<html>';
	$page_name = 'Home';					//used by PageName.php file
	include ('./PageName.php');
?>
	<body>
		<div class="page">
			
<?php
			$subheading="Tours With Us";											//Used by headnav.php for sub title
			$url = "image/Home/pr1.jpg";												//Used by headnav.php for image url
			include ('./headnav.php');
			
?>
			<div>				
				<p>					
					India has all this and much more Book your India tour with Information Travels. 
					What makes Information Travels unique and special is the fact, that each of our consultants has over 10 years of experience of handling and designing tours in the Indian subcontinent, and most of the have personally experienced the product and the destinations. 
					Click on any of the links below and find the India tour that is perfect for you.
				</p>		
			</div>
			<div id="subhead">
					Packages
			</div>
			<?php include ('./HomePackage.inc'); ?>
		</div>
	</body>
</html>
