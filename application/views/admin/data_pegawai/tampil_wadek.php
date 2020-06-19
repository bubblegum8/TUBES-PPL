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
        DATA WAKIL DEKAN
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Wakil Dekan</li>
    </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
        <a href="<?php echo site_url('admin/TabelWadek/add') ?>" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
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
                <th>NIP</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th>ALAMAT</th>
                <th>NO TELP</th>
                <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($wadek as $wadek): ?>
                <tr>
                    <td>
                        <?php echo $wadek->nip ?>
                    </td>
                    <td>
                        <?php echo $wadek->nama ?>
                    </td>
                    <td>
                        <?php echo $wadek->jurusan ?>
                    </td>
                    <td>
                        <?php echo $wadek->alamat ?>
                    </td>
                    <td>
                        <?php echo $wadek->telp ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('admin/TabelWadek/edit/' .$wadek->id_wadek) ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="<?php echo site_url('admin/TabelWadek/delete/'.$wadek->id_wadek) ?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
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
