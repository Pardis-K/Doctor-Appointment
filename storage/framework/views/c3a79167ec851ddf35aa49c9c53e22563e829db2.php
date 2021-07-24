

<?php $__env->startSection('links'); ?>
<style>
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
  margin-right:420px;
  cursor: pointer;
  width:160px;
  height: 50px;
  border-radius:20px;
}
</style>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('page_title'); ?>
    Visit
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('Visit')); ?>" method="post">
<fieldset style="position: absolute; right: 400px; top:250px; width: 700px; border-radius = 10px;border-color:black;">
<?php echo csrf_field(); ?>
<br/>
<span class="form-group">
  <label for="sel3">  پزشک :</label>&nbsp;&nbsp;
    <select class="form-control" id="sel3" name="user_id" style="width: 200px; height:35px;">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?> </option> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>    
</span><br/><br/>
<span class="form-group">
  <label for="sel3">  نام بیمار :</label>&nbsp;&nbsp;
    <select class="form-control" id="sel3" name="patientuser_id" style="width: 200px; height:35px;">
    <?php $__currentLoopData = $patientusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($patientuser->id); ?>"><?php echo e($patientuser->name); ?> </option> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>    
</span>&nbsp;&nbsp;&nbsp;&nbsp;
<span class="form-group">
  <label for="sel3">  بیماری :</label>&nbsp;&nbsp;
    <select class="form-control" id="sel3" name="patient_id" style="width: 200px; height:35px;">
    <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($patient->id); ?>"><?php echo e($patient->name); ?> </option> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>    
</span><br/><br/>
<span class="form-group">
  <label for="sel3">  زمان ویزیت  :</label>&nbsp;&nbsp;
    <select class="form-control" id="sel3" name="patienttime_id" style="width: 200px; height:35px;">
    <?php $__currentLoopData = $patienttimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patienttime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($patienttime->id); ?>"><?php echo e($patienttime->visit_date); ?> </option> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>    
  </span><br/><br/>
<div class="col">
  <label for="doctor_comment">توضیحات :</label><br/>
  &nbsp;&nbsp;<input type=text class="form-control"  id="doctor_comment" name="doctor_comment"  style="width: 300px; height:50px;">
</div>   
<div class="col">
  <label for="drugs">  دارو:</label><br/>
  <input type="text" class="form-control"  id="drugs" name="drugs" value="" style="width: 250px; height:45px;">
</div>

<div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit">
</div>
<br/>
</fieldset>
</form> 
<?php echo $__env->make('layouts.doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\Doctorappointmentfixed\resources\views/users/doctor/visit.blade.php ENDPATH**/ ?>