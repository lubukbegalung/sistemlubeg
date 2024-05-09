<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
   .container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.page-header {
    text-align: center;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 1px;
    text-align: left; /* Ubah menjadi left */
}

label {
    font-weight: bold;
    width: 400px;
    display: block; /* Tambahkan agar labelnya muncul satu per baris */
}

input[type="text"],

textarea {
    width: 450%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    margin-bottom: 10px;
}
input[type="text"]{
    width: 450px;
}
input[type="number"]{
    width: 450px;
}

.btn-primary {
    width: 100%; /* Ubah menjadi 100% agar tombolnya lebar */
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-align: center;
}

.btn-primary:hover {
    background-color: #0056b3;
}


</style>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Konfirmasi Laporan</h3>
            </div>
            <div class="baru">
            <form action="<?php echo base_url().'laporan/update' ?>" method="post">
            <input type="hidden" name="nik" value="<?= $laporan['nik']; ?>">
                <div class="form-group">
                    <label>Nama </label>
                    <input type="text" name="nama" class="form-control" value="<?= $laporan['nama']; ?>" readonly>
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>NIK</label>
                    <input type="number" name="nik" class="form-control" value="<?= $laporan['nik']; ?>"readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir </label>
                    <input type="date" name="ttl" class="form-control" value="<?= $laporan['ttl']; ?>" readonly>
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" value="<?= $laporan['pekerjaan']; ?>"readonly>
                </div>
                <div class="form-group">
                    <label>Alamat </label>
                    <input type="text" name="alamat" class="form-control" value="<?= $laporan['alamat']; ?>" readonly>
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>No.RT</label>
                    <input type="text" name="RT" class="form-control" value="<?= $laporan['RT']; ?>"readonly>
                </div>
                <div class="form-group">
                <div class="form-group">
                    <label>Keperluan</label>
                    <input name="kep" class="form-control" value="<?= $laporan['kep']; ?>"readonly>
                </div>
                <label>Apakah Data ini telah diproses ?:</label><br>
                <label for="sudah">Sudah</label><br>
    <input type="radio" id="option1" name="status" value="sudah">
   
    <label for="Belum">Belum</label><br>
    <input type="radio" id="option2" name="status" value="belum">
    
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