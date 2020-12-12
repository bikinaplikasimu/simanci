<!-- Description -->
<div class="modal fade" id="platform">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
                <p id="desc"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Tambah Kunci</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="kunci_add.php">
                <div class="form-group">
                    <label for="idr" class="col-sm-3 control-label">Ruang</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="idr" name="idr" required>
                        <option value="" selected>- Pilih salah satu -</option>
                        <?php
                          $sql = "SELECT * FROM ruang";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id_ruang']."'>".$row['nm_ruang']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kode" class="col-sm-3 control-label">Kode</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="kode" name="kode" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ket" class="col-sm-3 control-label">Keterangan</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="ket" name="ket" rows="7"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Simpan</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Kunci</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="kunci_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_idr" class="col-sm-3 control-label">Nama Ruang</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="edit_idr" name="idr" required>
                       <option value="" selected>- Pilih salah satu -</option>
                        <?php
                          $sql = "SELECT * FROM ruang";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id_ruang']."'>".$row['nm_ruang']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_kode" class="col-sm-3 control-label">Kode</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_kode" name="kode" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_ket" class="col-sm-3 control-label">Keterangan</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="edit_ket" name="ket" rows="7"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Perbarui</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="kunci_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE KUNCI</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="genqr">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Generate kode</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="kunci_kode.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Kode</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="genkode" name="kode" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Qrcode</label>

                    <div class="col-sm-9">
                     <div id="qrcodeCanvas"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="update"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     