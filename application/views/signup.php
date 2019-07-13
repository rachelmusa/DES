<?php defined('BASEPATH')OR exit('Exit');
if ($this->session->userdata('checklogged') == true) {
  redirect('dashboard/home','referesh');
}?>
<section>
  <div class="">
    <div class="col-md-10 container">
      <div class="des-form-holder">
        <h5>SIGNUP</h5>
        <p>
        <?php
               $error_message= $this->session->flashdata('error_message');
               if($error_message){
                 echo "<p class='des-error-bar'>".$error_message."</p>";
               }
             ?>
        </p>
        <form class="" action="<?=base_url('index.php/dashboard/user/save')?>" method="post">
        <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-user"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="First Name" class="des-input" type="text" name="user[fname]" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-user"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="Middle Name" class="des-input" type="text" name="user[mname]" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-user"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="Last Name" class="des-input" type="text" name="user[lname]" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-venus-mars"></i></label>
                        </div>
                        <div class="col-md-11">
                          <select class="des-input" name="user[gender]">
                            <option value="" selected disabled>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-road"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="Address" class="des-input" type="text" name="user[address]" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-mobile"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="Mobile" class="des-input" type="text" name="user[mobile]" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-at"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="Email" class="des-input" type="text" name="user[email]" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-home"></i></label>
                        </div>
                        <div class="col-md-11">
                          <select class="des-input" name="user[hospitalsid]">
                            <option value="" selected disabled>Select Hospital</option>
                            <?php foreach ($hospitallist as $key => $value){?>
                              <option value="<?=$value->id?>"><?=$value->name?></option>
                            <?php };?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-lock"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="Password" class="des-input" type="password" name="user[password]" value="">
                            <input type="hidden" value="2" name="user[jobtypeid]">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 container">
                  <button class="col-md-12 btn btn-primary des-btn" type="submit" name="button">SIGNUP</button>
                  <!-- <p>Welcome to DES</p> -->
                  <p class="sitelink"><a href="<?=base_url('index.php/')?>" class="btn">Login</a></p>
                </div>
        </form>
      </div>
    </div>
  </div>
</section>
