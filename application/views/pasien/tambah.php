<div class="container-fluid">

    <h3 class="mb-4">Tambah Data Pasien</h3>

    <div class="card shadow">

        <div class="card-body">

            <form action="<?= site_url('pasien/tambah') ?>" method="post">

                <div class="mb-3">
                    <label class="form-label">Nama Pasien</label>
                    <input type="text"
                           name="nama_pasien"
                           class="form-control"
                           placeholder="Masukkan nama pasien"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>

                    <select name="jenis_kelamin"
                            class="form-select"
                            required>

                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>

                    </select>

                </div>

                <div class="mb-3">
                    <label class="form-label">Umur</label>

                    <input type="number"
                           name="umur"
                           class="form-control"
                           placeholder="Masukkan umur"
                           required>

                </div>

                <div class="mb-3">
                    <label class="form-label">Nomor HP</label>

                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           placeholder="Masukkan nomor HP">

                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>

                    <textarea name="alamat"
                              class="form-control"
                              rows="4"
                              placeholder="Masukkan alamat"></textarea>

                </div>

                <a href="<?= site_url('pasien') ?>" class="btn btn-secondary">
                    Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>