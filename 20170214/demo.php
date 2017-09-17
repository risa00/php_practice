<?php
require("functions.php");
$records = get_csv_data("message.csv");
echo "<pre>";
print_r($records);
echo "</pre>";
