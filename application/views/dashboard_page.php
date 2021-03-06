<?php defined('BASEPATH')OR exit('Exit');
if (!$this->session->userdata('checklogged') == true) {
  redirect('dashboard/login','referesh');
}?>
<section>
  <div class="container-fluid des-profile-holder">
    <!-- profile bar here -->
    <?php $this->load->view('profile_bar');?>
    <!-- profile bar end here -->
  </div>
  <div class="container-fluid">
    <div class="row">
      <!-- nviagtion here -->
      <?php $this->load->view('nav');?>
      <!-- navigation end here -->
      <div class="col-md-12 des-content-bar">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-10">
            <div class="des-form-holder des-row-overide">
              <h6>Patient Information</h6>
              <p class="side-link">
               <i class="fa fa-medkit"></i><a class="btn" href="<?php echo base_url('index.php/dashboard/patient/list')?>">Patient List</a>
              </p>
              <form class="" action="<?=base_url('index.php/dashboard/patient/save')?>" method="post">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-user"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="First Name" class="des-input" type="text" name="patient[fname]" value="">
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
                          <input placeholder="Middle Name" class="des-input" type="text" name="patient[mname]" value="">
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
                          <input placeholder="Last Name" class="des-input" type="text" name="patient[lname]" value="">
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
                          <label for=""><i class="fa fa-lock"></i></label>
                        </div>
                        <div class="col-md-11">
                          <select class="des-input" name="patient[gender]">
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
                          <input placeholder="Address" class="des-input" type="text" name="patient[address]" value="">
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
                          <input placeholder="Mobile" class="des-input" type="text" name="patient[mobile]" value="">
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
                          <input placeholder="Email" class="des-input" type="text" name="patient[email]" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 container">
                  <button class="col-md-12 btn btn-primary des-btn" type="submit" name="button">SAVE</button>
                  <!-- <p>Welcome to DES</p> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
