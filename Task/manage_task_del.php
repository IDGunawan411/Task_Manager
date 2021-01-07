<?php
    include "../koneksi.php";
    $kode_task    = $_GET['kodetsk'];
    $id_task      = $_GET['id_task'];

    $udp = mysqli_query($koneksi, "DELETE FROM task WHERE id_task='$id_task'");
    
    header("location:manage_task.php?kodetsk=$kode_task&alert=hapus");

?>