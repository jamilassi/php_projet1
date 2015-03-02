

<?php 
if (isset ($_POST['email'])) {
	echo '<br><br><br><h4>Your email has been sent to the server.php page as:</h4><br>'.$_POST['email'];
	} else {
		echo "Provide email"/n;
		}

?>