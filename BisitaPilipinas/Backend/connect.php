<?php

	if (isset($_POST['submit'])) {
		// Database connection
		$conn = new mysqli('localhost','root','','bisita_pilipinas');
		if ($conn->connect_error) {
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
		} else {
			$hashed_password = md5($_POST['password']);
			$sql = "
				INSERT INTO users (
					username, 
					email, 
					password
				)
				VALUES (
					'{$_POST['username']}', 
					'{$_POST['email']}', 
					'{$hashed_password}'
				)
			";

			if ($conn->query($sql)) {
				echo "Registration successful you may now login your account.";
				echo '<form method="POST" action="index.php">
    					<input type="submit", value="Click here to login."/>
 						 </form>';
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}
	}
	
?>