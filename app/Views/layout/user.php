<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Data User</h3>
            </div>

            <a href="<?= base_url('user/create'); ?>" class="btn btn-primary btn-sm"><span
                    class="glyphicon glyphicon-plus"></span> Tambah User Baru</a>
            <br /><br />

            <?php if (session()->getFlashdata('pesan')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?><br />

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>No.</th>
                        <th>Id User</th>
                        <th>Nama User</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no=1
                    ?>
                    <?php foreach ($user as $s): ?>
                        <tr>
                        <td><?php echo $no;?></td>
                            <td><?= $s['iduser']; ?></td>
                            <td><?= $s['namauser']; ?></td>
                            <td><?= $s['username']; ?></td>
                            <td><?= $s['password']; ?></td>
                            <td><?= $s['level']; ?></td>
                            
                       
                            <td>
                                <a href="<?= base_url('user/edit/' . $s['iduser']); ?>" method="post"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger btn-sm btn-delete"
                                        onclick="return confirm('Apakah yakin ingin mengubah?');">edit</button>
                                </form>
                                <a href="<?= base_url('user/delete/' . $s['iduser']); ?>" method="post"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm btn-delete"
                                        onclick="return confirm('Apakah yakin ingin menghapus?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php $no++;?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
