<div class="container">
    <div class="row">
        <div class="col-7">
            <h3>Tambah Ubah Data Produk</h3>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $produk['id']; ?>">
                <div class="form-group mb-3">
                    <label for="namaProduk">Nama Produk</label>
                    <input type="text" class="form-control" value="<?= $produk['nama_produk']; ?>" id="namaProduk" name="namaProduk">
                    <div class="form-text text-danger"><?= form_error('nama_produk'); ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" value="<?= $produk['keterangan']; ?>" id="keterangan" name="keterangan">
                    <div class="form-text text-danger"><?= form_error('keterangan'); ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="Harga">Harga</label>
                    <input type="number" class="form-control" value="<?= $produk['harga']; ?>" id="harga" name="harga">
                    <div class="form-text text-danger"><?= form_error('harga'); ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" value="<?= $produk['jumlah']; ?>" id="jumlah" name="jumlah">
                    <div class="form-text text-danger"><?= form_error('jumlah'); ?></div>
                </div>

                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>