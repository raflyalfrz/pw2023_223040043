<?php
require 'functions.php';
$conn = koneksi();
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: ../index.php");
            exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Health Pharmacy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/logreg.css" />

    <!-- .....................Link font....................... -->
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">

    <!-- ......................Link Icon...................... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                        <div class="button-group">
                            <button type="submit" class="btn12" name="admin">Admin</button>
                            <button type="submit" class="btn1" name="user"><a class="nav-link" href="login.php">User</a></button>
                        </div>
                        <br>
                        <header>Login account admin</header>
                        <?php if (isset($error)) : ?>
                            <p style="color: red; font-style: italic;">username / password salah</p>
                        <?php endif; ?>
                        <form action="" method="post">
                            <div class="input-field">
                                <input type="text" class="input" id="username" name="username" required autocomplete="off">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required>
                                <label for="password">Password</label>
                            </div>

                            <div class="input-field">
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
</body>

</html>