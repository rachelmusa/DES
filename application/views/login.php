<?php defined('BASEPATH')OR exit('Exit');
if ($this->session->userdata('checklogged') == true) {
  redirect('dashboard/home','referesh');
}?>
<section>
  <div class="">
    <div class="col-md-4 container">
      <div class="des-form-holder">
        <h5>LOGIN</h5>
        <p>
          <?php
               $error_message= $this->session->flashdata('error_message');
               if($error_message){
                 echo "<p class='des-error-bar'>".$error_message."</p>";
               }
             ?>
        </p>
        <form class="" action="<?php echo base_url('index.php/user/do_login')?>" method="post">
          <div class="form-group">
            <div class="row">
              <div class="col-md-1">
                <label for=""><i class="fa fa-at"></i></label>
              </div>
              <div class="col-md-11">
                <input placeholder="Email" class="des-input" type="text" name="email" value="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-1">
                <label for=""><i class="fa fa-lock"></i></label>
              </div>
              <div class="col-md-11">
                <input placeholder="Password" class="des-input" type="password" name="password" value="">
              </div>
            </div>
          </div>
          <div class="col-md-6 container">
            <button class="col-md-12 btn btn-primary des-btn" type="submit" name="button">LOGIN</button>
            <!-- <p>Welcome to DES</p> -->
            <p class="sitelink"><a href="<?=base_url('index.php/dashboard/user/signup')?>" class="btn">Signup</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
