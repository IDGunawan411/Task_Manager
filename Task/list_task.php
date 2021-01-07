<?php $menu = "List Task"; ?>
<?php include "../header.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper p-2">
    <div class="card">
        <div class="card-header row">
            <div class="text-left col-md-6">
                <h5>List Task</h5>
            </div>
            <div class="text-right col-md-6">
                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1"><i class="fas fa-plus"></i> Add Data</a>
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content text-left">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Task</h5>
                            </div>
                            <div class="modal-body">
                                <form action="list_task_add.php" method="post">
                                    <span>Kode Task</span>
                                    <input type="text" class="form-control mb-2" name="kode_task">
                                    <span>Nama Task</span>
                                    <input type="text" class="form-control mb-2" name="nama_task">
                                    <span>Deskripsi</span>
                                    <textarea class="form-control mb-2" rows="2" name="isi_task"></textarea>
                                    <input type="submit" class="btn btn-sm btn-primary" value="Save">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="table-responsive card-body">
            <div class="row">
                <?php
                    $qtsk   = "SELECT * FROM task WHERE jenis_task='Task List'";
                    $extsk  = $koneksi->prepare($qtsk);
                    $extsk->execute();
                    $dtsk   = $extsk->get_result();
                    while ($rowtask = $dtsk->fetch_assoc()) { ?>
                    <a class="col-md-6 text-dark" href="manage_task.php?kodetsk=<?= $rowtask['kode_task']; ?>">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text h5"><?= $rowtask['kode_task']." - ".$rowtask['nama_task']; ?></span>
                                <span class="info-box-number"><?= $rowtask['isi_task']; ?></span>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
<?php include "../footer.php"; ?>