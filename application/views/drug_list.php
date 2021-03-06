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
              <h6>Doctor List</h6>
              <div class="row">
                <div class="col-md-12">
                  <table class="table">
                    <tr class="des-table-row-th">
                      <th>SN</th>
                      <th>Name</th>
                      <th>Status</th>
                    </tr>
                    <?php foreach ($druglist as $key => $value){?>
                      <tr>
                        <td><?=$key+1?></td>
                        <td><?=$value->name?></td>
                        <td><?=$value->status?></td>
                      </tr>
                    <?php }; ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
