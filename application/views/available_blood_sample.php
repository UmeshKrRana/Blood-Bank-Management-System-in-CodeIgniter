<?php
	include_once 'hospital_header.php';
	if($this->session->userdata('username') == FALSE) {
		return redirect('hospital/login');
	}

?>

<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 m-auto">
		<div class="card mt-4">
		    <h5 class="card-header">Available Blood Samples</h5>
			   <div class="card-body">
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
			     
			     
			  </div>
		</div>
	</div>