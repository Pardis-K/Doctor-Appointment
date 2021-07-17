

<?php $__env->startSection('links'); ?>
<style>
table {
    position:absolute;
    top:400px;
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
  margin-right: 20px;
  cursor: pointer;
  width:160px;
  border-radius:20px;
}
</style>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('page_title'); ?>
    Time
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('DoctorTimes')); ?>" method="post">
<fieldset style="position: absolute; right: 300px; top:200px; width: 350px; border-radius = 10px;border-color:black;">
<?php echo csrf_field(); ?>
<span class="form-group">
    <label for="sel3">  نام پزشک :</label><br/>
      <select class="form-control" id="sel3" name="name">
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?> </option> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>    
</span><br/>
  <div class="form-group">
  <label for="visitdate">زمان ویزیت بیمار:</label>
  <input type="datetime-local" id="visitdate" name="visitdate">
  </div><br/>
  <div class="form-group">
    <label for="count"> تعداد بیماران قابل ویزیت  :</label>
    <input type="number" class="form-control" id="count" name="count">
  </div><br/>
<span class=" gap-2 col-6 mx-auto" >
  <button class="button" type="submit">  ثبت   </button>
</span>
<br/>
</fieldset>
</form> 
<table>
  <tr>
    <th> ردیف </th>
    <th>  نام پزشک  </th> 
    <th>  زمان ویزیت  </th> 
    <th> تعداد بیماران قابل ویزیت   </th> 
    <th> امکانات </th> 
  </tr>

  <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
    <td><?php echo e($time->id); ?></td>
    <td><?php echo e($time->name); ?></td>
    <td><?php echo e($time->time); ?></td>
    <td><?php echo e($time->max_patient); ?></td>
    <td><a style="text-decoration:none;" href="/DoctorTimes/<?php echo e($time->id); ?>/delete "><i class="fa fa-edit"></i></a>
    <a style="text-decoration:none;" href="/DoctorTimes/<?php echo e($time->id); ?>/editable "><i class="fa fa-close"></i></a></td> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\DoctorAppointment\resources\views/users/admin/DoctorTime.blade.php ENDPATH**/ ?>