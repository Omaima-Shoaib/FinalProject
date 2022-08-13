<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <style>
        .label{
            display: inline-flex;
            width: 100px;
        }
        .main{
            margin-top: 25px
        }
    </style>
</head>
<body >


<?php $__env->startSection('title','Create Post'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="main">
    <form action="<?php echo e(route('posts.store')); ?>" method="post" enctype="multipart/form-data">
  <div class="label">
    title
  </div>
    <input type="text" name="title" id=""><br><br>
    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<p style="color: red;margin-left:20px">* invalid title name</p>
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
    enabled </div>
    <input type="checkbox" value=""  name="enabled" id="" style="margin-left:50px"><br><br>
  

    <div class="label">
    published at</div>
    <input type="date" name="published_at" id=""> 
    <br>
    <br>
    <br>

      <input type="file" name="image" >

        <br><br>
        <button type="submit" style="background-color: #563d7c;color:white;border:none;border-radius:5px;width:100px">Save</button>
    </form></div>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelProjects\project_two\resources\views/posts/create.blade.php ENDPATH**/ ?>