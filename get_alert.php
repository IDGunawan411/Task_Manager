<?php 
if(isset($_GET['alert'])){ ?>

    <!-- Alert Hapus row -->
    <?php 
    if($_GET['alert']=='hapus_row'){ ?>

    <script type='text/javascript'>
        $(document).ready( function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2500
            });
            Toast.fire({
                icon: 'success',
                title: '&nbsp;&nbsp; Data Row Berhasil dihapus !',
            })
        });
    </script>
    <?php }?>
    
    <!-- Alert Tambah row -->
    <?php 
    if($_GET['alert']=='updtsk'){ ?>

    <script type='text/javascript'>
        $(document).ready( function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2500
            });
            Toast.fire({
                icon: 'info',
                title: '&nbsp;&nbsp; Berhasil Mengubah !'
            })
        });
    </script>
    <?php }?>

    <!-- Alert hapus data mahasiswa -->
    <?php 
    if($_GET['alert']=='hapus_mhs'){ ?>

    <script type='text/javascript'>
        $(document).ready( function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2500
            });
            Toast.fire({
                icon: 'success',
                title: "&nbsp;&nbsp; Data <?= $_GET['nama_mhs']; ?> Berhasil di hapus !"
            })
        });
    </script>
    <?php } ?>
    
    <!-- Alert Tambah data mahasiswa -->
    <?php 
    if($_GET['alert']=='tambah_mhs'){ ?>

    <script type='text/javascript'>
        $(document).ready( function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2500
            });
            Toast.fire({
                icon: 'info',
                title: '&nbsp;&nbsp; Data Mahasiswa Berhasil ditambah !'
            })
        });
    </script>
    <?php }?>
    
<?php }?>
