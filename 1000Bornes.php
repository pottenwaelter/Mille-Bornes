<!DOCTYPE html>
<html>
<head>
	<title>1000 Bornes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylesheet_1000bornes.css">
</head>
<body>
	<h1><img src="images/Mille bornes/millebornes.png"></h1>
	<form id="formNbrJoueurs" name="formNbrJoueurs">
		<label for="nbrJoueurs" style="color: white; font-weight: bold;">Nombre de joueurs</label><br />
		<select name="nbrJoueurs" required>
			<option selected disabled>Choisissez le nombre de joueurs</option>
			<option value="2">Deux joueurs</option>
			<option value="3">Trois joueurs</option>
			<option value="4">Quatre joueurs</option>
		</select><br />
		<button type="button" onclick="nouvellePartie()">Valider</button>
	</form>
	<table id="plateau">
		<tr>
			<td></td>
			<td class="caseVisible" id="0"><span class="indiceCase">Départ</span></td>
			<td></td>
			<td></td>
			<td class="borneKm"><img src="images/Mille bornes/borne500.png"></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="caseVisible" id="1"><span class="indiceCase">1</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="20"><span class="indiceCase">20</span></td>
			<td class="caseVisible" id="21"><span class="indiceCase">21</span></td>
			<td class="caseVisible" id="22"><span class="indiceCase">22</span></td>
			<td class="caseVisible" id="23"><span class="indiceCase">23</span></td>
			<td></td>
			<td></td>
			<td rowspan="2" id="logoMB"><img src="images/Mille bornes/logo.png"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="caseVisible" id="2"><span class="indiceCase">2</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="19"><span class="indiceCase">19</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="24"><span class="indiceCase">24</span></td>
			<td class="borneKm" style="text-align: left;"><img src="images/Mille bornes/borne600.png"></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="caseVisible" id="3"><span class="indiceCase">3</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="18"><span class="indiceCase">18</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="25"><span class="indiceCase">25</span></td>
			<td></td>
			<td class="borneKm" style="text-align: right;"><img src="images/Mille bornes/borne1000.png"></td>
			<td class="caseVisible" id="40"><span class="indiceCase">40</span></td>
			<td class="borneKm" style="text-align: left;"><img src="images/Mille bornes/borne1000.png"></td>
		</tr>
		<tr>
			<td></td>
			<td class="caseVisible" id="4"><span class="indiceCase">4</span></td>
			<td class="borneKm" style="text-align: left;"><img src="images/Mille bornes/borne100.png"></td>
			<td></td>
			<td class="caseVisible" id="17"><span class="indiceCase">17</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="26"><span class="indiceCase">26</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="39"><span class="indiceCase">39</span></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="caseVisible" id="5"><span class="indiceCase">5</span></td>
			<td></td>
			<td class="borneKm" style="text-align: right;"><img src="images/Mille bornes/borne400.png"></td>
			<td class="caseVisible" id="16"><span class="indiceCase">16</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="27"><span class="indiceCase">27</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="38"><span class="indiceCase">38</span></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="caseVisible" id="6"><span class="indiceCase">6</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="15"><span class="indiceCase">15</span></td>
			<td></td>
			<td class="borneKm" style="text-align: right;"><img src="images/Mille bornes/borne700.png"></td>
			<td class="caseVisible" id="28"><span class="indiceCase">28</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="37"><span class="indiceCase">37</span></td>
		</tr>
		<tr>
			<td></td>
			<td class="caseVisible" id="7"><span class="indiceCase">7</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="14"><span class="indiceCase">14</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="29"><span class="indiceCase">29</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="36"><span class="indiceCase">36</span></td>
			<td class="borneKm" style="text-align: left;"><img src="images/Mille bornes/borne900.png"></td>
		</tr>
		<tr>
			<td class="borneKm" style="text-align: right;"><img src="images/Mille bornes/borne200.png"></td>
			<td class="caseVisible" id="8"><span class="indiceCase">8</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="13"><span class="indiceCase">13</span></td>
			<td></td>
			<td></td>
			<td class="caseVisible" id="30"><span class="indiceCase">30</span></td>
			<td class="borneKm"><img src="images/Mille bornes/borne800.png"></td>
			<td></td>
			<td class="caseVisible" id="35"><span class="indiceCase">35</span></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td class="caseVisible" id="9"><span class="indiceCase">9</span></td>
			<td class="caseVisible" id="10"><span class="indiceCase">10</span></td>
			<td class="caseVisible" id="11"><span class="indiceCase">11</span></td>
			<td class="caseVisible" id="12"><span class="indiceCase">12</span></td>
			<td class="borneKm" style="text-align: left;"><img src="images/Mille bornes/borne300.png"></td>
			<td></td>
			<td class="caseVisible" id="31"><span class="indiceCase">31</span></td>
			<td class="caseVisible" id="32"><span class="indiceCase">32</span></td>
			<td class="caseVisible" id="33"><span class="indiceCase">33</span></td>
			<td class="caseVisible" id="34"><span class="indiceCase">34</span></td>
			<td></td>
		</tr>	
	</table>
	<div id="piocheDefausse">
		<div id="pioche"><div>Pioche</div><br /><br /><div><img src="images/Mille bornes/millebornes.png"></div></div>
		<div id="defausse"><div>Défausse</div><br /><br /><div><img id="defausseImg" src="images/Mille bornes/millebornes.png"></div></div>
	</div>
	<div id="boutonConfirmation"></div>
	<div id="espaceJoueur">
		<div id="joueur1" hidden>
			<span class="indiceJoueur" style="font-weight: bold; font-size: 1.5em; color: blue;">J1</span>
			<div id="cartesJoueur1"><div>Main du joueur</div></div>
			<div class="groupePiles">
				<div class="batailleJoueur"><div>Pile de bataille</div><img id="batailleJoueur1"></div>
				<div class="vitesseJoueur"><div>Pile de vitesse</div><img id="vitesseJoueur1"></div>
			</div>
			<div class="groupePiles">
				<div class="bornesJoueur"><div>Pile de bornes</div><img id="bornesJoueur1"></div>
			</div>
			<div id="bottesJoueur1"><div>Bottes</div></div>
		</div>
		<div id="joueur2" hidden>
			<span class="indiceJoueur" style="font-weight: bold; font-size: 1.5em; color: yellow;">J2</span>
			<div id="cartesJoueur2"><div>Main du joueur</div></div>
			<div class="groupePiles">
				<div class="batailleJoueur"><div>Pile de bataille</div><img id="batailleJoueur2"></div>
				<div class="vitesseJoueur"><div>Pile de vitesse</div><img id="vitesseJoueur2"></div>
			</div>
			<div class="groupePiles">
				<div class="bornesJoueur"><div>Pile de bornes</div><img id="bornesJoueur2"></div>
			</div>
			<div id="bottesJoueur2"><div>Bottes</div></div>
		</div>
		<div id="joueur3" hidden>
			<span class="indiceJoueur" style="font-weight: bold; font-size: 1.5em; color: purple;">J3</span>
			<div id="cartesJoueur3"><div>Main du joueur</div></div>
			<div class="groupePiles">
				<div class="batailleJoueur"><div>Pile de bataille</div><img id="batailleJoueur3"></div>
				<div class="vitesseJoueur"><div>Pile de vitesse</div><img id="vitesseJoueur3"></div>
			</div>
			<div class="groupePiles">
				<div class="bornesJoueur"><div>Pile de bornes</div><img id="bornesJoueur3"></div>
			</div>
			<div id="bottesJoueur3"><div>Bottes</div></div>
		</div>
		<div id="joueur4" hidden>
			<span class="indiceJoueur" style="font-weight: bold; font-size: 1.5em; color: red;">J4</span>
			<div id="cartesJoueur4"><div>Main du joueur</div></div>
			<div class="groupePiles">
				<div class="batailleJoueur"><div>Pile de bataille</div><img id="batailleJoueur4"></div>
				<div class="vitesseJoueur"><div>Pile de vitesse</div><img id="vitesseJoueur4"></div>
			</div>
			<div class="groupePiles">
				<div class="bornesJoueur"><div>Pile de bornes</div><img id="bornesJoueur4"></div>
			</div>
			<div id="bottesJoueur4"><div>Bottes</div></div>
		</div>
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript">
let bottes = ['prioritaire', 'increvable', 'asDuVolant', 'camionCiterne'];
let attaques = ['accident', 'panne', 'crevaison', 'limiteDeVitesse', 'feuRouge'];
let parades = ['reparation', 'essence', 'roueDeSecours', 'finDeLimitation', 'feuVert'];
let bornes = ['25', '50', '75', '100', '200'];

