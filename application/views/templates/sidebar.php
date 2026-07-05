<div class="col-md-2 sidebar p-0">

    <div class="logo">

    </div>

    <a class="<?= ($menu == 'dashboard') ? 'active' : '' ?>" href="<?= site_url('dashboard') ?>">

        <i class="bi bi-speedometer2"></i>

        Dashboard

    </a>

    <a class="<?= ($menu == 'dokter') ? 'active' : '' ?>" href="<?= site_url('dokter') ?>">

        <i class="bi bi-person-vcard"></i>

        Dokter

    </a>

    <a class="<?= ($menu == 'pasien') ? 'active' : '' ?>" href="<?= site_url('pasien') ?>">

        <i class="bi bi-people"></i>

        Pasien

    </a>

    <a class="<?= ($menu == 'pemeriksaan') ? 'active' : '' ?>" href="<?= site_url('pemeriksaan') ?>">

        <i class="bi bi-clipboard2-pulse"></i>

        Pemeriksaan

    </a>

    <a class="<?= ($menu == 'laporan') ? 'active' : '' ?>" href="<?= site_url('laporan') ?>">

        <i class="bi bi-file-earmark-text"></i>

        Laporan

    </a>

    <hr class="text-secondary">

    <a href="<?= site_url('auth/logout') ?>">

        <i class="bi bi-box-arrow-right"></i>

        Logout

    </a>

</div>

<div class="col-md-10 content">