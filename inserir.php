<?php

	$con=mysqli_connect("localhost","root","","virturian");

		if (mysqli_connect_errno())
		{
		    echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$sql="INSERT INTO motores (cod,Polos,Rede,Regime,Corrente,Potencia,Torque) VALUES (null,'$_POST[Polos]','$_POST[Rede]','$_POST[Regime]','$_POST[Corrente]','$_POST[Potencia]','$_POST[Torque]')";

		if (!mysqli_query($con,$sql))
		{
		    die('Error: ' . mysqli_error($con));
		}


mysqli_close($con);

echo"<script typy='javascript'>alert('Motor cadastrado com sucesso');";
echo "javascript:window.location='index.php';</script>";

?>