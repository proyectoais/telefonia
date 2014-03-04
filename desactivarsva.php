<html>
<head>
<title>MIH C.A.</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script>
</head>
<body>
	<div id="contenedor">
		<div id="encabezado">
			<img src="imagen/logo.png">
			<label id="titulo">Central Telef&oacute;nica MIH C.A.</label>
		</div>
		<hr>
		<div id="contenido">
			<div id="menu">
				<?php
	  				include("head.html");
	  			?>
			</div>
			<div id="espac_cont">
				<fieldset id="fields">
					<legend>Desactivar Plan</legend>
					<form id ="foracp" method="post" action="delete2.php" onSubmit="return validarsva()">
 						<label>Seleccione el n&uacute;mero de tel&eacute;fono:</label>
							<?php include("conexion.php"); ?>
							<select id="num_act_plan" name="num_act_plan" class="required">
								<option value="--">--</option>
							<?php
								$B_BUSCAR= mysql_query ("SELECT * FROM telefono",$link);
								echo "Hola";
								$R_BUSCAR=mysql_fetch_assoc($B_BUSCAR);
								$C_BUSCAR=mysql_num_rows($B_BUSCAR);
								$suma=0;
								do{ ++$suma;
								echo "<option value='".$R_BUSCAR['Numero']."'>".$R_BUSCAR['Numero']."</option>";
								}while($R_BUSCAR=mysql_fetch_assoc($B_BUSCAR));
								echo "</select>";
							?>
 						
 						<label>Seleccione el SVA a desactivar:</label>
     						<select id="nom_sva" name="nom_sva">
     							<option selected value="--">--</option>
     							<?php
									$busq= mysql_query ("SELECT * FROM sva",$link);
									$ej_busq=mysql_fetch_assoc($busq);
									$n_bu=mysql_num_rows($busq);
									$suma2=0;

									do{ ++$suma2;
									echo "<option value='".$ej_busq['Id']."'>".$ej_busq['Nombre']."</option>";
									}while($ej_busq=mysql_fetch_assoc($busq));
									echo "</select>";

    								mysql_close($link);
     							?>
     						</select>

 						<input type="submit" value= "Activar"/>
					</form>
				</fieldset>
			</div>
		</div>

		<!--<div id="pie">
			<p>Desarrollado por Mar&iacute; Malav&eacute;, Isthar Zapata yHailyx Montenegro</p>
		</div>-->
  		
	</div>
</body>
</html>