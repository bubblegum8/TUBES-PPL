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
        Edit SURAT IZIN KP
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Surat Izin Kp</li>
    </ol>
    </section>
<!-- Main content -->
<section class="content">
<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Surat KP</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="" method="post">
              <div class="form-group">
                  <label>Nomor Surat</label>
                  <input type="text" name="no_surat" class="form-control" placeholder="Enter ..." readonly>
                </div>
                <div class="form-group">
                    <label for="InputTanggal">Tanggal Surat</label>
                        <input type="date" class="form-control" id="InputTanggal" placeholder="Tanggal" name="tanggal_surat">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Nama Intansi dan Alamat</label>
                  <textarea class="form-control" rows="3" placeholder="Nama Intansi dan Alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="InputNomorSurat">Nama Lengkap</label>
                        <input type="text" class="form-control" id="InputNomorSurat" placeholder="Nama Lengkap" name="nama_lengkap">
                </div>
                <div class="form-group">
                    <label for="InputPerihal">NIM</label>
                        <input type="text" class="form-control"  placeholder="NIM" name="nim">
                </div>
                <div class="form-group">
                    <label for="InputStatusSurat">Jurusan</label>
                    <select class="form-control" name="jurusan">
                          <option>Teknik Informatika</option>
                          <option>Teknik Elektro</option>
                          <option>Matematika</option>
                          <option>Agroteknologi</option>
                          <option>Biologi</option>
                          <option>Fisika</option>
                          <option>Kimia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="InputPerihal">Semester</label>
                        <input type="text" class="form-control"  placeholder="Semester" name="semester">
                </div>
                <div class="form-group">
                    <label for="InputPerihal">Lamanya</label>
                        <input type="text" class="form-control"  placeholder="Lama Magang" name="lamanya">
                </div>
                <div class="form-group">
                    <label for="InputPerihal">Mulai Dari</label>
                        <input type="date" class="form-control"  placeholder="NIM" name="mulai_tgl">
                </div>
                <div class="form-group">
                    <label for="InputPerihal">Sampai</label>
                        <input type="date" class="form-control"  placeholder="Sampai Dengan" name="akhir_tgl">
                </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->


</div>
<?php $this->load->view("admin/_partials/footer.php") ?>
<?php $this->load->view("admin/_partials/control-sidebar.php") ?>
<!-- ./wrapper -->
<?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>
