<?php
	$n_tel=$_POST['num_act_plan'];
	$n_sva=$_POST['nom_sva'];
	include("conexion.php");

	$query ="INSERT INTO  sva_telefono (id_tfno ,id_sva,fecha)VALUES ('$n_tel', '$n_sva',CURRENT_TIMESTAMP)";
	$e_query = mysql_query($query,$link);
	
	if ($e_query){
		$query2="SELECT Cant_activaciones FROM sva WHERE id='$n_sva'";
		$e_query2 = mysql_query($query2,$link);
	 	while($row = mysql_fetch_object($e_query2)){
			$cantidad= $row->Cant_activaciones + 1;
			$query3="UPDATE sva SET Cant_activaciones= $cantidad WHERE id='$n_sva'";
			$e_query3 = mysql_query($query3,$link);
		}
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
	mysql_close($link); 

?>