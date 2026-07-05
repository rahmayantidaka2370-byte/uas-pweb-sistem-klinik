<div class="container-fluid">

    <h3 class="mb-4">Tambah Data Dokter</h3>

    <div class="card shadow">

        <div class="card-body">

            <form action="<?= site_url('dokter/tambah') ?>" method="post">

                <div class="mb-3">

                    <label class="form-label">Nama Dokter</label>

                    <input type="text"
                           name="nama_dokter"
                           class="form-control"
                           placeholder="Masukkan nama dokter"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Spesialis</label>

                    <input type="text"
                           name="spesialis"
                           class="form-control"
                           placeholder="Masukkan spesialis"
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

                <a href="<?= site_url('dokter') ?>" class="btn btn-secondary">

                    Kembali

                </a>

                <button type="submit" class="btn btn-primary">

                    Simpan

                </button>

            </form>

        </div>

    </div>

</div>