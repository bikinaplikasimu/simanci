<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo 'images/profile.png'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?=$_SESSION['status']?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">LAPORAN</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class=""><a href="his_kunci.php"><span class="fa fa-history"></span> <span>History Kunci</span></a></li>
      <li class="header">KELOLA</li>
      <li class=""><a href="petugas.php"><i class="fa fa-users"></i> <span>Petugas</span></a></li>
      <li class=""><a href="ruang.php"><i class="fa fa-tasks"></i> <span>Ruang</span></a></li>
      <li class=""><a href="kunci.php"><i class="fa fa-key"></i> <span>Kunci</span></a></li>
      <li class="header">PENGATURAN</li>
      <li class=""><a href="pinjam.php"><i class="fa fa-cog"></i> <span>Peminjaman</span></a></li>
      <li class=""><a href="kembali.php"><i class="fa fa-cog"></i> <span>Pengembalian</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