let decksDesJoueurs = [];

let pilesBatailles = [[], [], [], []];
let pilesVitesse = [[], [], [], []];
let pilesBornes = [[], [], [], []];
let pilesBottes = [[], [], [], []];

let pioche = getCardDeck();

let defausse = [];

let toutesLesPiochesSontVides = false;
let partieTerminee = false;

let idIncrement = 0;

let kmParcourusJ1 = 0;
let kmParcourusJ2 = 0;
let kmParcourusJ3 = 0;
let kmParcourusJ4 = 0;

function getFormData()
{
	return $('form').serializeArray();
}

function getCardDeck()
{
	let deck = [];
	for(let i = 0; i < bottes.length; i++)
	{
		if(bottes[i] == 'prioritaire')
		{
			let carte = 'prioritaire';
			deck.push(carte);
		}
		else if(bottes[i] == 'increvable')
		{
			let carte = 'increvable';
			deck.push(carte);
		}
		else if(bottes[i] == 'asDuVolant')
		{
			let carte = 'asDuVolant';
			deck.push(carte);
		}
		else if(bottes[i] == 'camionCiterne')
		{
			let carte = 'camionCiterne';
			deck.push(carte);
		}
	}

	for(let i = 0; i < attaques.length; i++)
	{
		if(attaques[i] == 'accident')
		{
			for(let j = 0; j < 3; j++)
			{
				let carte = 'accident';
				deck.push(carte);
			}
		}
		else if(attaques[i] == 'panne')
		{
			for(let j = 0; j < 3; j++)
			{
				let carte = 'panne';
				deck.push(carte);
			}
		}
		else if(attaques[i] == 'crevaison')
		{
			for(let j = 0; j < 3; j++)
			{
				let carte = 'crevaison';
				deck.push(carte);
			}
		}
		else if(attaques[i] == 'limiteDeVitesse')
		{
			for(let j = 0; j < 4; j++)
			{
				let carte = 'limiteDeVitesse';
				deck.push(carte);
			}
		}
		else if(attaques[i] == 'feuRouge')
		{
			for(let j = 0; j < 5; j++)
			{
				let carte = 'feuRouge';
				deck.push(carte);
			}
		}
	}

	for(let i = 0; i < parades.length; i++)
	{
		if(parades[i] == 'reparation')
		{
			for(let j = 0; j < 6; j++)
			{
				let carte = 'reparation';
				deck.push(carte);
			}
		}
		else if(parades[i] == 'essence')
		{
			for(let j = 0; j < 6; j++)
			{
				let carte = 'essence';
				deck.push(carte);
			}
		}
		else if(parades[i] == 'roueDeSecours')
		{
			for(let j = 0; j < 6; j++)
			{
				let carte = 'roueDeSecours';
				deck.push(carte);
			}
		}
		else if(parades[i] == 'finDeLimitation')
		{
			for(let j = 0; j < 6; j++)
			{
				let carte = 'finDeLimitation';
				deck.push(carte);
			}
		}
		else if(parades[i] == 'feuVert')
		{
			for(let j = 0; j < 14; j++)
			{
				let carte = 'feuVert';
				deck.push(carte);
			}
		}
	}

	for(let i = 0; i < bornes.length; i++)
	{
		if(bornes[i] == '25')
		{
			for(let j = 0; j < 10; j++)
			{
				let carte = '25';
				deck.push(carte);
			}
		}
		else if(bornes[i] == '50')
		{
			for(let j = 0; j < 10; j++)
			{
				let carte = '50';
				deck.push(carte);
			}
		}
		else if(bornes[i] == '75')
		{
			for(let j = 0; j < 10; j++)
			{
				let carte = '75';
				deck.push(carte);
			}
		}
		else if(bornes[i] == '100')
		{
			for(let j = 0; j < 12; j++)
			{
				let carte = '100';
				deck.push(carte);
			}
		}
		else if(bornes[i] == '200')
		{
			for(let j = 0; j < 4; j++)
			{
				let carte = '200';
				deck.push(carte);
			}
		}
	}
	return deck;
}

