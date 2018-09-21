<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css"/>

		<title>Cadastro de motores</title>
	</head>

	<body>
		<center>
		<table  id="tabela">
			<tr>
				<td style="border-bottom: solid 1px grey; border-right:solid 1px grey; border-left: solid 1px grey;">
						<div id="cadastro">
							<form action="inserir.php" method="POST">
								<h3>Cadastro de motores</h3>
								<br>
								<label>Numero de polos:</label>
									<select name="Polos">
										<option id="2">2</option>
										<option id="4">4</option>
										<option id="6">6</option>
										<option id="8">8</option>
									</select><br><br>

								<label>Tensao de rede:</label>
									<select name="Rede">
										<option id="220">220 V</option>
										<option id="380">380 V</option>
										<option id="440">440 V</option>
									</select><br><br>

								<label>Regime de serviço:</label>
								<select name="Regime">
										<option id="S1">S1</option>
										<option id="S2">S2</option>
										<option id="S3">S3</option>
										<option id="S4">S4</option>
										<option id="S5">S5</option>
										<option id="S6">S6</option>
									</select><br><br>

								<label>Corrente nominal (A):</label>
									<input type="text" name="Corrente" maxlength="10">
									<br><br>
								<label>Potencia nominal (W):</label>
									<input type="text" name="Potencia" maxlength="10">
									<br><br>
								<label>Torque maximo (Nm):</label>
									<input type="text" name="Torque" maxlength="10">
									<br><br>

								<center>
									<input type="submit" name="Cadastrar" value="Cadastrar">
								</center>
							</form>
						</div>
				</td>
				<td style="border-bottom: solid 1px grey; border-right:solid 1px grey;">
					<div id="deletar">
						<form action="deletar.php" method="POST">
							<h3>Deletar motor</h3>
							<p>Digite o codigo do motor a ser DELETADO:</p><br>
							<input type="text" name="codmotor">	<br><br>
							<input type="submit" name="deletar" value="Deletar">
						</form>

					</div>
				</td>

				<td style="border-bottom: solid 1px grey; border-right:solid 1px grey;">
					<div id="alterar">
						<h3>Alterar motor</h3>
							<form action="alterar.php" method="POST">
								<label>Digite o codigo do motor a ser ALTERADO:</label><br>
								<input type="text" name="Codigo" maxlength="10"><br><br>
								<label>Digite as novas especificacoes:</label>
								<br><br>
								<label>Numero de polos:</label>
											<select name="Polos">
												<option id="2">2</option>
												<option id="4">4</option>
												<option id="6">6</option>
												<option id="8">8</option>
											</select><br><br>

										<label>Tensao de rede:</label>
											<select name="Rede">
												<option id="220">220 V</option>
												<option id="380">380 V</option>
												<option id="440">440 V</option>
											</select><br><br>

										<label>Regime de serviço:</label>
										<select name="Regime">
												<option id="S1">S1</option>
												<option id="S2">S2</option>
												<option id="S3">S3</option>
												<option id="S4">S4</option>
												<option id="S5">S5</option>
												<option id="S6">S6</option>
											</select><br><br>

										<label>Corrente nominal (A):</label>
											<input type="text" name="Corrente" maxlength="10">
											<br><br>
										<label>Potencia nominal (W):</label>
											<input type="text" name="Potencia" maxlength="10">
											<br><br>
										<label>Torque maximo (Nm):</label>
											<input type="text" name="Torque" maxlength="10">
											<br><br>

										<center>
											<input type="submit" name="Alterar" value="Alterar">
										</center>
							</form>
					</div>
				</td>

			</tr>
		</table>
			<br><br>
			<h3> Motores cadastrados</h3>

						<?php
							
							$con=mysqli_connect("localhost","root","","virturian");
							$sql="SELECT * FROM motores";
							$result = mysqli_query($con,$sql);

										echo 
											"<table>
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
						?>		
		</center>
		<br><br><br>

	</body>
</html>