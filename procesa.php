<?php
$nu= $_POST["numero"];
 if(isset($_POST["numero"]))
 {
    $opciones = '<option value="0"> Elige un modelo</option>';

    include("conexion.php");

    $aux = "SELECT * FROM telefono where Numero= '$nu'";
    $query = mysql_query ($aux,$link);
    //echo $aux;
    //$ej_query=mysql_fetch_assoc($query);
    $res=mysql_fetch_array($query);
    $tipo = $res["Tipo"];
    echo $tipo;
    $busq= mysql_query ("SELECT * FROM plan where Tipo_tele='$tipo'",$link);
	$ej_busq=mysql_fetch_assoc($busq);
	$n_bu=mysql_num_rows($busq);
	$suma2=0;
	do{ ++$suma2;
	echo "<option value='".$ej_busq['Nombre']."'>".$ej_busq['Nombre']."</option>";
	}while($ej_busq=mysql_fetch_assoc($busq));
	echo "</select>";
     
 }
?>