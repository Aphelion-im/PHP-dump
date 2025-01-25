<?php
$name = $email = $nameErr = $emailErr = "";

// Server side validation AFTER the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Validation</title>

  <style>
    .error {
      color: red;
    }
  </style>
</head>

<body>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <span class="error"><?= "$nameErr" ?></span>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <span class="error"><?= "$emailErr" ?></span>
    <br>
    <input type="submit" value="Submit">
  </form>


  <?php
  echo "<h1>Form Data</h1>";
  echo "<p>$name</p>";
  echo "<p>$email</p>";
  ?>




</body>

</html>