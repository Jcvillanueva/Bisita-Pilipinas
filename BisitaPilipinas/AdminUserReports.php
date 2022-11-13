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

      <form method="post" action="export.php"
            text-align="center">
            <input type="submit" name="export"
                value="Generate Report"
                class="btn btn-success" />
        </form>

        <div class="container">
        <h1>User Reports (Tourists)</h1>

        <?php require ('config.php');
        
        $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM users WHERE email is not null";
            $result = mysqli_query($conn, $sql);

            
                
            
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card mb-2 rounded" style="max-width: 32rem; padding-right:5px; border: 2px solid #000">
            <div class="card-body" >
              <h5 class="card-title">Usertype:&nbsp<?php echo $row['usertype']?></h5>
              <h6 class="card-subtitle mb-2 text-muted">Username:&nbsp<?php echo $row['username']?></h6>
              <p class="card-text">Email:&nbsp<?php echo $row['email']?></p>
              <p class="card-text">ID:&nbsp<?php echo $row['id']?></p>
              
            </div>
          </div>
          <br>       
              <?php
              
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
