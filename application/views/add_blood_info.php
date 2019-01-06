<?php include_once 'hospital_header.php';
if ($this->session->userdata('username') == FALSE) {
		return redirect('hospital/login');
	}
?>


<div class="container mt-5 mb-5 pb-5">
	<ol class="breadcrumb bg-transparent border">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url();?>hospital/hospital_dashboard">Dashboard </a>
		</li>
		<li class="breadcrumb-item">
			<a class="active">Add Blood info </a>
		</li>
	</ol>

<!-- end breadcrumb section -->
<?php echo form_open('dashboard/save_blood_info'); ?>
<div class="row">
	<div class="col-md-6 m-auto">
<?php if($msg = $this->session->flashdata('msg')){
	echo "<div class='alert alert-warning'>" . $msg ."</div>";
}
?>
</div>
</div>
	<div class="row mt-4">
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 m-auto">
			<?php echo form_label('Blood Group *', 'bgroup', ['class'=>'text-danger']); ?>
				<div class="form-group">
					<?php echo form_input(['name'=>'bgroup', 'id'=>'bgroup', 'class'=>'form-control', 'placeholder'=>'Enter Blood Group']); ?>
				</div>

				<?php echo form_label('Type *', 'type', ['class'=>'text-danger']); ?>
				<div class="form-group">
					<?php echo form_input(['name'=>'type', 'id'=>'type', 'class'=>'form-control', 'placeholder'=>'Enter Blood Group Type']); ?>
				</div>

				<?php echo form_label('Available in (Hospital) *', 'hospitalname', ['class'=>'text-danger']); ?>
				<div class="form-group">
					<?php echo form_input(['name'=>'hospitalname', 'id'=>'hospitalname', 'class'=>'form-control', 'placeholder'=>'Enter Hospital Name']); ?>
				</div>

				<?php echo form_label('Quantity Available *', 'quantity', ['class'=>'text-danger']); ?>
				<div class="form-group">
					<?php echo form_input(['name'=>'quantity', 'id'=>'quantity', 'class'=>'form-control', 'placeholder'=>'Enter quantity']); ?>
				</div>

				<?php echo form_label('Price/Quantity*', 'price', ['class'=>'text-danger']); ?>
				<div class="form-group">
					<?php echo form_input(['name'=>'price', 'id'=>'price', 'class'=>'form-control', 'placeholder'=>'Enter Price']); ?>
				</div>

				<div class="form-group">
					<?php echo form_submit(['name'=>'submit', 'value'=>'Save Details','class'=>'btn btn-success']); ?>
				</div>
		</div>
	</div>
<?php echo form_close(); ?>
</div> 


<?php include_once 'footer.php'; ?>