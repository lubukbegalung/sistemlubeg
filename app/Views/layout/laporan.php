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
                <h1>SELAMAT DATANG </h1>
                <h3>Data Inputan</h3>
            </div>
        <div class="baru">
            <a href="<?= base_url('laporan/create'); ?>" class="btn btn-primary btn-sm"><span
                    class="glyphicon glyphicon-plus"></span></a></div>
            

            <?php if (session()->getFlashdata('pesan')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?><br />

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Tempat/Tgl Lahir</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>No.RT</th>
                        <th>Keperluan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    
                        </tr>
                    <?php
                    $no=1
                    ?>

                    <?php foreach ($laporan as $s): ?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?= $s['nama']; ?></td>
                            <td><?= $s['nik']; ?></td>
                            <td><?= $s['ttl']; ?></td>
                            <td><?= $s['pekerjaan']; ?></td>
                            <td><?= $s['alamat']; ?></td>
                            <td><?= $s['RT']; ?></td>
                            <td><?= $s['kep']; ?></td>
                            <td><?= $s['status']; ?></td>
                           
                            <td>
                            <a href="<?= base_url('laporan/edit/' . $s['nik']); ?>" method="post"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger btn-sm btn-delete"
                                        onclick="return confirm('Apakah yakin ingin mengubah?');">Edit</button>

                         
                         <a href="<?= base_url('laporan/delete/' . $s['nik']); ?>" method="post" id="delete"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm btn-delete"
                                        onclick="return confirm('Apakah yakin ingin menghapus?');">Delete</button>
                               
                            </td>
                  
<!-- Tambahkan script JavaScript untuk menampilkan notifikasi -->
<script>
    document.getElementById('delete').addEventListener('submit', function(event) {
        // Tambahkan kode untuk menampilkan notifikasi
        alert('Data berhasil dihapus.');
    });
</script>

                        </tr>
                        <?php $no++;?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
function toggleSymbol(label) {
    var checkbox = label.previousElementSibling;
    if (checkbox.checked) {
        label.innerHTML = '&#x2611;'; // simbol centang
    } else {
        label.innerHTML = '&#x2610;'; // simbol petak
    }
}
</script>

</body>
<?= $this->endSection(); ?>
