<?php

	if (isset($_POST['submit'])) {
		// Database connection
		$owner_valid_id = file_get_contents($_FILES['owner_valid_id']['tmp_name']);
		file_put_contents('images/'.$_FILES['owner_valid_id']['name'], $owner_valid_id);

		$owner_bnb_image = file_get_contents($_FILES['owner_bnb_image']['tmp_name']);
		file_put_contents('images/'.$_FILES['owner_bnb_image']['name'], $owner_bnb_image);

		$owner_bnb_image2 = file_get_contents($_FILES['owner_bnb_image2']['tmp_name']);
		file_put_contents('images/'.$_FILES['owner_bnb_image2']['name'], $owner_bnb_image2);

		$owner_bnb_image3 = file_get_contents($_FILES['owner_bnb_image3']['tmp_name']);
		file_put_contents('images/'.$_FILES['owner_bnb_image3']['name'], $owner_bnb_image3);

		$owner_bnb_image4 = file_get_contents($_FILES['owner_bnb_image4']['tmp_name']);
		file_put_contents('images/'.$_FILES['owner_bnb_image4']['name'], $owner_bnb_image4);

		$owner_bnb_image5 = file_get_contents($_FILES['owner_bnb_image5']['tmp_name']);
		file_put_contents('images/'.$_FILES['owner_bnb_image5']['name'], $owner_bnb_image5);

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
					password,
					usertype
				)
				VALUES (
					'{$_POST['owner_username']}', 
					'{$_POST['owner_email']}', 
					'{$hashed_password}',
					'Owner'
				)
			";
			$conn->query($sql);

			
			
			
		$var= NULL;		

			$sql = "
				INSERT INTO owners (
					user_id,
					owner_fullname,
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
					usertype
				)
				VALUES (
					'{$conn->insert_id}',
					'{$_POST['owner_fullname']}',
					'{$_POST['owner_bnb_name']}',
					'{$_POST['owner_bnb_address']}',
					'{$_POST['owner_bnb_desc']}',
					'{$_POST['owner_contact_num']}',
					'{$_POST['price_range_from']}',
					'{$_POST['price_range_to']}',
					'{$_FILES['owner_valid_id']['name']}',
					'{$_FILES ['owner_bnb_image']['name']}',
					'{$_FILES ['owner_bnb_image2']['name']}',
					'{$_FILES ['owner_bnb_image3']['name']}',
					'{$_FILES ['owner_bnb_image4']['name']}',
					'{$_FILES ['owner_bnb_image5']['name']}',
					'{$_POST['usertype']}'

				)
			";

			if ($conn->query($sql)) {
				echo "Registration of your BnB is successful, please wait for the validation of your registration by the admin. Thank you";
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