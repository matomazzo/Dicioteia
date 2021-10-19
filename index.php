 <!DOCTYPE html>
 
<html>

	<head>
		
		<title>DicioTéia</title>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet"> 
		
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		
		
	</head>
	<body>

		<header class="container-fluid">
			
			<!-- faixa superior com nome de sticker -->
			
			<div class="row cabecalho">
				<h3 class="col mx-auto titulo">DicioTéia <img class="tamanho_icon" src="img/teiaNote.png"/></h3>
			</div>
			
			<div class="row" id="palavra_aleatoria">
				<ul class="col row mx-auto">
					<li class="col change_letter" id="pa1">baderninhja</li>
					<li class="col change_letter" id="pa2">Digia</li>
					<li class="col change_letter" id="pa3">Serase</li>
					<li class="col change_letter" id="pa4">Glub-Glub</li>
					<li class="col change_letter" id="pa5">Mamaki</li>
					<li class="col change_letter" id="pa6">Cilindro</li>
					<li class="col change_letter" id="pa7">Sem-silviu</li>
				</ul>
			</div>
		</header>
		
			<!-- <div id="A" class="carousel slide" data-bs-ride="carousel"> -->
			  <!-- <div class="carousel-inner"> -->
				<!-- <div class="carousel-item active"> -->
				  <!-- <img src="img/teia_errado.jpg" class="d-block w-100" alt="..."> -->
				<!-- </div> -->
				<!-- <div class="carousel-item"> -->
				  <!-- <img src="img/teia_errado.jpg" class="d-block w-100" alt="..."> -->
				<!-- </div> -->
				<!-- <div class="carousel-item"> -->
				  <!-- <img src="img/teia_errado.jpg" class="d-block w-100" alt="..."> -->
				<!-- </div> -->
			  <!-- </div> -->
			<!-- </div> -->
			
		
		<main>
			<article class="container-fluid">
				<div class="">
					<div class="row about justify-content-around">
					
							<p class="letter justify-content-around col-5">Devido ao grande e vasto conhecimento em português da streamer Teteia sua mente processa informações de forma tão rápida que sua fala não consegue acompanhar tamanho raciocínio, gerando assim novas palavras para nossa lingua portuguesa pt-Br padrão ABNT.</p>
							<p class="col-3 letter">Constam aqui também outras palavras que foram usadas pelos seus seguidores.</p>
							<p class="col-3 letter">Embora a solução mais fácil seja passar por terapia fonoaudiológica acredito eu mero criador e catalogador que ela não irá fazer isso.</p>
							<p class="col-12 letter">Assim foi criado este local para que os desavisados possam tirar proveito deste novo vocabulário que se estende cada dia mais. Alguns é possível ouvir a pronúncia</p>
						
					</div>
				</div>
				
			</article>
			<hr>
			<aside class="container-fluid">
			
				<div class="dicionário col-12 ">
					
					<!-- <div class="input-group mb-3">
					  <span class="input-group-text" id="basic-addon1"></span>
					  <input type="text" disabled class="form-control" placeholder="Pesquise alguma palavra" title="Desculpe, função ainda não disponível" alt="Desculpe, função ainda não disponível" aria-label="Desculpe, função ainda não disponível" aria-describedby="Desculpe, função ainda não disponível">
					</div> -->
					
					<div class="row palavras_dic">
					
						<div class="card col-4 mx-auto my-3" id="executaAudio1">
						  <div class="card-body">
							<h5 class="card-title">Quiropracicista</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo masculino ;</h6>
							<p class="card-text">1. Aquele que se especializou em quiropraxia, tratamento médico cuja cura de doenças é feita através da manipulação das estruturas do corpo, essencialmente da coluna vertebral; quiropracicista, quiroprático..</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">1. Preciso de umas seções no quiropracicista para parar com as dor na costa.</p>
							<p class="card-text">2. Imagina você ganhar um vale quiropracicista?.</p>
							
							<a class="card-link" id="#executaAudio1" onclick="executaAudio1()">Escutar pronúncia</a>
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Cocodrila</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1. Ato ou efeito de desbloquear uma conquista em jogos online ou não.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">1. Nossa galera! acabei de desconquistar uma bloquista aqui no sea of thieves!!!.</p>
							<p class="card-text">2. UAU! Desconquistei uma bloquista agorinha depois dessa fase.</p>
							
							<!-- <a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3" id="bloquista">
						  <div class="card-body">
							<h5 class="card-title">Desconquistar uma bloquista</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1. Ato ou efeito de desbloquear uma conquista em jogos online ou não.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">1. Nossa galera! acabei de desconquistar uma bloquista aqui no sea of thieves!!!.</p>
							<p class="card-text">2. UAU! Desconquistei uma bloquista agorinha depois dessa fase.</p>
							
							<a href="#bloquista" class="card-link" onclick="executaAudio2()">Escutar pronúncia</a>
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Escadelha</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1. série de degraus, de materiais diversos, que conduz a lugares altos e baixos e por onde, andando, se pode subir ou descer.</p>
							<p class="card-text">2. Muito usado pela streamer para alcançar a pia, cama entre outros lugares.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">1. Você acha que eu não vi a escadelha ali no canto não é.</p>
							<p class="card-text">2. Pra que usar a escadelha sendo que tenho pulo duplo.</p>
							
						<!--	<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Sumbley gift</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo neutro;</h6>
							<p class="card-text">1. Quando o Conde/eternal ou outro burguês(safado ou não) decidi dar uma inscrição grátis pra alguém do chat. Agora ficou mais fácil só 7,90 o subgift hehe</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">CONDE!!!! seu bandidinho Valeu pelos subgifts pro pessoal. Sejam bem vindos....</p>
							<p class="card-text">ETERNAL E CONDE!!!! valeu pelos subgifts, velho, porque vocês gastam tanto dinheiro assim comigo?</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Vacalo</h5>
							<h6 class="card-subtitle mb-2 text-muted">Mastozoologia•mamífero;</h6>
							<p class="card-text">1. mamífero perissodátilo da fam. dos equídeos ( Equus caballus ), nativo das estepes da Europa e da Ásia, mas encontrado em todo o mundo como animal doméstico; distinto das demais spp. da fam., ger. pelo grande porte, cauda e crina longas, cabeça relativamente pequena e orelhas curtas.</p>
							<p class="card-text">2. por metáfora indivíduo grosseiro, rude; animal, cavalgadura.</p>
							<p class="card-text">3. Animal muito utilizado pela streamer teteia ao jogar RDR 2º melhor game já feito(o 1º é o Gow 4).</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Caralho velho, de novo bati nessa arvore com o vacalo. Quem que coloco essa arvore aqui?</p>
							<p class="card-text">Nossa que vacalo bonito.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">!gype</h5>
							<h6 class="card-subtitle mb-2 text-muted">Expressão desconhecida;</h6>
							<p class="card-text">1. Comando utilizado para tirar sátira de quem escreveu errado o comando de hype.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">!gype KEKW.</p>
							<p class="card-text">!gype LUL.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>				
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">!amo4</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1. Comando utilizado para tirar sátira de quem escreveu errado o comando de amor.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">!amo4 PepePoint.</p>
							<p class="card-text">!amo4 KEKW.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Bota</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1. Vestuário•chapelaria. calçado que cobre o pé e parte da perna, chegando por vezes à coxa, us. para proteger contra o frio, para montar a cavalo etc.; botina..</p>
							<p class="card-text">2. Aquilo que o patri escreve no chat da Teteia quando ela faz alguma rima com p*u.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Mas que reta! meu p*u que penetra. "patri no chat": Bota</p>
							<p class="card-text">Tá vendo essa bota? Eu vou enfiar ela no seu cool.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Priquito</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo masculino;</h6>
							<p class="card-text">1. Ornitologia•aves design. Comum a diversas aves da fam. dos psitacídeos, ger. pequenas, de corpo delgado e cauda longa.</p>
							<p class="card-text">2. Qualquer passarinho, ou ser que tenha asas e penas em jogos.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">AO priquito cuidado. AAAAI taca a mãe piriquito fidap...</p>
							<p class="card-text" alt="Foi oq ela disse" title="Foi oq ela disse">Nossa que piriquito grande.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Gifara</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1. mastozoologia•mamífero Comum aos grandes mamíferos artiodátilos, ruminantes, do gên. Giraffa, da fam. dos girafídeos, com uma única sp. ( G . camelopardalis ), encontrada na África, ao Sul do Saara; de pescoço longo e corpo amarelo-claro com manchas avermelhadas ou castanhas [É o mais alto dos animais terrestres, podendo alcançar quase seis metros.].</p>
							<p class="card-text">2.cinema•tv dispositivo movido por sistema de compressão do ar, us. para suspender, abaixar ou levar, de um lado para o outro, microfones e fontes de iluminação, de modo a mantê-los fora do enquadramento das câmaras;</p>
							<p class="card-text">3. Aquele bicho que a teteia tentou atirar no The last of us 1 no final do game;</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Oia lá a gifara que bonitinha, será que dá para atirar nela?.</p>
							<p class="card-text">Teia, você poderia falar gifara? Gifara. Gifara(in italiano).</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Tulabão</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1. ictiologia•peixes Comum aos peixes condrictes, elasmobrânquios e eusseláquios, de pequeno e médio porte, corpo fusiforme e fendas branquiais laterais; cação [São predadores, e grande parte das spp. não oferece perigo ao homem; embora de discutida qualidade, sua carne é muito consumida.]..</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Ao tulabão. (música do tubarão ao fundo) tuuuuru tuuuuru, turururururu.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<!-- <div class="card col-4 mx-4 my-3" style="width: 18rem;"> -->
						  <!-- <div class="card-body"> -->
							<!-- <h5 class="card-title">Tumati</h5> -->
							<!-- <h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6> -->
							<!-- <p class="card-text">1. Ato ou efeito de desbloquear uma conquista em jogos online ou não.</p> -->
							<!-- <h5 class="card-title">Exemplo de aplicação:</h5> -->
							<!-- <p class="card-text">Nossa galera! acabei de desconquistar uma bloquista aqui no sea of thieves!!!.</p> -->
							<!-- <p class="card-text">UAU! Desconquistei uma bloquista agorinha depois dessa fase.</p> -->
							
							<!-- <a href="#" class="card-link">Escutar pronúncia</a> -->
						  <!-- </div> -->
						<!-- </div> -->
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Ovo</h5>
							<h6 class="card-subtitle mb-2 text-muted">Ação;</h6>
							<p class="card-text">1. Ato de ir buscar a comida quando ela está pronta.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Ovo ali buscar o almoço e já volto.</p>
							<p class="card-text">Ovo ali e já volto.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Bandidinho</h5>
							<h6 class="card-subtitle mb-2 text-muted">Diminutivo, apelido;</h6>
							<p class="card-text">1. Após uma piada ou bagunça generalizada no chat da streamer Teteia, ela irá apelidar a gente com essa denotação .</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Minha nossa gente, eu sai por um segundo e vocês estão já bagunçando, vocês são muitos bandidinhos.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">ovortei</h5>
							<h6 class="card-subtitle mb-2 text-muted">Gíria;</h6>
							<p class="card-text">1. Ato ou efeito de retornar a posição original em que se estava antes de sair da fronte do computador .</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Ovortei, fui muçar.</p>
							<p class="card-text">Ovortei.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Catipura</h5>
							<h6 class="card-subtitle mb-2 text-muted">Objeto;</h6>
							<p class="card-text">1. Placa impresa com camadas de circuitos eletrônicos usada para capturar a imagem exibida na tela do computador ou consoles.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Deixa eu só configurar uma coisinha aqui na minha placa de catipura.</p>
							<p class="card-text">Porque a placa de catipura num tá catipurando o jojinho que eu to jogando?.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Sem-silviu</h5>
							<h6 class="card-subtitle mb-2 text-muted">adjetivo de dois gêneros;</h6>
							<p class="card-text">1. Que sente; que tem sensibilidade.</p>
							<p class="card-text">2. Receptivo a impressões sensórias.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Gente, vai com calma, eu to sem-silvio.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Cilindro</h5>
							<h6 class="card-subtitle mb-2 text-muted">Nick do xiikinder;</h6>
							<p class="card-text">1. Nome utilizado para se referenciar ao xiikinder, já que, ele foi batizado pela teia assim então assim será, dorimê amém.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Bom dia Cilindro se tá bem meu querido!.</p>
							<p class="card-text">Bom dia Cilindro, se tá bem bem?.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Mamaki</h5>
							<h6 class="card-subtitle mb-2 text-muted">Gíria de live; Verbo.</h6>
							<p class="card-text">1. Palavra de ordem quem em conjunto com outra é usada para refutar algum engraçadinho que se acha melhor na gameplay. Também usada para enaltecer e demonstrar que você ou a teia é capaz de superar algum desafio imposto.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">TOMA ESSA KASHIMIRO MAMAKI GLUB GLUB! Fica dúvidando ai que eu num passo essa fase.</p>
							<p class="card-text">Tomaaaaa ai seus ótario. MAMAKI MEU...</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>

						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Glub-Glub</h5>
							<h6 class="card-subtitle mb-2 text-muted">Onomatotéia;</h6>
							<p class="card-text">1.Som usado para simular o som de uma mamada que você vai dar quando a teia te esculachar no game ou quando ela ficar brava.</p>
							<p class="card-text">1.Usadas muitas vezes em conjunto com a palavra <i>MAMAKI</i> como ordem para você dar uma mamada aqui glub glub.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">MAMAKI GLUB GLUB!.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>

						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Serase</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo deverbal Ação de ser;</h6>
							<p class="card-text">1. Ato de se colocar num local, situação ou circunstância determinada no futuro: amanhã ele serase o novo diretor.</p>
							<p class="card-text">2. Ação de passar a possuir uma identidade ou qualidade intrínseca: ele seráse médico..</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text"></p>
							<p class="card-text"></p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Chiquinitos</h5>
							<h6 class="card-subtitle mb-2 text-muted">Comida; Alimento</h6>
							<p class="card-text">1. Pequenos aperitivos de miúdos de frango pré cozidos e fritos.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Ow véi, muito bom esse chikinitos.</p>
							<p class="card-text">Chikinitos é almoço SIM ME DEIXA!.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<!-- live 05/08 -->
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Relampido</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1. Ato ou efeito de desbloquear uma conquista em jogos online ou não.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Nossa galera! acabei de desconquistar uma bloquista aqui no sea of thieves!!!.</p>
							<p class="card-text">UAU! Desconquistei uma bloquista agorinha depois dessa fase.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>						
						
						<!-- live 05/08 -->
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">badernoinha</h5>
							<h6 class="card-subtitle mb-2 text-muted">diminutivo feminino singular de baderna;</h6>
							<p class="card-text">1. NÁUTICA cabo delgado para fixar os colhedores quando se aperta a enxárcia.</p>
							<p class="card-text">2. Figurado, pejorativo pessoa sem préstimo devido a idade avançada ou por falta de saúde.</p>
							<p class="card-text">3. Coisa muito usada.</p>
							<p class="card-text">4. Coloquial pândega, farra.</p>
							<p class="card-text">5. Brasil grupo de vadios.</p>
							<p class="card-text">6. Brasil desordem; confusão.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Hoje é Cesta Feira, bora fazer uma baderninhja</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						
						<!-- live 05/08 -->
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">baderninhja</h5>
							<h6 class="card-subtitle mb-2 text-muted">diminutivo feminino singular de baderna;</h6>
							<p class="card-text">1. NÁUTICA cabo delgado para fixar os colhedores quando se aperta a enxárcia.</p>
							<p class="card-text">2. Figurado, pejorativo pessoa sem préstimo devido a idade avançada ou por falta de saúde.</p>
							<p class="card-text">3. Coisa muito usada.</p>
							<p class="card-text">4. Coloquial pândega, farra.</p>
							<p class="card-text">5. Brasil grupo de vadios.</p>
							<p class="card-text">6. Brasil desordem; confusão.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Hoje é Cesta Feira, bora fazer uma baderninhja</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<!-- live 05/08 -->
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Digia</h5>
							<h6 class="card-subtitle mb-2 text-muted">Verbo;</h6>
							<p class="card-text">1.transitivo direto pôr sob a forma de dedo(s).</p>
							<p class="card-text">2. transitivo direto dotar de dedo(s).</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Quem confia digia.</p>
							<p class="card-text">Digia join pra participar chat.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<!-- live 05/08 -->
						<div class="card col-4 mx-auto my-3">
						  <div class="card-body">
							<h5 class="card-title">Encher o tapa de bumbum</h5>
							<h6 class="card-subtitle mb-2 text-muted">Frase;</h6>
							<p class="card-text">1. Usada para quando algo fofo aparece no seu campo de visão.</p>
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Iti malia mamain, que coisa fofa, vontade de encher o tapa de bumbum.</p>
							<p class="card-text">TUMATINHO você é tão fofo, queria te encher o tapa de bumbum.</p>
							
							<!--<a href="#" class="card-link">Escutar pronúncia</a> -->
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3" id="naranja">
						  <div class="card-body">
							<h5 class="card-title">Naranja</h5>
							<h6 class="card-subtitle mb-2 text-muted">substantivo feminino;</h6>
							<p class="card-text">1.Angio spermas  fruto da laranjeira.</p>
							<p class="card-text">2.Angio spermas m.q. LARANJEIRA..</p>
							<p class="card-text">3.[Botânica] Fruto redondo e rico em sumo produzido pela laranjeira; o nome desse fruto.</p>
							
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Prefiro suco de laranja natural..</p>
							
							<a href="#naranja" onclick="executaAudio11()" class="card-link">Escutar pronúncia</a> 
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3" id="leite">
						  <div class="card-body">
							<h5 class="card-title">Leite tropeçado</h5>
							<h6 class="card-subtitle mb-2 text-muted">Gíria de live;</h6>
							<p class="card-text">1. Surgiu em 1853 como forma de aumentar a vida útil do leite, porque estragava da fazenda para as casas. O leite tropeçado, que na verdade é evaporado, é centrifugado para remover impurezas e depois pasteurizado por 20 segundos.</p>
							
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Hmm queria um bolo de festa com leite tropeçado agora.</p>
							<p class="card-text">Um pudim de leite condenado agora ia ficar bom.</p>
							
							<a href="#leite" class="card-link" onclick="executaAudio4()">Escutar pronúncia</a> 
						  </div>
						</div>			
						
						<div class="card col-4 mx-auto my-3" id="fotogenico">
						  <div class="card-body">
							<h5 class="card-title">Fotonogenico</h5>
							<h6 class="card-subtitle mb-2 text-muted">Adjetivo;</h6>
							<p class="card-text">1.Que produz imagens por meio da luz.</p>
							<p class="card-text">2.Que fica bem representado pela fotografia.</p>
							
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Nossa, eu sou muito fotonogenico.</p>
							<p class="card-text">Inveja dessa gente que é fotonogenico.</p>
							
							<a href="#fotogenico" class="card-link" onclick="executaAudio5()">Escutar pronúncia</a> 
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3" id="presidente">
						  <div class="card-body">
							<h5 class="card-title">Faucada</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1.golpe ou ferida por faca.</p>
							<p class="card-text">2.figurado (sentido)•figuradamente surpresa chocante, dolorosa.</p>
							<p class="card-text">3.figurado (sentido)•figuradamente agressão, ofensa insultuosa.</p>
							<p class="card-text">4.figurado informal ato ou fato de pedir dinheiro a alguém; ferrada.Origem.</p>
							
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">EU vou ti dar uma faucada se você fizer isso.</p>
							<p class="card-text">Olha a fauca.</p>
							
							<a href="#presidente" class="card-link" onclick="executaAudio6()">Escutar pronúncia</a>
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3" id="caramujo">
						  <div class="card-body">
							<h5 class="card-title">Caramarujo</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo masculino;</h6>
							<p class="card-text">1.brasileirismo•Brasil design. comum a diversos moluscos gastrópodes, esp. as formas aquáticas, de água doce ou salgada, com concha ger. mais pesada e sólida que a dos caracóis terrestres e brânquias e opérculo presentes ou não; cornetinha.</p>
							
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Lá na frança eles come caramarujo, chama escargot.</p>
							
							<a href="#caramujo" class="card-link" onclick="executaAudio7()">Escutar pronúncia</a>
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3" id="apromeita">
						  <div class="card-body">
							<h5 class="card-title">Apromeitar</h5>
							<h6 class="card-subtitle mb-2 text-muted">Verbo;</h6>
							<p class="card-text">1.transitivo direto e intransitivo e pronominal tirar proveito ou vantagem de (alguém ou algo).</p>
							<p class="card-text">2.transitivo direto e transitivo indireto tornar (algo) proveitoso, útil, eficaz.</p>
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Apromeita as horas vagas praticando esportes.</p>
							<p class="card-text">Apromeitou material usado para erguer o muro.</p>
							
							<a href="#apromeita" onclick="executaAudio8()" class="card-link">Escutar pronúncia</a>
						  </div>
						</div>
							
						<div class="card col-4 mx-auto my-3" id="celera">
						  <div class="card-body">
							<h5 class="card-title">Acerelado</h5>
							<h6 class="card-subtitle mb-2 text-muted">Adjetivo;</h6>
							<p class="card-text">1.Que se acelerou.</p>
							<p class="card-text">2.figurado(sentido)•figuradamente que é impetuoso; precipitado, arrebatado.</p>
							
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Meu coração tá muito acerelado.</p>
							
							<a href="#celera" class="card-link" onclick="executaAudio9()">Escutar pronúncia</a>
						  </div>
						</div>
							
						<div class="card col-4 mx-auto my-3" id="panera">
						  <div class="card-body">
							<h5 class="card-title">Panera</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1.Recipiente quase sempre redondo, largo e de altura variável, dotado de alças ou cabo, us. na cocção de alimentos.</p>
							<p class="card-text">2.Por metonímia o conteúdo desse recipiente.</p>
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Dá uma panerada nela.</p>
							<p class="card-text">Panera véia é que faz comida boa.</p>
							
							<a href="#panera" onclick="executaAudio10()" class="card-link">Escutar pronúncia</a>
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3" id="rodnado">
						  <div class="card-body">
							<h5 class="card-title">Rodnado</h5>
							<h6 class="card-subtitle mb-2 text-muted">Verbo;</h6>
							<p class="card-text">1.Rodnando vem do verbo rodnar. O mesmo que: girando, rolando.</p>
							<p class="card-text">2.Mover-se em volta de um eixo ou centro, girar: a pá do moinho rodna.</p>
							
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">O vaqueiro rodnava o laço acima da cabeça.</p>
							<p class="card-text">To aqui rodnando essa fase faz tempo e não saio daqui.</p>

							<a href="#rodnado" onclick="executaAudio12()" class="card-link">Escutar pronúncia</a>
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3" id="roleta">
						  <div class="card-body">
							<h5 class="card-title">Roelta</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo feminino;</h6>
							<p class="card-text">1.ludologia-Jogo de azar em que o número premiado é indicado pela parada de uma pequena bola ou ponteiro em uma das casas numeradas de uma roda girante.</p>
							<p class="card-text">2.Por metonímia•Ludologia essa roda girante.</p>
							
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Roda da roelta dona maria.</p>
							
							<a href="#roleta" onclick="executaAudio13()" class="card-link">Escutar pronúncia</a>
						  </div>
						</div>
						
						<div class="card col-4 mx-auto my-3" id="susto">
						  <div class="card-body">
							<h5 class="card-title">Sunstos</h5>
							<h6 class="card-subtitle mb-2 text-muted">Substantivo masculino;</h6>
							<p class="card-text">1.Medo causado por um fato ameaçador súbito e inesperado, um ruído forte, uma visão terrível etc.; sobressalt..</p>
							<p class="card-text">2.Choque, abalo causado por notícias alarmantes e repentinas.</p>
							
							
							<h5 class="card-title">Exemplo de aplicação:</h5>
							<p class="card-text">Ain que sunsto fdp.</p>
							<p class="card-text">Dá maior sunsto quando .</p>
							
							<a href="#susto" onclick="executaAudio14()" class="card-link">Escutar pronúncia</a>
						  </div>
						</div>
						
					</div>
					
				</div>
				
			</aside>
		</main>
	
	</body>
