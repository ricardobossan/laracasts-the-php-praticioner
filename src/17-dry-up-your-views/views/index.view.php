<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>header{background:#e3e3e3;padding:2em;text-align:justify;}</style>
</head>
<body>
	<?php require('partials/nav.php'); ?>
	<header>
	<h1>My Tasks</h1>
		<ul>
			<?php foreach($tasks as $task) : ?>
				<li>
					<?php if($task->completed) : ?>
						<strike><?= $task->description ?></strike>
					<?php else : ?>
						<?= $task->description; ?>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</header>
</body>
</html>