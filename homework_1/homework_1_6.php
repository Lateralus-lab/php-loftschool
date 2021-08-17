<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>My Page Title</title>
  <meta name="description" content="My Page Description">
</head>

<body>

  <table>

    <?php
    for ($i = 1; $i <= 10; $i++) {
      echo '<tr>';

      for ($k = 1; $k <= 10; $k++) {
        if (($i % 2 === 0) && ($k % 2 === 0)) {
          $val = '(' . $i * $k . ')';
        } elseif (($i % 2 !== 0) && ($k % 2 !== 0)) {
          $val = '[' . $i * $k . ']';
        } else {
          $val = $i * $k;
        }
        echo '<td>' . $val . '</td>';
      }
      echo '</tr>';
    }
    ?>

  </table>

</body>

</html>
