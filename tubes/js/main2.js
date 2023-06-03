//untuk menjalankan live searching
// ambil elemen2 yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // buat object ajax
  var xhr = new XMLHttpRequest();

  //cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };
  //eksekusi ajax
  xhr.open("GET", "js/ajax/produk.php?keyword=" + keyword.value, true);
  xhr.send();
});

function loadProduk(kategori) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("container").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "js/ajax/kategori.php?kategori=" + kategori, true);
  xmlhttp.send();
}
