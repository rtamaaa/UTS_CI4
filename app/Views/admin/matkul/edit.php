<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Konten Form Edit Mata Kuliah -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Mata Kuliah</h1>

                    <form action="<?= base_url('matkul/update/' . $matkul['id']) ?>" method="POST">
                        <div class="form-group">
                            <label for="kode_matkul">Kode Mata Kuliah</label>
                            <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" value="<?= $matkul['kode_matkul'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_matkul">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value="<?= $matkul['nama_matkul'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">Dosen Pengajar</label>
                            <select class="form-control" id="id_dosen" name="id_dosen" required>
                                <?php foreach ($dosen as $row) : ?>
                                    <option value="<?= $row['id'] ?>" <?= ($row['id'] == $matkul['id_dosen']) ? 'selected' : '' ?>><?= $row['nama_dosen'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <!-- Akhir Konten Form Edit Mata Kuliah -->
                </div>
            </div>
        </div>
    </div>
</div>
