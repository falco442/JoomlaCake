<?php ?>
<table class="table">
	<thead>
		<tr>
			<th>ID</td>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Created</th>
			<th>User Type</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($users as $user): ?>
		<tr>
			<td><?= $user['User']['id'] ?></td>
			<td><?= $user['User']['username'] ?></td>
			<td><?= $user['User']['password'] ?></td>
			<td><?= $user['User']['email'] ?></td>
			<td><?= $user['User']['registerDate'] ?></td>
			<td><?= $user['User']['usertype'] ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>