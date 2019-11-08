<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <h2>Shorthand Method</h2>
  <ul>
    <?php foreach ($names as $name) : ?>
        <li><?= $name ?></li>
    <?php endforeach; ?>
    </ul>
  <h2>Longer Method</h2>
  <ul>
    <?php 
      foreach ($names as $name) {
        echo "<li>$name</li>";
    };
    ?>
    </ul>
</body>
</html> 