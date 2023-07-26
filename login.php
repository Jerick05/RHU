

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/23688bd133.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">

  </head>

  <body >
    <!-- navbar -->
    <nav class="navbar  navbar-light navbar-floating">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">RHU HealthLink</a>
    </div>
    </nav>

    <section class="vh-100">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="images/LogoforLogin.png" alt="Login image" class="w-100 vh-100" style="object-fit: auto; object-position: center; padding:10%; ">
            <h2>Sariaya RHU Online Appointment Scheduling</h2>
          </div>
          <div class="col-sm-6" style="background-color:#19A7CE;  text-align: center; padding:5%;">
            <div class="d-flex align-items-center justify-content-center" style="background-color:white; padding: 10%; height:100%; border-radius:10%;">

              <form method="POST" style="width: 23rem; " >

                <h3 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px; color:#19A7CE;">Log in</h3>

                <div class="form-floating mb-3" >
                  <input style="border-color:#19A7CE;"type="text" class="form-control" id="floatingInput" placeholder="username">
                  <label style="color: gray;" for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                  <input style="border-color:#19A7CE;"type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label style="color: gray;" for="floatingPassword">Password</label>
                  <br>
                </div>

                <div class="pt-1 mb-4">
                  <button class="btn btn-lg btn-block w-100" type="submit" style="color:white; background-color:#146C94;">Login</button>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                <p>Don't have an account? <a href="signup.php" class="link-info">Register here</a></p>

              </form>



          </div>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>
