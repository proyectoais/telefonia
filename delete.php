<?php
	$n_tel=$_POST['num_act_plan'];
	$n_pl=$_POST['nom_plan'];
	include("conexion.php");

		$query = "DELETE FROM plan_telefono WHERE id_tfno = '$n_tel' AND id_plan = '$n_pl'";
		$e_query = mysql_query($query,$link);
	 
	if ($e_query){

	$query2="SELECT Cant_desact FROM plan WHERE Id_plan='$n_pl'";
	$e_query2 = mysql_query($query2,$link);
	while($row = mysql_fetch_object($e_query2)){
		$cantidad= $row->Cant_desact + 1;
		$query3="UPDATE plan SET Cant_desact= $cantidad WHERE Id_plan='$n_pl'";
		$e_query3 = mysql_query($query3,$link);
	}

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
	mysql_close($link); 
?>