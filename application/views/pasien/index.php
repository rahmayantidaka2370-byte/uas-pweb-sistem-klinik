<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Data Pasien</h3>

        <a href="<?= site_url('pasien/tambah') ?>" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Pasien
        </a>

    </div>

    <?php if ($this->session->flashdata('success')): ?>

        <div class="alert alert-success alert-dismissible fade show">

            <?= $this->session->flashdata('success'); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

        </div>

    <?php endif; ?>

    <div class="card shadow">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th width="5%">No</th>
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th width="18%">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php if (empty($pasien)): ?>

                            <tr>

                                <td colspan="7" class="text-center">

                                    Belum ada data pasien.

                                </td>

                            </tr>

                        <?php else: ?>

                            <?php
                            $no = 1;
                            foreach ($pasien as $p):
                                ?>

                                <tr>

                                    <td><?= $no++; ?></td>

                                    <td><?= $p->nama_pasien; ?></td>

                                    <td><?= $p->jenis_kelamin; ?></td>

                                    <td><?= $p->umur; ?> Tahun</td>

                                    <td><?= $p->no_hp; ?></td>

                                    <td><?= $p->alamat; ?></td>

                                    <td>

                                        <a href="<?= site_url('pasien/riwayat/' . $p->id_pasien); ?>" class="btn btn-info btn-sm">

                                            <i class="bi bi-clock-history"></i>

                                        </a>

                                        <a href="<?= site_url('pasien/edit/' . $p->id_pasien); ?>" class="btn btn-warning btn-sm">

                                            <i class="bi bi-pencil-square"></i>

                                        </a>

                                        <a href="<?= site_url('pasien/hapus/' . $p->id_pasien); ?>"
                                            onclick="return confirm('Yakin ingin menghapus data pasien ini?')"
                                            class="btn btn-danger btn-sm">

                                            <i class="bi bi-trash"></i>

                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>