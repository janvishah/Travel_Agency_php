<?php
echo '<html>';
	$page_name = 'Tour';					//used by PageName.php file
	include ('./PageName.php');
	echo '<body>';
		echo'<div class="page">';
			$id=$_GET['id'];
			include ('./connection.php');
			
			$result=mysql_query("SELECT Location,Text FROM package_locations where Id= $id");
			$row=mysql_fetch_array($result);
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
			$subheading= $row['Location']." Tour Packages";											//Used by headnav.php for sub title
			$url = "image/Home/pr8.jpg";												//Used by headnav.php for image url
			include ('./headnav.php');
?>
			<div>
				<p>
					<?php Print $row['Text']; ?>
				</p>
			</div>
<?php
			$result1=mysql_query("SELECT * FROM tours where Package_Location_Id= $id");
			include ('./tourdata.php');
			while($row1=mysql_fetch_array($result1))
			{							
				data( $row1['Id'],$row1['Name'],$row1['Days'],$row1['Nights'],$row1['Date']);		//function call from tourdata.php				
			}	
?>
		</div>
	</body>
</html>