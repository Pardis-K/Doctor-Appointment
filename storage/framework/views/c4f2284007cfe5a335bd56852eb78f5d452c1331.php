

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
    Patient
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('editPatient',$patient->id )); ?>" method="get">
<fieldset style="position: absolute; right: 400px; top:250px; width: 400px; border-radius = 10px;border-color:black;">
<?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="name">نام بیماری  :</label><br/><br/>
    <input value="<?php echo e($patient->name); ?>" type="text" class="form-control" id="name" name="name">
  </div><br/>
<span class=" gap-2 col-6 mx-auto" >
  <button class="button" type="submit">  ویرایش  بیماری  </button>
</span>
<br/><br/><br/>
</fieldset>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\Doctorappointmentfixed\resources\views/users/doctor/editablepatient.blade.php ENDPATH**/ ?>