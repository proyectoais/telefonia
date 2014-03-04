<?php
	$n_tel=$_POST['num_act_plan'];
	$n_pl=$_POST['nom_plan'];
	include("conexion.php");

		$query = "DELETE FROM plan_telefono WHERE id_tfno = '$n_tel' AND id_plan = '$n_pl'";
	$e_query = mysql_query($query,$link);
	mysql_close($link); 
	if ($e_query){
		print "<script type=\"text/javascript\">";
		    print "alert('El plan ha sido desactivado');\n";
		    print "parent.location = 'index.php'";
		print "</script>";		 	
			
	}else{
		print "<script type=\"text/javascript\">"; 
			print "alert('La desactivaci\u00f3n no fue exitosa. Intente nuevamente.');\n"; 
			print "parent.location = 'desactivarplan.php'";
		print "</script>"; 
			
		}

?>