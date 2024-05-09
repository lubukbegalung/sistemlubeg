<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Edit User</h3>
            </div>
            <div class="baru">
            <form action="<?php echo base_url().'User/update' ?>" method="post">
            <input type="hidden" name="iduser" value="<?= $user['iduser']; ?>">
                <div class="form-group">
                    <label>ID User</label>
                    <input type="text" name="iduser" class="form-control" value="<?= $user['iduser']; ?>" readonly>
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>Nama user</label>
                    <input name="namauser" class="form-control" value="<?= $user['namauser']; ?>">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?= $user['username']; ?>" >
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" class="form-control" value="<?= $user['password']; ?>">
                </div>
                <div class="form-group">
                    <label>level</label>
                    <input name="level" class="form-control" value="<?= $user['level']; ?>">
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