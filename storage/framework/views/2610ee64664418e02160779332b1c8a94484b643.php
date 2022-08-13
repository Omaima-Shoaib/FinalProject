
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body >
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <p style="text-align: center">User has <?php echo e($countposts); ?> Posts</p> 
<table style='margin:auto;text-align:center'>   
    <tr style='background-color:#563d7c;color:white'>  
        <td style='width:200px'>User Name</td>
        <td style='width:200px'>Title</td>
        <td style='width:300px'>Body</td>
        <td style='width:100px'>Enabled</td>
        
        <td style='width:200px'>Action</td>
       
</tr>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>

       <td  style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><a style='color:#563d7c' href=" <?php echo e(route('users.show',$id)); ?> " > <?php echo e($name); ?></a></td>
       <td  style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><a style='color:#563d7c' href="# " > <?php echo e($post['title']); ?></a></td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><?php echo e($post['body']); ?></td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><?php echo e($post['enabled']); ?></td>
       
       <td style="border-bottom:1px solid #563d7c70">
        
    
        </td>
</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravelProjects\project_two\resources\views/users/posts.blade.php ENDPATH**/ ?>