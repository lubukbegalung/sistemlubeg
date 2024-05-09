<?= $this->extend('layout/templateinput'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

.container {
    max-width: 500px; /* Lebarkan container */
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px; /* Agar lebih melengkung */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 20px;
    text-align: center;
}

.form-group {
   
    margin-bottom: 20px;
    text-align: left;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    width: 450px;
}

input[type="text"],
input[type="email"],
textarea {
    width: calc(100% - 5px); /* Ubah lebar input */
    height: calc(50%-5px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
    height: 50px;
}

.tombol {
    width: 20%;
    margin-left: 350px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-align: center;
}

.tombol:hover {
    background-color: #0056b3;
}

.rt {
width: 200px;
text-align: center;
}
@media screen and (max-width: 768px) {
    .container {
    max-width: 300px; /* Lebarkan container */
    margin: 10px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px; /* Agar lebih melengkung */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    margin-top: -10px;
}
h2 {
    margin-top: -15px;
}
.form-group {
    margin-bottom: 10px;
    text-align: left;
}
.surat {
    width: 250px;
}
.tombol {
    width: 25%;
    margin-left: 200px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-align: center;
    font-size: small;
}

.tombol:hover {
    background-color: #0056b3;
}
.nama {
 margin-top: -10px;
 height: 5px;
}
}
</style>
<body>
    
    <div class="container">
        <h2>Form Input</h2>
        <form action="<?= base_url('/input/save') ?>" method="post">

<div class="form-group">
    
    <label class="label">Nama</label>
    <input type="text" name="1" class="nama" >
    <?php //echo form_error('nama'); ?>


    <label>NIK</label>
    <input type="number" name="2" class="form-control">


    
    <label>Tempat/Tgl Lahir</label>
    <input type="date" name="3" class="form-control" >
    <?php //echo form_error('nama'); ?>


    <label>Pekerjaan</label>
    <input type="text" name="4" class="form-control">

    <label>Alamat</label>
    <textarea name="5" class="form-control"></textarea>
    
    <label for="lokasi" >Pilih RT</label>
                <select id="lokasi" class="rt" name="6">
                    <option value="">Pilih RT</option>
                    <option value="RT001">RT001</option>
                    <option value="RT002">RT002</option>
                    <option value="RT003">RT003</option>
                    <option value="RT004">RT004</option>
                    <option value="RT005">RT005</option>
                    <option value="RT006">RT006</option>
                    <option value="RT007">RT007</option>
                    <option value="RT008">RT008</option>
                    <option value="RT009">RT009</option>
                    <option value="RT010">RT010</option>
                    <option value="RT011">RT011</option>
                    <option value="RT012">RT012</option>
                    <option value="RT013">RT013</option>
                    <option value="RT014">RT014</option>
                    <option value="RT015">RT015</option>
                    <option value="RT016">RT016</option>
                    <option value="RT017">RT017</option>
                    <option value="RT018">RT018</option>
                    <option value="RT019">RT019</option>
                    <option value="RT020">RT020</option>
                    <option value="RT021">RT021</option>
                    <option value="RT022">RT022</option>
                    <option value="RT023">RT023</option>
                    <option value="RT024">RT024</option>
                    <option value="RT025">RT025</option>
                    <option value="RT026">RT026</option>
                    <option value="RT027">RT027</option>
                    <option value="RT028">RT028</option>
                    <option value="RT029">RT029</option>
                    <option value="RT030">RT030</option>
                    <option value="RT031">RT031</option>
                    <option value="RT032">RT032</option>
                    <option value="RT033">RT033</option>
                    <option value="RT034">RT034</option>
                    <option value="RT035">RT035</option>
                    <option value="RT036">RT036</option>
                    <option value="RT037">RT037</option>
                    <option value="RT038">RT038</option>
                    <option value="RT039">RT039</option>
                    <option value="RT040">RT040</option>
                </select>

    <label for="lokasi">Pilih Keperluan Pengurusan</label>
                <select id="lokasi" class="surat" name="7">
                <option value="">Pilih Keperluan Pengurusan</option>
                    <option value="Kartu Keluarga (KK)">Kartu Keluarga (KK)</option>
                    <option value="Kartu Tanda Penduduk (KTP)">Kartu Tanda Penduduk (KTP)</option>
                    <option value="Surat Keterangan Pelaporan Tamu">Surat Keterangan Pelaporan Tamu</option>
                    <option value="Surat Keterangan Pindah">Surat Keterangan Pindah</option>
                    <option value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran</option>
                    <option value="Surat Keterangan Kematian">Surat Keterangan kematian</option>
                    <option value="Surat Keterangan Lahir Mati">Surat Keterangan Lahir Mati</option>
                    <option value="Surat Keterangan Pendatang Baru dari Kelurahan/Kecamatan/Kota Padang">Surat Keterangan Pendatang Baru dari Kelurahan/Kecamatan/Kota Padang</option>
                    <option value="Surat Keterangan Bersih Diri (SKBD)">Surat Keterangan Bersih Diri (SKBD)</option>
                    <option value="Surat Keterangan Catatan Kepolisian">Surat Keterangan Catatan Kepolisian</option>
                    <option value="Surat Keterangan Belum Menikah">Surat Keterangan Belum Menikah</option>
                    <option value="Surat Keterangan Ahli Waris">Surat Keterangan Ahli Waris</option>
                    <option value="Surat Keterangan Domisili/Tempat Tinggal">Surat Keterangan Domisili/Tempat Tinggal</option>
                    <option value="Surat Keterangan Miskin">Surat Keterangan Miskin</option>
                    <option value="Surat Keterangan Untuk Nikah">Surat Keterangan Untuk Nikah</option>
                    <option value="Surat Izin Tempat Usaha">Surat Izin Tempat Usaha</option>
                    <option value="Surat Izin Mendirikan Bangunan">Surat Izin Mendirikan Bangunan</option>
                    <option value="Surat Keterangan Minta Kartu Kesehatan">Surat Keterangan Minta Kartu Kesehatan</option>
                    <option value="yang lainnya">Yang lainnya</option>
                </select>
</div>
    <button type="submit" value="Simpan" class="tombol">SIMPAN</button>
</div>
</form>
    </div>
</body>
</html>
<?= $this->endSection(); ?>