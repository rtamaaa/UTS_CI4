<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-2 text-gray-800">Data Fakultas</h1>
                    <a href="<?= base_url('fakultas/create') ?>" class="btn btn-primary mb-3">Tambah Fakultas</a>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kode Fakultas</th>
                                    <th>Nama Fakultas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($fakultas as $row) : ?>
                                    <tr>
                                        <td><?= $row['kode_fakultas'] ?></td>
                                        <td><?= $row['nama_fakultas'] ?></td>
                                        <td>
                                            <a href="<?= base_url('fakultas/edit/' . $row['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="<?= base_url('fakultas/delete/' . $row['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
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
