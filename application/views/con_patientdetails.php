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
              <h6>Consultation patient details.</h6>
              <?php 
              $message = $this->session->flashdata('message');
              if($message){
                echo '<p class="alert alert-success">'.$message.'</p>';
              }
              ?>
              <!-- <p class="side-link">
               <i class="fa fa-search"></i><a class="btn" href="<?php echo base_url('index.php/dashboard/drug/list')?>">Check patinet status</a>
              </p> -->
              <form class="" action="<?=base_url('index.php/consultation/patient/details/save')?>" method="post">

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-user"></i></label>
                        </div>
                        <div class="col-md-11">
                          <select class="des-input" name="pdetails[patientsid]">
                            <option value="" selected disabled></option>
                            <?php foreach ($patientList as $key => $value) {?>
                                <option value="<?=$value->id?>"><?=$value->fname." ".$value->lname?></option>
                            <?php }?>
                          </select>
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
                          <label for=""><i class="fa fa-at"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="Weight" class="des-input" type="text" name="pdetails[weight]" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-at"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="Height" class="des-input" type="text" name="pdetails[height]" value="">
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
