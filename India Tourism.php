<?php
echo '<html>';
	$page_name = 'Home';					//used by PageName.php file
	include ('./PageName.php');
?>
	<body>
		<div class="page">
			
<?php
			$subheading="India Tourism";											//Used by headnav.php for sub title
			$url = "image/Home/pr1.jpg";												//Used by headnav.php for image url
			include ('./headnav.php');
			
?>
			<div>
				<p>
					The Indian subcontinent is huge and diverse, and it does not fail to cast a spell on anyone who travels through it. 
					Visitors to India are charmed, inspired and bemused by its diverse sights, sounds and smells – it is a holiday destination unlike any other in the World. 
					The Indian subcontinent is perhaps the only destination in the World where in a two week holiday, you can do a high altitude trek, do a wildlife safari in a National Park, spend a night lazily cruising the backwaters, ride a Camel in the desert, spend time gazing at the Taj Mahal, and still have time to relax on a beach !! 
				</p>
			</div>
		</div>
	</body>
</html>