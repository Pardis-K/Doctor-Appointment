

<?php $__env->startSection('links'); ?>
<style>
table {
    position:absolute;
    top:200px;
    border: solid 2px rgb(150, 4, 47);
    width: 795px;
    margin: 0 auto;
    margin-top: 30px;
    right:300px;
    }
table th{
    line-height: 50px;
    background-color: rgb(150, 4, 47);
    font-size: 16px;
    width: 800px;
    font-family: 'Times New Roman';
    text-align: center;
    color:white;
    }
table td{
    line-height: 50px;
    font-size: 16px;
    font-family: 'Times New Roman';
    text-align: center;
    color:black;
    }
.button {
  background-color: Tomato;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  position:absolute;
  top:80px;
  right:350px;
  margin-right: 20px;
  cursor: pointer;
  width:160px;
  border-radius:20px;
}
</style>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('page_title'); ?>
    Reserve
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<table>
  <tr>
    <th> ردیف </th>
    <th>  زمان ویزیت  </th> 
    <th> تعداد بیماران قابل ویزیت   </th> 
    <th> امکانات </th> 
  </tr>

  <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($time->id); ?></td>
    <td><?php echo e($time->time); ?></td>
    <td><?php echo e($time->max_patient); ?></td>
    <td>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="/Reserve/<?php echo e($time->id); ?>/">اخذ نوبت</a>
    </div>
    </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.patient', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\DoctorAppointment\resources\views/users/patient/finalreserve.blade.php ENDPATH**/ ?>