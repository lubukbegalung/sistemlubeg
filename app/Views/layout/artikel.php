<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Data Artikel</h3>
            </div>

            <a href="<?= base_url('artikel/create'); ?>" class="btn btn-primary btn-sm"><span
                    class="glyphicon glyphicon-plus"></span> Tambah Artikel Baru</a>
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
                        <th>Id Artikel</th>
                        <th>Judul Artikel</th>
                        <th>Status</th>
                        <th>Isi artikel</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no=1
                    ?>

                    <?php foreach ($artikel as $s): ?>
                        <tr>
                        <td><?php echo $no;?></td>
                            <td><?= $s['id_artikel']; ?></td>
                            <td><?= $s['judul_artikel']; ?></td>
                            <td><?= $s['status']; ?></td>
                            <td><?= $s['isi_artikel']; ?></td>
                       
                            <td>
                                <a href="<?= base_url('artikel/edit/' . $s['id_artikel']); ?>" method="post"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger btn-sm btn-delete"
                                        onclick="return confirm('Apakah yakin ingin mengubah?');">edit</button>
                                
                                <a href="<?= base_url('artikel/delete/' . $s['id_artikel']); ?>" method="post"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm btn-delete"
                                        onclick="return confirm('Apakah yakin ingin menghapus?');">Delete</button>
                               
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
