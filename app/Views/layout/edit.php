

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Satuan Baru</h3>
            </div>
            
            <form action="<?php echo base_url().'/satuan/update' ?>" method="post">
            
                <div class="form-group">
                    <label>ID Kategori</label>
                    <input type="text" name="1" class="form-control">
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>Nama kategori</label>
                    <textarea name="2" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

</body>
</html>
