<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php echo $__env->yieldContent('links'); ?>
    <link href="<?php echo e(url('bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    
    <title>
    <?php echo $__env->yieldContent('page_title'); ?>
    </title>
    <style>
   .header{
    color: whitesmoke;
    height: 80px;
    background-color: cadetblue;
}
.header  p{
    color: whitesmoke;
    font-family:  Tahoma;
    font-size: 20px;
    text-align: center;
    
}
</style>

<div class='header'>
  <p> سایت نوبت دهی آنلاین پزشکی </p>
</div>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Links -->
<ul class="navbar-nav">
   <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('register')); ?>">ثبت نام</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('login')); ?>">ورود</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('Reserve')); ?>"> رزرو نوبت</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('logout')); ?>">خروج</a>
    </li>
  </ul>
</nav>
  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->yieldContent('footer'); ?>
    <script src="<?php echo e(url('bootstrap/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('bootstrap/js/bootstrap.min.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\Users\Pardis\Documents\DoctorAppointment\resources\views/layout/patient.blade.php ENDPATH**/ ?>