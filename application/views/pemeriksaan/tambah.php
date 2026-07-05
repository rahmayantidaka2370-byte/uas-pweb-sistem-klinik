<div class="container-fluid">

    <h3 class="mb-4">Tambah Pemeriksaan</h3>

    <div class="card shadow">

        <div class="card-body">

            <form action="<?= site_url('pemeriksaan/tambah') ?>" method="post">

                <div class="mb-3">

                    <label>Tanggal</label>

                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           value="<?= date('Y-m-d') ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label>Pasien</label>

                    <select name="id_pasien" class="form-select" required>

                        <option value="">-- Pilih Pasien --</option>

                        <?php foreach($pasien as $ps) : ?>

                            <option value="<?= $ps->id_pasien; ?>">

                                <?= $ps->nama_pasien; ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="mb-3">

                    <label>Dokter</label>

                    <select name="id_dokter" class="form-select" required>

                        <option value="">-- Pilih Dokter --</option>

                        <?php foreach($dokter as $dk) : ?>

                            <option value="<?= $dk->id_dokter; ?>">

                                <?= $dk->nama_dokter; ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="mb-3">

                    <label>Keluhan</label>

                    <textarea name="keluhan" class="form-control" rows="3"></textarea>

                </div>

                <div class="mb-3">

                    <label>Diagnosa</label>

                    <textarea name="diagnosa" class="form-control" rows="3"></textarea>

                </div>

                <div class="mb-3">

                    <label>Tindakan</label>

                    <textarea name="tindakan" class="form-control" rows="3"></textarea>

                </div>

                <a href="<?= site_url('pemeriksaan') ?>" class="btn btn-secondary">

                    Kembali

                </a>

                <button type="submit" class="btn btn-primary">

                    Simpan

                </button>

            </form>

        </div>

    </div>

</div>