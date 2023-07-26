


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
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

<style media="screen">
  label{
    font-size: .80em;
  }
</style>

  </head>

  <body>
    <!-- navbar -->
    <nav class="navbar  navbar-light navbar-floating">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">RHU HealthLink</a>
    </div>
    </nav>

    <section class="vh-100">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 px-0 d-none d-md-block">
            <img src="images/LogoforLogin.png" alt="Login image" class="w-100 vh-100" style="object-fit: auto; object-position: center; padding:10%; ">
            <h2>Sariaya RHU Online Appointment Scheduling</h2>
          </div>
          <div class="col-md-6" style="background-color:#19A7CE;   padding:2%;">
            <div class="d-flex align-items-center justify-content-center" style="background-color:white; padding: 5%; height:100%; border-radius:10%;">

              <form method="POST">
                <h3 style="color:#19A7CE;"><b>Sign Up</b></h3>
                <p style="text-align:left;color:#19A7CE;"><b>Personal Info</b></p>
          <div class="row">
            <div class="col">
              <div class="mb-3 form-floating">
                <input style="border-color:#19A7CE;"type="text" class="form-control" id="firstName" placeholder=" " >
                <label for="firstName" class="form-label">First Name</label>
              </div>
            </div></div>
            <div class="row">
              <div class="col">
                <div class="mb-3 form-floating">
                  <input style="border-color:#19A7CE;"type="text" class="form-control" id="middleName" placeholder=" ">
                  <label for="middleName" class="form-label">Middle Name</label>
                </div>
              </div>  </div>
              <div class="row">
            <div class="col">
              <div class="mb-3 form-floating">
                <input style="border-color:#19A7CE;" type="text" class="form-control" id="lastName" placeholder=" " >
                <label for="lastName" class="form-label">Last Name</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3 form-floating">
                <input style="border-color:#19A7CE;" type="date" class="form-control" id="birthday" >
                <label for="birthday" class="form-label">Birthday</label>
              </div>
            </div>

            <div class="col">
              <div class="mb-3 form-floating">
                <select style="border-color:#19A7CE;"class="form-select" id="gender" >
                  <option selected disabled></option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
                <label for="gender" class="form-label">Gender</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3 form-floating">
                <input style="border-color:#19A7CE;" type="tel" class="form-control" id="mobileNumber" placeholder=" " >
                <label for="mobileNumber" class="form-label">Mobile Number</label>
              </div>
            </div>
            <div class="col">
              <div class="mb-3 form-floating">
                <input type="email" class="form-control" id="email" placeholder=" " >
                <label for="email" class="form-label">Email</label>
              </div>
            </div>
            </div>

            <p style="text-align:left; color:#19A7CE;"><b>Create new username and password</b></p>
          <div class="row">
            <div class="col">
              <div class="mb-3 form-floating">
                <input style="border-color:#19A7CE;" name="user_name" type="text" class="form-control"  placeholder=" " required>
                <label for="username" class="form-label">Username</label>
              </div>
            </div>
          </div>

            <div class="row">
            <div class="col">
              <div class="mb-3 form-floating">
                <input style="border-color:#19A7CE;" type="password" name="password" class="form-control"  placeholder=" " required>
                <label for="password" class="form-label">Password</label>
              </div>
            </div>
            </div>
            <div class="row">
          <div class="col">
            <div class="mb-3 form-floating">
              <input style="border-color:#19A7CE;" type="password" class="form-control" id="confirmPassword" placeholder=" " >
              <label for="confirmPassword" class="form-label">Confirm Password</label>
            </div>
          </div>
          </div>


          <input id="button" value="Register" type="submit" class="btn btn-primary"style="color:white; background-color:#146C94; width:100%;">
          <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
          <p>Already have an account? <a href="login.php" class="link-info">Login Now</a></p>

        </form>
        </div>
          </div>
          </div>
        </div>

    </section>

  </body>
</html>
