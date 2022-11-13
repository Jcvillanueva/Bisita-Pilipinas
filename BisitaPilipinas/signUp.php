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

<section class="vh-100" style="background-color: #11101d;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
      
	
  <form action="connect.php" method="post" class="mx-1 mx-md-4">
	
  <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
	
	<input type="text" id="usertype" class="form-control" name="usertype" value="Tourist" required readonly/><br>
			
		<div class="d-flex flex-row align-items-center mb-4">
	
				<i class="fas fa-user fa-lg me-3 fa-fw"></i>
				<div class="form-outline flex-fill mb-0">
				<input type="text" id="username" class="form-control" name="username" required />
				<label class="form-label" for="username">Username</label>
				</div>
			</div>

		<div class="d-flex flex-row align-items-center mb-4">
			<i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
			<div class="form-outline flex-fill mb-0">
			<input type="email" id="email" class="form-control" name="email" required/>
			<label class="form-label" for="email">Your Email</label>
			</div>
		</div>

		<div class="d-flex flex-row align-items-center mb-4">
			<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
			<div class="form-outline flex-fill mb-0">
			<input type="password" id="password" class="form-control" name="password" required/>
			<label class="form-label" for="password">Password</label>
			</div>
		</div>    
		<button type="submit" name="submit" class="btn btn-primary btn-lg">Create</button>

  </form>
						</div> 
					</div> 
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

