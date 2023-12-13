<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--BOOTSTRAP IMPLEMENTATION-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!--BOOTSTRAP IMPLEMENTATION-->
        <!--FONT AWESOME IMPLEMENTATION-->
        <script src="https://kit.fontawesome.com/a176545576.js" crossorigin="anonymous"></script>
        <!--FONT AWESOME IMPLEMENTATION-->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
        <!--SWIPER JS IMPLEMENTATION-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <title>BioDyslexia</title>
    </head>
    <body>
      <div class="container w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="row border rounded-5 p-3 bg-white shadow box-area ">
            <div class="col-md-6 rounded-5 d-flex justify-content-center align-items-center flex-column left-box2">
                <div class="Register-image">
                    <img src="images/signimg.jpg" class="img-fluid" style="width: 420px; height: 300px;">
                </div>
            </div>
            <div class="col-md-6 right-box2">
                <div class="row align-items-center">
                    <div class="register-header-text">
                        <p class="text-wrap text-center hovertext2" style="font-family: Poppins;">You are one step closer!</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="First name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Last name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="checkbox" name="gendercheckbox" id="malecheckbox">
                        <label for="genderbox"><small class="malebox p-2">Male</small></label>
                        <input type="checkbox" name="gendercheckbox" id="femalecheckbox">
                        <label for="genderbox"><small class="femalebox p-2">Female</small></label>
                        <label for="Dateofbirth"><small class="Dateofbirthbox p-3">Date of Birth</small></label>
                        <input type="date"  class="" name="Dateofbirth" id="clientbirthdate">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg bg-light fs-6" name="emailbox" id="clientemail" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" name="pswdbox" id="clientpass" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control form-control-lg bg-light fs-6" name="phonenumberbox" id="clientphoneno" placeholder="Phone Number">
                    </div>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-outline-primary w-100 h-100">Register</button>
                    </div>
                    <a class="input-group mb-3" href="/Login">
                        <button type="button" class="btn btn-outline-primary w-100 h-100">Already have an account? login here</button>
                    </a>
                    
                </div>
            </div>
        </div>
      </div>

    </body>


</html>