<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Range</title>
</head>
<body>
<?php

$priceArray = range(10, 100);
echo '<form method="get" action= "../php/getItemsByPriceRange.php">';

echo "<select name= 'price1'><option> Choose the start price </option>";

  foreach ($priceArray as $price) {
    echo '<option '.$price.' value="'.$price.'">'.$price.'</option>';
  }
    echo "</select>";

echo "<select name='price2'><option> Choose the end price </option>";

    foreach ($priceArray as $price) {
        echo '<option '.$price.' value="'.$price.'">'.$price.'</option>';
    }
    echo "</select>";
echo '<input type="submit" value="ОК"><br>'
?>
</body>
</html>



