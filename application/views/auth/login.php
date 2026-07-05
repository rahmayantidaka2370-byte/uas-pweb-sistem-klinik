<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Sistem Informasi Klinik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f1f5f9;
        }

        .login-card {
            margin-top: 100px;
        }

        .card {
            border: none;
            border-radius: 15px;
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-4">

                <div class="card shadow login-card">

                    <div class="card-header bg-primary text-white text-center">

                        <h3>Sistem Informasi Klinik</h3>

                        <small>Silakan Login</small>

                    </div>

                    <div class="card-body">

                        <?php if ($this->session->flashdata('error')) { ?>

                            <div class="alert alert-danger">

                                <?= $this->session->flashdata('error'); ?>

                            </div>

                        <?php } ?>

                        <form action="<?= site_url('auth/login'); ?>" method="POST">

                            <div class="mb-3">

                                <label class="form-label">

                                    Username

                                </label>

                                <input type="text" name="username" class="form-control" placeholder="Masukkan username"
                                    required>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">

                                    Password

                                </label>

                                <input type="password" name="password" class="form-control"
                                    placeholder="Masukkan password" required>

                            </div>

                            <button type="submit" class="btn btn-primary w-100">

                                Login

                            </button>

                        </form>

                    </div>

                    <div class="card-footer text-center">

                        <small>

                            ©
                            <?= date('Y'); ?> Sistem Informasi Klinik

                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>