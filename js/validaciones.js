function validar()
{
	
	tipo = document.getElementById("num_act_plan").value;
	if(tipo== "--")
	{
		alert("Debe seleccionar una opci");
		document.getElementById('num_act_plan').focus();
		return false;
	}else{
		return true;	
	}
}