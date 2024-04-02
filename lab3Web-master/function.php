<?php
$conn = mysqli_connect("localhost", "root", "", "latihan");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_barang WHERE id_barang = $id");
    return mysqli_affected_rows($conn);

}
function edit($edit)
{
    global $conn;
    $id = $edit["id_barang"];
    $gambar = htmlspecialchars($edit["gambar"]);
    $nama = htmlspecialchars($edit["nama"]);
    $kategori = htmlspecialchars($edit["kategori"]);
    $harga_jual = htmlspecialchars($edit["harga_jual"]);
    $harga_beli = htmlspecialchars($edit["harga_beli"]);
    $stok = htmlspecialchars($edit["stok"]);

    $query = "UPDATE data_barang SET
    nama = '$nama',
    kategori = '$kategori',
    harga_jual = '$harga_jual',
    harga_beli = '$harga_beli',
    stok = '$stok',
    gambar = '$gambar'
    WHERE id_barang = $id
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


?>