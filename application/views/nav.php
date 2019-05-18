<div class="hh-sidebar">
  <div class="hh-profilebox">
    <h4>HEHI System</h4>
    <div class="hh-profile-image">
      <img src="<?=base_url();?>/assets/img/profile/<?if(DP){echo DP;}else{ echo 'default.png';}?>" alt="profilimage">
    </div>
    <ul>
      <li id="showMoreOption"><i class="fa fa-user"></i> <?=L_NAME.', '.F_NAME?></li>
      <li><span class="role_id"><?=R_NAME?></span></li>
      <li><span class="role_id"><?=REG_NUM?></span></li>
    </ul>
    <div class="hh-more-option">
      <ul>
        <li> <a href="#">Change Password</a>  </li>
        <li> <a href="<?=base_url('index.php/user/logout')?>">Log Out</a>  </li>
      </ul>
    </div>
  </div>
  <div class="hh-menu-nav">
    <ul>
      <?php if (ROLE_ID == 1){?>

          <li><a href="<?=base_url('index.php/admin/requestlist')?>"><i class="fa fa-file"></i> Request form List</a> </li>
      <?php }else if(ROLE_ID == 3){?>

        <li><a href="<?=base_url('index.php/admin/officeverify')?>"><i class="fa fa-file"></i> Verify request list</a> </li>
      <?}else{?>

        <li><a href="<?=base_url('index.php/admin/panel')?>"><i class="fa fa-file"></i> Registration form</a> </li>
      <?}?>

    </ul>
  </div>
</div>
