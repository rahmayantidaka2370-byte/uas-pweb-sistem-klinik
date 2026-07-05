<!DOCTYPE html>
<html>

<head>

    <title>Cetak Laporan Pemeriksaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body onload="window.print()">

<div class="container mt-4">

    <h3 class="text-center">

        LAPORAN PEMERIKSAAN

    </h3>

    <hr>

    <?php if($tgl_awal!='' && $tgl_akhir!='') : ?>

        <p>

            Periode :

            <strong>

                <?= date('d-m-Y',strtotime($tgl_awal)); ?>

                s/d

                <?= date('d-m-Y',strtotime($tgl_akhir)); ?>

            </strong>

        </p>

    <?php endif; ?>

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>No</th>
                <th>Tanggal</th>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Diagnosa</th>

            </tr>

        </thead>

        <tbody>

        <?php $no=1; foreach($laporan as $l): ?>

            <tr>

                <td><?= $no++; ?></td>

                <td><?= date('d-m-Y',strtotime($l->tanggal)); ?></td>

                <td><?= $l->nama_pasien; ?></td>

                <td><?= $l->nama_dokter; ?></td>

                <td><?= $l->diagnosa; ?></td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

</body>

</html>