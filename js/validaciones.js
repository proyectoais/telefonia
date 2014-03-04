function validar()
{
	
	num = document.getElementById("num_act_plan").value;
	plan = document.getElementById("nom_plan").value;
	var aux_num = false;
	var aux_plan = false;
	if(num== "--")
	{
		alert("Debe seleccionar una opci\u00f3n");
		document.getElementById('num_act_plan').focus();
		return false;
	}else{
		aux_num= true;	
	}
	if(plan== "--")
	{
		alert("Debe seleccionar una opci\u00f3n");
		document.getElementById('nom_plan').focus();
		return false;
	}else{
		aux_plan = true;	
	}

	if(aux_num == "true" && aux_plan =="true") return true;
}

function validarsva()
{
	
	num = document.getElementById("num_act_plan").value;
	sva = document.getElementById("nom_sva").value;
	var aux_num = false;
	var aux_sva = false;

	if(num== "--")
	{
		alert("Debe seleccionar una opci\u00f3n");
		document.getElementById('num_act_plan').focus();
		return false;
	}else{
		aux_num= true;	
	}
	if(sva== "--")
	{
		alert("Debe seleccionar una opci\u00f3n");
		document.getElementById('nom_sva').focus();
		return false;
	}else{
		aux_sva = true;	
	}

	if(aux_num == "true" && aux_sva =="true") return true;
}