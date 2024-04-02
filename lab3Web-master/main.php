<?php
require 'function.php';
$result = mysqli_query($conn, "SELECT * FROM data_barang");

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Barang</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>SELAMAT DATANG DI TOKO AHOK</h1>
    <div class="main">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id barang</th>
            <th scope="col">gambar</th>
            <th scope="col">nama barang</th>
            <th scope="col">kategori</th>
            <th scope="col">harga jual</th>
            <th scope="col">harga beli</th>
            <th scope="col">stok</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <?php if ($result): ?>
          <?php while ($row = mysqli_fetch_array($result)): ?>
            <tbody class="table-group-divider">
              <tr>
                <td>
                  <?= $row['id_barang']; ?>
                </td>
                <td style="width: 100;"><img src="img/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>" width="50"></td>
                <td>
                  <?= $row['nama']; ?>
                </td>
                <td>
                  <?= $row['kategori']; ?>
                </td>
                <td>
                  <?= $row['harga_beli']; ?>
                </td>
                <td>
                  <?= $row['harga_jual']; ?>
                </td>
                <td>
                  <?= $row['stok']; ?>
                </td>
                <div class="action">
                  <td style="color: white;"><button type="button" class="btn btn-danger"> <a
                        style="color: white; text-decoration:none;" href="hapus.php ? id_barang=<?= $row["id_barang"] ?>"
                        onclick="return confirm('Yakin dihapus?')">Hapus</a></button>
                    <button type="button" class="btn btn-info edit"> <a style="color: white; text-decoration:none;"
                        href="edit.php ? id_barang=<?= $row["id_barang"] ?>">Edit</a></button>
                  </td>
              </tr>
            </tbody>
          <?php endwhile; else: ?>
          <tr>
            <td colspan="7">Belom ada data</td>

          </tr>
        <?php endif; ?>
      </table>
      <div class="tambah">
        <button type="button" class="btn btn-warning"> <a
            style="color: white; text-decoration:none; justify-content:center;" href="tambah.php">Tambah</a></button>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>