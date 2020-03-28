<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Category</title>
</head>
<body>
<?php
include("../php/dbConnect.php");

$categorySql = 'SELECT `name` FROM `category`';

echo '<form method="get" action= "../php/getItemsByCategory.php">';

echo "<select name='name'><option> Choose the Category </option>";

foreach($db->query($categorySql) as $row) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
}

echo "</select>";
echo '<input type="submit" value="ОК"><br>'
?>
</body>
</html>



