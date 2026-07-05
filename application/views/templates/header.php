<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title; ?> | Sistem Informasi Klinik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef2f7;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .sidebar {
            background: #0d6efd;
            min-height: 100vh;
        }

        .sidebar h4 {
            font-weight: bold;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 13px 20px;
            text-decoration: none;
            transition: .2s;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, .2);
        }

        .content {
            padding: 30px;
        }

        .card-dashboard {

            border: none;
            border-radius: 15px;
            color: white;
            transition: .2s;

        }

        .card-dashboard:hover {

            transform: translateY(-3px);

        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">

        <div class="container-fluid">

            <span class="navbar-brand">

                🏥 Sistem Informasi Klinik

            </span>

            <div class="d-flex align-items-center">

                <div class="text-end text-white me-4">

                    <div id="tanggal"></div>

                    <div id="jam"></div>

                </div>

                <div class="text-white">

                    <i class="bi bi-person-circle"></i>

                    <?= $this->session->userdata('nama'); ?>

                </div>

            </div>

        </div>

    </nav>

    <div class="container-fluid">

        <div class="row">