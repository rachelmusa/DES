<div class="row">
  <div class="col-md-2 des-logo"> <h4><i class="fa fa-medkit"></i> <span>DES</span> </h4> </div>
  <div class="col-md-10 des-for-shadow">
    <div class="des-profile-bar">
      <ul>
        <li>
          <span><?php echo $this->session->userdata['user_profile']['fname']." ".$this->session->userdata['user_profile']['lname'];?></span>
          <label><?php echo $this->session->userdata['user_profile']['jobname'];?></label>
        </li>
        <li><a title="logout" href="<?php echo base_url('index.php/dashboard/logout')?>"> <i class="fa fa-power-off"></i> </a></li>
      </ul>
    </div>
  </div>
</div>
