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
				INSERT INTO users_owner (
					owner_fullname,
					owner_username,
					password, 
					owner_email, 
					owner_bnb_name,
					owner_bnb_address,
					owner_bnb_desc,
					owner_contact_num,
					price_range_from,
					price_range_to,
					owner_valid_id,
					owner_bnb_image,
					owner_bnb_image2,
					owner_bnb_image3,
					owner_bnb_image4,
					owner_bnb_image5,
					owner_bnb_image6
				)
				VALUES (
					
					'{$_POST['owner_fullname']}',
					'{$_POST['owner_username']}',
					'{$hashed_password}',
					'{$_POST['owner_email']}',
					'{$_POST['owner_bnb_name']}',
					'{$_POST['owner_bnb_address']}',
					'{$_POST['owner_bnb_desc']}',
					'{$_POST['owner_contact_num']}',
					'{$_POST['price_range_from']}',
					'{$_POST['price_range_to']}',
					'{$_POST['owner_valid_id']}',
					'{$_POST['owner_bnb_image']}',
					'{$_POST['owner_bnb_image2']}',
					'{$_POST['owner_bnb_image3']}',
					'{$_POST['owner_bnb_image4']}',
					'{$_POST['owner_bnb_image5']}',
					'{$_POST['owner_bnb_image6']}'
		
				)
			";

			if ($conn->query($sql)) {
				echo "Registration of your Bnb is successful, please wait for the validation of your registration by the admin. Thank you";
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