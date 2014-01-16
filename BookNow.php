<?php
echo '<html>';
	$page_name = 'Tour';					//used by PageName.php file
	include ('./PageName.php');
	echo '<body>';
		echo'<div class="page">';
			
			
			$subheading= "Booking Form";											//Used by headnav.php for sub title
			$url = "image/Home/pr1.jpg";												//Used by headnav.php for image url
			include ('./headnav.php');
			include ('./bookingform.php');
?>
		</div>
	</body>
</html>