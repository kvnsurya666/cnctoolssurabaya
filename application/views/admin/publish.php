<style>
    .box {
        width: 60%;
        border: 1px solid lightgrey;
        padding: 10px;
        margin: auto;
    }

    .justify {
        display: flex;
        justify-content: flex-start;
    }
</style>
<script src="<?= base_url('assets/admin/ckeditor/ckeditor.js') ?>"></script>
<div class="box">
    <h4><img src="<?= base_url('assets/img/admin/shop-cart-add-icon.png') ?>" class="header-img" style="margin-top:-3px;">Formulir Tambah Barang</h4>
    <hr>
    <?php
    $timeNow = time();
    if (validation_errors()) {
    ?>
        <hr>
        <div class="alert alert-danger"><?= validation_errors() ?></div>
        <hr>
    <?php
    }
    if ($this->session->flashdata('result_publish')) {
    ?>
        <hr>
        <div class="alert alert-success"><?= $this->session->flashdata('result_publish') ?></div>
        <hr>
    <?php
    }
    ?>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>GG Geming!</strong> <?= $this->session->flashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="" class="form-control" required>
        </div>
        <div class="form-group for-shop">
            <label>Kategori</label>
            <select class="selectpicker form-control" name="kategori" required>
                <option disabled="disabled" selected="selected" value="">-- PILIH KATEGORI --</option>
                <?php foreach ($kategori as $row) { ?>
                    <option value="<?= $row->kode_kategori ?>"><?= ucfirst($row->nama_kategori) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group for-shop">
            <label>Model</label>
            <select class="selectpicker form-control" name="model" required>
                <option disabled="disabled" selected="selected" value="">-- PILIH MODEL --</option>
                <?php foreach ($model as $row) { ?>
                    <option value="<?= $row->kode_model ?>"><?= strtoupper($row->nama_model) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group for-shop">
            <label>Merk</label>
            <select class="selectpicker form-control" name="merk" required>
                <option disabled="disabled" selected="selected" value="">-- PILIH MERK --</option>
                <?php foreach ($merk as $row) { ?>
                    <option value="<?= $row->kode_merk ?>"><?= strtoupper($row->nama_merk) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group for-shop">
            <div class="justify">
                <label style="margin-top: 8px">Gambar</label>
                <div class="col">
                    <div class="col-md-4" style="width: auto">
                        <input type="file" name="gambar" id="gambar" class="form-control" onchange="preview()">
                        <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail gambar">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-lg btn-default" style="margin-top: 10px">Publish</button>
    </form>
</div>


<!-- Javascript Upload Images-->
<script>
    function preview() {
        const gambar = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.gambar');

        const fileFoto = new FileReader();
        fileFoto.readAsDataURL(gambar.files[0]);

        fileFoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<!-- End Javascript Upload Images-->