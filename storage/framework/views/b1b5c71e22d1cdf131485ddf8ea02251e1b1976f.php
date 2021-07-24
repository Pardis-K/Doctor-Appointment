

<?php $__env->startSection('links'); ?>
<style>
 .panel{
    display:flex;
    width:1000px;
    flex-direction:row;
    padding: 5px;
    margin: auto;
    margin-right: 5px;
 
    }
    .panel1{
    flex: 1 1 auto;
    width:600px;
    height: 300px;
    border-radius:10px;
    border:solid 5px rgb(150, 4, 47);
    padding:20px;
    margin-left: 10px;
    margin-top: 10px;
    }
    .panel1 ul{
    display: block;
    width:500px; 
    overflow: hidden;
    background-color:whitesmoke;
    border-radius:10px ;
    font-size: 18px;
    font-family:'Times New Roman';
    font-weight: 500;  
    position:absolute;
    right:5px;
    line-height:30px;
    margin-top: 20px;
    }
    .p1{
    color: darkslategrey;
    display: block;
    margin-right:10px;
    font-size: 18px;
    position:absolute;
    right:5px;
    line-height:30px;
    font-family:'Times New Roman';  
    }
    .panel2{
    flex: 1 1 auto;
    width: 500px;
    border-radius:10px;
    margin-right:50px;
    }
    .tbl{
    border: solid 2px rgb(150, 4, 47);
    width: 800px;
    margin: 0 auto;
    margin-top: 30px;
    }
    .tbl th{
    line-height: 50px;
    background-color: rgb(150, 4, 47);
    font-size: 16px;
    font-family: 'Times New Roman';
    text-align: center;
    color:white;
    }
    .tbl td{
    
    line-height: 50px;
    font-size: 16px;
    font-family: 'Times New Roman';
    text-align: center;
    color:black;
    }
</style>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('page_title'); ?>
    Patient
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="panel">
    <div class="panel1">
    <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li class="p1" style="color: black; margin-right:30px; ">نام و نام خانوادگی:</li><li style="line-height:30px; color: black; display: block; margin-right:10px; font-size: 18px; position:absolute; right:150px; font-family:'Times New Roman';"><?php echo e($patient->name); ?></li><br/><br/>
         <li class="p1" style="color: black; margin-right:30px;">نام کاربری :</li><li style="line-height:30px; color: black; display: block; margin-right:10px; font-size: 18px; position:absolute; right:100px; font-family:'Times New Roman';"><?php echo e($patient->username); ?> </li><br/><br/>
         <li class="p1" style="color: black; margin-right:30px;">شماره تلفن :</li><li style="line-height:30px; color: black; display: block; margin-right:10px; font-size: 18px; position:absolute; right:100px; font-family:'Times New Roman';"> <?php echo e($patient->telephone); ?></li><br/><br/>
         <li class="p1" style="color: black;  margin-right:30px;">ایمیل :</li><li style="line-height:30px; color: black; display: block; margin-right:10px; font-size: 18px; position:absolute; right:80px; font-family:'Times New Roman';"><?php echo e($patient->email); ?> </li><br/><br/>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
   <div class="panel2">
<table class="tbl">
    <p> نوبت های من </p>
    <tr>
      <th> نام پزشک </th>
      <th>  زمان ویزیت  </th> 
      <th> داروها </th> 
      <th>توضیحات پزشک</th> 
    </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($user->name); ?></td>
    <td><?php echo e($user->visit_date); ?></td>
    <td><?php echo e($user->drugs); ?></td>
    <td><?php echo e($user->doctor_comment); ?></td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.patient', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Pardis\Documents\Doctorappointmentfixed\resources\views/users/patient/mainpatient.blade.php ENDPATH**/ ?>