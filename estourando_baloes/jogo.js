var timerID = null; //Variável que armazena a chamada da função timeout

function iniciaJogo() {

	var url = window.location.search;

	var nivel_jogo = url.replace("?", "");

	var tempo_segundos = 0;

	if(nivel_jogo == 1) {
		tempo_segundos = 120;
	}

	if(nivel_jogo == 2) {
		tempo_segundos = 60;
	}

	if(nivel_jogo == 3) {
		tempo_segundos = 30;
	}

	//Inserindo segundos no span
	document.getElementById("cronometro").innerHTML = tempo_segundos;

	//Quantidade de balões
	//var qtde_baloes = 80;
	var qtde_baloes = 80;

	criaBaloes(qtde_baloes);

	//Imprimir qtde balões
	document.getElementById('baloes_inteiros').innerHTML = qtde_baloes;
	document.getElementById('baloes_estourados').innerHTML = 0;

	contagem_tempo(tempo_segundos + 1);
}

function contagem_tempo(segundos) {

	segundos--;

	if(segundos == -1) {
		clearTimeout(timerId); //Para a execução da função setTimeout
		game_over();
		return false;
	}

	document.getElementById("cronometro").innerHTML = segundos;
	timerId = setTimeout("contagem_tempo(" + segundos + ")", 1000);

}

function game_over() {
	remove_eventos_baloes();
	alert('Fim de jogo!');
}

function criaBaloes(qtde_baloes) {

	for(var i = 1; i <= qtde_baloes; i++) {

		var balao = document.createElement("img");
		balao.src = 'imagens/balao_azul_pequeno.png';
		balao.style.margin = '10px';
		balao.id = 'b' + i;
		balao.onclick = function() {
			estourar(this); //Referência ao próprio componente.
		}

		document.getElementById("cenario").appendChild(balao);
	}

}

function estourar(e) {
	var id_balao = e.id;
	document.getElementById(id_balao).setAttribute("onclick", "")
	document.getElementById(id_balao).src = 'imagens/balao_azul_pequeno_estourado.png';
	pontuacao(-1);
}

function pontuacao(acao) {
	var baloes_inteiros = document.getElementById("baloes_inteiros").innerHTML;
	var baloes_estourados = document.getElementById("baloes_estourados").innerHTML;

	baloes_inteiros = parseInt(baloes_inteiros);
	baloes_estourados = parseInt(baloes_estourados);

	baloes_inteiros = baloes_inteiros + acao;
	baloes_estourados = baloes_estourados - acao;

	document.getElementById("baloes_inteiros").innerHTML = baloes_inteiros;
	document.getElementById("baloes_estourados").innerHTML = baloes_estourados;

	situacao_jogo(baloes_inteiros);
}

function situacao_jogo(baloes_inteiros) {
	if(baloes_inteiros == 0) {
		parar_jogo();
		alert("Parabéns!");
	}
}

function parar_jogo() {
	clearTimeout(timerId);
}

function remove_eventos_baloes() {
	var i = 1;

	while(document.getElementById('b' + i)) {
		document.getElementById('b' + i).onclick = '';
		i++;
	}
}