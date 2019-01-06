<?php
	include_once 'hospital_header.php';
	if ($this->session->userdata('username') == FALSE) {
		return redirect('hospital/login');
	}
?>
<style type="text/css">
	table{
		font-size: 15px;
	}
	h3{
		text-shadow: 1px 2px 2px rgba(0, 0, 0, 0.1), 2px 3px 4px rgba(0, 0, 0, 0.2);
	}
</style>

<div class="container mt-5">
	<ol class="breadcrumb bg-transparent border-bottom">
		<li class="breadcrumb-item">
			<a href=""> Home </a>
		</li>
		<li class="breadcrumb-item">
			<a class="active"> Dashboard </a>
		</li>
	</ol>

</div>

<div class="container-fluid mt-5 mb-5">
	<h3 class="text-center text-primary mb-4"> Welcome to Blood Bank Dashboard </h3>
	<div class="row">
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 m-auto border-right shadow">
			<div class="card mt-4">
		   	 <h5 class="card-header bg-secondary text-white font-weight-normal">Available Blood Samples</h5>
			   <div class="card-body">
			   	<div class="table-responsive">
				   	<table class="table">
				   		<thead>
				   			<tr>
				   				<th>Blood Name </th>
				   				<th>Type </th>
				   				<th>Hospital Name </th>
				   				<th>Quantity </th>
				   				<th>Price </th>
				   				<th>Action </th>
				   			</tr>
				   		</thead>
				   		<tbody>
				   			<?php foreach ($result as $value) {
				   				?>
				   				<tr>
				   					<td><?php echo $value->blood_name; ?> </td>
				   					<td><?php echo $value->type; ?> </td>
				   					<td><?php echo $value->hospital_name; ?> </td>
				   					<td><?php echo $value->quantity; ?> </td>
				   					<td><?php echo $value->price; ?> </td>
				   					<td><?php echo anchor("hospital/update_blood_info/{$value->id}",'Edit', ['class'=>'badge badge-success font-weight-normal']);?>
				   					<?php echo anchor("hospital/delete_blood_info/{$value->id}",'Delete', ['class'=>'badge badge-danger font-weight-normal']);?>
				   					 </td>
				   				</tr>


				   				<?php
				   			}
				   			?>				   			
				   			
				   		</tbody>
				   	</table>
				   </div> <!-- end table responsive -->			     
			     
			  </div>
		</div>
	</div>

	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 m-auto shadow">
		<div class="card mt-4">
		    <h5 class="card-header bg-secondary text-white font-weight-normal"> Requests for Blood</h5>
			   <div class="card-body">
			        <div class="table-responsive">
					   	<table class="table">
					   		<thead>
					   			<tr>
					   				<th>Request Id </th>
					   				<th>Blood Id </th>
					   				<th>Receiver Contact </th>
					   				<th>Date </th>
					   				<th>Time </th>
					   				<th>Action </th>
					   			</tr>
					   		</thead>
					   		<tbody>
					   			<?php foreach($fetch_record as $req) {
					   				?>
					   				<tr>
					   					<td><?php echo $req->id; ?> </td>
					   					<td><?php echo $req->blood_id; ?> </td>
					   					<td><?php echo $req->user_contact; ?> </td>
					   					<td><?php echo $req->date; ?> </td>
					   					<td><?php echo $req->time; ?> </td>
					   					
					   					<td><?php echo anchor("hospital/update_blood_info/{$value->id}",'Edit', ['class'=>'badge badge-success font-weight-normal']);?>
					   					<?php echo anchor("hospital/delete_blood_info/{$value->id}",'Delete', ['class'=>'badge badge-danger font-weight-normal']);?>
					   					 </td>
					   				</tr>


					   				<?php
					   			}
					   			?>
					   			
					   			
					   		</tbody>

					   	</table>
					 </div> <!-- end table responsive -->		     
			     
			  </div>
		</div>
	</div>
</div> <!-- end row-->

<div class="pb-5 pt-5"></div>

</div> <!-- end container-fluid -->


<?php include_once 'footer.php'; ?>