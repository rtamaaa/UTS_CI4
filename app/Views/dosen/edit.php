<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Konten Form Edit Dosen -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Dosen</h1>

                    <form action="<?= base_url('dosen/update/' . $dosen['id']) ?>" method="POST">
                        <div class="form-group">
                            <label for="kode_dosen">Kode Dosen</label>
                            <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" value="<?= $dosen['kode_dosen'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_dosen">Nama Dosen</label>
                            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?= $dosen['nama_dosen'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telepon</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $dosen['no_telp'] ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <!-- Akhir Konten Form Edit Dosen -->
                </div>
            </div>
        </div>
    </div>
</div>