function shuffle(deck)
{
	for(let i = 0; i < 100; i++)
	{
		let endroitRandom1 = Math.floor(Math.random() * deck.length);
		let endroitRandom2 = Math.floor(Math.random() * deck.length);
		let varTemp = deck[endroitRandom1];

		deck[endroitRandom1] = deck[endroitRandom2];
		deck[endroitRandom2] = varTemp;
	}
}

function nouvellePartie()
{
	let formData = getFormData();
	let nbrJoueurs = formData[0]['value'];
	document.getElementById('formNbrJoueurs').hidden = true;

	document.getElementById('joueur1').hidden = false;
	document.getElementById('joueur2').hidden = false;

	document.getElementById('0').innerHTML = document.getElementById('0').innerHTML + '<img id="voitureJ1" src="images/Mille bornes/joueur1.png">';
	document.getElementById('0').innerHTML = document.getElementById('0').innerHTML + '<img id="voitureJ2" src="images/Mille bornes/joueur2.png">';
	if(nbrJoueurs == '3')
	{
		document.getElementById('joueur3').hidden = false;
		document.getElementById('0').innerHTML = document.getElementById('0').innerHTML + '<img id="voitureJ3" src="images/Mille bornes/joueur3.png">';
	}
	else if(nbrJoueurs == '4')
	{
		document.getElementById('joueur3').hidden = false;
		document.getElementById('joueur4').hidden = false;
		document.getElementById('0').innerHTML = document.getElementById('0').innerHTML + '<img id="voitureJ3" src="images/Mille bornes/joueur3.png">';
		document.getElementById('0').innerHTML = document.getElementById('0').innerHTML + '<img id="voitureJ4" src="images/Mille bornes/joueur4.png">';
	}

	document.getElementById('boutonConfirmation').innerHTML = '<button type="button" onclick="distribution(); affichageCartes(); premierJoueur();">Distribuer les cartes</button>';
}

function distribution()
{
	shuffle(pioche);
	decksDesJoueurs[0] = pioche.splice(0, 6);
	decksDesJoueurs[1] = pioche.splice(0, 6);
	if(document.getElementById('joueur3').hidden == false)
	{
		decksDesJoueurs[2] = pioche.splice(0, 6);
	}

	if(document.getElementById('joueur4').hidden == false)
	{
		decksDesJoueurs[3] = pioche.splice(0, 6);
	}
	document.getElementById('boutonConfirmation').innerHTML = '';
}



function affichageCartes()
{
	let indexMax = 2;
	if(decksDesJoueurs[2])
	{
		indexMax = 3;
	}
	if(decksDesJoueurs[3])
	{
		indexMax = 4;
	}

	for(let i = 0; i < indexMax; i++)
	{
		for(let j = 0; j < 6; j++)
		{
			idIncrement++;
			switch(decksDesJoueurs[i][j])
			{
				case 'prioritaire':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '" class="prioritaire" src="images/Mille bornes/MB-emergency.svg">';
					break;
				case 'reparation':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="reparation" src="images/Mille bornes/MB-repair.svg">';
					break;
				case 'increvable':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="increvable" src="images/Mille bornes/MB-sealant.svg">';
					break;
				case 'asDuVolant':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="asDuVolant" src="images/Mille bornes/MB-ace.svg">';
					break;
				case 'camionCiterne':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="camionCiterne" src="images/Mille bornes/MB-tanker.svg">';
					break;
				case 'essence':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="essence" src="images/Mille bornes/MB-gas.svg">';
					break;
				case 'roueDeSecours':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="roueDeSecours" src="images/Mille bornes/MB-spare.svg">';
					break;
				case 'finDeLimitation':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="finDeLimitation" src="images/Mille bornes/MB-unlimited.svg">';
					break;
				case 'feuVert':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="feuVert" src="images/Mille bornes/MB-roll.svg">';
					break;
				case 'accident':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="accident" src="images/Mille bornes/MB-crash.svg">';
					break;
				case 'panne':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="panne" src="images/Mille bornes/MB-empty.svg">';
					break;
				case 'crevaison':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="crevaison" src="images/Mille bornes/MB-flat.svg">';
					break;
				case 'limiteDeVitesse':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="limiteDeVitesse" src="images/Mille bornes/MB-limit.svg">';
					break;
				case 'feuRouge':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="feuRouge" src="images/Mille bornes/MB-stop.svg">';
					break;
				case '25':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="25" src="images/Mille bornes/MB-25.svg">';
					break;
				case '50':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="50" src="images/Mille bornes/MB-50.svg">';
					break;
				case '75':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="75" src="images/Mille bornes/MB-75.svg">';
					break;
				case '100':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="100" src="images/Mille bornes/MB-100.svg">';
					break;
				case '200':
					document.getElementById('cartesJoueur' + (i + 1)).innerHTML = document.getElementById('cartesJoueur' + (i + 1)).innerHTML + '<img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="200" src="images/Mille bornes/MB-200.svg">';
					break;
			}
		}
	}
	alert('Les joueurs ont reçu leurs 6 cartes de départ !');
}

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

