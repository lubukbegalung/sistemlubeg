<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<body>
    <style>
        col.form {
            text-align: justify;
            background-color: antiquewhite;

        }
       
        
    </style>
</body>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h3>Artikel Baru</h3>
            </div>
<div class="baru">
            <form action="<?= base_url('/Artikel/save') ?>" method="post">

                <div class="form-group">
                    <label>Id Artikel</label>
                    <input type="text" name="1" class="form-control">
                    <?php //echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <label>judul artikel</label>
                    <textarea name="2" class="form-control"></textarea>
                </div>
                <div class="form-group">
                <label>Status</label>
                <select class="form-control chosen-select" name="3" required data-placeholder="Pilih Status">
                                        
                                        <option></option>
                                       

                                        <option value="Publish">Publish </option>
                                        <option value="Tidak Publish">Tidak Publish </option>
                                      

                                      </select> 
                    
                <div class="form-group">
                    <label>Isi Artikel</label>
                    <textarea name="4" class="form-control"></textarea>
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
