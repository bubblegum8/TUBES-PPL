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
        EDIT DATA KETUA JURUSAN
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Ketua Jurusan</li>
    </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
    <div class="box box-primary">
        <div class="box-header">
            <?php if ($this->session->flashdata('success'));?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success');?>
            </div>


            <a href="<?php echo site_url('admin/TabelKajur') ?>" class="btn btn-primary" role="button"><i class="fa fa-arrow-left"> Kembali</i></a>

            <form action="<?php base_url('admin/TabelKajur/edit') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $kajur->id_kajur?>">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" placeholder="NIP" name="nip" value="<?php echo $kajur->nip?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?php echo $kajur->nama?>">
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
                        <label for="alamat">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat Lengkap" name="alamat" value="<?php echo $kajur->alamat?>">
                    </div>
                    <div class="form-group">
                        <label for="telp">Nomor Kontak</label>
                            <input type="text" class="form-control"  placeholder="Nomor Kontak" name="telp" value="<?php echo $kajur->telp?>">
                    </div>
                    
                    <button type="submit" class="btn btn-success col-md-12" value="save" name="btn">Submit</button>        
            </form>
        
            
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