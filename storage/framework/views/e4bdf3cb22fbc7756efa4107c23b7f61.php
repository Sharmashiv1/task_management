<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mb-5">
                <h1>Task Management</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a class="btn btn-success btn-sm mb-4" href="<?php echo e(route('addNew')); ?>">Add New Task</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>id</th>
                        <th>Task Name</th>
                        <th>is Completed</th>
                        <th>Due Date</th>
                        <th>Action</th>
                        
                        
                    </tr>
                    <tbody>
                        <?php $__currentLoopData = $task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tasks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($tasks->id); ?></td>
                                <td><?php echo e($tasks->task_name); ?></td>
                                <td><?php echo e($tasks->is_completed); ?></td>
                                <td><?php echo e($tasks->due_date); ?></td>
                                <td><a class="btn btn-warning btn-sm" href="">Edit</a> &nbsp   
                                <a class="btn btn-danger btn-sm" href="">Delete</a> &nbsp&nbsp
                                <select name="action" id="">
                                <option value="" disabled selected>Action</option>    
                                <option value="completed">Completed</option>    
                                <option value="incomplete">inomplete</option>    </select></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH E:\laravel\management-project\resources\views/task.blade.php ENDPATH**/ ?>