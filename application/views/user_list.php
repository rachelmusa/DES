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
              <h6>Users List</h6>
              <div class="row">
                <div class="col-md-12">
                  <table class="table">
                    <tr class="des-table-row-th">
                      <th>SN</th>
                      <th>First Name</th>
                      <th>Middel Name</th>
                      <th>Last Name</th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>Mobile</th>
                      <th>Role</th>
                    <?php foreach ($userlist as $key => $value){?>
                      <tr>
                        <td><?=$key+1?></td>
                        <td><?=$value->fname?></td>
                        <td><?if($value->mname)echo $value->mname; else echo 'Null';?></td>
                        <td><?=$value->lname?></td>
                        <td><?=$value->gender?></td>
                        <td><?=$value->address?></td>
                        <td><?=$value->mobile?></td>
                        <td><?=$value->jobname?></td>
                      </tr>
                    <?php }; ?>
                    </tr>
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