function premierJoueur()
{
	if(document.getElementById('joueur4').hidden == false)
	{
		let premierJoueur = getRandomInt(4);
		switch(premierJoueur)
		{
			case 0:
				alert('Joueur 1, à vous de commencer !');
				document.getElementById('cartesJoueur1').hidden = false;
				document.getElementById('cartesJoueur2').hidden = true;
				document.getElementById('cartesJoueur3').hidden = true;
				document.getElementById('cartesJoueur4').hidden = true;
				break;
			case 1:
				alert('Joueur 2, à vous de commencer !');
				document.getElementById('cartesJoueur1').hidden = true;
				document.getElementById('cartesJoueur2').hidden = false;
				document.getElementById('cartesJoueur3').hidden = true;
				document.getElementById('cartesJoueur4').hidden = true;
				break;
			case 2:
				alert('Joueur 3, à vous de commencer !');
				document.getElementById('cartesJoueur1').hidden = true;
				document.getElementById('cartesJoueur2').hidden = true;
				document.getElementById('cartesJoueur3').hidden = false;
				document.getElementById('cartesJoueur4').hidden = true;
				break;
			case 3:
				alert('Joueur 4, à vous de commencer !');
				document.getElementById('cartesJoueur1').hidden = true;
				document.getElementById('cartesJoueur3').hidden = true;
				document.getElementById('cartesJoueur2').hidden = true;
				document.getElementById('cartesJoueur4').hidden = false;
				break;
		}
	}
	else if(document.getElementById('joueur3').hidden == false && document.getElementById('joueur4').hidden == true)
	{
		let premierJoueur = getRandomInt(3);
		switch(premierJoueur)
		{
			case 0:
				alert('Joueur 1, à vous de commencer !');
				document.getElementById('cartesJoueur1').hidden = false;
				document.getElementById('cartesJoueur2').hidden = true;
				document.getElementById('cartesJoueur3').hidden = true;
				break;
			case 1:
				alert('Joueur 2, à vous de commencer !');
				document.getElementById('cartesJoueur1').hidden = true;
				document.getElementById('cartesJoueur2').hidden = false;
				document.getElementById('cartesJoueur3').hidden = true;
				break;
			case 2:
				alert('Joueur 3, à vous de commencer !');
				document.getElementById('cartesJoueur1').hidden = true;
				document.getElementById('cartesJoueur2').hidden = true;
				document.getElementById('cartesJoueur3').hidden = false;
				break;
		}
	}
	else
	{
		let premierJoueur = getRandomInt(2);
		switch(premierJoueur)
		{
			case 0:
				alert('Joueur 1, à vous de commencer !');
				document.getElementById('cartesJoueur1').hidden = false;
				document.getElementById('cartesJoueur2').hidden = true;
				break;
			case 1:
				alert('Joueur 2, à vous de commencer !');
				document.getElementById('cartesJoueur1').hidden = true;
				document.getElementById('cartesJoueur2').hidden = false;
				break;
		}
	}

	$('#pioche').attr('onclick', 'revelerCartePioche()');
}


function revelerCartePioche()
{
	idIncrement++;
	switch(pioche[0])
	{
		case 'prioritaire':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="prioritaire" src="images/Mille bornes/MB-emergency.svg">');
			break;
		case 'reparation':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="reparation" src="images/Mille bornes/MB-repair.svg">');
			break;
		case 'increvable':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="increvable" src="images/Mille bornes/MB-sealant.svg">');
			break;
		case 'asDuVolant':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="asDuVolant" src="images/Mille bornes/MB-ace.svg">');
			break;
		case 'camionCiterne':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="camionCiterne" src="images/Mille bornes/MB-tanker.svg">');
			break;
		case 'essence':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="essence" src="images/Mille bornes/MB-gas.svg">');
			break;
		case 'roueDeSecours':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="roueDeSecours" src="images/Mille bornes/MB-spare.svg">');
			break;
		case 'finDeLimitation':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="finDeLimitation" src="images/Mille bornes/MB-unlimited.svg">');
			break;
		case 'feuVert':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="feuVert" src="images/Mille bornes/MB-roll.svg">');
			break;
		case 'accident':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="accident" src="images/Mille bornes/MB-crash.svg">');
			break;
		case 'panne':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="panne" src="images/Mille bornes/MB-empty.svg">');
			break;
		case 'crevaison':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="crevaison" src="images/Mille bornes/MB-flat.svg">');
			break;
		case 'limiteDeVitesse':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="limiteDeVitesse" src="images/Mille bornes/MB-limit.svg">');
			break;
		case 'feuRouge':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="feuRouge" src="images/Mille bornes/MB-stop.svg">');
			break;
		case '25':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="25" src="images/Mille bornes/MB-25.svg">');
			break;
		case '50':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="50" src="images/Mille bornes/MB-50.svg">');
			break;
		case '75':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="75" src="images/Mille bornes/MB-75.svg">');
			break;
		case '100':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="100" src="images/Mille bornes/MB-100.svg">');
			break;
		case '200':
			$('#pioche').html('<div>Pioche</div><br /><br /><img draggable="true" ondragstart="drag(event)" id="carte' + idIncrement + '"  class="200" src="images/Mille bornes/MB-200.svg">');
			break;
	}
	$('#cartesJoueur1').attr('ondrop', 'drop(event)');
	$('#cartesJoueur1').attr('ondragover', 'allowDrop(event)');

	$('#cartesJoueur2').attr('ondrop', 'drop(event)');
	$('#cartesJoueur2').attr('ondragover', 'allowDrop(event)');

	$('#cartesJoueur3').attr('ondrop', 'drop(event)');
	$('#cartesJoueur3').attr('ondragover', 'allowDrop(event)');

	$('#cartesJoueur4').attr('ondrop', 'drop(event)');
	$('#cartesJoueur4').attr('ondragover', 'allowDrop(event)');

}

function allowDrop(ev) 
{
  ev.preventDefault();
}

function drag(ev) 
{
  ev.dataTransfer.setData("text", ev.target.id);
}

