<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/fungsi.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Pengembalian
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengembalian</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
<!--             <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Tambah Pinjam</a>
            </div> -->
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Petugas</th>
                  <th>Kunci</th>
                  <th>Keterangan</th>
                  <th>Opsi</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * from his_key where status='kembali'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$row['tgl_pjm']."</td>
                          <td>".$row['tgl_kbl']."</td>
                          <td>".kol_tabel($conn,"nama","petugas","where id_petugas='$row[id_petugas]'")."</td>
                          <td>".kol_tabel($conn,"kode","kunci","where id_kunci='$row[id_kunci]'")."</td>
                          <td>".$row['keterangan']."</td>
                          <td>
                            <button class='btn btn-primary btn-sm cancel btn-flat' data-id='".$row['id_hk']."'><i class='fa fa-arrow-left'></i> Batalkan</button>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/pinjam_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.cancel', function(e){
    e.preventDefault();
    $('#cancel').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'pinjam_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id_hk);
      $('#edit_idp').val(response.id_petugas);
      $('#edit_idk').val(response.id_kunci);
      $('#edit_tglpinjam').val(response.tgl_pjm);
      $('#edit_keterangan').val(response.keterangan);
      $('.kodekunci').html(response.kode);
      $('.namapetugas').html(response.nama);
      console.log(response);
    }
  });
}
</script>
</body>
</html>
