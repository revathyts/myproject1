//List view

<!DOCTYPE html>
<html>
<head>
	<title>List view</title>
	<style>
		body

		table,td,th{border:1px solid red;
		padding:15px;border-collapse:collapse;width:50%}
	</style>
</head>
<body>
	
<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Username</th>
		<th>Password</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Action</th>
		<th>Action</th>
		
	</tr>
	<?php		

	if($n->num_rows()>0)
	{
		foreach ($n->result() as $row) 
		{
			?>
			<tr>
				<td><?php echo $row->firstname;?></td>
				<td><?php echo $row->lastname;?></td>
				<td><?php echo $row->uname;?></td>
				<td><?php echo $row->password;?></td>
				<td><?php echo $row->mobile;?></td>
				<td><?php echo $row->email;?></td>
				<?php
				if($row->status==1)
				{
					?>
					<td>Approved</td>
					<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">Reject</a></td>
					<?php
				}
				elseif($row->status==2)
				{
					?>
					<td>Rejected</td>
					<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">Approve</a></td>
					<?php
				}
				else
				{
					?>
				<input type="hidden" name="id" value="<?php echo $row->id;?>">
				<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">Approve</a></td>
				<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">Reject</a></td>
				<?php
			}
			?>
			</tr>
			
		<?php
		}
	}
	else
	{
		?>
		<tr>
		<td>No Data Found</td>
		</tr>
		<?php
		}
	
		?>
		
</table>
</form>
</body>
</html>
