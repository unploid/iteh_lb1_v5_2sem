<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vendor</title>
</head>
<body>
<?php
include("../php/dbConnect.php");

$vendorSql = 'SELECT `name` FROM `vendors`';

echo '<form method="get" action= "../php/getItemsByVendor.php">';

echo "<select name='name'><option> Choose the vendor </option>";

foreach($db->query($vendorSql) as $row) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
}

echo "</select>";
echo '<input type="submit" value="ОК"><br>'
?>
</body>
</html>



