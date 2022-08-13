
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<?php $__env->startSection('title','User list'); ?>
<?php $__env->startSection('content'); ?>
<body>
<table style='margin:auto;text-align:center'>   
    <tr style='background-color:#563d7c;color:white'>  
        <td style='width:200px'>Posts</td>
        <td style='width:200px'>ID</td>
        <td style='width:200px'>Name</td>
        <td style='width:400px'>Email</td>
        <td style='width:300px'>Action</td>
       
</tr>

    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <tr>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"> <?php echo e($user->posts->count()); ?> </td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"> <?php echo e($user['id']); ?> </td>
       <td  style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><a style='color:#563d7c' href="<?php echo e(route('users.show',$user['id'])); ?> " > <?php echo e($user['name']); ?></a></td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><?php echo e($user['email']); ?></td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70">
        <table style="margin: auto">
        <tr>
            <td style='width:150px'><form action=" <?php echo e(route('users.edit',['id'=>$user['id'],'name'=>$user['name']])); ?>" method='GET'>
         
            <?php echo csrf_field(); ?>
              
             <!-- <input hidden value= " <?php echo e($user['id']); ?> " name='myid'>    -->
            <button type='submit' style='border:none;background-color:#563d7c80;border-radius:5px;width:80px'>Edit</button></form></td>
            <td><form action=" <?php echo e(route('users.destroy',$user['id'])); ?>" method='POST'>
                <?php echo method_field('Delete'); ?>
            <?php echo csrf_field(); ?>
                 <button type='submit' style='border:none;background-color:#563d7c;border-radius:5px;color:white;width:80px'>Delete</button></form></td>
                    <td><a href="<?php echo e(route('users.index',['view_posts' =>'ViewPosts','id' =>$user['id'],'name' =>$user['name']])); ?>" style="color: #563d7c">  posts</a></td>
            
</tr>      
        </table>
       </td>
</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelProjects\project_two\resources\views/users/index.blade.php ENDPATH**/ ?>