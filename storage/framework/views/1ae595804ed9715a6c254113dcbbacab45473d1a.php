
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>

<body >


<?php $__env->startSection('title','Posts list'); ?>
<?php $__env->startSection('content'); ?>
 
<a href="<?php echo e(route('posts.index',['view_deleted' => 'DeletedRecords'])); ?>" style="color: #563d7c;text-align:center;margin-left:500px;">View deleted posts</a>
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
      
       <td  style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><a style='color:#563d7c' href="# " > <?php echo e($post->user->name); ?></a></td>
       <td  style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><a style='color:#563d7c' href="# " > <?php echo e($post['title']); ?></a></td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><?php echo e($post['body']); ?></td>
       <td style="border-right:1px solid #563d7c70;border-bottom:1px solid #563d7c70"><?php echo e($post['enabled']); ?></td>
       
       <td style="border-bottom:1px solid #563d7c70">
        
        <table>
        <tr>
             <input hidden value= " <?php echo e($post['id']); ?> " name='myid'>    
            <td width=100px><button type='submit' style='border:none;background-color:#563d7c80;border-radius:5px;width:80px'><a href="<?php echo e(route('posts.show',['id'=>$post['id'],'title'=>$post['title'],'user_id'=>$post['user_id'],'post'=>$post])); ?>" style="color: white">View</a></button></td>
            <td width=100px><button type='submit' style='border:none;background-color:#563d7c80;border-radius:5px;width:80px'><a href="<?php echo e(route('posts.edit',['id'=>$post['id'],'title'=>$post['title'],'user_id'=>$post['user_id']])); ?>" style="color: white">Edit</a></button></td>
            <td>
                <?php if(request()->has('view_deleted')): ?>
        <a href="<?php echo e(route('posts.restore',['id'=>$post['id']])); ?>" style="color: #563d7c">Restore </a>
               
        <?php else: ?>
        <form action="<?php echo e(route('posts.delete',['id'=>$post['id']])); ?>" method="Post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('Delete'); ?>
                <button type='submit' style='border:none;background-color:#563d7c;border-radius:5px;color:white;width:80px'>
                 Delete</button>
                </form>
        <?php endif; ?>
                </td>
            
</tr>      
        </table> 
        </td>
</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($posts->links()); ?>

<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelProjects\project_two\resources\views/posts/index.blade.php ENDPATH**/ ?>