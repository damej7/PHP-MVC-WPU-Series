<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                        Tambah Data Mahasiswa
                    </button>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-6">
                    <form action="<?= BASEURL; ?>/mahasiswa/search" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
                            <button class="btn btn-outline-secondary" type="submit" id="tombolCari">Cari</button>
                        </div>

                    </form>
                </div>
            </div>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <!-- <li class="list-group-item d-flex justify-content-between align-items-center"> -->
                    <li class="list-group-item">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $mhs['id'] ?> " class="badge bg-danger rounded-pill float-end ms-1" onclick="return confirm('Yakin ingin menghapus ?')">Delete</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id'] ?> " class="badge bg-success rounded-pill float-end ms-1 tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?> " class="badge bg-primary rounded-pill float-end ms-1">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul>
                    <li>Nama: <?= $mhs['nama'] ?></li>
                    <li>NIM: <?= $mhs['nrp'] ?></li>
                    <li>Email: <?= $mhs['email'] ?></li>
                    <li>Jurusan: <?= $mhs['jurusan'] ?></li>
                </ul>
            <?php endforeach; ?> -->
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?> /mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama" name="nama">
                        <label for="nama">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nrp" name="nrp">
                        <label for="nrp">NIM</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="jurusan" aria-label="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                        </select>
                        <label for="jurusan">Jurusan</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>