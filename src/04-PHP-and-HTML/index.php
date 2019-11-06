<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1><?= "Hello, Jeffrey"; // equal to, e.g., `<?php echo "Hello, Jeffrey";`?></h1> 
  <h1><?= "Hello, " . htmlspecialchars($_GET['name']); // Sanitize your input. `consider the user guilty until proven innocent`?></h1> 
</body>
</html> 