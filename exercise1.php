<?php
  /*
    exercise1.php
    Mission 1: Voting Eligibility Checker

    Student note:
    - Practicing a basic function with a default parameter.
    - Return text from the function, then echo outside.
  */

  function isEligibleToVote($age = 18) {
    if (!is_numeric($age)) {
      return "Please enter a valid number for age.";
    }

    if ($age < 0) {
      return "Age can't be negative.";
    }

    if ($age >= 18) {
      return "You are eligible to vote.";
    }

    return "You are not eligible to vote.";
  }

  $tests = [20, 16, 18, 0, -3, "twenty"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mission 1</title>
</head>
<body>
  <h1>Mission 1: Voting Eligibility Checker</h1>

  <p>Test outputs:</p>

  <?php
    foreach ($tests as $value) {
      echo "Age = " . htmlspecialchars((string)$value) . ": " . isEligibleToVote($value) . "<br>";
    }
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
