<html>
<head>
<title>MIH C.A.</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" >
  $(document).ready(function(){
    $("#num_act_plan").change(function(){
    $.ajax({
      url:"procesa.php",
      type: "POST",
      data:"numero="+$("#num_act_plan").val(),
      success: function(opciones){
        $("#nom_plan").html(opciones);
      }
    })
  });
});
</script>
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
							<ul class="menu">

			<li><a href="#">Simular llamada</a>
				<ul>
					<li><a href="normal.php" class="documents">Tradicional</a></li>
					<li><a href="enrutador.php" class="messages">Enrutador PBX</a></li>
				</ul>
			</li>
			<li><a href="gest_linea.php">Gestionar l&iacute;nea</a></li>
			<li><a href="#">Plan</a>
				<ul>
					<li><a href="activarplan.php" class="documents">Activar</a></li>
					<li><a href="desactivarplan.php" class="documents">Desactivar</a></li>
				</ul>
			</li>
			<li><a href="#">SVA</a>
				<ul>
					<li><a href="activarsva.php" class="documents">Activar</a></li>
					<li><a href="desactivarsva.php" class="documents">Desactivar</a></li>
				</ul>
			</li>
			<li><a href="#">Reportes</a>
				<ul>
					<li ><a href="#" class="documents">Mayor cantidad llamadas</a></li>
					<li ><a href="#" class="documents">Record llamada por mes</a></li>
					<li ><a href="#" class="documents">Cantidad de conferencias</a></li>
					<li ><a href="#" class="documents">Plan m&aacute;s activado</a></li>
					<li ><a href="#" class="documents">SVA m&aacute;s activado</a></li>
					<li ><a href="#" class="documents">Plan menos activado</a></li>
					<li ><a href="#" class="documents">SVA menos activado</a></li>
				</ul>
			</li>
			<li><a href="#">Registros</a></li>
		</ul>
			</div>
			<div id="espac_cont">
				<fieldset id="fields">
					<legend>Activar Plan</legend>
					<form action="add.php" method="post">
 						<label>Seleccione el n&uacute;mero de tel&eacute;fono:</label>
							<?php include("conexion.php"); ?>

							<select id="num_act_plan" name="num_act_plan">
								<option value="0">--</option>
							<?php
								$B_BUSCAR= mysql_query ("SELECT * FROM telefono",$link);
								$R_BUSCAR=mysql_fetch_assoc($B_BUSCAR);
								$C_BUSCAR=mysql_num_rows($B_BUSCAR);
								$suma=0;
								do{ ++$suma;
								echo "<option value='".$R_BUSCAR['Numero']."'>".$R_BUSCAR['Numero']."</option>";
								}while($R_BUSCAR=mysql_fetch_assoc($B_BUSCAR));
								echo "</select>";
							?>						
 						<label>Seleccione el plan a activar:</label>
     						<select id="nom_plan" name="nom_plan">
     							<option selected value="0">--</option>
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