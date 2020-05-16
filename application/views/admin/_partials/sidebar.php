<body class="hold-transition skin-green sidebar-mini">
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <li class="active treeview">
        <a href="#">
            <i class="glyphicon glyphicon-home"></i> <span>Dashboard</span>
          </a>
        <li class="treeview">
        <a href="<?php echo base_url()?>admin/SuratMasuk">
            <i class="fa fa-inbox"></i>
            <span>Surat Masuk</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url()?>admin/SuratKeluar">
            <i class="glyphicon glyphicon-envelope"></i>
            <span>Surat Keluar</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>admin/SuratKp"><i class="fa fa-circle-o"></i> Surat Izin KP</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Data Pegawai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>admin/TabelDekan"><i class="fa fa-circle-o"></i> Dekan</a></li>
            <li><a href="<?php echo base_url()?>admin/TabelWadek"><i class="fa fa-circle-o"></i> Wakil Dekan</a></li>
            <li><a href="<?php echo base_url()?>admin/TabelKajur"><i class="fa fa-circle-o"></i> Ketua Jurusan</a></li>
            <li><a href="<?php echo base_url()?>admin/TabelDosen"><i class="fa fa-circle-o"></i> Dosen</a></li>
          </ul>
        </>
    </section>
    <!-- /.sidebar -->
  </aside>
  </body>