function desactiverDrop()
{
	$('#cartesJoueur1').attr('ondrop', '');
	$('#cartesJoueur1').attr('ondragover', '');

	$('#cartesJoueur2').attr('ondrop', '');
	$('#cartesJoueur2').attr('ondragover', '');

	$('#cartesJoueur3').attr('ondrop', '');
	$('#cartesJoueur3').attr('ondragover', '');

	$('#cartesJoueur4').attr('ondrop', '');
	$('#cartesJoueur4').attr('ondragover', '');

	$('#batailleJoueur1').attr('ondrop', '');
  	$('#batailleJoueur1').attr('ondragover', '');

  	$('#batailleJoueur2').attr('ondrop', '');
  	$('#batailleJoueur2').attr('ondragover', '');

  	$('#batailleJoueur3').attr('ondrop', '');
  	$('#batailleJoueur3').attr('ondragover', '');

  	$('#batailleJoueur4').attr('ondrop', '');
  	$('#batailleJoueur4').attr('ondragover', '');

  	$('#vitesseJoueur1').attr('ondrop', '');
  	$('#vitesseJoueur1').attr('ondragover', '');

  	$('#vitesseJoueur2').attr('ondrop', '');
  	$('#vitesseJoueur2').attr('ondragover', '');

  	$('#vitesseJoueur3').attr('ondrop', '');
  	$('#vitesseJoueur3').attr('ondragover', '');

	$('#vitesseJoueur4').attr('ondrop', '');
  	$('#vitesseJoueur4').attr('ondragover', '');

  	$('#bornesJoueur1').attr('ondrop', '');
  	$('#bornesJoueur1').attr('ondragover', '');

  	$('#bottesJoueur1').attr('ondrop', '');
  	$('#bottesJoueur1').attr('ondragover', '');

  	$('#bornesJoueur2').attr('ondrop', '');
  	$('#bornesJoueur2').attr('ondragover', '');

  	$('#bottesJoueur2').attr('ondrop', '');
  	$('#bottesJoueur2').attr('ondragover', '');

  	$('#bornesJoueur3').attr('ondrop', '');
  	$('#bornesJoueur3').attr('ondragover', '');

  	$('#bottesJoueur3').attr('ondrop', '');
  	$('#bottesJoueur3').attr('ondragover', '');

  	$('#bornesJoueur4').attr('ondrop', '');
  	$('#bornesJoueur4').attr('ondragover', '');

  	$('#bottesJoueur4').attr('ondrop', '');
  	$('#bottesJoueur4').attr('ondragover', '');

  	$('#defausseImg').attr('ondrop', '');
  	$('#defausseImg').attr('ondragover', '');
}

