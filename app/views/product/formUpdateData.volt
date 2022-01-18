<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Tambah Data</h4>
        </div>
        <form action="/phalcon_project/product/updateData" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Data sudah benar?')">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="modal-body">
                <div class="row" align="center">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="thumbnail">
                            <img src="temp/<?= $image; ?>" class="viewer" style="max-width: 144px; max-height: 144px;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="name" maxlength="75" placeholder="Nama Produk" required value="<?= $name; ?>" onchange="this.value = this.value.trim()">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="price" min="0" placeholder="Harga" required value="<?= $price; ?>">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" name="description" placeholder="Keterangan" rows="3" maxlength="500" style="resize: none;"><?= $description; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto Produk</label>
                            <input type="hidden" name="tmpImage" value="<?= $image; ?>">
                            <input type="file" class="form-control" name="image" accept=".jpg, .png" <?= ($image == '') ? 'required' : ''; ?>>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="btnsimpan">
                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span> Simpan
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Close
                </button>
            </div>
        </form>
    </div>
</div>