<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php echo $__env->yieldContent('links'); ?>
    <link href="<?php echo e(url('bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <title>
        <?php echo $__env->yieldContent('page_title'); ?>
    </title>
    <style>
   .header{
    color: whitesmoke;
    height: 100px;
    background-color: cadetblue;
    border-radius:10px ;
}
.header  p{
    color: whitesmoke;
    font-family:  Tahoma;
    font-size: 20px;
    text-align: center;
}
.list{
     list-style-type: none;
     padding: 0;
     margin: 0;
     margin-top: 2px;
     overflow: hidden;
     background-color: darkslategrey;
     border-radius:10px ;
     z-index: 0;
 }
 li{
     float: right;
 }
 li a  {
     color: white;
     display: inline-block;
     text-align: right;
     padding: 10px;
     text-decoration: none; 
     font-size:16px;
     font-family:'Times New Roman', Times, serif;
 }
 li a:hover{
     background-color: tomato;
 }
</style>
<div class='header'>
  <p> سایت نوبت دهی آنلاین پزشکی </p>
</div>
<ul class="list" id="M">  
  <li><a href="/">صفحه اصلی </a></li>
  <li>      
    <a class="nav-link" href="<?php echo e(route('register')); ?>">ثبت نام</a>
  </li>
  <li>
    <a class="nav-link" href="<?php echo e(route('login')); ?>">ورود</a>
  </li>
  <li>
    <form method="POST" action="<?php echo e(route('logout')); ?>">
      <?php echo csrf_field(); ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                          this.closest(\'form\').submit();']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                          this.closest(\'form\').submit();']); ?>
          <?php echo e(__('خروج')); ?>

       <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  </form>
  </li>
</ul>
  
    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->yieldContent('footer'); ?>
    <script src="<?php echo e(url('bootstrap/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('bootstrap/js/bootstrap.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\Pardis\Documents\Doctorappointmentfixed\resources\views/layoutS/base_index.blade.php ENDPATH**/ ?>