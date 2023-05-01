<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/logreg.css">

    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet" />
</head>

<body>
    <section>
        <div class="daftar">
            <h1>Daftar</h1>

            <form class="needs-validation">
                <div class="form-group was-validated">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" type="text" id="Username" required>
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" id="password" required>
                </div>

                <div class="form-group was-validated">
                    <label class="form-label" for="password">Konfirmasi Password</label>
                    <input class="form-control" type="password" id="password" required>
                </div>

                <button class="btn w-100">
                    <a class="nav-link" href="../php/login.php">Daftar</a>
                </button>
                <p class="py-3">Sudah punyai akun? <a href="../php/login.php">klik disini</a> untuk login</p>
            </form>

        </div>
    </section>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>