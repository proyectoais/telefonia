<?php
	$n_tel=$_POST['num_act_plan'];
	$n_sva=$_POST['nom_sva'];
	include("conexion.php");

	$query ="INSERT INTO  sva_telefono (id_tfno ,id_sva,fecha)VALUES ('$n_tel', '$n_sva',CURRENT_TIMESTAMP)";
	$e_query = mysql_query($query,$link);
	mysql_close($link); 
	if ($e_query){
		print "<script type=\"text/javascript\">";
		    print "alert('El SVA ha sido activado');\n";
		    print "parent.location = 'index.php'";
		print "</script>";		 	
			
	}else{
		print "<script type=\"text/javascript\">"; 
			print "alert('Esa activaci\u00f3n ya existe. Intente nuevamente.');\n"; 
			print "parent.location = 'activarplan.php'";
		print "</script>"; 
			
		}

?>