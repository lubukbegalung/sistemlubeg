<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>User Baru</h3>
            </div>
            <div class="baru">
            <form action="<?= base_url('/user/save') ?>" method="post">
            

                <div class="form-group">
                    <label>Id user</label>
                    <input type="text" name="1" class="form-control">
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>nama user</label>
                    <input type="text" name="2" class="form-control">
                </div>
                <div class="form-group">
                    <label>username</label>
                    <textarea name="3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>password</label>
                    <textarea name="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <textarea name="5" class="form-control"></textarea>
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
