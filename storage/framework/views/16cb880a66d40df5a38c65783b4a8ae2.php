<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Trips</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Vehicle Trips</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Start Datetime</th>
                    <th>End Datetime</th>
                    <th>Locations</th>
                    <th>Action</th>
                    <!--<th>Distance</th>-->
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($trip->id); ?></td>
                        <td><?php echo e($trip->datetime); ?></td>
                        <td><?php echo e($trip->latitude); ?></td>
                        <td><?php echo e($trip->longitude); ?></td>
                        <td><?php echo e($trip->speed); ?></td>
                        <td><?php echo e($trip->distance); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <a href="/export-csv" class="btn btn-primary">Export to CSV</a>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\vehicle-trip\resources\views/vehicle_trip/index.blade.php ENDPATH**/ ?>