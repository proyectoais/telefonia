<html>
<head>
<title>MIH C.A.</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script>

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
				<?php
	  				include("head.html");
	  			?>
			</div>
			<div id="espac_cont">
				<fieldset id="fields">
					<legend>Activar Plan</legend>
					<form id ="foracp" method="post" action="add.php" onSubmit="return validar()">
 						<label>Seleccione el n&uacute;mero de tel&eacute;fono:</label>
							<?php include("conexion.php"); ?>

							<select id="num_act_plan" name="num_act_plan" class="required">
								<option value="--">--</option>
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
					<?php mysql_close($link); ?>
				</fieldset>
			</div>
		</div>

		<!--<div id="pie">
			<p>Desarrollado por Mar&iacute; Malav&eacute;, Isthar Zapata yHailyx Montenegro</p>
		</div>-->
  		
	</div>
</body>
</html>