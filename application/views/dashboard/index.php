<nav>

    <ol class="breadcrumb">

        <li class="breadcrumb-item">

            Home

        </li>

        <li class="breadcrumb-item active">

            Dashboard

        </li>

    </ol>

</nav>

<h2 class="mb-4">

    Dashboard Administrator

</h2>

<div class="row">

    <div class="col-md-3 mb-4">

        <div class="card card-dashboard bg-primary shadow">

            <div class="card-body">

                <h5>Total Dokter</h5>

                <h1><?= $total_dokter ?></h1>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-4">

        <div class="card card-dashboard bg-success shadow">

            <div class="card-body">

                <h5>Total Pasien</h5>

                <h1><?= $total_pasien ?></h1>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-4">

        <div class="card card-dashboard bg-warning shadow">

            <div class="card-body">

                <h5>Total Pemeriksaan</h5>

                <h1><?= $total_pemeriksaan ?></h1>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-4">

        <div class="card card-dashboard bg-danger shadow">

            <div class="card-body">

                <h5>Pemeriksaan Hari Ini</h5>

                <h1><?= $pemeriksaan_hari_ini ?></h1>

            </div>

        </div>

    </div>

</div>

<div class="card shadow">

    <div class="card-body">

        <h4>

            Selamat Datang

        </h4>

        <hr>

        <p>

            Halo,

            <b><?= $this->session->userdata('nama'); ?></b>

            Selamat datang di aplikasi

            <b>Sistem Informasi Klinik</b>.

        </p>

        <p>

            Gunakan menu di sebelah kiri untuk mengelola data dokter, pasien, pemeriksaan dan laporan.

        </p>

    </div>

</div>