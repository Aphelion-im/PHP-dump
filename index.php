<?php
for ($i = 1; $i <= 100; $i++) { 
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "FizzBuzz";
  } elseif ($i % 3 == 0) {
    echo "Fizz";    
  } elseif ($i % 5 == 0) {
    echo "Buzz";
  } else {
    echo $i;
  }
  echo "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP FizzBuzz</title>
</head>
<body>
<p><?= $i ?></p>
</body>
</html>