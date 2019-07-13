<div class="col-md-2 des-nav-bar">
  <ul class="des-nav">

  <?php if($account == 'admin'){?>

    <li> <a href="<?php echo base_url('index.php/dashboard/home')?>">Enter Patient</a> </li>
    <!-- <li> <a href="<?php echo base_url('index.php/dashboard/patient/list')?>">Patient List</a> </li> -->
    <li> <a href="<?php echo base_url('index.php/dashboard/drug/add')?>">Drug Add</a> </li>
    <!-- <li> <a href="<?php echo base_url('index.php/dashboard/drug/list')?>">Drug list</a> </li> -->
    <li> <a href="<?php echo base_url('index.php/dashboard/hospital/add')?>">Hospital Add</a> </li>
    <!-- <li> <a href="<?php echo base_url('index.php/dashboard/hospital/list')?>">Hospital List</a> </li> -->
    <!-- <li> <a href="<?php echo base_url('index.php/dashboard/doctor/add')?>">Enter Doctor</a> </li>
    <li> <a href="<?php echo base_url('index.php/dashboard/doctor/list')?>">Doctor List</a> </li> -->
    <li> <a href="<?php echo base_url('index.php/dashboard/user/add')?>">User Add</a> </li>
    <!-- <li> <a href="<?php echo base_url('index.php/dashboard/user/list')?>">User List</a> </li> -->
    <li> <a href="<?php echo base_url('index.php/consultation/patient/details')?>">Consultation</a> </li>

  <?php } else if($account == 'doctor'){?>

    <li> <a href="<?php echo base_url('index.php/dashboard/home')?>">Enter Patient</a> </li>
    <!-- <li> <a href="<?php echo base_url('index.php/dashboard/patient/list')?>">Patient List</a> </li> -->
    <li> <a href="<?php echo base_url('index.php/dashboard/drug/add')?>">Drug Add</a> </li>
    <!-- <li> <a href="<?php echo base_url('index.php/dashboard/drug/list')?>">Drug list</a> </li> -->
    <!-- <li> <a href="<?php echo base_url('index.php/dashboard/user/list')?>">User List</a> </li> -->
    <li> <a href="<?php echo base_url('index.php/consultation/patient/details')?>">Consultation</a> </li>

  <?php }?>

  </ul>
</div>
