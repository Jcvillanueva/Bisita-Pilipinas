<?php
        session_start();
        $username = $_POST['username'];
        $hashed_password = md5($_POST['password']);

        $conn = new mysqli('localhost','root','','bisita_pilipinas');
        
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("select * from users where username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            if($stmt_result->num_rows > 0) {
                $data = $stmt_result->fetch_assoc();
                if($data['password'] === $hashed_password) {
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['usertype'] = $data['usertype'];
                    if($data['usertype']==='Admin'){
                        header("Location: AdminBnB.php");
                    } else if($data['usertype']==='Tourist'){
                        header("Location: Tour_Spots.php");
                    } else if($data['usertype']==='Owner'){
                        header("Location: OwnerBnBhomepage.php");
                    }
                exit();
            } else {
                header("Location: index.php?error=Invalid username or password!");
            }
        }
    }
        ?>
