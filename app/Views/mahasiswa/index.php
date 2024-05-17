<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>
                    <a href="<?= base_url('mahasiswa/create') ?>" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Program Studi</th>
                                    <th>Fakultas</th>
                                    <th>Semester</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mahasiswa as $row) : ?>
                                    <tr>
                                        <td><?= $row['nim'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['tempat_lahir'] ?></td>
                                        <td><?= $row['tgl_lahir'] ?></td>
                                        <td><?= $row['jenis_kelamin'] ?></td>
                                        <td><?= $row['nama_prodi'] ?></td>
                                        <td><?= $row['id_fakultas'] ?></td>
                                        <td><?= $row['semester'] ?></td>
                                        <td><?= $row['alamat'] ?></td>
                                        <td><?= $row['status'] ?></td>
                                        <td>
                                            <a href="<?= base_url('mahasiswa/edit/' . $row['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="<?= base_url('mahasiswa/delete/' . $row['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
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
