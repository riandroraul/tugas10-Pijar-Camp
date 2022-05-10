<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Produk</h1>
            <a href="home/add" class="btn btn-primary mt-3">Tambah Data Produk</a>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
                <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>Berhasil</strong> 
                <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div> -->
            <?php endif; ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($produk as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td>
                                <a href="home/edit/<?= $p['id']; ?>" class="badge bg-secondary">Edit</a>
                                <a href="home/delete/<?= $p['id']; ?>" class="badge bg-danger tombol-hapus">Delete</a>
                            </td>
                            <td><?= $p['nama_produk']; ?></td>
                            <td><?= $p['keterangan']; ?></td>
                            <td>Rp. <?= $p['harga']; ?></td>
                            <td><?= $p['jumlah']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>