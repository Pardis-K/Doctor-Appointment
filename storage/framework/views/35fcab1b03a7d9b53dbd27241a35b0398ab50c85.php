<?php $__env->startSection('links'); ?>
<!-- Styles -->
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<style>
    table {
    position:absolute;
    border:  2px;
    border-radius: 20px;
    width: 300px;
    margin: 0 auto;
    margin-top: 30px;
    right:40%;
    top:45%;
    }
table td{
    line-height: 50px;
    font-size: 16px;
    font-family: 'Times New Roman';
    text-align: center;
    color:black;
    background-color: rgb(12, 214, 191);

    }
    table td a:hover{
      color:black;
      font-size: 20px;
      font-weight: 200px;   

    }
    </style>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('page_title'); ?>
    Main Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table>
    <tr>
        <td>
            <a href="<?php echo e(route('login')); ?>" >ورود به سایت </a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="<?php echo e(route('register')); ?>" >عضویت در سایت </a>
        </td>
    </tr>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\Doctorappointmentfixed\resources\views/welcome.blade.php ENDPATH**/ ?>