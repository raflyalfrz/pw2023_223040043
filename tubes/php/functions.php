<?php
define('BASE_URL', '/pw2023_223040043/tubes');


function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('Koneksi ke database gagal');
    return $conn;
}


function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
}


//untuk menambah data
function tambah($data)
{
    $conn = koneksi();
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $harga = htmlspecialchars($data['harga']);
    $Kategori_produk = htmlspecialchars($data['Kategori_produk']);
    $dosis_produk = htmlspecialchars($data['dosis_produk']);
    $deskripsi_produk = htmlspecialchars($data['deskripsi_produk']);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO produk VALUES(null, '$nama_produk', '$harga', '$Kategori_produk', '$dosis_produk', '$deskripsi_produk', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


// untuk upload gambar
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
        alert('Pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
    $ekstensiGambar = strtolower($ekstensiGambar);
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('Yang Anda upload bukan gambar!');
        </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('Ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    // generate nama file baru
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    // set path absolut untuk folder tujuan penyimpanan gambar
    $pathTujuan = $_SERVER['DOCUMENT_ROOT'] . '/pw2023_223040043/tubes/img/' . $namaFileBaru;

    // pindahkan file ke folder tujuan
    if (!move_uploaded_file($tmpName, $pathTujuan)) {
        echo "<script>
        alert('Gagal upload gambar!');
        </script>";
        return false;
    }

    return $namaFileBaru;
}


//untuk hapus data
function hapus($id)
{
    $conn = koneksi();
    $query = "DELETE FROM produk WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


//untuk merubah data
function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $harga = htmlspecialchars($data['harga']);
    $kategori_produk = htmlspecialchars($data['Kategori_produk']);
    $dosis_produk = htmlspecialchars($data['dosis_produk']);
    $deskripsi_produk = htmlspecialchars($data['deskripsi_produk']);
    $gambarLama = htmlspecialchars($data['gambarLama']);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE produk SET
                nama_produk = ?,
                harga = ?,
                Kategori_produk = ?,
                dosis_produk = ?,
                deskripsi_produk = ?,
                gambar = ?
              WHERE id = ?";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sissssi", $nama_produk, $harga, $kategori_produk, $dosis_produk, $deskripsi_produk, $gambar, $id);
    mysqli_stmt_execute($stmt);

    return mysqli_stmt_affected_rows($stmt);
}

//untuk seacrh
function cari($keyword)
{
    $query = "SELECT * FROM produk
                WHERE
                nama_produk LIKE '%$keyword%' OR
                deskripsi_produk LIKE '%$keyword%'";

    return query($query);
}


//untuk registrasi akun
function registrasi($data)
{
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$username', '$password')");

    return mysqli_affected_rows($conn);
}


//untuk login
function login($username, $password)
{
    $conn = koneksi();

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            $_SESSION["username"] = $row['username'];
            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row['id'], time() + 86400);
                setcookie('key', hash('sha256', $row['username']), time() + 86400);
            }

            return true;
        }
    }

    return false;
}


function isUserLoggedIn()
{
    if (isset($_SESSION["login"])) {
        return true;
    } else {
        return false;
    }
}




function dd($value)
{
    echo "<pre>";
    var_dump($value);
    die;
    echo "</pre>";
}


function uriIS($uri)
{
    return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
