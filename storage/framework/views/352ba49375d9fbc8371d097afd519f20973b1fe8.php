

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
  margin-right: 20px;
  cursor: pointer;
  width:160px;
  border-radius:20px;
}
</style>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('page_title'); ?>
    Visit
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('Visit')); ?>" method="post">
<fieldset style="position: absolute; right: 300px; top:200px; width: 350px; border-radius = 10px;border-color:black;">
<?php echo csrf_field(); ?>
<span class="form-group">
    <label for="sel3">   پزشک :</label><br/>
      <select class="form-control" id="sel3" name="name">
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?> </option> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>    
</span><br/>
<span class=" gap-2 col-6 mx-auto" >
  <button class="button" type="submit">  ثبت   </button>
</span>
<br/>
</fieldset>
</form> 
<?php echo $__env->make('layout.doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\DoctorAppointment\resources\views/users/doctor/visit.blade.php ENDPATH**/ ?>