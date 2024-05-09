<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Edit Postingan</h3>
            </div>
            <div class="baru">
            <form action="<?php echo base_url().'Postingan/update' ?>" method="post">
            <input type="hidden" name="id_artikel" value="<?= $postingan_kategori['id_artikel']; ?>">
                <div class="form-group">
                    <label>ID artikel</label>
                    <input type="text" name="id_artikel" class="form-control" value="<?= $postingan_kategori['id_artikel']; ?>" readonly>
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>id Kategori</label>
                    <input name="id_kategori" class="form-control" value="<?= $postingan_kategori['id_kategori']; ?>"readonly>
                </div>
                <div class="form-group">
                    <label>tgl posting</label>
                    <input type="date" name="tgl_posting" class="form-control" value="<?= $postingan_kategori['tgl_posting']; ?>" >
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input name="link" class="form-control" value="<?= $postingan_kategori['link']; ?>">
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