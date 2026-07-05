<div class="container-fluid">

    <h3 class="mb-4">Edit Pemeriksaan</h3>

    <div class="card shadow">

        <div class="card-body">

            <form action="<?= site_url('pemeriksaan/edit/'.$pemeriksaan->id_pemeriksaan) ?>" method="post">

                <div class="mb-3">

                    <label class="form-label">Tanggal</label>

                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           value="<?= $pemeriksaan->tanggal; ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Pasien</label>

                    <select name="id_pasien" class="form-select" required>

                        <?php foreach($pasien as $ps) : ?>

                            <option value="<?= $ps->id_pasien; ?>"
                                <?= ($ps->id_pasien == $pemeriksaan->id_pasien) ? 'selected' : ''; ?>>

                                <?= $ps->nama_pasien; ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">Dokter</label>

                    <select name="id_dokter" class="form-select" required>

                        <?php foreach($dokter as $dk) : ?>

                            <option value="<?= $dk->id_dokter; ?>"
                                <?= ($dk->id_dokter == $pemeriksaan->id_dokter) ? 'selected' : ''; ?>>

                                <?= $dk->nama_dokter; ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">Keluhan</label>

                    <textarea name="keluhan"
                              class="form-control"
                              rows="3"><?= $pemeriksaan->keluhan; ?></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">Diagnosa</label>

                    <textarea name="diagnosa"
                              class="form-control"
                              rows="3"><?= $pemeriksaan->diagnosa; ?></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">Tindakan</label>

                    <textarea name="tindakan"
                              class="form-control"
                              rows="3"><?= $pemeriksaan->tindakan; ?></textarea>

                </div>

                <a href="<?= site_url('pemeriksaan') ?>" class="btn btn-secondary">

                    Kembali

                </a>

                <button type="submit" class="btn btn-warning">

                    Update

                </button>

            </form>

        </div>

    </div>

</div>