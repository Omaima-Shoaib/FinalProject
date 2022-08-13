<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style> <style>
        .label{
            display: inline-flex;
            width: 100px;
        }
        .main{
            margin-top: 25px
        }
    </style>
</head>
<body  >
    <?php $__env->startSection('title',$title); ?>
    

<?php $__env->startSection('content'); ?>


    <form style='margin:auto' action=" <?php echo e(route('posts.update',$id)); ?>" method='POST'>
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
<div class="container">
    
    <div class="label">
        title
      </div>
        <input type="text" name="title" id=""><br><br>
        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p style="color: red;margin-left:20px">* invalid title</p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>    
    
      <div class="label">
        body</div>
        <textarea type="text" name="body" id="" cols="18"></textarea><br><br>
        <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="color: red;margin-left:20px">* invalid body content</p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    
        <div class="label">
        enabled 
        <input type="checkbox" value=""  name="enabled" id="" style="margin-left:50px"><br><br>
      
        </div>  
    
        <div class="label">
        published at</div>
        <input type="date" name="published_at" id="">
    
    
            <br><br>
            <button type="submit" style="background-color: #563d7c;color:white;border:none;border-radius:5px;width:100px">Save</button>
    </form>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelProjects\project_two\resources\views/posts/edit.blade.php ENDPATH**/ ?>