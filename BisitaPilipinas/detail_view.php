<?php 
    require ('config.php');

    $id = $_GET['id'];
        
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users_owner WHERE owner_id = " . $id;
    $result = mysqli_query($conn, $sql);

    $owner = mysqli_fetch_array($result);

    echo $owner['owner_fullname'];
    echo "<br>";
    echo $owner['owner_bnb_name'];
    echo "<br>";
    echo $owner['owner_bnb_address'];
    echo "<br>";
    echo '<img src="./images/'.$owner['owner_valid_id'].'"/>';
    echo "<br>";
    echo '<img src="./images/'.$owner['owner_bnb_image'].'"/>';
    echo "<br>";
    echo '<img src="./images/'.$owner['owner_bnb_image2'].'"/>';
    echo "<br>";
    echo '<img src="./images/'.$owner['owner_bnb_image3'].'"/>';
    echo "<br>";
    echo '<img src="./images/'.$owner['owner_bnb_image4'].'"/>';
    echo "<br>";
    echo '<img src="./images/'.$owner['owner_bnb_image5'].'"/>'; 
    
    echo "<br>";
    echo "<br>";

    echo '<input type="submit", value="Approve"/>';