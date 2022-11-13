<?php 
 $conn = new mysqli('localhost','root','','bisita_pilipinas');
 $output = '';
// Checking data by post method
if(isset($_POST['export'])) { 
 
   
    // SQL query to fetch data from our table
    $sql = "SELECT * FROM users WHERE email is not null";
 
    // Result
    $result = mysqli_query($conn, $sql); 
    if(mysqli_num_rows($result) > 0){
        $output .= '
        <table class="table" bordered="1">  
                            <tr>  
                <th>ID</th>  
                <th>Username</th>  
                <th>Email</th>  
                <th>User Type</th>
            
                            </tr>
        ';
        
            while($row = mysqli_fetch_array($result)) { 
        
                $output .= '
                <tr>  
                    <td>'.$row["id"].'</td>  
                    <td>'.$row["username"].'</td>  
                    <td>'.$row["email"].'</td>  
                <td>'.$row["usertype"].'</td>  
                                </tr>
            ';
            }
            $output .= '</table>';
            header('Content-Type: application/xls');
            header('Content-Disposition: attachment; filename=users.xls');
            echo $output;
    
    } 
}
?>