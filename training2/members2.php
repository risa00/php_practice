<?php
$members = [
            ["Ishihara", 22, "Motion", "image1.png"],
            ["Kashiwabara", 22, "Boat", "image2.png"],
            ["Kawano", 21, "KnightScoop", "image3.png"],
            ["Hiroishi", 22, "Youtube", "image4.png"],
            ["Minami", 23, "WordPress", "image5.png"]
            ];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <table>
      <tr>
        <th>Name</th><th>Age</th><th>Fav</th><th>Image</th>
      </tr>
      <?php
        for ($i=0; $i < count($members); $i++) { ?>
      <tr>
        <td><?php echo $members[0]; ?></td>
        <td><?php echo $members[1]; ?></td>
        <td><?php echo $members[2]; ?></td>
        <td></td>
      </tr>
      <?php }?>
    </table>
  </body>
</html>
