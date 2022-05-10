<div class="container">
    <div class="row">
        <div class="col-7">
            <h3>Tambah Data Produk</h3>
            <form action="" method="post">
                <div class="form-group mb-3">
                    <label for="namaProduk">Nama Produk</label>
                    <input type="text" class="form-control" id="namaProduk" name="namaProduk">
                    <div class="form-text text-danger"><?= form_error('nama_produk'); ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                    <div class="form-text text-danger"><?= form_error('keterangan'); ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="Harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga">
                    <div class="form-text text-danger"><?= form_error('harga'); ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah">
                    <div class="form-text text-danger"><?= form_error('jumlah'); ?></div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>