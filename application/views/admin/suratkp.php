<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

<?php $this->load->view("admin/_partials/navbar.php") ?>
<?php $this->load->view("admin/_partials/sidebar.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        SURAT IZIN KP
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Surat Izin Kp</li>
    </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
        <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
                </div>
            </div>
        </div>
        
            <div class="box-body table-responsive">
            <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>No Surat</th>
                <th>Tgl Surat</th>
                <th>Nama Intansi</th>
                <th>Alamat Intansi</th>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Semester</th>
                <th>Lamanya</th>
                <th>Mulai Dari</th>
                <th>Sampai</th>
                <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php foreach ($surat_kp as $surat_kp): ?>
                <td><?php echo $surat_kp->no_surat ?></td>
                <td><?php echo $surat_kp->tanggal_surat ?></td>
                <td><?php echo $surat_kp->nama_intansi ?></td>
                <td><?php echo $surat_kp->alamat_intansi ?></td>
                <td><?php echo $surat_kp->nama_lengkap ?></td>
                <td><?php echo $surat_kp->nim ?></td>
                <td><?php echo $surat_kp->jurusan ?></td>
                <td><?php echo $surat_kp->semester ?></td>
                <td><?php echo $surat_kp->lamanya ?></td>
                <td><?php echo $surat_kp->mulai_tgl ?></td>
                <td><?php echo $surat_kp->akhir_tgl ?></td>
                <td>
                    <a href="<?php echo base_url('admin/SuratKp/edit_form/'.$surat_kp->no_surat)?>" class="btn btn-warning" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="<?php echo base_url('admin/SuratKp/hapus/'.$surat_kp->no_surat)?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                    <a href="<?php echo base_url('admin/Cetak/index/'.$surat_kp->no_surat)?>" target="_blank" class="btn btn-success target="_blank"><i class="glyphicon glyphicon-print"></i></a>
                </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->


</div>
<?php $this->load->view("admin/_partials/footer.php") ?>
<?php $this->load->view("admin/_partials/control-sidebar.php") ?>
<!-- ./wrapper -->
<?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>
