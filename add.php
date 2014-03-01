<?php
	$n_tel=$_POST['num_act_plan'];
	$n_pl=$_POST['nom_plan'];
	include("conexion.php");

	$query ="INSERT INTO  plan_telefono (id_tfno ,id_plan,fecha)VALUES ('$n_tel', '$n_pl',CURRENT_TIMESTAMP)";
	$e_query = mysql_query($query,$link);
	mysql_close($link); 
	if ($e_query){
		print "<script type=\"text/javascript\">";
		    print "alert('El plan ha sido activado');\n";
		    print "parent.location = 'index.php'";
		print "</script>";		 	
			
	}else{
		print "<script type=\"text/javascript\">"; 
			print "alert('Esa activaci\u00f3n ya existe. Intente nuevamente.');\n"; 
			print "parent.location = 'activarplan.php'";
		print "</script>"; 
			
		}

?>