<?php
session_start();
require 'functions.php';
$conn = koneksi();


if (isset($_SESSION["login"])) {
    header("Location: ../index.php#home");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (login($username, $password)) {
        header("Location: ../index.php#home");
        exit;
    } else {
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Health Pharmacy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/reglog.css" />
</head>

<body>

    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->

                </div>

                <div class="col-md-6 right">
                    <div class="input-box">

                        <header>Login account</header>
                        <?php if (isset($error)) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>salah!</strong> pastikan password dan username sudah sesuai.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <form action="" method="post">
                            <div class="input-field">
                                <input type="text" class="input" id="username" name="username" required autocomplete="off">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="show" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="cekbox px-2">
                                <label for="password">Show Password</label>
                                <input type="checkbox" onclick="ShowPw()">
                            </div>
                            <div class="input-field py-2">
                                <button type="submit" class="submit" name="login">Sign In</button>
                            </div>
                        </form>
                        <div class="signin">
                            <span>Belum mempunyai akun? <a href="../php/register.php">Daftar disini</a></span>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../tubes/js/main.js"></script>
    <script>
        function ShowPw() {
            var show = document.getElementById("show");
            if (show.type == "password") {
                show.type = "text";
            } else {
                show.type = "password";
            }
        }
    </script>
</body>

</html>