

<?php $__env->startSection('links'); ?>
<style>
 body{
      background-color: LightGray;
      height: 1000px;
    }
table {
position:absolute;
top:480px;
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
  top:200px;
  right:300px;
  margin-right: 20px;
  cursor: pointer;
  width:160px;
  border-radius:20px;
}
</style>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('page_title'); ?>
    User
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('User')); ?>" method="post">
<fieldset style="position: absolute; right: 300px; top:200px; width: 500px; border-radius = 10px;border-color:black;">
<?php echo csrf_field(); ?>
<div class="row">
    <div class="col">
      <label for="name">  نام و نام خانوادگی :</label>
       <input type="text" class="form-control"  id="name"  name="name" value="">
      </div>
  
    <div class="col">
    <label for="melicode"> کد ملی :</label>
      <input type="text" class="form-control" id="melicode" name="melicode" value="">
</div>

<div class="cole">
    <label for="sel1">جنسیت :</label>
      <select class="form-control" id="sel1" name="gender">
        <option value="male">مرد</option>
        <option value="female">زن</option>
      </select>
    </div>
    </div>
<div class="row">   
    <div class="col">
    <label for="age">   سن :</label>
      <input type="text"  id="age" class="form-control"  name="age" value="">
    </div>

    <div class="cole">
    <label for="telephone"> شماره تلفن :</label>
    <input type="text"  id="telephone" class="form-control" name="telephone" value="">
</div>
<div class="cole">
  <label for="email"> ایمیل  :</label>
  <input type="email"  id="email" class="form-control" name="email" value="">
</div>
</div>
<div class="row">
<div class="cole">
    <label for="username">نام کاربری  :</label>
    <input type="text"  id="username" class="form-control" name="username" value="">
</div>
<div class="cole">
    <label for="password">رمز عبور :</label>
    <input type="password"  id="password" class="form-control" name="password" value="">
</div>
<div class="col">
    <label for="sel2">  نقش کاربر :</label>
      <select class="form-control" id="sel2" name="role">
        <option value="Doctor">پزشک</option>
        <option value="Patient">بیمار</option>
        <option value="Admin">ادمین</option>
      </select>
</div>
 <span class="form-group">
    <label for="sel3"> گروه پزشکی :</label>
      <select class="form-control" id="sel3" name="group_id">
      <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?> </option> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>    
</span>
</div>
<span class=" gap-2 col-6 mx-auto" >
  <button class="button" type="submit">  ثبت کاربر  </button>
</span>
<br/><br/>
</fieldset>
</form> 

<table>
  <tr>
    <th> ردیف </th>
    <th> نام و نام خانوادگی </th> 
    <th> کد ملی </th> 
    <th> نام کاربری  </th> 
    <th>  نقش  </th> 
    <th> امکانات </th> 
  </tr>
  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($user->id); ?></td>
    <td><?php echo e($user->name); ?></td>
    <td><?php echo e($user->melicode); ?></td>
    <td><?php echo e($user->username); ?></td>
    <td><?php echo e($user->role); ?></td>
    <td><a style="text-decoration:none;" href="/User/<?php echo e($user->id); ?>/delete "><i class="fa fa-close"></i></a>
    <a style="text-decoration:none;" href="/User/<?php echo e($user->id); ?>/editable "><i class="fa fa-edit"></i></a></td> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tr>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\Doctorappointmentfixed\resources\views/users/admin/User.blade.php ENDPATH**/ ?>