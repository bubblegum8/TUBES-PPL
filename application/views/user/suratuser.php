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
    <div class="row">
        <form role="form">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="InputTujuan">Tujuan</label>
                    <select class="form-control">
                          <option>Rektor</option>
                          <option>Wakil Rektor Bidang Akademik</option>
                          <option>Wakil Rektor Bidang Keuangan dan Kepegawaian</option>
                          <option>Wakil Rektor Bidang Kemahasiswaan</option>
                          <option>Wakil Rektor Bidang Kerjasama dan Humas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="InputTanggal">Tanggal</label>
                        <input type="date" class="form-control" id="InputTanggal" placeholder="Tanggal">
                </div>
                <div class="form-group">
                    <label for="InputNomorSurat">Nomor Surat</label>
                        <input type="text" class="form-control" id="InputNomorSurat" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                    <label for="InputLampian">Lampiran</label>
                    <select class="form-control">
                          <option>1 Lampiran</option>
                          <option>2 Lampiran</option>
                          <option>3 Lampiran</option>
                          <option>4 Lampiran</option>
                          <option>5 Lampiran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="InputPerihal">Perihal</label>
                        <input type="text" class="form-control" id="InputPerihal" placeholder="Perihal">
                </div>
                <div class="form-group">
                    <label for="InputStatusSurat">Status Surat</label>
                    <select class="form-control">
                          <option>1 Penting</option>
                          <option>2 Rahasia</option>
                          <option>3 Segera</option>
                          <option>4 Biasa</option>
                    </select>
                </div>
                <div style="position:relative;">
                    <a class='btn btn-primary' href='javascript:;'>
                        Unggah Data.
                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                    </a>
                    &nbsp;
                   <span class='label label-info' id="upload-file-info"></span>
                </div>
                
                
                <div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </div> 

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
