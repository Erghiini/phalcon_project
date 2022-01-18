<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Data</h4>
        </div>
        <form action="/phalcon_project/Pegawai/insertData" method="POST">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="txtnip" placeholder="NIP">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="txtnama" placeholder="NAMA">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="txtalamat" placeholder="ALAMAT">
                        </div>
                        <div class="form-group">
                            <label>No. HP</label>
                            <input type="text" class="form-control" name="txtnohp" placeholder="NO HP">
                        </div>
                    </div>                
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"  id="btnsimpan">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>