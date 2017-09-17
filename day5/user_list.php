<?php
$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root');
$st = $pdo->query('select id, email from user');
$users = $st->fetchAll();
// select * from user order by id; を実行する
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>IT CARET</title>
</head>
<body>
  <h3>User List</h3>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>EMAIL</th>
    </tr>
    <?php foreach ($users as $user) { ?>
      <tr>
        <td><?php echo htmlspecialchars($user['id'])?></td>
        <td><?php echo htmlspecialchars($user['email'])?></td>
      </tr>
      <?php } ?>
    </table>
  </body>
  </html>
