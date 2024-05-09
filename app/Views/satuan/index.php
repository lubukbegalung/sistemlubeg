<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class=".row">
        <div class="col">


            <div class="page-header">
                <h3>Data Satuan</h3>
            </div>


            <a href="<?php echo base_url().'admin/mobil_add'; ?>" class="btn btn-primary btn-sm"><span
                    class="glyphicon glyphicon-plus"></span> Mobil Baru</a>
            <br /><br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="table-datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk Mobil</th>
                            <th>Plat</th>
                            <th>Warna</th>
                            <th>Tahun Pembuatan</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>.
</div>
<?= $this->endSection(); ?>