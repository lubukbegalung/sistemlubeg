<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Edit Artikel</h3>
            </div>
            <div class="baru">
            <form action="<?php echo base_url().'Artikel/update' ?>" method="post">
            <input type="hidden" name="id_artikel" value="<?= $artikel['id_artikel']; ?>">
                <div class="form-group">
                    <label>ID artikel</label>
                    <input type="text" name="id_artikel" class="form-control" value="<?= $artikel['id_artikel']; ?>" readonly>
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>judul artikel</label>
                    <input type="text" name="judul_artikel" class="form-control" value="<?= $artikel['judul_artikel']; ?>">
                </div>
                <div class="form-group">
                    <label>status</label>
                    <input type="text" name="status" class="form-control" value="<?= $artikel['status']; ?>" >
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>isi artikel</label>
                    <input type="text" name="isi_artikel" class="form-control" value="<?= $artikel['isi_artikel']; ?>">
                </div>
                <div class="form-group">
                    <input   type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>