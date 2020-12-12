<!-- Add Scan-->
<div class="modal fade" id="addnewscan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Tambah Pinjam with scanner</b></h4>
            </div>
            <div class="modal-body">

              <form class="form-horizontal" method="POST" action="pinjam_add.php">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Kunci</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="multiple" name="idk" required>
                    </div>
                    <div class="col-sm-3">
                  <button class="qrcode-reader btn btn-primary" type="button" id="openreader-multi" 
                    data-qrr-multiple="true" 
                    data-qrr-repeat-timeout="0"
                    data-qrr-line-color="#00FF00"
                    data-qrr-target="#multiple">Read QRCodes</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="idp" class="col-sm-3 control-label">Petugas</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="idp" name="idp" required>
                        <option value="" selected>- Pilih salah satu -</option>
                        <?php
                          $sql = "SELECT * FROM petugas";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id_petugas']."'>".$row['nama']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tglpinjam" class="col-sm-3 control-label">Tgl Pinjam</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="tglpinjam" name="tglpinjam" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="keterangan" name="keterangan" required>
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
<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Tambah Pinjam</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="pinjam_add.php">
                <div class="form-group">
                    <label for="idk" class="col-sm-3 control-label">Kunci</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="idk" name="idk" required>
                        <option value="" selected>- Pilih salah satu -</option>
                        <?php
                          $sql = "SELECT * FROM kunci";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id_kunci']."'>".$row['kode']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="idp" class="col-sm-3 control-label">Petugas</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="idp" name="idp" required>
                        <option value="" selected>- Pilih salah satu -</option>
                        <?php
                          $sql = "SELECT * FROM petugas";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id_petugas']."'>".$row['nama']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tglpinjam" class="col-sm-3 control-label">Tgl Pinjam</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="tglpinjam" name="tglpinjam" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="keterangan" name="keterangan" required>
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
              <h4 class="modal-title"><b>Edit Pinjam</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="pinjam_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_idk" class="col-sm-3 control-label">Kunci</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="edit_idk" name="idk" required>
                        <option value="" selected>- Pilih salah satu -</option>
                        <?php
                          $sql = "SELECT * FROM kunci";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id_kunci']."'>".$row['kode']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_idp" class="col-sm-3 control-label">Petugas</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="edit_idp" name="idp" required>
                        <option value="" selected>- Pilih salah satu -</option>
                        <?php
                          $sql = "SELECT * FROM petugas";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_assoc()){
                            echo "
                              <option value='".$row['id_petugas']."'>".$row['nama']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_tglpinjam" class="col-sm-3 control-label">Tgl Pinjam</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_tglpinjam" name="tglpinjam" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_keterangan" class="col-sm-3 control-label">Keterangan</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_keterangan" name="keterangan">
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
              <form class="form-horizontal" method="POST" action="pinjam_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE PINJAM</p>
                    <h2 class="bold description"></h2>
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

<!-- Kembali -->
<div class="modal fade" id="kembali">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Kembalikan...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="pinjam_kembali.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>KEMBALIKAN PINJAM</p>
                    <h2 class="bold description"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="kembali"><i class="fa fa-arrow-right"></i> Kembalikan</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Kembali -->
<div class="modal fade" id="cancel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Batalkan...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="kembali_batal.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>BATALKAN PENGEMBALIAN</p>
                    <h2 class="bold description"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="cancel"><i class="fa fa-arrow-right"></i> Kembalikan</button>
              </form>
            </div>
        </div>
    </div>
</div>



     