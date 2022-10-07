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
                    //$_SESSION['id'] = $data['PK'];
                    if($data['user_type']==='Admin'){
                        header("Location: homepage.html");
                    }else if($data['user_type']===''){
                        header("Location: homepage.html");
                    } else {
                    header("Location: index.php?error=Invalid username or password!");
                    }
                exit();
            } else {
                header("Location: index.php?error=Invalid username or password!");
            }
        }
    }
        ?>
