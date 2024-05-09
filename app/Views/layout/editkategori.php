<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Edit Kategori</h3>
            </div>
            <div class="baru">
            <form action="<?php echo base_url().'Kategori/update' ?>" method="post">
            <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori']; ?>">
                <div class="form-group">
                    <label>ID Kategori</label>
                    <input type="text" name="id_kategori" class="form-control" value="<?= $kategori['id_kategori']; ?>" readonly>
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input name="nama_kategori" class="form-control" value="<?= $kategori['nama_kategori']; ?>">
                </div>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>