<?php include_once 'header.php'; ?>
<title>Registration Panel | Blood Bank Management | A Bank For Your Life </title>

<section class="register-bg-img shadow pb-5">
<div class="container pt-5">

		<div class="row border-bottom border-top bg-light">
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
                    <a class="nav-item active"> Receiver Registration </a>
                  </li>
                </ol>  <!-- // breadcrumb ends -->

          <!-- displaying flash message here -->
                <?php if($msg = $this->session->flashdata('msg')){
                  echo "<div class='alert alert-success alert-danger border'>".$msg . "</div>";
                }?>


              <?php echo form_open('receiver/registration', ['id'=>'form2']);?>
                	<div class="row pt-5">
                  		<div class="col-md-6">
                    			<div class="form-group">
                     				<?php echo form_label('First Name *', 'fname', ['class'=>'text-danger w-100 text-left']);?>
                       				<?php echo form_input(['name'=>'fname', 'id'=>'fname', 'class'=>'form-control', 'placeholder'=>'Enter the First Name']);?>
                       			</div>
                       		</div>

                       		<div class="col-md-6">
                       			<div class="form-group">
                       				<?php echo form_label('Last Name *', 'lname', ['class'=>'text-danger w-100 text-left']);?>
                       				<?php echo form_input(['name'=>'lname', 'id'=>'lname', 'class'=>'form-control','placeholder'=>'Enter the Last Name']);?>
                       			</div>
                       		</div>
                       	</div>

                       		<div class="row">
                       		<div class="col-md-6">
                       			<div class="form-group">
                       				<?php echo form_label('Date of Birth *', 'dob', ['class'=>'text-danger w-100 text-left']);?>
                       				<input type="date" name="dob" id="dob" class="form-control" placeholder="Date">
                       			</div>
                       		</div>

                       		<div class="col-md-6">
                       			<div class="form-group">
                       				<?php echo form_label('Blood Group *', 'bgroup', ['class'=>'text-danger w-100 text-left']);?>
                       				<?php echo form_input(['name'=>'bgroup', 'id'=>'bgroup', 'class'=>'form-control', 'placeholder'=>'Enter the Blood Group']);?>
                       			</div>
                       		</div>

                       	</div>

                       	<div class="row">
                       		<div class="col-md-6">
                       			<div class="form-group">
                       				<?php echo form_label('Contact *', 'contact', ['class'=>'text-danger w-100 text-left']);?>
                       				<?php echo form_input(['name'=>'contact', 'id'=>'contact', 'class'=>'form-control', 'placeholder'=>'Enter the Contact no.']);?>
                       			</div>
                       		</div>

                       		<div class="col-md-6">
                       			<div class="form-group">
                       				<?php echo form_label('E-mail', 'email', ['class'=>'text-danger w-100 text-left']);?>
                       				<?php echo form_input(['name'=>'email', 'id'=>'email', 'class'=>'form-control','placeholder'=>'Enter the E-mail']);?>
                       			</div>
                       		</div>
                       		
                       	</div>
                       	<div class="row">
                       		<div class="col-md-6">
                       			<div class="form-group">
                       				<?php echo form_label('City/Locality *', 'city', ['class'=>'text-danger w-100 text-left']);?>
                       				<?php echo form_input(['name'=>'city', 'id'=>'city', 'class'=>'form-control', 'placeholder'=>'Enter the City/Locality']);?>
                       			</div>
                       		</div>

                       		<div class="col-md-6">
                       			<div class="form-group">
                       				<?php echo form_label('State', 'state', ['class'=>'text-danger w-100 text-left']);?>
                       				<?php echo form_input(['name'=>'state', 'id'=>'state', 'class'=>'form-control', 'placeholder'=>'Enter the State']);?>
                       			</div>
                       		</div>
                       		
                       	</div>
                       		<div class="row">
                       		<div class="col-md-12">
                       			<div class="form-group">
                       				<?php echo form_label('Address *', 'address', ['class'=>'text-danger w-100 text-left']);?>
                       				<?php echo form_textarea(['name'=>'address', 'id'=>'address', 'class'=>'form-control', 'rows'=>'3', 'placeholder'=>'Enter the Address']);?>
                       			</div>
                       		</div>
                       	</div>

                       	<div class="row">
                       		<div class="col-xl-1 col-lg-2 col-md-2 col-sm-3 col-3">
                       			<div class="form-group text-left">
                       				<?php echo form_submit(['name'=>'submit', 'id'=>'city', 'class'=>'btn btn-success', 'value'=>'Register']);?>
                       			</div>
                       		</div>  

                          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-8 col-9">
                            <div class="form-group text-left">
                             Already Registered? <?php echo anchor('receiver/login','Login Here', ['class'=>'pt-4 font-weight-normal']); ?>
                            </div>
                          </div>

                       	</div>
                      </div>
                 <?php echo form_close(); ?>                     
            </div>
			   </div>


</div>
<div class="pb-4 pt-5"></div>
</section>

<?php include_once 'footer.php'; ?>