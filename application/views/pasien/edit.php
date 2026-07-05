<div class="container-fluid">

    <h3 class="mb-4">Edit Data Pasien</h3>

    <div class="card shadow">

        <div class="card-body">

            <form action="<?= site_url('pasien/edit/'.$pasien->id_pasien) ?>" method="post">

                <div class="mb-3">
                    <label class="form-label">Nama Pasien</label>

                    <input type="text"
                           name="nama_pasien"
                           class="form-control"
                           value="<?= $pasien->nama_pasien; ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Jenis Kelamin</label>

                    <select name="jenis_kelamin"
                            class="form-select"
                            required>

                        <option value="Laki-laki"
                        <?= ($pasien->jenis_kelamin=='Laki-laki')?'selected':'';?>>
                            Laki-laki
                        </option>

                        <option value="Perempuan"
                        <?= ($pasien->jenis_kelamin=='Perempuan')?'selected':'';?>>
                            Perempuan
                        </option>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">Umur</label>

                    <input type="number"
                           name="umur"
                           class="form-control"
                           value="<?= $pasien->umur; ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Nomor HP</label>

                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           value="<?= $pasien->no_hp; ?>">

                </div>

                <div class="mb-3">

                    <label class="form-label">Alamat</label>

                    <textarea name="alamat"
                              class="form-control"
                              rows="4"><?= $pasien->alamat; ?></textarea>

                </div>

                <a href="<?= site_url('pasien') ?>" class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-warning">
                    Update
                </button>

            </form>

        </div>

    </div>

</div>