<html>
    <body>
        <?php
        $kdbarang = $_POST['kdbarang'];
        $nmbarang = $_POST['nmbarang'];
        $satuan = $_POST['satuan'];
        $warna = $_POST['warna'];
        $jumlah = $_POST['jumlah'];
        $conn = mysqli_connect ("localhost","root","","persediaandb");
        if (mysqli_connect_errno()){
            echo  "Koneksi Gagal".mysqli_connect_error();
        }
        $query = mysqli_query($conn,"update barang set nmbarang='$_POST[nmbarang]', satuan='$_POST[satuan]', warna='$_POST[warna]', jumlah='$_POST[jumlah]' where kdbarang='$_POST[kdbarang]'");
        ?>
        data sudah di update
        <a href = "DaftarBarang.php">lihat data</a>

    </body>
</html>