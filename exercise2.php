<?php
  /*
    exercise2.php
    Mission 2: Geometric Area Calculator

    Student note:
    - calculateArea() returns a number.
    - Input is checked with is_numeric() before using it.
  */

  function calculateArea($length, $width) {
    return $length * $width;
  }

  $length = 7.4;
  $width = 7.5;

  $message = "";

  if (!is_numeric($length) || !is_numeric($width)) {
    $message = "Please enter numeric values for length and width.";
  } elseif ($length < 0 || $width < 0) {
    $message = "Length and width must be 0 or greater.";
  } else {
    $area = calculateArea((float)$length, (float)$width);
    $message = "The area of the room is: " . $area . " sq ft";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mission 2</title>
</head>
<body>
  <h1>Mission 2: Geometric Area Calculator</h1>

  <?php echo htmlspecialchars($message); ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
