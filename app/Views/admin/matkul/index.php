<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-2 text-gray-800">Data Mata Kuliah</h1>
                    <a href="<?= base_url('matkul/create') ?>" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kode Mata Kuliah</th>
                                    <th>Nama Mata Kuliah</th>
                                    <th>Dosen Pengajar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($matkul as $row) : ?>
                                    <tr>
                                        <td><?= $row['kode_matkul'] ?></td>
                                        <td><?= $row['nama_matkul'] ?></td>
                                        <td><?= $row['id_dosen'] ?></td>
                                        <td>
                                            <a href="<?= base_url('matkul/edit/' . $row['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="<?= base_url('matkul/delete/' . $row['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('#dataTable').DataTable();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
