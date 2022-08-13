<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>User Info</h3>
   
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <?php echo e($post['title'] ); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
  
      
        <h5>ID: <?php echo e($user['id']); ?></h5>
        <h5>Name: <?php echo e($user['name']); ?></h5>
        <h5>email: <?php echo e($user['email']); ?></h5>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</html><?php /**PATH C:\xampp\htdocs\laravelProjects\project_two\resources\views/users/show.blade.php ENDPATH**/ ?>