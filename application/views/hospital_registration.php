<?php
	include_once 'header.php';
?>
<section class="register-bg-img shadow">
<div class="container pt-5">
	<div class="row border-top border-bottom bg-light">
            <div class="col-md-5 m-auto mt-2 text-center">
                <ol class="breadcrumb bg-transparent mt-2 ml-2">
                  <li class="breadcrumb-item"> 
                    <a href="<?php echo base_url();?>registration/hospital_registration" class="nav-item"> Register As Hospital </a> 
                  </li>
                  <li class="breadcrumb-item">
                    <a href="<?php echo base_url();?>registration/receiver_registration" class="nav-item"> Register As Receiver </a>
                  </li>
                </ol>
            </div>
          </div>


<!-- breadcrumb -->
                <ol class="breadcrumb bg-transparent mt-4 border-bottom">
                  <li class="breadcrumb-item"> 
                    <a href="" class="nav-item"> Home </a> 
                  </li>
                  <li class="breadcrumb-item">
                    <a class="nav-item active"> Hospital Registration </a>
                  </li>
                </ol>
               <!-- breadcrumb ends -->

               <?php if($msg = $this->session->flashdata('msg')) {
               		echo "<div class='alert alert-success border'>".$msg."</div>";
               } 
               ?>
                          <?php echo form_open('hospital/registration_success', ['id'=>'form1']);?>
                            <div class="row pt-5">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <?php echo form_label('Hospital Name *', 'hname', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_input(['name'=>'hname', 'id'=>'hname', 'class'=>'form-control', 'placeholder'=>'Enter the Hospital Name', 'required'=>'']);?>
                              </div>
                            </div>

                            <div class="col-md-6">
                               <div class="form-group">
                                  <?php echo form_label('Specialization *', 'spec', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_input(['name'=>'spec', 'id'=>'spec', 'class'=>'form-control', 'placeholder'=>'Specialization', 'required'=>'']);?>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <?php echo form_label('Username *', 'username', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_input(['name'=>'username', 'id'=>'username', 'class'=>'form-control', 'placeholder'=>'Enter the User Name','required'=>'']);?>
                              </div>
                            </div>

                            <div class="col-md-6">
                               <div class="form-group">
                                  <?php echo form_label('Password *', 'password', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_password(['name'=>'password', 'id'=>'password', 'class'=>'form-control', 'placeholder'=>'Password','required'=>'']);?>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <?php echo form_label('Confirm Password *', 'cpassword', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_password(['name'=>'cpassword', 'id'=>'cpassword', 'class'=>'form-control', 'placeholder'=>'Confirm Password','required'=>'']);?>
                              </div>
                            </div>

                            <div class="col-md-6">
                               <div class="form-group">
                                  <?php echo form_label('E-mail Address *', 'email', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_input(['name'=>'email', 'id'=>'email', 'class'=>'form-control', 'placeholder'=>'E-mail Address','required'=>'']);?>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <?php echo form_label('Contact *', 'contact', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_input(['name'=>'contact', 'id'=>'contact', 'class'=>'form-control', 'placeholder'=>'Enter the Contact','required'=>'']);?>
                              </div>
                            </div>

                            <div class="col-md-6">
                               <div class="form-group">
                                  <?php echo form_label('City *', 'city', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_input(['name'=>'city', 'id'=>'city', 'class'=>'form-control', 'placeholder'=>'City','required'=>'']);?>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <?php echo form_label('Address *', 'hname', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_textarea(['name'=>'address', 'id'=>'address', 'class'=>'form-control', 'placeholder'=>'Hospital Address','rows'=>'5','required'=>'']);?>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                              <div class="col-lg-1 col-xl-1 col-md-2 col-sm-3 text-left">
                                <div class="form-group">
                              <?php echo form_submit(['name'=>'register', 'id'=>'register', 'class'=>'btn btn-success', 'value'=>'Register', 'form'=>'form1']);?>
                              </div>
                            </div>

                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
                            <div class="form-group text-left">
                             Already Registered? <?php echo anchor('hospital/login','Login Here', ['class'=>'pt-4 font-weight-normal']); ?>
                            </div>
                          </div>

                        </div>

                        <?php form_close(); ?>
                    </div>
                </section>
  <?php include_once 'footer.php'; ?>
