<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Task Manager</title>

    <!-- ✅ CORRECT BOOTSTRAP CDN -->
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 bg-dark text-white min-vh-100 p-3">
            <h5 class="mb-4">Task Manager</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="<?= base_url('auth/login'); ?>" class="nav-link text-white">Login (Already have an account) </a>
                </li>
                <li class="nav-item mb-2">
                    <span class="nav-link text-white nav-active">
    Register (Create an account)
</span>

                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <div class="mb-4">
                <h3>Create Account</h3>
                <p class="text-muted">Register to start managing your tasks</p>
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

                            <form method="post" action="<?= base_url('auth/register'); ?>">

                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>

                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>

                            </form>

                            <div class="text-center mt-3">
                                <a href="<?= base_url('auth/login'); ?>" class="text-decoration-none fw-semibold">
                                    Already have an account? Login
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
