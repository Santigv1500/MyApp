<h1>News List</h1>
<ul>
	<?php foreach ($news as $new): ?>
		<li>
			<a href="show/<?= $new->id; ?>"><p><b><?= $new->title; ?></b></p></a>
			<p><?= $new->text; ?></p>
			<hr>
		</li>
	<?php endforeach; ?>
</ul>	