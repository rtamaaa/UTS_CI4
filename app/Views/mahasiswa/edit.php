<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Konten Form Edit Mahasiswa -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Mahasiswa</h1>

                    <form action="<?= base_url('mahasiswa/update/' . $mahasiswa['id']) ?>" method="POST">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $mahasiswa['tempat_lahir'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $mahasiswa['tgl_lahir'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="L" <?= ($mahasiswa['jenis_kelamin'] == 'L') ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="P" <?= ($mahasiswa['jenis_kelamin'] == 'P') ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_prodi">Program Studi</label>
                            <select class="form-control" id="id_prodi" name="id_prodi" required>
                                <?php foreach ($prodi as $row) : ?>
                                    <option value="<?= $row['id'] ?>" <?= $mahasiswa['id_prodi'] == $row['id'] ? 'selected' : '' ?>><?= $row['nama_prodi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_fakultas">Fakultas</label>
                            <select class="form-control" id="id_fakultas" name="id_fakultas" required>
                                <?php foreach ($fakultas as $row) : ?>
                                    <option value="<?= $row['id'] ?>" <?= $row['id'] == $mahasiswa['id_fakultas'] ? 'selected' : '' ?>><?= $row['nama_fakultas'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select class="form-control" id="semester" name="semester" required>
                                <option value="1" <?= $mahasiswa['semester'] == 1 ? 'selected' : '' ?>>1</option>
                                <option value="2" <?= $mahasiswa['semester'] == 2 ? 'selected' : '' ?>>2</option>
                                <option value="3" <?= $mahasiswa['semester'] == 3 ? 'selected' : '' ?>>3</option>
                                <option value="4" <?= $mahasiswa['semester'] == 4 ? 'selected' : '' ?>>4</option>
                                <option value="5" <?= $mahasiswa['semester'] == 5 ? 'selected' : '' ?>>5</option>
                                <option value="6" <?= $mahasiswa['semester'] == 6 ? 'selected' : '' ?>>6</option>
                                <option value="7" <?= $mahasiswa['semester'] == 7 ? 'selected' : '' ?>>7</option>
                                <option value="8" <?= $mahasiswa['semester'] == 8 ? 'selected' : '' ?>>8</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" required><?= $mahasiswa['alamat'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="Aktif" <?= ($mahasiswa['status'] == 'Aktif') ? 'selected' : '' ?>>Aktif</option>
                                <option value="Tidak Aktif" <?= ($mahasiswa['status'] == 'Tidak Aktif') ? 'selected' : '' ?>>Tidak Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <!-- Akhir Konten Form Edit Mahasiswa -->
                </div>
            </div>
        </div>
    </div>
</div>
