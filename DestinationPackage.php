<?php
	include ('./connection.php');
	echo '<div class="homepackage">';
		$result = mysql_query("select * from package_locations");
		while($row=mysql_fetch_array($result))	
		{
			$nm = $row['Location'];
			$img = $row['Image'];
			$id = $row['Id'];
?>
			<li class="homepackagediv">
				<div>
					<img src="image/<?php echo $img ?>" class="packageimg"><br>
				</div>
				<div class="packagename leh-ladakh">
					<?php print $nm ;?>
				</div>
				<div class="packagetext leh-ladakhtext">
					We offers a large verity of <?php print $nm ;?> tours
				</div>
				<div class="packagelink leh-ladakh">
					<a href="Tour.php?id=<?php echo $id ?>">Click here for a list of tours </a>
				</div>
			</li>
		<?php } ?>
	</div>