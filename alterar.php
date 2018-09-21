<?php
	$con=mysqli_connect("localhost","root","","virturian");
	$sql="SELECT * FROM motores";

		$codigo = $_POST['Codigo'];
		$polos = $_POST['Polos'];
		$rede = $_POST['Rede'];
		$regime = $_POST['Regime'];
		$corrente = $_POST['Corrente'];
		$potencia = $_POST['Potencia'];
		$torque = $_POST['Torque'];

 
		$sql = ("UPDATE motores SET Polos='$polos', Rede='$rede', Regime='$regime', Corrente='$corrente', Potencia='$potencia', Torque='$torque' WHERE cod=$codigo");

		    if (!mysqli_query($con,$sql))
		{
		    die('Error: ' . mysqli_error($con));
		}

    mysqli_close($con);   

   	echo "<script typy='javascript'>alert('Motor alterado com sucesso');";
	echo "javascript:window.location='index.php';</script>";
?>