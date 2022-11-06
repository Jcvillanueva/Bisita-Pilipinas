<?php
session_start();
?>
<?php
  require ('config.php');
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  if(isset($_SESSION['id']))   // Checking whether the session is already there or not if 
  $id = $_SESSION['id'];                         // true then header redirect it to the home page directly 
 {
    $sql = "SELECT owners.*, users.username, users.email FROM owners LEFT JOIN users ON users.id=owners.user_id WHERE owners.is_accepted=1 AND users.id = ".$id;
    $result = mysqli_query($conn, $sql);
 
 
  
?>

<!DOCTYPE html>
<html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="CSS/Index.css">
      <link rel="stylesheet" href="CSS/headers.css">
      <!-- <link rel="stylesheet" href="CSS/card.css"> -->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <!-- <link rel="stylesheet" href="CSS/sidebars.css"> -->
      <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

      <!-- Shadowbox -->
      <link rel="stylesheet" href="src/shadowbox.css">
        <script src="src/jquery.js"></script>
        <script src="src/jquery-migrate.min.js"></script>
        <script src="src/shadowbox.js"></script>
        <script>
		      Shadowbox.init();
        </script>

      <!-- Javascripts -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- Javascripts end -->
     <title> Bisita Carranglan Tourist</title>
    </head>

    <body>
      <!-- <script src="Javascripts/sidebars.js"></script> -->
      <!-- Sidebar -->
      <div class="sidebar">
        <div class="logo-details">
          <i class='bx bx-map-alt icon'></i>
            <div class="logo_name">Bisita Carranglan</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
          <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li>
          <li>
            <a href="OwnerBnBhomepage.php">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Your BnB</span>
            </a>
             <span class="tooltip">Check Your BnB</span>
          </li>
         <li>
           <a href="Tour_Spots_Owner.php">
           <i class='bx bx-building-house'></i>
             <span class="links_name">Tourist Spots</span>
           </a>
           <span class="tooltip">Tourist Spots</span>
         </li>
         <li class="profile">
             <div class="profile-details">
               <!--<img src="profile.jpg" alt="profileImg">-->
               <div class="name_job">
                 <div class="name"> <?php echo $_SESSION['username']?> </div>
               </div>
             </div>
             <a class='bx bx-log-out' id="log_out" href="logout.php" ></a>
         </li>
        </ul>
      </div>
      <?php
                while($row = mysqli_fetch_assoc($result)) {
                ?>
      <!-- Home-section -->
      <section class="home-section">
      <h1 class="text"> Your BnB</h1>
      <hr class="featurette-divider" style=" border-top:2px solid #000; border-radius: 15px;">
      <div class="container">
      <div class="card mb-8" style="max-width:1200px; ">
          <div class="row no-gutters">
            <div class="col-md-12">
            <?php echo '<img src= "./images/'.$row['owner_bnb_image'].'" class="card-img" 
           style="width:192px; height:144px; margin:5px; border: 2px solid #000;"/>';  ?>
           <?php echo '<img src= "./images/'.$row['owner_bnb_image2'].'" class="card-img" 
           style="width:192px; height:144px; margin:5px; border: 2px solid #000;"/>';  ?>
           <?php echo '<img src= "./images/'.$row['owner_bnb_image3'].'" class="card-img" 
           style="width:192px; height:144px; margin:5px; border: 2px solid #000;"/>';  ?>
           <?php echo '<img src= "./images/'.$row['owner_bnb_image4'].'" class="card-img" 
           style="width:192px; height:144px; margin:5px; border: 2px solid #000;"/>';  ?>
           <?php echo '<img src= "./images/'.$row['owner_bnb_image5'].'" class="card-img" 
           style="width:192px; height:144px; margin:5px; border: 2px solid #000;"/>';  ?>
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title"><strong>Owner:</strong>&nbsp<?php echo $row['owner_bnb_name']; ?></h5>
                <p class="card-text" style="margin-bottom: 2px;"><strong>Address:</strong>&nbsp<?php echo $row['owner_bnb_address'];?></p>
                <p class="card-text" style="margin-bottom: 2px;"><strong>Description:&nbsp</strong><?php echo $row['owner_bnb_desc'];?></p>
                <p class="card-text" style="margin-bottom: 2px;"><strong>Contact Number:</strong>&nbsp<?php echo $row['owner_contact_num'];?></p>
                <p class="card-text" style="margin-bottom: 2px;"><strong>Email:</strong>&nbsp<?php echo $row['owner_contact_num'];?></p>
                <a href="#" class="btn btn-primary" style="color: #fff; background-color:#11101D; border-color:#11101D;">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <br>
    </div> 

        <?php
          }
          ?>
  <?php
    }
    ?>
      </section>
    <!-- Home-section end -->

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
     
    </body>
</html>