<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Voting System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-dark">
  <h1 class="text-center text-info my-3">Voting system</h1>

  <div class="bg-info">
    <h2 class="text-center">Login</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form action="./actions/login.php" method="post">
            <div class="mb-3">
              <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required autocomplete="off">
            </div>
            <div class="mb-3">
              <input type="number" class="form-control" name="mobile" placeholder="Enter Your Mobile Number" required autocomplete="off">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required autocomplete="off">
            </div>
            <div class="mb-3">
              <select name="std" class="form-select form-control">                
                
                <option value="group" >Group</option>
                <option value="voter">Voter</option>
                
              </select>
            </div>
            <div class="my-4">
             <button type="submit" class="btn btn-success w-100" name="login">Login</button> 
             <p class="text-center mt-3">Don't Have any account?<a href="./partials/registration.php" class=" text-decoration-none "> <b class="text-light"> <i>Register Here</i></b></a></p>            
             
            </div>
          </form>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>