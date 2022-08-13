
<?php $__env->startSection('content'); ?>

<table  style="text-align:center">
<tr>
    <td width=300px  style="border-bottom:1px solid #563d7c70">Image</td>
    <td width=200px style="border-bottom:1px solid #563d7c70">User Name</td>
    <td width=200px style="border-bottom:1px solid #563d7c70">title</td>
    <td width=200px style="border-bottom:1px solid #563d7c70">body</td>
</tr>
<td style="border-right:1px solid #563d7c70;">
<img src='<?php echo e(Storage::disk('images')->url($post->image)); ?>' width=200px  style='border-radius:25px;margin:auto'>
</td>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mypost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


 <td style="border-right:1px solid #563d7c70;">  <?php echo e($post->user->name); ?></td>
 <td style="border-right:1px solid #563d7c70;">  <?php echo e($mypost['title']); ?></td>
 <td >  <?php echo e($mypost['body']); ?></td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
</table>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelProjects\project_two\resources\views/posts/show.blade.php ENDPATH**/ ?>