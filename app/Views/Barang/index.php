<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row"> <!-- Remove the dot before "row" -->
        <div class="col">
            <div class="page-header">
                <h3>Data Barang</h3>
            </div>

            <a href="<?= base_url('admin/barang_add'); ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-plus"></span> Barang Baru
            </a>
            <br /><br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="table-datatable">
                    <thead>
                        <tr>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>ID Supplier</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Populate the table rows dynamically here -->
                    </tbody>
                </table>
            </div>

            <a href="<?= base_url('admin/editbarang'); ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-plus"></span> Barang Baru
            </a>
            <br /><br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="table-datatable">
                    <thead>
                        <tr>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>ID Supplier</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Populate the table rows dynamically here -->
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
