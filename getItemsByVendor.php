<?php 
include("dbConnect.php");

$name = $_GET['name'];

$stmt = $db->prepare("SELECT `name` FROM `items` WHERE `FID_Vendors` = (SELECT `ID_Vendors` FROM `vendors` WHERE `name` = ?)");
$stmt ->bindValue(1,$name);
$stmt->execute();

print "<table border='1'><tr><th> Items By $name </th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print "<tr><td>$row[name]</td></tr>";
}
?>