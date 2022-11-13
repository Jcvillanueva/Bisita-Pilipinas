<?php 
 $conn = new mysqli('localhost','root','','bisita_pilipinas');
 $output = '';
// Checking data by post method
if(isset($_POST['export'])) { 
 
   
    // SQL query to fetch data from our table
    $sql = "SELECT * FROM owners WHERE id is not null";
 
    // Result
    $result = mysqli_query($conn, $sql); 
    if(mysqli_num_rows($result) > 0){
        $output .= '
        <table class="table" bordered="1">  
                            <tr>  
                <th>ID</th>  
                <th>Full Name</th>  
                <th>BnB Name</th>  
                <th>BnB Address</th>
                <th>BnB Desc</th>
                <th>Contact Number</th>
                <th>Price Range From</th>
                <th>Price Range To</th>
                <th>User Type</th>
            
                            </tr>
        ';
        
            while($row = mysqli_fetch_array($result)) { 
        
                $output .= '
                <tr>  
                    <td>'.$row["id"].'</td>  
                    <td>'.$row["owner_fullname"].'</td>  
                    <td>'.$row["owner_bnb_name"].'</td>  
                    <td>'.$row["owner_bnb_address"].'</td> 
                    <td>'.$row["owner_bnb_desc"].'</td> 
                    <td>'.$row["owner_contact_num"].'</td> 
                    <td>'.$row["price_range_from"].'</td> 
                    <td>'.$row["price_range_to"].'</td> 
                    <td>'.$row["usertype"].'</td>  
                                </tr>
            ';
            }
            $output .= '</table>';
            header('Content-Type: application/xls');
            header('Content-Disposition: attachment; filename=owners.xls');
            echo $output;
    
    } 
}
?>