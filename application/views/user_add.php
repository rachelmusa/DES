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
      <div class="col-md-2 des-nav-bar">
        <ul class="des-nav">
          <li> <a href="#">Enter Patient</a> </li>
          <li> <a href="#">Patient List</a> </li>
          <li> <a href="#">Enter Doctor</a> </li>
          <li> <a href="#">Doctor List</a> </li>
        </ul>
      </div>
      <div class="col-md-12 des-content-bar">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-10">
            <div class="des-form-holder des-row-overide">
              <h6>User Information</h6>
              <form class="" action="index.html" method="post">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <label for=""><i class="fa fa-user"></i></label>
                        </div>
                        <div class="col-md-11">
                          <input placeholder="First Name" class="des-input" type="text" name="" value="">
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
                          <input placeholder="Middle Name" class="des-input" type="text" name="" value="">
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
                          <input placeholder="Last Name" class="des-input" type="text" name="" value="">
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
                          <select class="des-input" name="">
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
                          <input placeholder="Address" class="des-input" type="text" name="" value="">
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
                          <input placeholder="Mobile" class="des-input" type="text" name="" value="">
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
                          <input placeholder="Email" class="des-input" type="text" name="" value="">
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
