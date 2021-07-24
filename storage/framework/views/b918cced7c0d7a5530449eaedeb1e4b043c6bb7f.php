

<?php $__env->startSection('links'); ?>
<style>
table {
    position:absolute;
    top:450px;
    border: solid 2px rgb(150, 4, 47);
    width: 795px;
    margin: 0 auto;
    margin-top: 30px;
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
<form action="<?php echo e(route('FReserve')); ?>" method="post">
<fieldset style="position: absolute; right: 400px; top:250px; width: 400px; border-radius = 10px;border-color:black;">
<?php echo csrf_field(); ?>

<span class="form-group">
    <label for="sel3">  پزشک :</label>&nbsp;&nbsp;
      <select class="form-control" id="sel3" name="user_id" style="width: 100px;">
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?> </option> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>    
</span><br/><br/>
<div class="form-group">
  <label for="date">زمان موردنظر:</label>
  <input type="datetime-local" id="date" name="date" >
</div><br/>

<div class="d-grid gap-2 col-6 mx-auto" >
  <button class="btn btn-primary" type="submit">جدول زمان بندی پزشکان </button>
</div>
<br/><br/>
</fieldset>
</form> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.patient', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\Doctorappointmentfixed\resources\views/users/patient/reserve.blade.php ENDPATH**/ ?>