<?php
	$con=mysqli_connect("localhost","root","","virturian");
	$sql="SELECT * FROM motores";
	$result = mysqli_query($con,$sql);

									echo 
									"<table border='1'>
									<tr>
									<td>Cod</td>
									<td>Polo</td>
									<td>Rede</td>
									<td>Regimento</td>
									<td>Corrente</td>
									<td>Potencia</td>
									<td>Torque</td>
									</tr>";

									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td>" . $row['cod'] . "</td>";
									echo "<td>" . $row['Polos'] . "</td>";
									echo "<td>" . $row['Rede'] . "</td>";
									echo "<td>" . $row['Regime'] . "</td>";
									echo "<td>" . $row['Corrente'] . "</td>";
									echo "<td>" . $row['Potencia'] . "</td>";
									echo "<td>" . $row['Torque'] . "</td>";

									echo "</tr>";
									}
									echo "</table>";
									echo '<a href="index.php">Voltar</a>';
?>			