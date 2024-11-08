<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-primary">Add New Task</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <form action="<?php echo e(route('save')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('POST'); ?>
                                <div class="col-9">

                                    <label for="taskname" class="label-control">Task Name</label>&nbsp &nbsp
                                    <input type="text" class="form-control"  name="task_name" id="taskname"  />
                                </div>

                                
                                <div class="col-9">
                                    <label for="taskname" class="label-control m-2">is_Completed</label>&nbsp &nbsp
                                    <select class="form-control" name="is_completed" id="action">
                                        <option value="" disabled selected>Action</option>
                                        <option value="1">Completed</option>
                                        <option value="0">InComplet</option>
                                    </select>
                                </div>
                                <div class="col-9">
                                    <label for="date" class="label-control m-2">Choose Date</label>&nbsp &nbsp
                                    <input type="date" class="form-control"  name="due_date" id="date"  />
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Submit</button>&nbsp &nbsp
                                <a class="btn btn-dark mt-4" href="">Back</a>
                    
                            </form>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH E:\laravel\management-project\resources\views/addnew.blade.php ENDPATH**/ ?>