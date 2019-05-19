<?php defined('BASEPATH')OR exit('Exit'); ?>
<section>
  <div class="container-fluid des-profile-holder">
    <div class="row">
      <div class="col-md-2 des-logo"> <h4><i class="fa fa-medkit"></i> <span>DES</span> </h4> </div>
      <div class="col-md-10 des-for-shadow">
        <div class="des-profile-bar">
          <ul>
            <li>
              <span>Fatuma Mussa</span>
              <label>Doctor</label>
            </li>
            <li><a href="#"> <i class="fa fa-power-off"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
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
                      <th>Name</th>
                      <th>Telephone</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Address</th>
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
