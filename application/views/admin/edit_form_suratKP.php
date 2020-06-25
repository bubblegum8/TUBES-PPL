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
            <?php foreach($surat_kp as $surat){ ?>
              <form role="form" action="<?php echo base_url(). 'admin/SuratKp/update'; ?>" method="post">
              <div class="form-group">
                  <label>Nomor Surat</label>
                  <input type="text" name="no_surat" class="form-control" value="<?php echo $surat->no_surat ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="InputTanggal">Tanggal Surat</label>
                        <input type="date" class="form-control" id="InputTanggal" value="<?php echo $surat->tanggal_surat ?>" name="tanggal_surat">
                </div>
            
                <div class="form-group">
                    <label for="InputNomorSurat">Nama Intansi</label>
                        <input type="text" class="form-control" id="InputNomorSurat"name="nama_intansi" value="<?php echo $surat->nama_intansi ?>">
                </div>
                <div class="form-group">
                    <label for="InputNomorSurat">Alamat Intansi</label>
                        <input type="text" class="form-control" id="InputNomorSurat"name="alamat_intansi" value="<?php echo $surat->alamat_intansi ?>">
                </div>
                <div class="form-group">
                    <label for="InputNomorSurat">Nama Lengkap</label>
                        <input type="text" class="form-control" id="InputNomorSurat" value="<?php echo $surat->nama_lengkap?>" name="nama_lengkap">
                </div>
                <div class="form-group">
                    <label for="InputPerihal">NIM</label>
                        <input type="text" class="form-control"  value="<?php echo $surat->nim ?>" name="nim">
                </div>
                <div class="form-group">
                    <label for="InputStatusSurat">Jurusan</label>
                    <select class="form-control" name="jurusan" value="<?php echo $surat->jurusan ?>">
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
                        <input type="text" class="form-control"  value="<?php echo $surat->semester ?>" name="semester">
                </div>
                <div class="form-group">
                    <label for="InputPerihal">Lamanya</label>
                        <input type="text" class="form-control"  value="<?php echo $surat->lamanya ?>" name="lamanya">
                </div>
                <div class="form-group">
                    <label for="InputPerihal">Mulai Dari</label>
                        <input type="date" class="form-control"  value="<?php echo $surat->mulai_tgl ?>" name="mulai_tgl">
                </div>
                <div class="form-group">
                    <label for="InputPerihal">Sampai</label>
                        <input type="date" class="form-control"  value="<?php echo $surat->akhir_tgl ?>" name="akhir_tgl">
                </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
              </form>
              <?php } ?>
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
