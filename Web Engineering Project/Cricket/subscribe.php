
<?php
	include_once(".\config\config.php");

	if (isset($_POST['save']) && isset($_POST['username']) && isset($_POST['email'])){
		
			$x=htmlspecialchars($_POST['username']);
			$y=htmlspecialchars($_POST['email']);

			// checking empty fields
		if(empty($x) || empty($y) ) {
					
			if(empty($x)) {
				echo "<script>
	             alert('Name field is empty');

	             window.history.go(-1);
	             </script>";
			}
			
			if(empty($y)) {
				echo "<script>
	             alert('Email field is empty'); 
	             window.history.go(-1);
	             </script>";
			}
			
			
			}
		elseif ($mysqli)
		{
			
			$sql="INSERT INTO subscribedusers (username, email) VALUES ('$x','$y');";
			//echo $sql;   
			if ($mysqli->query($sql) === TRUE) {
	    	
	    	echo "<script>
	             alert('Subscription Succesful'); 
	             window.history.go(-1);
	             </script>";

		   		exit();
			} else {
		    echo "<script> alert('Error occured. You are entering wrong information');
	             window.history.go(-1);
		    	  </script>";
			}	 
		}
	}
?>