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
                <th>NO</th>
                <th>Tgl Masuk</th>
                <th>Tgl Surat/No. Surat/Perihal/Lampiran</th>
                <th>Kode Surat</th>
                <th>Asal Surat</th>
                <th>Jurusan</th>
                <th>Lampiran</th>
                <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <td>1</td>
                <td>16/05/2020</td>
                <td>Tgl Surat: 22/06/2020
                    No. Surat: 243/UIN/PW02
                    Perihal: Surat KP
                </td>
                <td>14045</td>
                <td>UIN SGD BANDUNG</td>
                <td>Teknik Informatika</td>
                <td>Upload PDF</td>
                <td>
                    <a href="#" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="#" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
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
