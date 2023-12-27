<div class="container mt-4">
    <div class="row">
        <div class="col-8 mx-auto">
            <?php Flasher::flash(); ?>
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Mahasiswa
            </button>
            <h2 class="text-center">Daftar Mahasiswa</h2>
            <ul class="list-group mt-4">
                <?php $nomor = 0 ?>
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <?php if ($nomor % 2 == 0) : ?>
                        <li class="list-group-item list-group-item-secondary">
                            <?= $mhs['nama'] ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge rounded-pill text-bg-danger link float-end ms-1 link-underline-danger">hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge rounded-pill text-bg-info link float-end link-underline-info" onclick="return confirm(hapusMahasiswa())">detail</a>
                        <?php else : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama'] ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge rounded-pill text-bg-danger link float-end ms-1 link-underline-danger">hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge rounded-pill text-bg-info link float-end link-underline-info">detail</a>
                        </li>
                    <?php endif ?>
                    <?php $nomor++ ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="John Doe" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" placeholder="312210000" name="nim" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-select" aria-label="Default select example" required name="jurusan">
                            <option selected>--Jurusan--</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Agribisnis">Agribisnis</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>