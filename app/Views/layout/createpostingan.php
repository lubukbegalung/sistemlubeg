<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Postingan Kategori Baru</h3>
            </div>
            <div class="baru">
            <form action="<?= base_url('/postingan/save') ?>" method="post">
   
            <div class="form-group">
            <label>Id Artikel</label>
                <select name="1" class="form-control"required>Id Artikel

                <option value=""hidden >Pilih id artikel</option>
                <?php foreach ($artikel as $key=>$value):?>
                <option value="<?=$value['id_artikel']?>"><?=$value['id_artikel']?></option>
                <?php endforeach;?>
                </select>
            </div>

            <div class="form-group">
            <label>Id Kategori</label>
                <select name="2" class="form-control"required>

                <option value=""hidden >Pilih Id Kategori</option>
                <?php foreach ($kategori as $key=>$value):?>
                <option value="<?=$value['id_kategori']?>"><?=$value['id_kategori']?></option>
                <?php endforeach;?>
                </select>
            </div>
    
                <div class="form-group">
                    <label>tgl_posting</label>
                    <input type="date" name="3" class="form-control">
                </div>
                <div class="form-group">
                    <label>username</label>
                    <textarea name="4" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>link</label>
                    <textarea name="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
            <div class="baru">
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
