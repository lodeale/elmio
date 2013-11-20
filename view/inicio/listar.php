<table>
	<tr>
		<th>Login</th>
		<th>Password</th>
		<th>Email</th>
	</tr>
	<?php foreach($user as $row):?>
	<tr>
		<td><?php echo $row['login']; ?></td>	
		<td><?php echo $row['passwrod']; ?></td>	
		<td><?php echo $row['email']; ?></td>	
	</tr>
	<?php endforeach; ?>
</table>