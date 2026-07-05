<div class="container-fluid">

    <h3 class="mb-4">Laporan Pemeriksaan</h3>

    <div class="card shadow mb-4">

        <div class="card-body">

            <form method="GET">

                <div class="row">

                    <div class="col-md-4">

                        <label>Tanggal Awal</label>

                        <input type="date"
                               name="tgl_awal"
                               class="form-control"
                               value="<?= $tgl_awal ?>">

                    </div>

                    <div class="col-md-4">

                        <label>Tanggal Akhir</label>

                        <input type="date"
                               name="tgl_akhir"
                               class="form-control"
                               value="<?= $tgl_akhir ?>">

                    </div>

                    <div class="col-md-4 d-flex align-items-end">

                        <button class="btn btn-primary">

                            Tampilkan

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>
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

                        </tr>

                    </thead>

                    <tbody>

                    <?php if(empty($laporan)) : ?>

                        <tr>

                            <td colspan="7" class="text-center">

                                Tidak ada data.

                            </td>

                        </tr>

                    <?php else : ?>

                        <?php $no=1; foreach($laporan as $l) : ?>

                        <tr>

                            <td><?= $no++; ?></td>

                            <td><?= date('d-m-Y',strtotime($l->tanggal)); ?></td>

                            <td><?= $l->nama_pasien; ?></td>

                            <td><?= $l->nama_dokter; ?></td>

                            <td><?= $l->keluhan; ?></td>

                            <td><?= $l->diagnosa; ?></td>

                            <td><?= $l->tindakan; ?></td>

                        </tr>

                        <?php endforeach; ?>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

            <hr>

            <a href="<?= site_url('laporan/cetak?tgl_awal='.$tgl_awal.'&tgl_akhir='.$tgl_akhir); ?>"
               target="_blank"
               class="btn btn-success">

                <i class="bi bi-printer"></i>

                Cetak Laporan

            </a>

        </div>

    </div>

</div>