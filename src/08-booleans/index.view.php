<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>header{background:#e3e3e3;padding:2em;text-align:center;}</style>
</head>
<body>
	<ul>
<!-- `ucwords()`makes the words first letter upper case. -->
<!-- 
	<?php foreach($task as $heading => $value) : ?>
		<li>
			<strong> <?= ucwords($heading); ?>: </strong> <?= $value; ?>
		</li>
	<?php endforeach; ?>
 -->
		<li>
			<strong>Name: </strong><?= $task['title']; ?>
		</li>
		<li>
			<strong>Due Date: </strong><?= $task['due']; ?>
		</li>
		<li>
			<strong>Personal Responsible: </strong><?= $task['assigned_to']; ?>
		</li>
		<li>
		<!-- `Ternary operators` work in PHP -->
			<strong>Status: </strong><?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
		</li>
	</ul>
</body>
</html>