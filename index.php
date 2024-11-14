<?php 
    session_start();
    $email = (isset($_POST['email'])) ? $_POST['email'] : "";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "";
    $message = "";
    if(isset($_GET['logout']) && $_GET['logout'] == true){
       $message = "";
    } else {
        if($email == "joemarcdelosreyes01@gmail.com" && $password == "admin"){
            $_SESSION ['email'] = $email;
            $_SESSION ['password'] = $password;

            $message = "<div class='alert alert-success'>Login Successful</div>";
            echo "<script>window.location.href = 'pages/dashboard.php';</script>";
        } elseif($email == "" && $password == ""){
            $message = "<div class='alert alert-danger'>Please enter your email and password</div>";
        } else {
            $message = "<div class='alert alert-danger'>Login Failed</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body.bg-primary {
            background: url('../image/image1.jpeg') no-repeat center center fixed;
            background-size: cover;
        }
        .password-container {
            position: relative;
        }
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <?php echo $message; ?>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3 password-container">
                                            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                            <span class="password-toggle" onclick="togglePasswordVisibility()">
                                                <i class="fa fa-eye" id="toggleIcon"></i>
                                            </span>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('inputPassword');
            const toggleIcon = document.getElementById('toggleIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
