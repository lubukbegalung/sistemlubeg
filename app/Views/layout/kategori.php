<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<body>
    <style>
table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #28a745; /* Warna hijau */
            color: #fff;

        }
        </style>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Data Kategori</h3>
            </div>
        <div class="baru">
            <a href="<?= base_url('kategori/create'); ?>" class="btn btn-primary btn-sm"><span
                    class="glyphicon glyphicon-plus"></span> Tambah Kategori Baru</a></div>
            

            <?php if (session()->getFlashdata('pesan')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?><br />

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>No.</th>
                        <th>Id Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no=1
                    ?>

                    <?php foreach ($kategori as $s): ?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?= $s['id_kategori']; ?></td>
                            <td><?= $s['nama_kategori']; ?></td>
                       
                            <td>
                                <a href="<?= base_url('kategori/edit/' . $s['id_kategori']); ?>" method="post"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger btn-sm btn-delete"
                                        onclick="return confirm('Apakah yakin ingin mengubah?');">edit</button>
                                
                                <a href="<?= base_url('kategori/delete/' . $s['id_kategori']); ?>" method="post"
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
</body>
<?= $this->endSection(); ?>
