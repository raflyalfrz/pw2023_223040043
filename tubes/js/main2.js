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

//   ........................untuk membuat navbar toggler naik atau tertutup ketika nav-klik di klik............
// Dapatkan semua elemen nav-klik
var navLinks = document.querySelectorAll(".nav-klik");

// Tambahkan event handler pada setiap elemen nav-klik,......................
navLinks.forEach(function (navLink) {
  navLink.addEventListener("click", function () {
    // Dapatkan elemen navbar-collapse
    var navbarCollapse = document.querySelector(".navbar-collapse");

    // Hapus kelas 'show' dan tambahkan kelas 'collapse'
    navbarCollapse.classList.remove("show");
    navbarCollapse.classList.add("collapse");
  });
});

// ...........................Script untuk kontak form............................
const scriptURL =
  "https://script.google.com/macros/s/AKfycbyo_j7pLxHJCEKfLCv6D6ZB4V-Zh4QMNl43b7Uafvj3MovXK4fuxe-u2qijnbkGKjgJbw/exec";
const form = document.forms["kontak-form-company"];
const btnKirim = document.querySelector(".btn-kirim");
const btnLoading = document.querySelector(".btn-loading");
const myAlert = document.querySelector(".my-alert");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  // ketika tombol submit diklik
  // tampilkan tombol loading, hilangkan tombol kirim
  btnLoading.classList.remove("d-none");
  btnKirim.classList.add("d-none");
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => {
      console.log("Success!", response);
      // setelah request selesai,
      // hilangkan tombol loading, tampilkan tombol kirim
      btnLoading.classList.add("d-none");
      btnKirim.classList.remove("d-none");
      //   tampilkan tombol alert....................
      myAlert.classList.toggle("d-none");
      //   reset formnya.............
      form.reset();
    })
    .catch((error) => {
      console.error("Error!", error.message);
      // setelah request selesai,
      // hilangkan tombol loading, tampilkan tombol kirim
      btnLoading.classList.add("d-none");
      btnKirim.classList.remove("d-none");
    });
});

function noacces(event) {
  event.preventDefault();

  Swal.fire({
    title: "Maaf fitur ini belum tersedia!",
    imageUrl: "./img/no.png",
    imageAlt: "Custom image",
    background: "#fff",
    customClass: {
      title: "text-dark",
      content: "text-dark",
      confirmButton: "text-white bg-dark",
    },
  });
}
