<?php 
include("dbConnect.php");

$price1 = $_GET['price1'];
$price2 = $_GET['price2'];

$stmt = $db->prepare("SELECT * FROM `items` WHERE `price` >= ? AND `price` <= ?");
$stmt -> bindValue(1,$price1);
$stmt -> bindValue(2,$price2);
$stmt->execute();

print "<table border='1'><tr><th> Items from $string1 to $string2 </th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print "<tr><td>$row[name]</td></tr>";
}
?>
