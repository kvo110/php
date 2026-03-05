<?php
  /*
    exercise3.php
    Mission 3: Charlie Probability Challenge

    Student note:
    - isBitten() simulates a 50/50 event with rand().
    - displayWinner() shows global scope usage.
  */

  function isBitten() {
    return rand(0, 1) === 1;
  }

  $winner = "Charlie";

  function displayWinner() {
    global $winner;
    echo "Winner: " . htmlspecialchars($winner);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mission 3</title>
</head>
<body>
  <h1>Mission 3: Charlie Probability Challenge</h1>

  <?php
    if (isBitten()) {
      echo "Charlie bit your finger!";
    } else {
      echo "Charlie did not bite your finger!";
    }

    echo "<br>";
    displayWinner();
  ?>

  <p style="margin-top: 16px;">
    Refresh a few times to see the result change.
  </p>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