function drop(ev) 
{
	// A chaque drop, on réinitialise le drag'n'drop, parce qu'on a pas envie que le joueur puisse poser tout le temps ses cartes n'importe où :
	desactiverDrop();
  	ev.preventDefault();
  	let attaquable = false;
  	let peutAvancer = false;
  	let data = ev.dataTransfer.getData("text");
  	let itemClass = document.getElementById(data).getAttribute('class');
  	let piocheInactive = document.getElementById('pioche').getAttribute('onclick'); // va être utilisé pour savoir si on vient de piocher ou pas

  	// Pour chaque cas de figure de drop, on vérifie où la carte est droppée, et on fournit les différents tableaux (qui contiennent les cartes) en conséquence, en mettant les restrictions de drop nécessaires :
  	if(ev.target.id == 'cartesJoueur1' || ev.target.id == 'cartesJoueur2' || ev.target.id == 'cartesJoueur3' || ev.target.id == 'cartesJoueur4')
  	{  		
	  ev.target.appendChild(document.getElementById(data));
	}
	else if(ev.target.id == 'bottesJoueur1' || ev.target.id == 'bottesJoueur2' || ev.target.id == 'bottesJoueur3' || ev.target.id == 'bottesJoueur4')
	{
		if(ev.target.id == 'bottesJoueur1')
		{
			if(itemClass == 'asDuVolant' || itemClass == 'prioritaire' || itemClass == 'increvable' || itemClass == 'camionCiterne')
			{
				pilesBottes[0].unshift(itemClass);
	  			ev.target.appendChild(document.getElementById(data));
			}
			else
			{
				alert('Vous ne pouvez poser ici que des cartes Bottes !');
			}	
		}
		else if(ev.target.id == 'bottesJoueur2')
		{
			if(itemClass == 'asDuVolant' || itemClass == 'prioritaire' || itemClass == 'increvable' || itemClass == 'camionCiterne')
			{
				pilesBottes[1].unshift(itemClass);
	  			ev.target.appendChild(document.getElementById(data));
			}
			else
			{
				alert('Vous ne pouvez poser ici que des cartes Bottes !');
			}		
		}
		else if(ev.target.id == 'bottesJoueur3')
		{
			if(itemClass == 'asDuVolant' || itemClass == 'prioritaire' || itemClass == 'increvable' || itemClass == 'camionCiterne')
			{
				pilesBottes[2].unshift(itemClass);
	  			ev.target.appendChild(document.getElementById(data));
			}
			else
			{
				alert('Vous ne pouvez poser ici que des cartes Bottes !');
			}		
		}
		else if(ev.target.id == 'bottesJoueur4')
		{
			if(itemClass == 'asDuVolant' || itemClass == 'prioritaire' || itemClass == 'increvable' || itemClass == 'camionCiterne')
			{
				pilesBottes[3].unshift(itemClass);
	  			ev.target.appendChild(document.getElementById(data));
			}
			else
			{
				alert('Vous ne pouvez poser ici que des cartes Bottes !');
			}
		}
	}
	else
	{
		if(ev.target.id == 'defausseImg')
		{
			defausse.unshift(itemClass);
			ev.target.appendChild(document.getElementById(data));
  			ev.target.src = document.getElementById(data).src; // cette ligne sert à afficher la dernière carte posée, elle 'écrase' celle d'avant au lieu de se positionner à côté de celle-ci, qui est le comportement par défaut
		}
		else
		{
			for(let i = 1; i < 5; i++)
			{
				let bornesJoueur = 'bornesJoueur' + i;
				let batailleJoueur = 'batailleJoueur' + i;
				let vitesseJoueur = 'vitesseJoueur' + i;
				if(ev.target.id == bornesJoueur)
				{
					if(itemClass == '25' || itemClass == '50' || itemClass == '75' || itemClass == '100' || itemClass == '200')
					{
						if(pilesBatailles[i - 1][0] == 'feuVert' || pilesBatailles[i - 1][0] == 'reparation' || pilesBatailles[i - 1][0] == 'essence' || pilesBatailles[i - 1][0] == 'roueDeSecours')
						{
							if(pilesVitesse[i - 1] != 'limiteDeVitesse')
							{
								pilesBornes[i - 1].unshift(itemClass);
								ev.target.appendChild(document.getElementById(data));
  								ev.target.src = document.getElementById(data).src;
  								peutAvancer = true;
							}
							else
							{
								parseInt(itemClass);
								if(itemClass <= 50)
								{
									pilesBornes[i - 1].unshift(itemClass);
									ev.target.appendChild(document.getElementById(data));
  									ev.target.src = document.getElementById(data).src;
  									peutAvancer = true;
								}
								else
								{
									alert('Vous êtes limité à 50 km/h ! Pour lever la limitation, jouez une carte de fin de limitation de vitesse.');
								}
							}
						}
						else
						{
							switch(pilesBatailles[i - 1][0])
							{
								case 'crevaison':
									alert('Vous avez un pneu crevé, vous ne pouvez pas avancer !');
									break;
								case 'accident':
									alert('Votre voiture est accidentée, il faut la réparer avant de pouvoir continuer !');
									break;
								case 'panne':
									alert('Vous êtes en panne d\'essence, il faut remplir le réservoir avant de pouvoir repartir !');
									break;
								case 'feuRouge':
									alert('Vous êtes arrêté au feu rouge, il faut le feu vert avant de continuer !');
									break;
								default:
									alert('Pour commencer à avancer, il vous faut un feu vert ou la botte prioritaire.');
									break;
							}
						}
					}
					else
					{
						alert('Vous ne pouvez poser que des bornes dans la pile de bornes !');
					}
				}		
				else if(ev.target.id == batailleJoueur)
				{
					if(pilesBatailles[i - 1].length == 0 && pilesBottes[i - 1].includes('prioritaire'))
					{
						attaquable = true;
					}
					else if(pilesBatailles[i - 1].length > 0)
					{
						attaquable = true;
					}
					if(itemClass == 'crevaison' || itemClass == 'roueDeSecours' || itemClass == 'panne' || itemClass == 'essence' || itemClass == 'accident' || itemClass == 'reparation' || itemClass == 'feuRouge' || itemClass == 'feuVert')
					{
						if(pilesBatailles[i - 1][0] == 'crevaison' && itemClass == 'roueDeSecours')
						{
							pilesBatailles[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}
						else if(pilesBatailles[i - 1][0] == 'panne' && itemClass == 'essence')
						{
							pilesBatailles[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}
						else if(pilesBatailles[i - 1][0] == 'accident' && itemClass == 'reparation')
						{
							pilesBatailles[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}
						else if(pilesBatailles[i - 1][0] == 'feuRouge' && itemClass == 'feuVert')
						{
							pilesBatailles[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}
						else if(attaquable == true && itemClass == 'crevaison' && !pilesBottes[i - 1].includes('increvable'))
						{
							pilesBatailles[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}
						else if(attaquable == true && itemClass == 'panne' && !pilesBottes[i - 1].includes('camionCiterne'))
						{
							pilesBatailles[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}
						else if(attaquable == true && itemClass == 'accident' && !pilesBottes[i - 1].includes('asDuVolant'))
						{
							pilesBatailles[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}
						else if(attaquable == true && itemClass == 'feuRouge' && !pilesBottes[i - 1].includes('prioritaire'))
						{
							pilesBatailles[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}
						else if(pilesBatailles[i - 1].length == 0 && itemClass == 'feuVert')
						{
							pilesBatailles[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}		
					}
					else
					{
						alert('Vous ne pouvez jouer que des cartes d\'attaques et de parades dans la pile de bataille');
					}
				}
				else if(ev.target.id == vitesseJoueur)
				{
					if(itemClass == 'limiteDeVitesse' || itemClass == 'finDeLimitation')
					{
						if(pilesVitesse[i - 1][0] == 'limiteDeVitesse' && itemClass == 'finDeLimitation')
						{
							pilesVitesse[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}
						else if(itemClass == 'limiteDeVitesse' && !pilesBottes[i - 1].includes('prioritaire'))
						{
							pilesVitesse[i - 1].unshift(itemClass);
							ev.target.appendChild(document.getElementById(data));
  							ev.target.src = document.getElementById(data).src;
						}
					}
					else
					{
						alert('Vous ne pouvez poser que des cartes de limitation et de fin de limitation dans la pile de vitesse !');
					}
				}
			}
		}
  	}
  	console.log(pilesBottes);
  let cartePiochee;
  if(document.getElementById('cartesJoueur1').hidden == false)
  {
  	if(piocheInactive == 'revelerCartePioche()')
  	{
  		cartePiochee = pioche.splice(0, 1)
  		cartePiochee = cartePiochee.toString(); // ça créait des problèmes si la carte piochée était un entier (le nom de classe des bornes est un nombre)
  		decksDesJoueurs[0].push(cartePiochee);
  	}
  	$('#pioche').html('<div>Pioche</div><br /><br /><div><img src="images/Mille bornes/millebornes.png"></div>');
  	$('#pioche').attr('onclick', '');

  	// Maintenant il faut activer le drop sur toutes les zones jouables pour le joueur en question
  	$('#batailleJoueur1').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur1').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur2').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur2').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur3').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur3').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur4').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur4').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur1').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur1').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur2').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur2').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur3').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur3').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur4').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur4').attr('ondragover', 'allowDrop(event)');

  	$('#bornesJoueur1').attr('ondrop', 'drop(event)');
  	$('#bornesJoueur1').attr('ondragover', 'allowDrop(event)');

  	$('#bottesJoueur1').attr('ondrop', 'drop(event)');
  	$('#bottesJoueur1').attr('ondragover', 'allowDrop(event)');
  }
  else if(document.getElementById('cartesJoueur2').hidden == false)
  {
  	if(piocheInactive == 'revelerCartePioche()')
  	{
  		cartePiochee = pioche.splice(0, 1)
  		cartePiochee = cartePiochee.toString(); 
  		decksDesJoueurs[1].push(cartePiochee);
  	}
  	$('#pioche').html('<div>Pioche</div><br /><br /><div><img src="images/Mille bornes/millebornes.png"></div>');
  	$('#pioche').attr('onclick', '');

  	$('#batailleJoueur1').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur1').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur2').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur2').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur3').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur3').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur4').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur4').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur1').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur1').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur2').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur2').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur3').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur3').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur4').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur4').attr('ondragover', 'allowDrop(event)');

  	$('#bornesJoueur2').attr('ondrop', 'drop(event)');
  	$('#bornesJoueur2').attr('ondragover', 'allowDrop(event)');

  	$('#bottesJoueur2').attr('ondrop', 'drop(event)');
  	$('#bottesJoueur2').attr('ondragover', 'allowDrop(event)');
  }
  else if(document.getElementById('cartesJoueur3').hidden == false)
  {
  	if(piocheInactive == 'revelerCartePioche()')
  	{
  		cartePiochee = pioche.splice(0, 1)
  		cartePiochee = cartePiochee.toString(); 
  		decksDesJoueurs[2].push(cartePiochee);
  	}
  	$('#pioche').html('<div>Pioche</div><br /><br /><div><img src="images/Mille bornes/millebornes.png"></div>');
  	$('#pioche').attr('onclick', '');

  	$('#batailleJoueur1').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur1').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur2').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur2').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur3').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur3').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur4').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur4').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur1').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur1').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur2').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur2').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur3').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur3').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur4').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur4').attr('ondragover', 'allowDrop(event)');

  	$('#bornesJoueur3').attr('ondrop', 'drop(event)');
  	$('#bornesJoueur3').attr('ondragover', 'allowDrop(event)');

  	$('#bottesJoueur3').attr('ondrop', 'drop(event)');
  	$('#bottesJoueur3').attr('ondragover', 'allowDrop(event)');
  }
  else if(document.getElementById('cartesJoueur4').hidden == false)
  {
  	if(piocheInactive == 'revelerCartePioche()')
  	{
  		cartePiochee = pioche.splice(0, 1)
  		cartePiochee = cartePiochee.toString(); 
  		decksDesJoueurs[3].push(cartePiochee);
  	}
  	$('#pioche').html('<div>Pioche</div><br /><br /><div><img src="images/Mille bornes/millebornes.png"></div>');
  	$('#pioche').attr('onclick', '');

  	$('#batailleJoueur1').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur1').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur2').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur2').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur3').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur3').attr('ondragover', 'allowDrop(event)');

  	$('#batailleJoueur4').attr('ondrop', 'drop(event)');
  	$('#batailleJoueur4').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur1').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur1').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur2').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur2').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur3').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur3').attr('ondragover', 'allowDrop(event)');

  	$('#vitesseJoueur4').attr('ondrop', 'drop(event)');
  	$('#vitesseJoueur4').attr('ondragover', 'allowDrop(event)');

  	$('#bornesJoueur4').attr('ondrop', 'drop(event)');
  	$('#bornesJoueur4').attr('ondragover', 'allowDrop(event)');

  	$('#bottesJoueur4').attr('ondrop', 'drop(event)');
  	$('#bottesJoueur4').attr('ondragover', 'allowDrop(event)');
  }

  if(peutAvancer == true)
  {
  	let distance = parseInt(itemClass);
  	if(itemClass == 25 || itemClass == 50 || itemClass == 75 || itemClass == 100 || itemClass == 200)
  	{
  		avancer(distance);
  	}
  }

  if(pioche.length == 0)
  {
  	if(defausse.length > 0)
  	{
  		defausseDevientPioche(); //vérifier le fonctionnement
  	}
  	else
  	{
  		toutesLesPiochesSontVides = true;
  	}	
  }

  if(partieTerminee != true)
  {
  	finDeTour();
  }

}

