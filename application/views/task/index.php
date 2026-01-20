<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager | Dashboard</title>

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
                    <a href="<?= base_url('task'); ?>" class="nav-link text-white active">Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="<?= base_url('task/add'); ?>" class="nav-link text-white">Add Task</a>
                </li>
                <li class="nav-item mt-4">
                    <a href="<?= base_url('auth/logout'); ?>" class="nav-link text-danger">Logout</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="mb-0">My Tasks</h3>
                <a href="<?= base_url('task/add'); ?>" class="btn btn-primary">
                    + New Task
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">

                    <?php if (!empty($tasks)): ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; foreach ($tasks as $task): ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><strong><?= htmlspecialchars($task->title); ?></strong></td>
                                        <td><?= htmlspecialchars($task->description); ?></td>
                                        <td><?= date('d M Y', strtotime($task->created_at)); ?></td>
                                        <td class="text-center">
                                           <a href="<?= base_url('task/edit/'.$task->id); ?>" class="btn btn-sm btn-warning">Edit</a>

                                            <a href="<?= base_url('task/delete/'.$task->id); ?>"
                                              class="btn btn-sm btn-danger"
                                             onclick="return confirm('Are you sure you want to delete this task?');">
                                                Delete
                                            </a>
  
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-info text-center">
                            No tasks found. Click <strong>"New Task"</strong> to add one.
                        </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
