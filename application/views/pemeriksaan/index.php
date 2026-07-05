<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Data Pemeriksaan</h3>

        <a href="<?= site_url('pemeriksaan/tambah') ?>" class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>

            Tambah Pemeriksaan

        </a>

    </div>

    <?php if($this->session->flashdata('success')) : ?>

        <div class="alert alert-success alert-dismissible fade show">

            <?= $this->session->flashdata('success'); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

        </div>

    <?php endif; ?>

    <div class="card shadow">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Pasien</th>
                            <th>Dokter</th>
                            <th>Keluhan</th>
                            <th>Diagnosa</th>
                            <th>Tindakan</th>
                            <th width="15%">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php if(empty($pemeriksaan)) : ?>

                        <tr>

                            <td colspan="8" class="text-center">

                                Belum ada data pemeriksaan.

                            </td>

                        </tr>

                    <?php else : ?>

                        <?php $no=1; foreach($pemeriksaan as $p) : ?>

                        <tr>

                            <td><?= $no++; ?></td>

                            <td><?= date('d-m-Y',strtotime($p->tanggal)); ?></td>

                            <td><?= $p->nama_pasien; ?></td>

                            <td><?= $p->nama_dokter; ?></td>

                            <td><?= $p->keluhan; ?></td>

                            <td><?= $p->diagnosa; ?></td>

                            <td><?= $p->tindakan; ?></td>

                            <td>

                                <a href="<?= site_url('pemeriksaan/edit/'.$p->id_pemeriksaan) ?>"
                                   class="btn btn-warning btn-sm">

                                    <i class="bi bi-pencil-square"></i>

                                </a>

                                <a href="<?= site_url('pemeriksaan/hapus/'.$p->id_pemeriksaan) ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')">

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