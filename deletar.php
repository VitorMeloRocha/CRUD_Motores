<?php

    $cod = $_POST["codmotor"];

    $con=mysqli_connect("localhost","root","","virturian");
   
    $sql = "delete from motores where cod = ".$cod;

    if (!mysqli_query($con,$sql))
    {
    die('Error: ' . mysqli_error($con));
    }

    mysqli_close($con);   

    echo "<script typy='javascript'>alert('Motor deletadp com sucesso');";
    echo "javascript:window.location='index.php';</script>";
?>