</html> 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){
// alert(Math.random(0,1))

function mudaPalavra(){
	var palavra1 = ["Priquito","Vacalo"];
	var palavra2 = ["Bota","Tulabão"];
	var palavra3 = ["Gifara","Catipura"];
	var palavra4 = ["Mamaki","Chiquinitos"];
	var palavra5 = ["Glub-Glub","Serase"];
	var palavra6 = ["acerelado","Relampido"];
	var palavra7 = ["badernoinha","baderninhja"];
	
	var num1 = 0;
	var num2 = 0;
	var num3 = 0;
	var num4 = 0;
	var num5 = 0;
	var num6 = 0;
	var num7 = 0;
	
	setInterval(function(){	
	
	if(num1 == 0){
		document.getElementById("pa1").innerHTML = palavra1[1];
		num1++;
	}else{
		document.getElementById("pa1").innerHTML = palavra1[0];
		
		num1--;
	}
	},
	3000);
	
	setInterval(function(){
		
		if(num2 == 0){
		document.getElementById("pa2").innerHTML = palavra2[1];
		num2++;
	}else{
		document.getElementById("pa2").innerHTML = palavra2[0];
		
		num2--;
	}
	},
	4000);
	setInterval(function(){
		
		if(num3 == 0){
		document.getElementById("pa3").innerHTML = palavra3[1];
		num3++;
	}else{
		document.getElementById("pa3").innerHTML = palavra3[0];
		
		num3--;
	}
	},
	5000);
	setInterval(function(){
		
		if(num4 == 0){
		document.getElementById("pa4").innerHTML = palavra4[1];
		num4++;
	}else{
		document.getElementById("pa4").innerHTML = palavra4[0];
		
		num4--;
	}
	},
	6000);
	setInterval(function(){
		
		if(num5 == 0){
		document.getElementById("pa5").innerHTML = palavra5[1];
		num5++;
	}else{
		document.getElementById("pa5").innerHTML = palavra5[0];
		
		num5--;
	}
	},
	7000);
	setInterval(function(){
		
		if(num6 == 0){
		document.getElementById("pa6").innerHTML = palavra6[1];
		num6++;
	}else{
		document.getElementById("pa6").innerHTML = palavra6[0];
		
		num6--;
	}
	},
	8000);
	setInterval(function(){
		
		if(num7 == 0){
		document.getElementById("pa7").innerHTML = palavra7[1];
		num7++;
	}else{
		document.getElementById("pa7").innerHTML = palavra7[0];
		
		num7--;
	}
	},
	9000);
};

	// setInterval(function(){
		
 mudaPalavra();
		// },
	// 3000);
  
  // getElementById("pa2").innerHTML = 
  // getElementById("pa3").innerHTML = 
  // getElementById("pa4").innerHTML = 
  // getElementById("pa5").innerHTML = 
  // getElementById("pa6").innerHTML = 
  // getElementById("pa7 ").innerHTML = 

});

  function executaAudio1() {
	  
	  var audio = new Audio('audio/quiropacicista.mp3');
	  audio.play();
	  
	}  
	function executaAudio2() {
		  var audio = new Audio('audio/bloquista.mp3');
	  audio.play();
	}
	function executaAudio3() {
		  var audio = new Audio('audio/bloquista.mp3');
	  audio.play();
	}	
	function executaAudio4() {
		  var audio = new Audio('audio/leite tropeçado.mp3');
	  audio.play();
	}
	function executaAudio5() {
		  var audio = new Audio('audio/fotonogenico.mp3');
	  audio.play();
	}
	function executaAudio6() {
		  var audio = new Audio('audio/faucada.mp3');
	  audio.play();
	}
	function executaAudio7() {
		  var audio = new Audio('audio/caramarujo.mp3');
	  audio.play();
	}
	function executaAudio8() {
		  var audio = new Audio('audio/apromeitar.mp3');
	  audio.play();
	}
	function executaAudio9() {
		  var audio = new Audio('audio/acerelado.mp3');
	  audio.play();
	}
	function executaAudio10() {
		  var audio = new Audio('audio/panera.mp3');
	  audio.play();
	}
	function executaAudio11() {
		  var audio = new Audio('audio/naranja.mp3');
	  audio.play();
	}
	function executaAudio12() {
		  var audio = new Audio('audio/rodnado.mp3');
	  audio.play();
	}
	function executaAudio13() {
		  var audio = new Audio('audio/roelta.mp3');
	  audio.play();
	}
	function executaAudio14() {
		  var audio = new Audio('audio/sunstos.mp3');
	  audio.play();
	}
</script>