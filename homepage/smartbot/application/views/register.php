<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- CSS Login -->
    <link rel="stylesheet" href="/css/login.css">

    <style>
        .background-image-login  {
            width: 100%;
            height: 1024px;
            background-image: url('<?= APP_URL_IMG.'moon.jpeg' ?>');
            background-size: cover;
            border: 1px solid black;
        }

        .d-login {
            /* position: absolute; */
            backdrop-filter: blur(3px);
            border: 2px solid #000;
            border-radius: 10px;
            /* left: 60%; */
        }

        .d-margin {
            margin-top: 20px;
            padding-bottom: 40px;
        }

        img {
            width: 480px;
        }

        /* For devices 768px and larger: */
        @media (max-width: 768px) {
            .background-image-login  {
                width: 100%;
                height: 540px;
                background-image: url('<?= APP_URL_IMG.'moon1.jpg' ?>');
                background-size: cover;
                border: 1px solid black;
            }
        }


    </style>

</head>
<body>
  <div class="row justify-content-md-center background-image-login">
    <div class="col-12 text-center">
        <div class="row justify-content-md-center pt-5">
            <!-- <div class="col-4"></div> -->
            <div class="col-9 d-login">
                <div class="container h-100 d-margin">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form class="mx-1 mx-md-4" id="login-form" name="register" action="<?= base_url().'Login/updateMember';?>" method="post">


                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                    <input type="text" id="form3Example1c" name="name" class="form-control" placeholder="Name"/>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                    <input type="email" id="form3Example3c" name="email" class="form-control" placeholder="Email"/>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                    <input type="password" id="form3Example4c" name="password" class="form-control" placeholder="Password"/>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                    <input type="password" id="form3Example4cd" name="re-password" class="form-control" placeholder="Repeat password"/>
                                    </div>
                                </div>
                                    <p class="text-danger"><?= $alert ?></p>
                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <a href="<?= base_url().'Login/';?>" class="btn btn-secondary btn-md mr-1">Login</a>
                                    <button type="submit" class="btn btn-primary btn-md">Register</button>
                                </div>

                                </form>

                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- <a href="<?= base_url().'Home/'; ?>" class="btn btn-success">Home Page</a>
        <p><?= APP_URL_IMG.'moon.jpeg' ?></p> -->
        <!-- <img src="<?= APP_URL_IMG.'moon.jpeg' ?>" alt="Italian Trulli"> -->
    </div>
  </div>


</body>
</html>