<?php $menu = "Index"; ?>
<?php include "header.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper p-2">
    <div class="card">
        <div class="card-header row">
            <div class="text-left col-md-6">
                <h5>Data Mahasiswa</h5>
            </div>
            <div class="text-right col-md-6">
                <a href="create.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add Data</a>
            </div>
        </div> 
        <div class="table-responsive card-body">
            <table id="example1" class="nowrap fixed table-striped table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Kode Task</th><th>Nama Task</th><th>Isi Task</th><th>Jenis Task</th>
                        <th>Time Task</th><th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // run your code here
                        $qtsk   = "SELECT * FROM task";
                        $extsk  = $koneksi->prepare($qtsk);
                        $extsk->execute();
                        $dtsk   = $extsk->get_result();
                        while ($rowtask = $dtsk->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $rowtask['kode_task']; ?></td><td><?= $rowtask['nama_task'] ?></td>
                        <td><?= $rowtask['isi_task']; ?></td><td><?= $rowtask['jenis_task']; ?></td>
                        <td><?= $rowtask['time_task']; ?></td>    
                        <td>
                            <a href="#" id="update"><i class="fas fa-edit text-primary text-lg"></i></a>
                            <a href="hapus.php?act=hapus_data&id=<?= $b['id'] ?>&nama_mhs=<?= $b['nama'] ?>"><i class="fas fa-times text-danger text-lg"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("button").click(function(){
            $.ajax({
                type: 'POST',
                url: 'del.php',
                success: function(data) {
                    alert(data);
                    $("#div1").text(data);

                }
            });
        });
    });
</script>
<!-- /.content-wrapper -->
<?php include "footer.php"; ?>