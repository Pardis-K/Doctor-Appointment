

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
  margin-right: 20px;
  cursor: pointer;
  width:160px;
  border-radius:20px;
}
</style>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('page_title'); ?>
    Group
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('Groupdoc')); ?>" method="post">
<fieldset style="position: absolute; right: 400px; top:250px; width: 400px; border-radius = 10px;border-color:black;">
<?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="name">نام گروه  :</label><br/><br/>
    <input type="text" class="form-control" id="name" name="name">
  </div><br/>
<span class=" gap-2 col-6 mx-auto" >
  <button class="button" type="submit">  ثبت گروه  </button>
</span>
<br/><br/>
</fieldset>
</form> 
<table>
  <tr>
    <th> ردیف </th>
    <th> بیماری </th> 
    <th> امکانات </th> 
  </tr>
  <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($group->id); ?></td>
    <td><?php echo e($group->name); ?></td>
    <td><a style="text-decoration:none;" href="/Groupdoc/<?php echo e($group->id); ?>/delete "><i class="fa fa-close"></i></a>
    <a style="text-decoration:none;" href="/Groupdoc/<?php echo e($group->id); ?>/editable "><i class="fa fa-edit"></i></a></td> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\Doctorappointmentfixed\resources\views/users/admin/groupdoc.blade.php ENDPATH**/ ?>