<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("user/_partials/head.php") ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php $this->load->view("user/_partials/sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view("user/_partials/navbar.php") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Buat Surat</h1>
          </div>

          <div id="page-wrapper">
            <div class="container-fluid">
    
        <form action="<?php echo base_url().'admin/SuratKp/add'; ?>" method="post">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="InputTujuan">Nomor Surat</label>
                    <input type="text" class="form-control" id="InputNomorSurat" placeholder="Nomor Surat" value="B-<?php echo sprintf("%04s", $no_surat);?>Un.05III.7PP.00.9<?php  echo date('m');?><?php echo date('Y');?>"name="no_surat" readonly>
                </div>
                <div class="form-group">
                    <label for="InputTanggal">Tanggal Surat</label>
                        <input type="date" class="form-control" id="InputTanggal" placeholder="Tanggal" name="tanggal_surat">
                </div>
                <div class="form-group">
                    <label for="InputNomorSurat">Nama Intansi</label>
                        <input type="text" class="form-control" id="InputNomorSurat" placeholder="Nama Instansi" name="nama_intansi">
                </div>
                <div class="form-group">
                    <label for="InputNomorSurat">Alamat Intansi</label>
                        <input type="text" class="form-control" id="InputNomorSurat" placeholder="Nama Instansi" name="alamat_intansi">
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
                
                    <button type="submit" class="btn btn-success col-md-12">Submit</button>        
      </form>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <?php $this->load->view("user/_partials/footer.php") ?>


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  <?php $this->load->view("user/_partials/scrolltop.php") ?>
  <?php $this->load->view("user/_partials/modal.php") ?>
  <?php $this->load->view("user/_partials/js.php") ?>
</body>

</html>
