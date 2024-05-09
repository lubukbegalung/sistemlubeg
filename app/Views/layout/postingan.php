<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Data postingan</h3>
            </div>

            <a href="<?= base_url('postingan/create'); ?>" class="btn btn-primary btn-sm"><span
                    class="glyphicon glyphicon-plus"></span> Tambah Postingan Baru</a>
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
                    <th>id artikel</th>
                        <th>Id Kategori</th>
                        <th>Tgl Posting</th>
                        <th>Username</th>
                        <th>Link</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no=1
                    ?>


                    <?php foreach ($postingan_kategori as $s): ?>
                        <tr>
                        <td><?php echo $no;?></td>

                            <td><?= $s['id_artikel']; ?></td>
                            <td><?= $s['id_kategori']; ?></td>
                            <td><?= $s['tgl_posting']; ?></td>
                            <td><?= $s['username']; ?></td>
                            <td><?= $s['link']; ?></td>
                       
                            <td>
                                <a href="<?= base_url('postingan/edit/' . $s['id_artikel']); ?>" method="post"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger btn-sm btn-delete"
                                        onclick="return confirm('Apakah yakin ingin mengubah?');">edit</button>
                                </form>
                                <a href="<?= base_url('postingan/delete/' . $s['id_artikel']); ?>" method="post"
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
