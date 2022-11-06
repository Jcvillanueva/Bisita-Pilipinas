<?php
session_start();
?>

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
           <a href="AdminUserReports.php">
             <i class='bx bx-pie-chart-alt-2' ></i>
             <span class="links_name">User Data</span>
           </a>
           <span class="tooltip">User Data</span>
         </li>
         <li>
           <a href="BnBValidationAdmin.php">
             <i class='bx bx-folder' ></i>
             <span class="links_name">BnB Application</span>
           </a>
           <span class="tooltip">BnB Application</span>
         </li>
         
         <li class="profile">
             <div class="profile-details">
               <!--<img src="profile.jpg" alt="profileImg">-->
               <div class="name_job">
                 <div class="name"><?php echo $_SESSION['username']?></div>
               </div>
             </div>
             <a class='bx bx-log-out' id="log_out" href="logout.php"></a>
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

            $sql = "SELECT owners.*, users.username, users.email FROM owners LEFT JOIN users ON users.id=owners.user_id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
        
            
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card mb-" style="max-width: 720px; border: 2px solid #000">
              <div class="row no-gutters">
                <div class="col-md-4">
                <?php echo '<img src= "./images/'.$row['owner_valid_id'].'" 
                    style="width:192;height:144px;margin:5px;border: 2px solid #000000;float:left;"/>'; ?>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                  <a href="detail_view.php?id=<?php echo $row['id']?>">Full Name:&nbsp<?php echo $row['owner_fullname']?></a>
                  <br>
                    <a href="detail_view.php?id=<?php echo $row['id']?>">ID:&nbsp<?php echo $row['id']?></a>
                    <p class="card-text">Username:&nbsp<?php echo $row['username']?></p>
                    <p class="card-text">Email:&nbsp<?php echo $row['email']?></p>
                    <p class="card-text">BnB Address:&nbsp<?php echo $row['owner_bnb_address']?></p>
                    <p class="card-text">BnB Description:&nbsp<?php echo $row['owner_bnb_desc']?></p>
                    <p class="card-text">Contact Number:&nbsp<?php echo $row['owner_contact_num']?></p>
                    <p class="card-text"><small class="text-muted">Price: <?php echo $row['price_range_from']?> to <?php echo $row['price_range_to']?></small></p>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>      
                  
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