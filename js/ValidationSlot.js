function validaCampo()
{
if(document.cadastro.nome.value=="")
	{
	alert("O Campo nome é obrigatório!");
	return false;
	}
else
	if(document.cadastro.email.value=="")
	{
	alert("O Campo email é obrigatório!");
	return false;
	}
else
	if(document.cadastro.cidade.value=="")
	{
	alert("O Campo Cidade é obrigatório!");
	return false;
	}
else
	if(document.cadastro.estado.value=="")
	{
	alert("O Campo Estado é obrigatório!");
	return false;
	}
else
	if(document.cadastro.cargo.value=="")
	{
	alert("O Campo país é obrigatório!");
	return false;
	}
else
	if(document.cadastro.ej.value=="")
	{
	alert("O Campo Login é obrigatório!");
	return false;
	}
else	
if(document.cadastro.senha.value=="")
	{
	alert("Digite uma senha!");
	return false;
	}
else
return true;
}

