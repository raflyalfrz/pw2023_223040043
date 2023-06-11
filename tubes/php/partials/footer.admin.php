<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../js/admin2.js"></script>
<script>
    //untuk tampilan alert ketika hapus diklik
    function confirmDelete(event) {
        event.preventDefault(); // Prevent the default link behavior

        Swal.fire({
            title: "Apa kamu yakin?",
            text: "Data akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                // Proceed with deleting the file
                Swal.fire("Deleted!", "Your file has been deleted.", "sukses").then(
                    () => {
                        // Redirect or perform any necessary actions after deletion
                        window.location.href = "../php/hapus.php?id=<?php echo $brg['id'] ?>";
                    }
                );
            }
        });
    }
</script>
</body>

</html>