<?php

class User {

public $name;

public function __construct($name) {
$this->name = $name;
}}

$user1 = new User('André');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test with $this</title>
</head>
<body>
  <h1><?php echo $user1->name; ?></h1>
</body>
</html>