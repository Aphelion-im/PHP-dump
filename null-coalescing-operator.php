<?php

$name = null;
$name ??= 'John Doe'; // ??= - null coalescing assignment operator

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test with $this</title>
</head>
<body>
  <h1><?= $name ?? 'No name'; ?></h1>
</body>
</html>