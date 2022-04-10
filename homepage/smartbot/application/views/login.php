<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

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
            border-radius: 10%;
            left: 55%;

            margin-top: 10%;
        }

        /* .d-padding {
            padding-top: 10%;
        } */

        /* For devices 768px and larger: */
        @media (max-width: 768px) {
            .background-image-login  {
                width: 100%;
                height: 768px;
                background-image: url('<?= APP_URL_IMG.'moon1.jpg' ?>');
                background-size: cover;
                border: 1px solid black;
            }

            .d-login {
                /* position: absolute; */
                backdrop-filter: blur(3px);
                border: 2px solid #000;
                border-radius: 10%;

                left: 0;

                margin-top: 25%;
                margin-left: 10px;
            }
        }


    </style>

</head>
<body>
    <div class="background-image-login">
        <div class="col-12  text-center">
            <div class="row">
                <div class="col-12 col-md-4 d-login">
                    <div class="row justify-content-center">
                        <!-- Pills content -->
                        <div class="col-10 tab-content">
                        
                                <form id="login-form" name="login" action="<?= base_url().'Login/check_login';?>" method="post">
                                    <p class="text-center text-white mt-5">SmartBot</p>

                                    <!-- Email input -->
                                    <div class="form-outline text-white mb-4">
                                        <input type="text" id="loginName" name="user" class="form-control" placeholder="Email or username"/>
                                        <!-- <label class="form-label" for="loginName">Email or username</label> -->
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline text-white mb-4">
                                        <input type="password" id="loginPassword" name="password" class="form-control" placeholder="Password"/>
                                        <!-- <label class="form-label" for="loginPassword">Password</label> -->
                                    </div>
                                    <p class='text-center text-danger'><?= $alert ?></p>


                                    <!-- 2 column grid layout -->
                                    <div class="row mb-4">
                                        <div class="col-md-12 d-flex justify-content-center">
                                        <!-- Simple link -->
                                        <a href="#!">Forgot password?</a>
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                                    <!-- Register buttons -->
                                    <div class="text-center">
                                        <p class="text-white">Not a member? <a href="<?= base_url().'Login/register' ?>">Register</a></p>
                                    </div>
                                </form>
                        </div>
                        <!-- Pills content -->
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>