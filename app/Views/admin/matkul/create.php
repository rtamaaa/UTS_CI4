<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ">
                    <h1 class="h3 mb-2 text-gray-800">Tambah Mata Kuliah</h1>

                    <form action="<?= base_url('matkul/store') ?>" method="POST">
                        <div class="form-group">
                            <label for="kode_matkul">Kode Mata Kuliah</label>
                            <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_matkul">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" required>
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">Dosen Pengajar</label>
                            <select class="form-control" id="id_dosen" name="id_dosen" required> 
                                <?php foreach ($dosen as $row) : ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['nama_dosen'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
