

<?php $__env->startSection('links'); ?>
<style>
 body{
      background-color: LightGray;
    }
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
    Patient
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('Patient')); ?>" method="post" class="form-inline">
<fieldset style="position: absolute; right: 300px; top:200px; width:250px; border-radius = 10px;border-color:black;">
<?php echo csrf_field(); ?>
  <span class="form-group">
    <label for="name">نام بیماری  :</label>
    <input type="text" class="form-control" id="name" name="name">
  </span>
  <span class="form-group">
    <label for="sel3"> گروه پزشکی :</label>
    
      <select class="form-control" id="sel3" name="group_id">
      <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?> </option> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>    
</span>
<span>
  <button class="button" type="submit">  ثبت بیماری  </button>
</span>
<br/><br/><br/>
</fieldset>
</form> 

<table>
  <tr>
    <th> ردیف </th>
    <th> بیماری </th> 
    <th> امکانات </th> 
  </tr>
  <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($patient->id); ?></td>
    <td><?php echo e($patient->name); ?></td>
    
    <td><a style="text-decoration:none;" href="/Patient/<?php echo e($patient->id); ?>/delete "><i class="fa fa-close"></i></a>
    <a style="text-decoration:none;" href="/Patient/<?php echo e($patient->id); ?>/editable"><i class="fa fa-edit"></i></a></td> 
    </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\Doctorappointmentfixed\resources\views/users/admin/patient.blade.php ENDPATH**/ ?>