<?php	
	if($this->session->userdata('contact') == FALSE) {
		include 'header.php';
		// return redirect('receiver/login');
	}

else{
	include_once 'user_header.php';
}

	
	
?>
<div class="container mt-5 mb-2">
	<ol class="breadcrumb bg-transparent border-bottom">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url();?>"> Home </a>
		</li>
		<li class="breadcrumb-item active">
			<a> Available Blood Samples </a>
		</li>
	</ol>
</div>


<div class="container">

	<?php if($msg = $this->session->flashdata('msg')){
		echo "<div class='alert alert-success'>" .$msg
		."</div>";
	}
	?>

<blockquote class="text-danger text-center"> Please Register/Sign in to your account before making the request for sample. </blockquote>
	<div class="row mt-5">
		<div class="col-xl-12 col-lg-12 col-md-12 col-12 m-auto ">
				<div class="card mt-4">
				    <h5 class="card-header">Available Blood Samples</h5>
					   <div class="card-body">
					   	<table class="table table-hover">
					   		<thead class="text-center">
					   			<tr>
					   				<th>Blood Name </th>
					   				<th>Type </th>
					   				<th>Hospital Name </th>
					   				<th>Quantity </th>
					   				<th>Price/Unit</th>
					   				<th>Action </th>
					   				
					   			</tr>
					   		</thead>
					   		<tbody class="text-center">
					   			<?php foreach ($result as $value) {
					   				?>
					   				<tr>
					   					<td><?php echo $value->blood_name; ?> </td>
					   					<td><?php echo $value->type; ?> </td>
					   					<td><?php echo $value->hospital_name; ?> </td>
					   					<td><?php echo $value->quantity; ?> </td>
					   					<td><?php echo $value->price; ?> </td>
					   					<td>
					   						<?php 

					   						if($this->session->userdata('contact')==FALSE)
					   						{ 
					   							echo anchor("", 'Request Sample', ['class'=>'btn btn-primary btn-sm disabled']);
					   						}
					   						 else
					   						 {
					   						 	echo anchor("receiver/request_sample/{$value->id}/{$this->session->userdata('contact')}", 'Request Sample', ['class'=>'btn btn-primary btn-sm']);
					   						 }
					   						?>
					   						
					   						
					   					</td>
					   				</tr>
					   				<?php 
					   			}
					   			?>
					   							  			
					   			
					   		</tbody>
					   	</table>					     
					     
					  </div>
				</div>
			</div>
		</div>
	</div>