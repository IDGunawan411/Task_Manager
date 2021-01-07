<?php $menu = "Task"; ?>
<?php include "../header.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper p-2">
    
    <div class="row p-2">
        <div class="text-left col-md-6">
            <h5>Manage Task<h5>
        </div>
        <div class="text-right col-md-6">
            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal2"><i class="fas fa-plus"></i> Add Card</a>
            <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal1"><i class="fas fa-plus"></i> Add Data</a>
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
                                <input type="text" class="form-control mb-2" name="kode_task" value="<?= $_GET['kodetsk'] ?>" readonly>
                                <span>Nama Task</span>
                                <input type="text" class="form-control mb-2" name="nama_task">
                                <span>Progress</span>
                                <select name="jenis_task" id="" class="form-control">
                                    <option value="0" readonly>-- Pilih Progress --</option>
                                    <?php
                                        $qprg = mysqli_query($koneksi, "SELECT * FROM task WHERE NOT jenis_task='Task List' AND kode_task='$_GET[kodetsk]' GROUP BY jenis_task");
                                        while($prg = mysqli_fetch_array($qprg)){ ?>
                                        <option value="<?= $prg['jenis_task'] ?>"><?= $prg['jenis_task'] ?></option>
                                    <?php } ?>
                                </select>
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
            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content text-left">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Task</h5>
                        </div>
                        <div class="modal-body">
                            <form action="list_task_add.php" method="post">
                                <span>Kode Task</span>
                                <input type="text" class="form-control mb-2" name="kode_task" value="<?= $_GET['kodetsk'] ?>" readonly>
                                <span>Jenis Task</span>
                                <input type="text" class="form-control mb-2" name="jenis_task">
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
    <?php 
        $sqlmng = mysqli_query($koneksi, "SELECT * FROM task WHERE kode_task='$_GET[kodetsk]' AND NOT jenis_task='Task List' GROUP BY jenis_task DESC");
        while($mng    = mysqli_fetch_array($sqlmng)){
    ?>
    <div class="card">
        <div class="card-header"><?= $mng['jenis_task'] ?></div>
        <div class="card-body">
            <div class="row">
                <?php
                    $qtsk    = "SELECT * FROM task WHERE jenis_task='$mng[jenis_task]' AND kode_task='$_GET[kodetsk]'";
                    $mngtsk  = mysqli_query($koneksi,$qtsk);
                    while ($rowtask = mysqli_fetch_array($mngtsk)) { 
                    if($rowtask['nama_task']==NULL){ ?>
                    <?php }else{ 
                        $uniq    = '1234567';
                        $nouniq  = str_shuffle($uniq);
                        $random  = substr($nouniq, 0,1);
                        $bg      = array("","info","primary","dark","danger","purple","teal","warning")
                    ?>
                        <a class="col-md-6 text-dark" href="#" data-toggle="modal" data-target="#myModal1<?= $rowtask['id_task'] ?>">
                            <div class="info-box">
                                <span class="info-box-icon bg-<?= $bg[$random]; ?> elevation-2"><i class="fas fa-cog"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text h5"><?= $rowtask['kode_task']." - ".$rowtask['nama_task']; ?></span>
                                    <span class="info-box-number"><?= $rowtask['isi_task']; ?></span>
                                </div>
                            </div>
                        </a>
                        <div class="modal fade" id="myModal1<?= $rowtask['id_task'] ?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content text-left">
                                    <div class="modal-body">
                                        <h5 class="modal-title">Action Task</h5><hr>
                                        <?php 
                                            $task = mysqli_query($koneksi, "SELECT * FROM task WHERE id_task='$rowtask[id_task]'");
                                            $dtsk = mysqli_fetch_array($task);
                                        ?>
                                        <div class="card p-2">
                                            <p class="h5 mb-2 text-<?= $bg[$random]; ?>"><?= $dtsk['nama_task'] ?></p>
                                            <p class="h5 mb-2"><?= $dtsk['isi_task'] ?></p>
                                        </div>
                                        <hr>
                                        <?php 
                                            $jntask = mysqli_query($koneksi, "SELECT * FROM task WHERE NOT jenis_task='Task List' AND kode_task='$_GET[kodetsk]' GROUP BY jenis_task");
                                            while($jn = mysqli_fetch_array($jntask)){
                                        ?>
                                        <a href="manage_task_acc.php?acc=<?= $jn['jenis_task'] ?>&kodetsk=<?= $rowtask['kode_task']; ?>&id_task=<?= $rowtask['id_task'] ?>" 
                                        class="btn bg-<?= $bg[$random]; ?> btn-sm"><?= $jn['jenis_task']; ?></a>
                                        <?php } ?>
                                        <button type="button" class="btn btn-danger btn-sm float-right" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<!-- /.content-wrapper -->
<?php include "../footer.php"; ?>