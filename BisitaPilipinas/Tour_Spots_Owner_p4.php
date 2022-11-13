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
  $sql = "SELECT owners.*, users.username, users.email FROM owners LEFT JOIN users ON users.id=owners.user_id WHERE owners.is_accepted=1";
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="CSS/Index.css">
      <link rel="stylesheet" href="CSS/headers.css">
      <link rel="stylesheet" href="CSS/card.css">
      <link rel="stylesheet" href="CSS/carousel.css">
      <link rel="stylesheet" href="CSS/carousel.rtl.css">
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
             <span class="tooltip">List of BnB</span>
          </li>   
         <li>
           <a href="Tour_Spots_Owner_p4.php">
           <i class='bx bx-building-house'></i>
             <span class="links_name">Tourist Spots</span>
           </a>
           <span class="tooltip">Tourist Spots</span>
         </li>
         <li class="profile">
             <div class="profile-details">
               <!--<img src="profile.jpg" alt="profileImg">-->
               <div class="name_job">
                 <div class="name"><?php echo $_SESSION['username']?></div>
               </div>
             </div>
             <a class='bx bx-log-out' id="log_out" href="logout.php" ></a>
         </li>
        </ul>
      </div>
      
      <!-- Home-section -->
     <section class= "home-section">
            <div class="container">
            <!-- Carousel Start  -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/alohafallspt4.png" class="d-block w-100 h-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Aloha Falls,</h5>
                      <p>Carranglan Nueva Ecija</p>
                  </div>
                </div>
                <div class="carousel-item">
                <img src="./images/alohafalls.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Aloha Falls,</h5>
                      <p>Carranglan Nueva Ecija</p>
                  </div>
                </div>
                <div class="carousel-item">
                <img src="./images/alohafalls2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Aloha Falls,</h5>
                      <p>Carranglan Nueva Ecija</p>
                  </div>
                </div>
                <div class="carousel-item">
                <img src="./images/alohafallspt.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Aloha Falls,</h5>
                      <p>Carranglan Nueva Ecija</p>
                  </div>
                </div>
                <div class="carousel-item">
                <img src="./images/alohafallspt1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Aloha Falls,</h5>
                      <p>Carranglan Nueva Ecija</p>
                  </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
            <!-- Carousel end -->
            <!-- Featurette Starting -->

            <hr class="featurette-divider" style=" border-top:3px solid #000; border-radius: 5px;">

                    <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Aloha Falls, Carranglan Nueva Ecija</h2>
                        <p class="lead">After climbing Mount 387, tourists can go directly to Aloha Falls to refresh and de-stress. </p>
                        <p class="lead">The waterfalls in this spot is clear and powerful – a perfect area to enjot nature with your friends and family.</p>
                    </div>
                    <div class="col-md-5">

                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=500&amp;height=500&amp;hl=en&amp;q=aloha falls carranglan&amp;t=k&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:500px;}.gmap_iframe {height:500px!important;}</style></div>
                    </div>
                    </div>

                    <hr class="featurette-divider" style=" border-top:3px solid #000; border-radius: 5px;">
            <!-- Featurette ending -->
            <!-- heading start -->
            <style>
            * {
            box-sizing: border-box;
            }

            .column {
            float: left;
            width: 33.33%;
            padding: 5px;
            }

            /* Clearfix (clear floats) */
            .row::after {
            content: "";
            clear: both;
            display: table;
            }
            </style>
            <h1 style="text-align:right;">Nearby BnB Available:</h1>

         <?php
                while($row = mysqli_fetch_assoc($result)) {
                ?>
     <div class="row">
        <div class="col-sm-12">
        
            <h2 style="text-align:right;"><?php echo $row['owner_bnb_name']; ?></h2>
                <h5 style="text-align:right;"><?php echo $row['owner_bnb_address'];?></h5>
                <p style="text-align:right;"><?php echo $row['owner_contact_num'];?></p>
                <p style="text-align:right;"><?php echo $row['owner_bnb_desc'];?></p>

                    <div class="homepageColumn"> 
                      <?php echo '<img src= "./images/'.$row['owner_bnb_image'].'" 
                         style="width:192px; height:144px; margin:5px; border: 2px solid #000;"/>';  ?>
                         </div>

                      <div class="homepageColumn"> 
                        <?php echo '<img src= "./images/'.$row['owner_bnb_image2'].'" 
                          style="width:192px; height:144px; margin:5px; border: 2px solid #000;"/>';  ?>
                      </div>

                      <div class="homepageColumn"> 
                        <?php echo '<img src= "./images/'.$row['owner_bnb_image3'].'" 
                          style="width:192px; height:144px; margin:5px; border: 2px solid #000;"/>';  ?>
                      </div>

                      <div class="homepageColumn"> 
                        <?php echo '<img src= "./images/'.$row['owner_bnb_image4'].'" 
                          style="width:192px; height:144px; margin:5px; border: 2px solid #000;"/>';  ?>
                      </div>
                      <div class="homepageColumn"> 
                        <?php echo '<img src= "./images/'.$row['owner_bnb_image5'].'" 
                          style="width:192px; height:144px; margin:5px; border: 2px solid #000;"/>';  ?>
                      </div>
                </div>
                <hr class="featurette-divider" style=" border-top:3px solid #000; border-radius: 5px;">
            </div>
    
        <?php
          }
        ?>
                <nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="Tour_Spots_Owner_p3.php" style="color:#11101D;">Previous</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="Tour_Spots.php" style="color: #11101D;">1</a></li>
                    <li class="page-item">
                    <a class="page-link" href="Tour_Spots_P2.php" style="color:#11101D;">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="Tour_Spots_p3.php" style="color:#11101D;">3</a></li>
                    <li class="page-item active" aria-current="page"><span class="page-link" href="Tour_Spots_p4.php" style="color: #fff; background-color:#11101D; border-color:#11101D;">4</span></li>
                    <li class="page-item">
                      <Span class="page-link" href="Tour_Spots_p3.php"style="color:#11101D;">Next</Span>
                    </li>
                  </ul>
                </nav>
        <!-- heading end -->
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
     

     <script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

    </body>
</html>