<?php
    include "../koneksi.php";
    $id_task    = $_GET['id_task'];
    $jenis_task = $_GET['acc'];
    $kode_task  = $_GET['kodetsk'];

    $udp = mysqli_query($koneksi, "UPDATE task SET jenis_task='$jenis_task' WHERE id_task='$id_task'");
    
    header("location:manage_task.php?kodetsk=$kode_task");

?>