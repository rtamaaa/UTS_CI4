<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Konten Form Edit Fakultas -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Fakultas</h1>

                    <form action="<?= base_url('fakultas/update/' . $fakultas['id']) ?>" method="POST">
                        <div class="form-group">
                            <label for="kode_fakultas">Kode Fakultas</label>
                            <input type="text" class="form-control" id="kode_fakultas" name="kode_fakultas" value="<?= $fakultas['kode_fakultas'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_fakultas">Nama Fakultas</label>
                            <input type="text" class="form-control" id="nama_fakultas" name="nama_fakultas" value="<?= $fakultas['nama_fakultas'] ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <!-- Akhir Konten Form Edit Fakultas -->
                </div>
            </div>
        </div>
    </div>
</div>
