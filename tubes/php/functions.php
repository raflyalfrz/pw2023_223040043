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


function tambah($data)
{
    $conn = koneksi();
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $harga = htmlspecialchars($data['harga']);
    $dosis_produk = htmlspecialchars($data['dosis_produk']);
    $deskripsi_produk = htmlspecialchars($data['deskripsi_produk']);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO produk VALUES(null, '$nama_produk', '$harga', '$dosis_produk', '$deskripsi_produk', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


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
    $pathTujuan = $_SERVER['DOCUMENT_ROOT'] . '/pw2023_223040043/contoh/img/' . $namaFileBaru;

    // pindahkan file ke folder tujuan
    if (!move_uploaded_file($tmpName, $pathTujuan)) {
        echo "<script>
        alert('Gagal upload gambar!');
        </script>";
        return false;
    }

    return $namaFileBaru;
}



function hapus($id)
{
    $conn = koneksi();
    $query = "DELETE FROM produk WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $harga = htmlspecialchars($data['harga']);
    $dosis_produk = htmlspecialchars($data['dosis_produk']);
    $deskripsi_produk = htmlspecialchars($data['deskripsi_produk']);
    $gambar = htmlspecialchars($data['gambar']);


    $query = "UPDATE FROM produk 
            SET
            nama_produk = '$nama_produk',
            harga = '$harga',
            dosis_produk = '$dosis_produk',
            deskripsi_produk = '$deskripsi_produk',
            gambar = 'gambar'
            WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * FROM produk
                WHERE
                nama_produk LIKE '%$keyword%' OR
                deskripsi_produk LIKE '%$keyword%'";

    return query($query);
}

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
