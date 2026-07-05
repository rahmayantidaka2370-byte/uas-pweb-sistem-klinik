<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Data Dokter</h3>

        <a href="<?= site_url('dokter/tambah') ?>" class="btn btn-primary">
            + Tambah Dokter
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

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                    <tr>

                        <th width="5%">No</th>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th width="18%">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                <?php if(empty($dokter)) : ?>

                    <tr>

                        <td colspan="6" class="text-center">

                            Belum ada data dokter.

                        </td>

                    </tr>

                <?php else : ?>

                    <?php
                    $no=1;
                    foreach($dokter as $d) :
                    ?>

                    <tr>

                        <td><?= $no++; ?></td>

                        <td><?= $d->nama_dokter; ?></td>

                        <td><?= $d->spesialis; ?></td>

                        <td><?= $d->no_hp; ?></td>

                        <td><?= $d->alamat; ?></td>

                        <td>

                            <a href="<?= site_url('dokter/edit/'.$d->id_dokter) ?>" class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <a href="<?= site_url('dokter/hapus/'.$d->id_dokter) ?>"

                               onclick="return confirm('Yakin ingin menghapus data dokter ini?')"

                               class="btn btn-danger btn-sm">

                                Hapus

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