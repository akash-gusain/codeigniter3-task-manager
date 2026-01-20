<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Task Manager</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .nav-active {
        background: rgba(255, 255, 255, 0.15);
        border-left: 4px solid #0d6efd;
        box-shadow: inset 0 0 10px rgba(13, 110, 253, 0.6),
                    0 0 10px rgba(13, 110, 253, 0.6);
        font-weight: 600;
    }

    .nav-link {
        border-radius: 4px;
        padding: 10px 12px;
    }
</style>

</head>
<body class="bg-light">

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar (same as index) -->
        <div class="col-md-2 bg-dark text-white min-vh-100 p-3">
            <h5 class="mb-4">Task Manager</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                   <span class="nav-link text-white nav-active">
    Login (Already have an account)
</span>

                </li>
                <li class="nav-item mb-2">
                    <a href="<?= base_url('auth/register'); ?>" class="nav-link text-white">
                        Register (Create an account)
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <div class="mb-4">
                <h3>Login</h3>
                <p class="text-muted">Sign in to access your dashboard</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">

                    <div class="card shadow-sm">
                        <div class="card-body p-4">

                            <?php if(isset($error)): ?>
                                <div class="alert alert-danger text-center">
                                    <?= $error ?>
                                </div>
                            <?php endif; ?>
                            <?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success text-center">
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>


                            <form method="post" action="<?= base_url('auth/login'); ?>">

                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="you@example.com"
                                        required
                                    >
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        placeholder="Enter password"
                                        required
                                    >
                                </div>

                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>

                            </form>

                            <div class="text-center mt-3">
                                <span class="text-muted">New here?</span>
                                <a href="<?= base_url('auth/register'); ?>" class="fw-semibold text-decoration-none">
                                    Create an account
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>
