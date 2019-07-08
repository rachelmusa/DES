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
              <h6>Consultation, Adding symptomps.</h6>
              <?php 
              $message = $this->session->flashdata('message');
              if($message){
                echo '<p class="alert alert-success">'.$message.'</p>';
              }
              ?>
              <!--<p class="side-link">
               <i class="fa fa-medkit"></i><a class="btn" href="<?php echo base_url('index.php/dashboard/drug/list')?>">Drug list</a>
              </p>-->
              <form class="" action="<?=base_url('index.php/consultation/patient/symptoms/save')?>" method="post">

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-info"></i></label>
                        </div>
                        <div class="col-md-11">
                            <input type="hidden" value="<?=$patientfile?>" name="psymptomps[patientfileno]">
                          <input placeholder="symptomps name" class="des-input" type="text" name="psymptomps[name]" value="">
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
                          <label for=""><i class="fa fa-info"></i></label>
                        </div>
                        <div class="col-md-11">
                            <textarea id="" style="height:150px" cols="100" rows="80" class="des-input" name="psymptomps[description]"></textarea>
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
