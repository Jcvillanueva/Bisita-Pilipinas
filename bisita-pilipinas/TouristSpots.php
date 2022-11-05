<?php
session_start();
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
            <a href="homepage.php">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">List of BnB</span>
            </a>
             <span class="tooltip">List of BnB</span>
          </li>
          
         <li>
           <a href="TouristSpots.php">
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
      <section class="home-section">
        <div class="col-sm-8">
          <!-- House #1 -->
          <!-- <h2>House 1</h2>
          <h5>House Description</h5>
          <div class="fakeimg">House Pictures here</div>
          <br>
          <h5>Description here</h5>
          <p>Location Itsura ng bahay or kahit andito basta details ng bahay anditoo</p> -->
          <!-- First Accordion house -->
          <div class="accordion" id="accordionExample1">
           
            <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Tourist Spot Name
                    </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <br>
                  <strong>Additional details dito ng BNB makikita yun sa nilagay mo sa pag book ng bnb nilaa so pakilagay nalang siya Dito</strong> 
                </div>
              </div>
        
            </div> -->
            <h1>List of Tourists Spots in Carranglan</h1>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Mount 387
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <strong>Description:</strong> 
                   <a> Also known as Batong Amat, mount 387 is a well-known hiking destination located in the province of Nueva Ecija. 
                    Tourists will be able to capture the sunrise along with the beauty of the Craballo mountain range. 
                    Nearby tourist spots that could be visited along this location is the Aloha Falls. </a><br>
                <a href="tourist_pics/mount.png" rel="shadowbox[myalbum1]">
			        <img style="width:192px;height:144px; margin:5px;border: 2px solid #000000;" src="tourist_pics/mount.png" />
		        </a>

                <a href="tourist_pics/mount2.png" rel="shadowbox[myalbum1]">
			        <img style="width:192px;height:144px; margin:5px;border: 2px solid #000000;" src="tourist_pics/mount2.png" />
		        </a>

                <br>
                <strong>Location:</strong> 
                    <a> Barangay Puncan, Carranglan, Nueva Ecija </a>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="549" height="355" id="gmap_canvas" 
                            src="https://maps.google.com/maps?q=Mount%20387%20Hiking%20Station&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="1" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                             <br>
                        <style>
                        .mapouter{
                          position:relative;
                          text-align:left;
                          height:355px;
                          width:549px;
                        }
                        </style>
                        <p>Click here</p>
                    </div>
                </div>

                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Aloha Falls 
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                <a href="tourist_pics/alohafalls.png" rel="shadowbox[myalbum2]">
			        <img style="width:192px;height:144px;margin:3px;border: 2px solid #000000;" src="tourist_pics/alohafalls.png" />
		        </a>

                <a href="tourist_pics/alohafalls2.png" rel="shadowbox[myalbum2]">
			        <img style="width:192px;height:144px;margin:3px;border: 2px solid #000000;" src="tourist_pics/alohafalls2.png" />
		        </a>

                <br>
                    <strong>Location:</strong> 
                    <a> Barangay Puncan, Carranglan, Nueva Ecija </a>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="549" height="355" id="gmap_canvas" 
                            src="https://maps.google.com/maps?q=Aloha%20Falls&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe><a href="https://fmovies-online.net">fmovies</a><br>
                            <style>.mapouter{
                              position:relative;
                              text-align:left;
                              height:355px;
                              width:549px;
                              }
                              </style>
                        </div>
                    </div>

                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Philippine Carabao Center at Central Luzon State University
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <a href="tourist_pics/ranch.png" rel="shadowbox[myalbum3]">
			        <img style="width:192px;height:144px;margin:3px;border: 2px solid #000000;" src="tourist_pics/ranch.png" />
		        </a>

                <a href="tourist_pics/ranch2.png" rel="shadowbox[myalbum3]">
			        <img style="width:192px;height:144px;margin:3px;border: 2px solid #000000;" src="tourist_pics/ranch2.png" />
		        </a>

                <br>
                <strong>Description:</strong>
                    <a> A known ranch and carabao center. </a><br>
                    <strong>Location:</strong> 
                    <a> Science City of Muñoz, Nueva Ecija Philippines 3120 </a>

                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas" 
                            src="https://maps.google.com/maps?q=PCC%20at%20CLSU%20Carranglan%20Ranch&t=k&z=13&ie=UTF8&iwloc=&output=embed" 
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                        <a href="https://fmovies-online.net">fmovies</a><br>
                        <style>.mapouter{position:relative;text-align:left;height:355px;width:549px;}
                    </style><a href="https://www.embedgooglemap.net">google map code</a>
                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:355px;width:549px;}
                </style>
                </div>
                

            </div>

                </div>
              </div>
            </div>

             <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Calo
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                <a href="tourist_pics/calo.png" rel="shadowbox[myalbum4]">
			        <img style="width:192px;height:144px;margin:3px;border: 2px solid #000000;" src="tourist_pics/calo.png" />
		        </a>

                <a href="tourist_pics/calo2.png" rel="shadowbox[myalbum4]">
			        <img style="width:192px;height:144px;margin:3px;border: 2px solid #000000;" src="tourist_pics/calo2.png" />
		        </a>

                <br>
                <strong>Description:</strong>
                    <a> Known camping spot/site in Carranglan, Nueva ecija. </a><br>
                    <strong>Location:</strong> 
                    <a> Brgy Bunga Sitio Calo Carranglan, Nueva Ecija </a>
                    <br>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas" 
                            src="https://maps.google.com/maps?q=Bunga,%20Carranglan,%20Nueva%20Ecija&t=k&z=13&ie=UTF8&iwloc=&output=embed" 
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                        <a href="https://fmovies-online.net">fmovies</a><br>
                        <style>.mapouter{position:relative;text-align:left;height:355px;width:549px;}
                        </style>
                        <a href="https://www.embedgooglemap.net">google map code</a>
                        <style>.gmap_canvas {overflow:hidden;background:none!important;height:355px;width:549px;}
                    </style>
                    </div>
                </div>
                </div>
              </div>
            </div>

            <!-- <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Tourist Spot Name 
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                <a href="cat.png" rel="shadowbox[myalbum5]">
			        <img style="width:20%;margin:3px;" src="cat.png" />
		        </a>

                <a href="cat.png" rel="shadowbox[myalbum5]">
			        <img style="width:20%;margin:3px;" src="cat.png" />
		        </a>

                <a href="cat.png" rel="shadowbox[myalbum5]">
			        <img style="width:20%;margin:3px;" src="cat.png" />
		        </a>

                <br>
                  <strong>in progress pa ren to pero magagawa ko na to agaad in no time</strong>
                </div>
              </div>
            </div>  -->

          </div>
          <br>
          <br>
          <br>
           
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