<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Riwayat Pemeriksaan Pasien</h3>

        <a href="<?= site_url('pasien') ?>" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>

    </div>

    <div class="card shadow mb-4">

        <div class="card-header bg-primary text-white">

            Informasi Pasien

        </div>

        <div class="card-body">

            <table class="table table-borderless">

                <tr>
                    <th width="180">Nama Pasien</th>
                    <td><?= $pasien->nama_pasien; ?></td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?= $pasien->jenis_kelamin; ?></td>
                </tr>

                <tr>
                    <th>Umur</th>
                    <td><?= $pasien->umur; ?> Tahun</td>
                </tr>

                <tr>
                    <th>No HP</th>
                    <td><?= $pasien->no_hp; ?></td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td><?= $pasien->alamat; ?></td>
                </tr>

            </table>

        </div>

    </div>

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            Riwayat Pemeriksaan

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Dokter</th>
                            <th>Keluhan</th>
                            <th>Diagnosa</th>
                            <th>Tindakan</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php if(empty($riwayat)): ?>

                        <tr>

                            <td colspan="6" class="text-center">

                                Belum ada riwayat pemeriksaan.

                            </td>

                        </tr>

                    <?php else: ?>

                        <?php $no=1; foreach($riwayat as $r): ?>

                        <tr>

                            <td><?= $no++; ?></td>

                            <td><?= date('d-m-Y',strtotime($r->tanggal)); ?></td>

                            <td><?= $r->nama_dokter; ?></td>

                            <td><?= $r->keluhan; ?></td>

                            <td><?= $r->diagnosa; ?></td>

                            <td><?= $r->tindakan; ?></td>

                        </tr>

                        <?php endforeach; ?>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>