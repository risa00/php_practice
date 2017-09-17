
<?php
require("functions.php");
$records = get_csv_data("message.csv");

$keyword = $_GET["keyword"];
$records = search($records, $keyword);

?>
  <?php include("header.php");
  include("search.php");
  ?>


  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Message</th>
      </tr>
    </thead>
    <?php foreach ($records as $record) { ?>
      <tr>
        <td>
          <?php  echo $record[0];?>
          </td>
          <td>
            <?php echo $record[1]; ?>
          </td>
          <td>
            <?php echo $record[2]; ?>
          </td>
        </tr>
        <?php
      }
      ?>
    </table>

    <?php
    include("footer.php");
    ?>
