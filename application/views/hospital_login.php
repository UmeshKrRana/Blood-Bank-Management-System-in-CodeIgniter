<?php
	include_once 'header.php';
?>
<section class="register-bg-img shadow">
<div class="container pt-5 pb-5">
			
			<!-- breadcrumb -->
                <ol class="breadcrumb bg-transparent mt-4 border-bottom">
                  <li class="breadcrumb-item"> 
                    <a href="" class="nav-item"> Home </a> 
                  </li>
                  <li class="breadcrumb-item">
                    <a class="nav-item active"> Hospital Login </a>
                  </li>
                </ol>
            <!-- breadcrumb ends -->

               <?php if($msg = $this->session->flashdata('msg')) {
               		echo "<div class='alert alert-warning border'>".$msg."</div>";
               } 
               ?>
                          <?php echo form_open('hospital/login_success');?>
                            <div class="row pt-4">
                              <div class="col-md-6 m-auto shadow border-top p-4">
                                <div class="form-group">
                                  <?php echo form_label('Username *', 'username', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_input(['name'=>'username', 'id'=>'username', 'class'=>'form-control', 'placeholder'=>'User Name', 'required'=>'']);?>
                              </div>
                      
                               <div class="form-group">
                                  <?php echo form_label('Password *', 'password', ['class'=>'text-danger w-100 text-left']);?>
                              <?php echo form_input(['name'=>'password', 'id'=>'password', 'class'=>'form-control', 'placeholder'=>'Password', 'required'=>'']);?>
                              </div>
                           
                      
                            <div class="form-group">
                              <?php echo form_submit(['name'=>'register', 'id'=>'register', 'class'=>'btn btn-success', 'value'=>'Login']);?> &nbsp;
                            
                               <span> Not Registered? <?php echo anchor('registration/hospital_registration','Register Here', ['class'=>'pt-4 font-weight-normal']); ?></span>
                            </div>

                           
                           
                            </div>
                          </div>
                        <?php form_close(); ?>
                    </div>
                </section>
  <?php include_once 'footer.php'; ?>
