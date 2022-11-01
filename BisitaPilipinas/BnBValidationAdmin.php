<!DOCTYPE html>
<html>
    <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">  
      <link rel="stylesheet" href="CSS/Index.css">
      <link rel="stylesheet" href="CSS/headers.css">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <!-- <link rel="stylesheet" href="CSS/sidebars.css"> -->
      <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      
     <title> Bisita Ecija</title>
    </head>

    <body>
      <!-- Sidebar -->
      <div class="sidebar">
        <div class="logo-details">
          <i class='bx bx-map-alt icon'></i>
            <div class="logo_name">Bisita Carranglan Admin</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
          <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li>
          <li>
            <a href="homepage.html">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">BnB</span>
            </a>
             <span class="tooltip">List of BnB</span>
          </li>
          <li>
           <a href="#">
             <i class='bx bx-user' ></i>
             <span class="links_name">Registered BnB</span>
           </a>
           <span class="tooltip">List of Registered BnB</span>
         </li>

         <li>
           <a href="#">
             <i class='bx bx-pie-chart-alt-2' ></i>
             <span class="links_name">Analytics</span>
           </a>
           <span class="tooltip">Analytics</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-folder' ></i>
             <span class="links_name">Acceptance</span>
           </a>
           <span class="tooltip">List of Acceptance</span>
         </li>
         
         <li class="profile">
             <div class="profile-details">
               <!--<img src="profile.jpg" alt="profileImg">-->
               <div class="name_job">
                 <div class="name">Admin1</div>
                 <div class="job">Admin</div>
               </div>
             </div>
             <i class='bx bx-log-out' id="log_out" ></i>
         </li>
        </ul>
      </div>
      <section class="home-section">
        <h1>BnB Owner Applications</h1>

        <?php require ('config.php');
        
        $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM users_owner";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
            echo "<table border = 2 ";
            echo "<thead>";
                echo"<tr>
                <th> Owner ID </th>
                <th> Fullname </th>
                <th> Username </th>
                <th> Email </th>
                <th> BnB Name </th>
                <th> BnB Address </th>
                <th> BnB Description </th>
                <th> Contact No. </th>
                <th> Price Range From </th>
                <th> Price Range To </th>
            
                </tr>";
                
            
                while($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                      
                      <td>
                        <a href="detail_view.php?id=<?php echo $row['owner_id']?>"><?php echo $row['owner_id']?></a>
                      </td>

                    <td> 
                      <a href="detail_view.php?id=<?php echo $row['owner_id']?>"><?php echo $row['owner_fullname']?></a>
                    </td> 
              
                    <td> 
                    <?php echo $row['owner_username']?>
                    </td>
                  
                    <td> 
                    <?php echo $row['owner_email']?>
                    </td>
                  
                    <td> 
                    <?php echo $row['owner_bnb_name']?>
                    </td>
                  
                    <td> 
                    <?php echo $row['owner_bnb_address']?>
                    </td>
                    
                    <td> 
                    <?php echo $row['owner_bnb_desc']?>
                    </td>
                    
                    <td> 
                    <?php echo $row['owner_contact_num']?>
                   </td>
                    
                    <td> 
                    <?php echo $row['price_range_from']?>
                    </td>
                    
                    <td>
                    <?php echo $row['price_range_to']?>
                    </td>
          
          
                    </tr>
                    </div>
                    
              <?php
              
                }
            }
        ?>

      </section>

    

      <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");
    
      closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
      });
    
      searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });
    
      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
       if(sidebar.classList.contains("open")){
         closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
       }else {
         closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
       }
      }
      </script>
     <!-- Javascripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Javascripts end -->

        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
        ></script>
    </body>
</html>