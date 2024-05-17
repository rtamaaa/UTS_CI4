<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Konten Form Edit Program Studi -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Program Studi</h1>

                    <form action="<?= base_url('prodi/update/' . $prodi['id']) ?>" method="POST">
                        <div class="form-group">
                            <label for="kode_prodi">Kode Prodi</label>
                            <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" value="<?= $prodi['kode_prodi'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_prodi">Nama Prodi</label>
                            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="<?= $prodi['nama_prodi'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="id_fakultas">Fakultas</label>
                            <select class="form-control" id="id_fakultas" name="id_fakultas" required>
                                <?php foreach ($fakultas as $row) : ?>
                                    <option value="<?= $row['id'] ?>" <?= $row['id'] == $prodi['id_fakultas'] ? 'selected' : '' ?>><?= $row['nama_fakultas'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <!-- Akhir Konten Form Edit Program Studi -->
                </div>
            </div>
        </div>
    </div>
</div>
