<?php
require 'function.php';

$id = $_GET["id_barang"];
if (hapus($id) > 0) {
    echo " <script type='text/javascript'>
    alert('data berhasil dihapus');
     document.location.href='main.php';
 </script>
 ";
} else {
    echo "
    <script> alert('data gagal di hapus'); 
    document.location.href='main.php';
    </script>
    ";
}
?>