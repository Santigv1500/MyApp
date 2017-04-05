<table>
	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Gender</td>
	</tr>
	<?php foreach ($users as $user): ?>
		<tr>
		<td><?= $user->id ?></td>
		<td><?= $user->name ?></td>
		<td><?= $user->email ?></td>
		<td><?= $user->gender ?></td>
		</tr>
	<?php endforeach; ?>
</table>