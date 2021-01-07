<?php
    include "../koneksi.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $kode_task   = $_POST['kode_task'];
        $nama_task   = $_POST['nama_task'];
        $isi_task    = $_POST['isi_task'];
        $jenis_task    = $_POST['jenis_task'];

        $time_task   = date('d-m-Y');

        $addtsk   = "INSERT INTO task(id_task,kode_task,nama_task,isi_task,jenis_task,time_task) VALUES
        (NULL,'$kode_task','$nama_task','$isi_task','$jenis_task','$time_task')";
        mysqli_query($koneksi, $addtsk);

        if($jenis_task=='Task List'){
           header('location:list_task.php');
        }else{
           header("location:manage_task.php?kodetsk=$kode_task");
        }
    }
?>