function finDeTour()
{
	if(toutesLesPiochesSontVides == false)
	{
		if($('#cartesJoueur1 img').length == 7 || $('#cartesJoueur2 img').length == 7 || $('#cartesJoueur3 img').length == 7 || $('#cartesJoueur4 img').length == 7)
		{
			$('#boutonConfirmation').html('<button type="button" onclick="passerTour()">Passer le tour</button>');
		}
		else if($('#cartesJoueur1 img').length == 6 && document.getElementById('cartesJoueur1').hidden == false || $('#cartesJoueur2 img').length == 6 && document.getElementById('cartesJoueur2').hidden == false || $('#cartesJoueur3 img').length == 6 && document.getElementById('cartesJoueur3').hidden == false || $('#cartesJoueur4 img').length == 6 && document.getElementById('cartesJoueur4').hidden == false)
		{
			$('#boutonConfirmation').html('<button type="button" onclick="finirTour()">Finir le tour</button>');
			desactiverDrop();
		}
	}
	else // vérifier le fonctionnement
	{
		$('#boutonConfirmation').html('<button type="button" onclick="finirTour()">Finir le tour</button>');
		desactiverDrop();
	}
}

function passerTour()
{
	alert('Choisissez la carte dont vous voulez vous défausser et glissez la jusqu\'à la défausse');
	$('#defausseImg').attr('ondrop', 'drop(event)');
  	$('#defausseImg').attr('ondragover', 'allowDrop(event)');
}

function finirTour()
{
	if(document.getElementById('cartesJoueur1').hidden == false)
	{
		document.getElementById('cartesJoueur1').hidden = true;
		alert('Joueur 2, à vous de jouer !');
		document.getElementById('cartesJoueur2').hidden = false;		
	}
	else if(document.getElementById('cartesJoueur2').hidden == false)
	{
		if(decksDesJoueurs[2]) // si le deck du joueur 3 existe, donc s'il y a un joueur 3
		{
			document.getElementById('cartesJoueur2').hidden = true;
			alert('Joueur 3, à vous de jouer !');
			document.getElementById('cartesJoueur3').hidden = false;
		}
		else
		{
			document.getElementById('cartesJoueur2').hidden = true;
			alert('Joueur 1, à vous de jouer !');
			document.getElementById('cartesJoueur1').hidden = false;
		}
	}
	else if(document.getElementById('cartesJoueur3').hidden == false)
	{
		if(decksDesJoueurs[3]) // même chose pour le joueur 4
		{
			document.getElementById('cartesJoueur3').hidden = true;
			alert('Joueur 4, à vous de jouer !');
			document.getElementById('cartesJoueur4').hidden = false;
		}
		else
		{
			document.getElementById('cartesJoueur3').hidden = true;
			alert('Joueur 1, à vous de jouer !');
			document.getElementById('cartesJoueur1').hidden = false;
		}
		
	}
	else if(document.getElementById('cartesJoueur4').hidden == false)
	{
		document.getElementById('cartesJoueur4').hidden = true;
		alert('Joueur 1, à vous de jouer !');
		document.getElementById('cartesJoueur1').hidden = false;
	}
	$('#boutonConfirmation').html('');
	if(toutesLesPiochesSontVides == false)
	{
		$('#pioche').attr('onclick', 'revelerCartePioche()');
	}
}

