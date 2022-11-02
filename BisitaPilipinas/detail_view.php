<?php 
    require ('config.php');

    $id = $_GET['id'];
        
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users LEFT JOIN owners ON owners.user_id = users.id WHERE owners.id = " . $id;

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


    if(isset($_POST['submit'])) {
        if ($_POST['is_accepted'] == "1") {
            $sql = "UPDATE owners SET is_accepted = 1 WHERE id = " . $id;
            mysqli_query($conn, $sql);  
        }

        header ("Location: BnBValidationAdmin.php");
    }
?>

<form method="post">
    <input type="radio" id="Accept" name="is_accepted" value="1" required>
    <label for="Accept">Accept</label><br>
    <input type="radio" id="Reject" name="is_accepted" value="0" required>
    <label for="Reject">Reject</label><br>
    <input type="submit" name="submit" value="Submit" />
</form>

