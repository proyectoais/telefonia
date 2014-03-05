<?php
	$n_tel=$_POST['num_act_plan'];
	$n_pl=$_POST['nom_plan'];
	include("conexion.php");

	$query ="INSERT INTO  plan_telefono (id_tfno ,id_plan,fecha)VALUES ('$n_tel', '$n_pl',CURRENT_TIMESTAMP)";
	$e_query = mysql_query($query,$link);
	
	if ($e_query){

		$query2="SELECT Cant_activaciones FROM plan WHERE Id_plan='$n_pl'";
		$e_query2 = mysql_query($query2,$link);
 		while($row = mysql_fetch_object($e_query2)){
			$cantidad= $row->Cant_activaciones + 1;
			$query3="UPDATE plan SET Cant_activaciones= $cantidad WHERE Id_plan='$n_pl'";
			$e_query3 = mysql_query($query3,$link);
		}
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
	mysql_close($link); 

?>