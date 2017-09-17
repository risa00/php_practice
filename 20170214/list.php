<?php
require("functions.php");

$records = get_csv_data("message.csv");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <h3>list.php</h3>
    <table border="1">
      <?php foreach ($records as $record) { ?>
        <tr>
          <td>
            <?php echo htmlspecialchars($record[0]) ?>
          </td>
          <td>
            <?php echo $record[1] ?>
          </td>
          <td>
            <?php echo $record[2] ?>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
    <a href="entry.html">entry</a>
  </body>
</html>
