<?php 
$userName = $_POST["username"];
$pass = $_POST["password"];
$p0 = 1999.00;
$p1 = 2655.00;
$p2 = 3299.00;
$q0 = $_POST["q0"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$shipping = $_POST["shipping"];

if($shipping == "Free Seven Days") { $shipPrice = 0; }
else if($shipping == "Three days") { $shipPrice = 5; }
else if($shipping == "Over night") { $shipPrice = 50; }


echo "<table border=\"1\" align=\"center\">";

echo "<tr> <td colspan=\"4\"> Welcome " . $userName . " with password: " . $pass . "</td> </tr>";
echo "<tr> <td></td> <td>Quantity</td> <td>Cost Per Item</td> <td>Sub Total</td> </tr>";
echo "<tr> <td>Item 1</td> <td>" . $q0 . "</td> <td>$" . $p0 . ".00</td> <td>$" . $q0 * $p0 . ".00</td> </tr>";
echo "<tr> <td>Item 2</td> <td>" . $q1 . "</td> <td>$" . $p1 . ".00</td> <td>$" . $q1 * $p1 . ".00</td> </tr>";
echo "<tr> <td>Item 3</td> <td>" . $q2 . "</td> <td>$" . $p2 . ".00</td> <td>$" . $q2 * $p2 . ".00</td> </tr>";
echo "<tr> <td>Shipping</td> <td colspan=\"2\">" . $shipping . "</td> <td>$" . $shipPrice . ".00</td> </tr>";
echo "<tr> <td colspan=\"3\">Total Cost</td> <td>$" . ($q0 * $p0 + $q1 * $p1 + $q2 * $p2 + $shipPrice) . ".00</td> </tr>";

echo "</table>";
 
?> 