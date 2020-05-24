$(document).ready(function(){
$("#form").validate({
	rules:{
		nome:{required:true,minlength:5,},
		cpf:{required:true,maxlength:11,},
		sexo:{required:true,},
		perfil:{required:true,accept:".jpg,.png"},
		email:{email:true,required:true,},
		senha:{required:true,min:8,},
		cpf:{required:true,},
	},
	messages:{
                 nome:{required:'Preencha o campo nome',minlength:'Preencha no minimo com 5 caracteres',},
                 cpf:{required:'Preencha com o seu CPF',maxlength:'São permitidos apenas 11 digitos',},
                 sexo:{required:'Selecione o sexo',},
                 perfil:{accept:'Apenas .jpg ou .png',required:'Insira um arquivo'},
                 email:{required:'Preencha com seu email!',email:'Informe um email valido,exemplo:carlos@outlook',},
                 senha:{required:'Preencha com  a sua senha',min:'Informe no minimo 8 caracteres',},

 		},
}) 
submitHandler:function fom(form){
	var dados = $(form).serialize(); /* Serializar os dados é converter em um conjunto de strings que o servidor entenda*/
	/* Nesse caso,estou armazenando os valores serializados em uma variavel*/
	$.ajax({
		type:'POST',
		url:'formulario.php',
		data:dados, /* Para ser colocado aqui*/
		sucess: function(data){
			alert(data);
		}
	});
	return false;
}
});



function selecao(id){
var reservista = document.getElementById('nm_reser'); /* Armazena o input por meio do ID*/ 
if(id.value === 'masculino'){                /* Caso o valor selecionado seja 'masculino 
                                              O display que antes estava oculto é mostrado.*/
      reservista.style.display = "block";
   }                                         /* Caso contrário ele é oculto*/
   else
   	reservista.style.display = "none";
}

        


