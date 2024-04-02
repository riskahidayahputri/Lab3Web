<?php
require ('function.php');

$id = $_GET["id_barang"];

$dt = query("SELECT * FROM data_barang WHERE id_barang = $id")[0]; //0 untuk akses ke semua database

if (isset ($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo "
          <script>
          alert ('data berhasil di ubah');
          document.location.href='main.php'
          </script>   
              ";
    } else {
        echo "
              <script> alert('data gagal ubah'); 
              document.location.href='main.php'
              </script>
          ";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<style>
    body {
        font-family: tahoma, sans-serif;
        background-color: white;
        background-repeat: no-repeat;
    }

    .container {
        background-color: #978D97;
        background: transparent;
        backdrop-filter: blur(20px);
        margin-top: 40px;
        padding: 10px 10px;
        border: 2px solid whitesmoke;
        border-radius: 11px;
        width: 600px;
        height: auto;
    }

    .form {
        justify-content: center;
        padding: 0 30px;
        font-size: 15px;
        color: black;
    }

    .tmb {
        color: black;
    }
</style>

<body>
    <div class="container">
        <h1 style="text-align: center;" class="tmb">EDIT DATA</h1>
        <form class="form" action="" method="post">
            <input type="hidden" name="id_barang" value="<?= $dt["id_barang"]; ?>">
            <div class="mb-3">
                <label class="form-label text-center" for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" required placeholder="masukan nama"
                    autocomplete="off" value="<?= $dt["nama"]; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label text-center" for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control" id="kategori" required
                    placeholder="Masukan kategori" autocomplete="off" value="<?= $dt["kategori"]; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label text-center" for="harga_jual">Harga jual</label>
                <input type="text" class="form-control" name="harga_jual" id="harga_jual" required
                    placeholder="Masukan harga jual" autocomplete="off" value="<?= $dt["harga_jual"]; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label text-center" for="harga_beli">Harga beli</label>
                <input type="text" class="form-control" name="harga_beli" id="harga_beli" required
                    placeholder="Masukan harga beli" autocomplete="off" value="<?= $dt["harga_beli"]; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label text-center" for="stok">Stok barang</label>
                <input type="text" class="form-control" name="stok" id="stok" required placeholder="stok barang"
                    autocomplete="off" value="<?= $dt["stok"]; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label text-center" for="gambar">Gambar</label>
                <input type="text" class="form-control" name="gambar" id="gambar" required placeholder="gambar"
                    autocomplete="off" value="<?= $dt["gambar"]; ?>">
            </div>
            <button class="btn btn-primary text-center" type="submit" name="submit" id="submit"
                onclick=" return confirm('apakah Sudah benar?');">Save</button>
            <button class="btn btn-warning"><a href="main.php"
                    style="text-decoration:none; color:white;">Cancel</a></button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>