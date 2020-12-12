<?php //error_reporting(0); ?>
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
       Daftar Kunci
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kunci</li>
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

            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Tambah Kunci</a>
            </div>
          <?php //} ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Kode Kunci</th>
                  <th>Nama Ruang</th>
                  <th>Keterangan</th>
                  <th>Opsi</th>
                </thead>
                <tbody>

                  <?php

                    $sql = "SELECT * from kunci";

                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$row['kode']." 
                          <a href='#editkode' data-toggle='modal' class='btn btn-primary pull-right genqr' data-id='".$row['id_kunci']."'><span class='fa fa-qrcode'> Lihat QR</span></a>
                          </td>
                          <td>".kol_tabel($conn,"nm_ruang","ruang","where id_ruang='$row[id_ruang]'")." </td>
                          <td>".$row['keterangan']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id_kunci']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id_kunci']."'><i class='fa fa-trash'></i> Hapus</button>
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
  <?php include 'includes/kunci_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.genqr', function(e){
    e.preventDefault();
    $('#genqr').modal('show');
    var id = $(this).data('id');
    getRow(id);
    //genQR(id);
  });

  $(document).on('click', '.platform', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'kunci_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id_kunci);
      $('#edit_kode').val(response.kode);
      $('#edit_ket').val(response.keterangan);
      $('#edit_idr').val(response.id_ruang);
      $('#genkode').val(response.kode);
      // $('#posselect').val(response.id_ruang).html(response.description); 
      genQR(response.kode);
      // console.log(response.kode);     
    }
  });
}

function genQR(id){
   $('#qrcodeCanvas').html("");
    jQuery('#qrcodeCanvas').qrcode({
    text  : ""+id
  }); 
    // console.log(id);   
}
</script>
</body>
</html>
