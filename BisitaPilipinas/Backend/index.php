
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
 
  <body>
<section class="vh-100" style="background-color: #11101d;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Welcome to Bisita Pilipinas</h3>

            <form method="POST" action="validation.php"> 
              
              <div class="form-outline mb-4">
                <input type="username" id="username" class="form-control form-control-lg" name="username" />
                <label class="form-label" for="username">Username</label>
              </div>
  
              <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control form-control-lg" name="password" />
                <label class="form-label" for="password">Password</label>
                  <?php if (isset($_GET['error'])){ ?>
                   <p class="error"><?php echo $_GET['error']; ?></p>
                     <?php } ?>
              </div>

              <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>          

              </form>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                <label class="form-check-label" for="form1Example3"> Remember password </label>
              </div>
  
              <button onclick="myFunction2()" class="btn btn-primary btn-lg btn-block" type="submit">Sign-up</button>
  
              <hr class="my-4">
              <button onclick="myFunction()">Continue without an Account</button>
              <hr class="my-4">
  
              <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function myFunction() {
      location.replace("homepage.html")
    }
    </script>

<script>
  function myFunction2() {
    location.replace("signUp.html")
  }
  </script>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
></script>

  </body>
</html>