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
            <a href="homepage.html">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">List of BnB</span>
            </a>
             <span class="tooltip">List of BnB</span>
          </li>
          <li>
           <a href="#">
             <i class='bx bx-user' ></i>
             <span class="links_name">List of Registered BnB</span>
           </a>
           <span class="tooltip">List of Registered BnB</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-chat' ></i>
             <span class="links_name">Messages</span>
           </a>
           <span class="tooltip">Messages</span>
         </li>
         <li class="profile">
             <div class="profile-details">
               <!--<img src="profile.jpg" alt="profileImg">-->
               <div class="name_job">
                 <div class="name">Tourist1</div>
                 <div class="job">Tourist</div>
               </div>
             </div>
             <i class='bx bx-log-out' id="log_out" ></i>
         </li>
        </ul>
      </div>
      <!-- Home-section -->
<<<<<<< HEAD
      <section class="home-section">
        <div class="col-sm-8">
          <!-- House #1 -->
          <h2>House 1</h2>
          <h5>House Description</h5>
=======

      <?php require ('config.php'); 
          $conn = new mysqli($servername, $username, $password, $dbname);
          if (!$conn){
            die("Connection failed:" . mysqli_connect_error());
          }

          $sql = "SELECT * FROM users_owner";
          $result = mysqli_query($conn, $sql);
          
          $BnbHouse = mysqli_fetch_assoc($result);
          mysqli_free_result($result);
          mysqli_close($conn);
        ?>
      <section class="home-section">
        <div class="col-sm-8">
          <!-- House #1 -->
          <h2><?php echo $BnbHouse['owner_bnb_name']?></h2>
          <h5><?php echo $BnbHouse['owner_username']?></h5>
>>>>>>> parent of 4515a8a (updated homepage Images)
          <div class="fakeimg">House Pictures here</div>
          <br>
          <h5>Description here</h5>
          <p>Location Itsura ng bahay or kahit andito basta details ng bahay anditoo</p>
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
                  <strong>Additional details dito ng BNB makikita yun sa nilagay mo sa pag book ng bnb nilaa so pakilagay nalang siya Dito</strong> 
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
                  <strong>So dito naman ang location ng bahay kahit naka embedded lang yung map oks na yun</strong> 
                </div>
              </div>
            </div>
            <div class="accordion-item">
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
            </div>
          </div>
          <!-- First Accordion House End -->
           <!-- House #1 End -->
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