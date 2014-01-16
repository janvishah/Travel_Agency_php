<?php
echo '<html>';
	$page_name = 'Tour';					//used by PageName.php file
	include ('./PageName.php');
	echo '<body>';
		echo'<div class="page">';
			$id=$_GET['id'];
			include ('./connection.php');
			$subheading= "Booking confirmation";											//Used by headnav.php for sub title
			$url = "image/Home/pr1.jpg";													//Used by headnav.php for image url
			include ('./headnav.php');
				
			if (isset($_POST['Name'])) 
				$name = $_POST['Name'];		
				
			if (isset($_POST['Address'])) 
				$address = $_POST['Address'];

			if (isset($_POST['Ph_No'])) 
				$ph_no = $_POST['Ph_No'];

			if (isset($_POST['Email']))
				$email = $_POST['Email'];
			
			if (isset($_POST['Child'])) 
				$child = $_POST['Child'];

			if (isset($_POST['Adult']))
				$adult = $_POST['Adult'];

			$query="INSERT into travellers VALUES"."(NULL,'$name','$address','$ph_no','$email')";
			 if (!mysql_query($query, $con))
				  echo "INSERT failed: $query<br />" .mysql_error() . "<br /><br />";
			
			$result = mysql_query("select Id from travellers where Email='$email'");
			$row=mysql_fetch_array($result);
			$travellerid = $row['Id'];	

			$id=$_GET['id']; 
			$currentDate = date("Y-m-d");
			$query1="INSERT into booking VALUES"."(NULL,'$id','$travellerid','$child','$adult','$currentDate')";
			
				if (!mysql_query($query1, $con))
				  echo "INSERT failed: $query1<br />" .mysql_error() . "<br /><br />";	
				  
			$result1 = 	mysql_query("select * from tours where Id = $id");
			$row1=mysql_fetch_array($result);
			$result1 = 	mysql_query("select * from tours where Id = $id");
	$row1=mysql_fetch_array($result1);
			include('./confirmation.php');
			
			
?>	
		</div>
	</body>
</html>