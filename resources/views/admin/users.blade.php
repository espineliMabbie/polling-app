<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel Users</title>
	<style>
		body{
			background-color: #dbdbdb;
		}
		h1{
			font: all;
			text-align: center;
			font-size: 20px;
			border-style: solid;
			background: yellow;
		}

	</style>
</head>
<body>
	<h1>Admin Panel Users</h1>
	<table  style="width: 100%" border="2">
		<thead style="background-color: white">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email Address</th>
				<th>Created At</th>
				<th>Modified At</th>
			</tr>
		</thead>
		<tbody style="background-color: #f5c4fa">
			<?php foreach ($users as $user):?>
			<tr>
				<td><?php echo $user['id'];  ?></td>
				<td><?php echo $user['name'];  ?></td>
				<td><?php echo $user['email'];  ?></td>
				<td><?php echo $user['created_at'];  ?></td>
				<td><?php echo $user['updated_at'];  ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>	
</body>
</html>