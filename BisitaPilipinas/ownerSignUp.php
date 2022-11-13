<!DOCTYPE html>
<html>
<head>
  <title>Bisita Pilipinas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>

    <form action="connect_owner.php" method="post" enctype="multipart/form-data">

    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-9">
      
              <h1 class="text-white mb-4">Register your Bnb business</h1>
      
              <div class="card" style="border-radius: 15px;">
                <div class="card-body">
      
                <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
                
                    <input type="text" id="usertype" class="form-control" name="usertype" value="Owner" required readonly/>
                    
                    <div class="row align-items-center pt-4 pb-3">
                        <div class="col-md-3 ps-5">
                          <h6 class="mb-0">Full Name:</h6>
                        </div>
                        <div class="col-md-9 pe-5">
                          <input type="text" class="form-control form-control-lg" placeholder="Juan Dela Cruz" id="owner_fullname" name="owner_fullname" required/>
                        </div>
                      </div>
    
                      <hr class="mx-n3">
                  
                    <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
                      <h6 class="mb-0">Username:</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                      <input type="text" class="form-control form-control-lg" placeholder="Abcd_1234" id="owner_username" name="owner_username" required/>
                    </div>
                  </div>

                  <hr class="mx-n3">
         
                      <div class="row align-items-center pt-4 pb-3">
                        <div class="col-md-3 ps-5">
                          <h6 class="mb-0">Password:</h6>
                        </div>
                        <div class="col-md-9 pe-5">          
                          <input type="password" class="form-control form-control-lg" placeholder="************" id="password" name="password" required/>          
                        </div>
                      </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">     
                      <h6 class="mb-0">Email:</h6>     
                    </div>
                    <div class="col-md-9 pe-5">      
                      <input type="email" class="form-control form-control-lg" placeholder="example@example.com" id="owner_email" name="owner_email" required/>      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">      
                      <h6 class="mb-0">BnB Name:</h6>
     
                    </div>
                    <div class="col-md-9 pe-5">
                      <input type="text" class="form-control form-control-lg" placeholder="A Juanderful House" id="owner_bnb_name" name="owner_bnb_name"  required/>
                    </div>
                  </div>

                  <hr class="mx-n3">
      
                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
                      <h6 class="mb-0">BnB Address:</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                      <input type="text" class="form-control form-control-lg" placeholder="Blk#/Lot#/Street/Village/City/Zip" id="owner_bnb_address" name="owner_bnb_address" required/>
                    </div>
                  </div>

                  <hr class="mx-n3">

                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
                      <h6 class="mb-0">BnB Description:</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                      <textarea required class="form-control" rows="3" placeholder="Input here your business' description." id="owner_bnb_desc" name="owner_bnb_desc" required> </textarea>
                    </div>
                  </div>

                  <hr class="mx-n3">
      
                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
                      <h6 class="mb-0">Contact No.:</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                      <input type="text" class="form-control form-control-lg" placeholder="09XXXXXXXXX" id="owner_contact_num" name="owner_contact_num" required/>
                    </div>
                  </div>

                  <hr class="mx-n3">

                  <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
                      <h6 class="mb-0">Price Range:</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                      From:<input type="number" class="form-control form-control-lg" placeholder="0000" id="price_range_from" name="price_range_from" required/>
                      To:<input type="number" class="form-control form-control-lg" placeholder="0000" id="price_range_to" name="price_range_to" required/>
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Upload Valid ID</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input class="form-control form-control-lg" id="formFileLg" type="file" id="owner_valid_id" name="owner_valid_id" required />
                      <div class="small text-muted mt-2">Upload any valid ID to prove legitimacy.</div>
      
                    </div>
                  </div>

                  <hr class="mx-n3">
      
                  <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0">Upload Images of Your BnB</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
                      <input class="form-control form-control-lg" id="formFileLg" type="file" id="owner_bnb_image" name="owner_bnb_image" required/>
                      <input class="form-control form-control-lg" id="formFileLg2" type="file" id="owner_bnb_image2" name="owner_bnb_image2" required/>
                      <input class="form-control form-control-lg" id="formFileLg3" type="file" id="owner_bnb_image3" name="owner_bnb_image3" required/>
                      <input class="form-control form-control-lg" id="formFileLg4" type="file" id="owner_bnb_image4" name="owner_bnb_image4" required/>
                      <input class="form-control form-control-lg" id="formFileLg5" type="file" id="owner_bnb_image5" name="owner_bnb_image5" required/>
                    </div>
                  </div>
                  
                  <hr class="mx-n3">
      
                  <div class="px-5 py-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Send application</button>
                  </div>
                
        </form>
      
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </section>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
></script>

</body>
</html>

