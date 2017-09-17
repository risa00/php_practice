<?php
readfile("header.php");
 ?>

<h6>count.php</h6>
<ul class="collection">
<?php for ($i = 1; $i < 10; $i++) { ?>
  <li class="collection-item"><?php echo $i;?></li>
<?php } ?>
</ul>

<?php
readfile("footer.php");
 ?>
