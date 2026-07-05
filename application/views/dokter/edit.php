<div class="container-fluid">

    <h3 class="mb-4">Edit Data Dokter</h3>

    <div class="card shadow">

        <div class="card-body">

            <form action="<?= site_url('dokter/edit/'.$dokter->id_dokter) ?>" method="post">

                <div class="mb-3">

                    <label class="form-label">Nama Dokter</label>

                    <input type="text"
                           name="nama_dokter"
                           class="form-control"
                           value="<?= $dokter->nama_dokter; ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Spesialis</label>

                    <input type="text"
                           name="spesialis"
                           class="form-control"
                           value="<?= $dokter->spesialis; ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">Nomor HP</label>

                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           value="<?= $dokter->no_hp; ?>">

                </div>

                <div class="mb-3">

                    <label class="form-label">Alamat</label>

                    <textarea
                        name="alamat"
                        class="form-control"
                        rows="4"><?= $dokter->alamat; ?></textarea>

                </div>

                <a href="<?= site_url('dokter') ?>" class="btn btn-secondary">

                    Kembali

                </a>

                <button type="submit" class="btn btn-warning">

                    Update

                </button>

            </form>

        </div>

    </div>

</div>