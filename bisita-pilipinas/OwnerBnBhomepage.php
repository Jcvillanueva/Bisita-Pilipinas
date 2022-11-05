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
      <link rel="stylesheet" href="CSS/card.css">
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
            <a href="OwnerHomepage.html">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Your BnB</span>
            </a>
             <span class="tooltip">List of BnB</span>
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
      <!-- Home-section -->
      <section class="home-section">
        <div class="text">Your BnB<div class="">
        <?php
          while($row = mysqli_fetch_assoc($result)) {
            
        ?>
        <div class="row">
            <!-- House #1 -->
            <h2><?php echo $row['owner_bnb_name']; ?></h2>
            <div class="fakeimg" style="height:200px;">

                    <div class="homepage_row"> 
                      <?php echo '<img src= "./images/'.$row['owner_bnb_image'].'" 
                         style="width:192;height:144px;margin:5px;border: 2px solid #000000;float:left;"/>';  ?>

                      <div class="homepageColumn"> 
                        <?php echo '<img src= "./images/'.$row['owner_bnb_image2'].'" 
                          style="width:192px;height:144px;margin:5px;border: 2px solid #000000;float:left;"/>';  ?>
                      </div>

                      <div class="homepageColumn"> 
                        <?php echo '<img src= "./images/'.$row['owner_bnb_image3'].'" 
                          style="width:192px;height:144px;margin:5px;border: 2px solid #000000;float:left;"/>';  ?>
                      </div>

                      <div class="homepageColumn"> 
                        <?php echo '<img src= "./images/'.$row['owner_bnb_image4'].'" 
                          style="width:192px;height:144px;margin:5px;border: 2px solid #000000;float:left;"/>';  ?>
                      </div>
                      <div class="homepageColumn"> 
                        <?php echo '<img src= "./images/'.$row['owner_bnb_image5'].'" 
                          style="width:192px;height:144px;margin:5px;border: 2px solid #000000;float:left;"/>';  ?>
                      </div>
                      
                    </div>
                              
                  </div>
                        
            <br>
            <h5><?php echo $row['owner_bnb_desc']; ?> </h5>
            <!-- First Accordion house -->
            <div class="accordion" id="accordionExample1">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    More details
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Contact Number: <?php echo $row['owner_contact_num']; ?> </strong><br> 
                    <strong>Price Range: <?php echo $row['price_range_from']; ?> - <?php echo $row['price_range_to']; ?> </strong>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Location
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong><?php echo $row['owner_bnb_address']; ?></strong> 
                  </div>
                </div>
              </div>
              <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Ratings 
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>in progress pa ren to pero magagawa ko na to agaad in no time</strong>
                  </div>
                </div>
              </div> -->
            </div>
            <!-- First Accordion House End -->
            <!-- House #1 End -->
            <!--
            <br>
            <br>
            <br>
              <div class="pagination_section">
                <nav aria-label="...">
                  <ul class="pagination">          
                      <a class="page-link" href="homepage.html" tabindex="-1" aria-disabled="false">Previous</a>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="homepage.html">1</a></li>
                    <li class="page-item">
                      <a class="page-link" href="homeP2.html">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="homeP3.html">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="homeP2.html">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div> 
            -->
          
        </div>
        <hr>
        <?php
          }
        ?>
<?php
 }
?>
        </div>
    </div>
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