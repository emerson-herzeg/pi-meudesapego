'use strict';

const limparFormulario = (endereco) =>{ //limpa formulario a cada pesquisa
	document.getElementById('rua').value = '';
	document.getElementById('bairro').value = '';
	document.getElementById('estado').value = '';
	document.getElementById('cidade').value = '';
}


const preencherFormulario = (endereco) =>{ //relação de dados entre nosso sistema e api (EX:logradouro, localizade)
	document.getElementById('rua').value = endereco.logradouro;
	document.getElementById('bairro').value = endereco.bairro;
	document.getElementById('estado').value = endereco.uf;
	document.getElementById('cidade').value = endereco.localidade;
}

const eNumero = (numero) => /^[0-9]+$/.test(numero); //verifica tipo de caracteres
const cepValido = (cep) => cep.length == 8 && eNumero(cep); //verifica cep por quantidade e variavel acima

const pesquisarCep = async() => { //função que lê o atributo digitado
	limparFormulario();

	const cep = document.getElementById('cep').value;
	const url = `http://viacep.com.br/ws/${cep}/json/`; //API VIACEP com a variável CEP NESTE CASO UTILIZA "CRASE" AO INVÉS DE ASPAS SIMPLES
	if(cepValido(cep)){
		const dados = await fetch(url); //recebe a promessa "dados"
		const endereco = await dados.json(); //apresenta apenas o método json
		if(endereco.hasOwnProperty('erro')){
			document.getElementById('rua').value = 'CEP não encontrado! Por favor tente novamente';
		}else{
			preencherFormulario(endereco);
		}
	}else{
		document.getElementById('rua').value = 'CEP inválido, por favor tente novamente';
	}
	
}

document.getElementById('cep')	//pega o elemento cep(input)
		.addEventListener('focusout',pesquisarCep);	//quando o elemento sair do FOCO, aciona a função "pesquisarCep"
