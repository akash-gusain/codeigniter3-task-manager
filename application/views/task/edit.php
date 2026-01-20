<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Task | Task Manager</title>

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
                    <a href="<?= base_url('task'); ?>" class="nav-link text-white">Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="<?= base_url('task/add'); ?>" class="nav-link text-white">Add Task</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-white active">Edit Task</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <div class="mb-4">
                <h3>Edit Task</h3>
                <p class="text-muted">Update the details of your task below.</p>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">

                    <form method="post" action="<?= base_url('task/update/'.$task->id); ?>">

                        <div class="mb-3">
                            <label class="form-label">Task Title</label>
                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                value="<?= htmlspecialchars($task->title); ?>"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Task Description</label>
                            <textarea
                                name="description"
                                class="form-control"
                                rows="5"
                                required
                            ><?= htmlspecialchars($task->description); ?></textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url('task'); ?>" class="btn btn-secondary">
                                Back
                            </a>
                            <button type="submit" class="btn btn-success">
                                Update Task
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