function defausseDevientPioche()
{
	alert('La pioche est vide. La défausse est vidée, mélangée et devient la pioche !');
	pioche = defausse.splice(0, defausse.length);
	shuffle(pioche);
}


function mapDeLaPiste()
{
	let map = new Map();
	let piste = $('.caseVisible');
	let kilometres = 0;
	for(let i = 0; i < piste.length; i++)
	{
		map.set(i, kilometres);
		kilometres = kilometres + 25;
	}
	return map;
}

function supprimerElementHtml(idElement)
{
	let element = document.getElementById(idElement);
	element.parentNode.removeChild(element);
}

function avancer(distance)
{
	let map = mapDeLaPiste();
	let idPiste;
	let piste = $('.caseVisible');
	let nouveauIdPiste;
	// réduire la suite avec une variable pour les cartesJoueur ?
	if(document.getElementById('cartesJoueur1').hidden == false)
	{
		for(let [key, value] of map)
		{
			if(value == kmParcourusJ1)
			{
				idPiste = key;
			}
		}
		for(let i = 0; i < piste.length; i++)
		{
			if(piste[i].id == idPiste)
			{
				supprimerElementHtml('voitureJ1');
			}
		}

		kmParcourusJ1 = kmParcourusJ1 + distance;
		if(kmParcourusJ1 < 1000)
		{
			for(let [key, value] of map)
			{
				if(value == kmParcourusJ1)
				{
					nouveauIdPiste = key;
				}
			}
			for(let i = 0; i < piste.length; i++)
			{
				if(piste[i].id == nouveauIdPiste)
				{
					piste[i].innerHTML = piste[i].innerHTML + '<img id="voitureJ1" src="images/Mille bornes/joueur1.png">';
				}
			}
		}
		else
		{
			alert('Bravo Joueur1, vous gagnez la partie !');
			for(let i = 0; i < piste.length; i++)
			{
				if(piste[i].id == 40)
				{
					piste[i].innerHTML = piste[i].innerHTML + '<img id="voitureJ1" src="images/Mille bornes/joueur1.png">';
				}
			}
			finduGame();
		}
	}
	else if(document.getElementById('cartesJoueur2').hidden == false)
	{
		for(let [key, value] of map)
		{
			if(value == kmParcourusJ2)
			{
				idPiste = key;
			}
		}
		for(let i = 0; i < piste.length; i++)
		{
			if(piste[i].id == idPiste)
			{
				supprimerElementHtml('voitureJ2');
			}
		}

		kmParcourusJ2 = kmParcourusJ2 + distance;
		if(kmParcourusJ2 < 1000)
		{
			for(let [key, value] of map)
			{
				if(value == kmParcourusJ2)
				{
					nouveauIdPiste = key;
				}
			}
			for(let i = 0; i < piste.length; i++)
			{
				if(piste[i].id == nouveauIdPiste)
				{
					piste[i].innerHTML = piste[i].innerHTML + '<img id="voitureJ2" src="images/Mille bornes/joueur2.png">';
				}
			}
		}
		else
		{
			alert('Bravo Joueur2, vous gagnez la partie !');
			for(let i = 0; i < piste.length; i++)
			{
				if(piste[i].id == 40)
				{
					piste[i].innerHTML = piste[i].innerHTML + '<img id="voitureJ2" src="images/Mille bornes/joueur2.png">';
				}
			}
			finduGame();
		}
	}
	else if(document.getElementById('cartesJoueur3').hidden == false)
	{
		for(let [key, value] of map)
		{
			if(value == kmParcourusJ3)
			{
				idPiste = key;
			}
		}
		for(let i = 0; i < piste.length; i++)
		{
			if(piste[i].id == idPiste)
			{
				supprimerElementHtml('voitureJ3');
			}
		}

		kmParcourusJ3 = kmParcourusJ3 + distance;
		if(kmParcourusJ3 < 1000)
		{
			for(let [key, value] of map)
			{
				if(value == kmParcourusJ3)
				{
					nouveauIdPiste = key;
				}
			}
			for(let i = 0; i < piste.length; i++)
			{
				if(piste[i].id == nouveauIdPiste)
				{
					piste[i].innerHTML = piste[i].innerHTML + '<img id="voitureJ3" src="images/Mille bornes/joueur3.png">';
				}
			}
		}
		else
		{
			alert('Bravo Joueur3, vous gagnez la partie !');
			for(let i = 0; i < piste.length; i++)
			{
				if(piste[i].id == 40)
				{
					piste[i].innerHTML = piste[i].innerHTML + '<img id="voitureJ3" src="images/Mille bornes/joueur3.png">';
				}
			}
			finduGame();
		}
	}
	else if(document.getElementById('cartesJoueur4').hidden == false)
	{
		for(let [key, value] of map)
		{
			if(value == kmParcourusJ4)
			{
				idPiste = key;
			}
		}
		for(let i = 0; i < piste.length; i++)
		{
			if(piste[i].id == idPiste)
			{
				supprimerElementHtml('voitureJ4');
			}
		}

		kmParcourusJ4 = kmParcourusJ4 + distance;
		if(kmParcourusJ4 < 1000)
		{
			for(let [key, value] of map)
			{
				if(value == kmParcourusJ4)
				{
					nouveauIdPiste = key;
				}
			}
			for(let i = 0; i < piste.length; i++)
			{
				if(piste[i].id == nouveauIdPiste)
				{
					piste[i].innerHTML = piste[i].innerHTML + '<img id="voitureJ4" src="images/Mille bornes/joueur4.png">';
				}
			}
		}
		else
		{
			alert('Bravo Joueur4, vous gagnez la partie !');
			for(let i = 0; i < piste.length; i++)
			{
				if(piste[i].id == 40)
				{
					piste[i].innerHTML = piste[i].innerHTML + '<img id="voitureJ4" src="images/Mille bornes/joueur4.png">';
				}
			}
			finduGame();
		}
	}
}

function finduGame()
{
	$('#boutonConfirmation').html('<button type="button" onClick="window.location.reload()">Rejouer</button>');
	partieTerminee = true;
}

</script>
</body>
</html>