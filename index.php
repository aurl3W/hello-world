﻿<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta name="robots" content="index, follow, all" />
<meta name="Keywords" content="" />
<meta name="author" content="Aur&eacute;lien Labrange - Aur&eacute;L3w" />
<meta name="Description" content="CV-aurl3w" />
<meta name=viewport content="width=device-width, initial-scale=1">
<title>CV</title>
<link rel="stylesheet" type="text/css" href="css/class_global.css" />


<script>

var displayNone = 'none';
var displayOk = 'inline';

//var textBlocPresentation = document.querySelector('#presentation');
//var titrePresentation = document.querySelector('#titre');
/*
var textBlocCompetences = document.querySelector('#competences');
var titreCompetences = document.querySelector('#titre');

var textBlocFormations = document.querySelector('#formations');
var titreFormations = document.querySelector('#titre');

var textBlocExpPro = document.querySelector('#expPro');
var titreFormations = document.querySelector('#titre');

var textBlocContact = document.querySelector('#contact');
var titreContact = document.querySelector('#titre');
*/
function bt1() {
	//if (document.getElementById('a')) {
	//textBlocPresentation.style.display = displayNone;
	//titrePresentation.innerHTML = 'Qui suis-je...?';

	/*
	textBlocCompetences.style.display = displayNone;
	textBlocFormations.style.display = displayNone;
	textBlocExpPro.style.display = displayNone;
	textBlocContact.style.display = displayNone;
	*/
	
	document.getElementById('presentation').style.display = displayOk; 
	document.getElementById('titre').innerHTML = 'Qui suis-je...?';
	document.getElementById('presentation').style.opacity = '1';
	
	document.getElementById('competences').style.opacity = '0';
	
	document.getElementById('competences').style.display = displayNone; 
	document.getElementById('formations').style.display = displayNone;
	document.getElementById('expPro').style.display = displayNone;
	document.getElementById('contact').style.display = displayNone;
	
	
	//alert('ok');
	//}
}



</script>

</head>

<body onload="document.getElementById('presentation').style.opacity='1';">
	
	<div style="z-index: 500; opacity: 1; position:fixed; left:0px; top:0px; border: none; background: #aaa; padding: 16px; width: 100%; height: auto; color: #fff; clear: both;">
		

					<a href="#" id="a" onclick="bt1();"
					class="boutons_menu" title="Présentation">Présentation</a>
						
		
					<a href="#" onclick="getElementById('competences').style.display='inline'; getElementById('titre').innerHTML='Compétences';
					getElementById('presentation').style.display='none'; 
					getElementById('formations').style.display='none';
					getElementById('expPro').style.display='none'
					getElementById('contact').style.display='none';
					
					getElementById('competences').style.opacity='1';
					getElementById('presentation').style.opacity='0';" 
					class="boutons_menu" title="Compétences">Compétences</a>
		
						
					<a href="#" onclick="getElementById('formations').style.display='inline'; getElementById('titre').innerHTML='Formations';
					getElementById('presentation').style.display='none';
					getElementById('competences').style.display='none';
					getElementById('expPro').style.display='none';
					getElementById('contact').style.display='none';" 
					class="boutons_menu" title="Formations">Formations</a>
		
					
					<a href="#" onclick="getElementById('expPro').style.display='inline'; getElementById('titre').innerHTML='Expériences professionnelles';
					getElementById('presentation').style.display='none';
					getElementById('competences').style.display='none';
					getElementById('formations').style.display='none';
					getElementById('contact').style.display='none';" 
					class="boutons_menu" title="Expériences professionnelles">Expériences professionnelles</a>
	
						
					<a href="#" onclick="getElementById('contact').style.display='inline'; getElementById('titre').innerHTML='Contact'; 
					getElementById('presentation').style.display='none';
					getElementById('competences').style.display='none';
					getElementById('formations').style.display='none';
					getElementById('expPro').style.display='none';" 
					class="boutons_menu" title="Contact">Contact</a>

	</div>
	
	<div style="position:relative; top:50px;">
	
	
		<div class="blocTitre">
		
			<span class="texteTitre" id="titre">Qui suis-je...?</span>
		
		</div>
		<div class="blocContenu">
		
			<div class="texteContenu">
			
				<div id="presentation">
					<p> 
						Passionné d'informatique, du web et de tout ce qui est électronique depuis toujours et de nature auto-didact, je propose désormais mes services dans le monde de la création de sites internet.
					
						En 2007, lors d'une formation en Maintenance des Systèmes et Réseaux Informatique, j'ai vu et appris les bases du langage du web, suite a ces cours, j'ai toute suite été intérressé et passioné par les résultats, les outils utilisés et la magie que prennait avec l'utilisation des différents langages pour réaliser de simple page.<br />
						A l'issue de cette formation, j'ai continuer dans l'édition et la programmation web en-tant qu'auto-didact.<br />
						
						Par la suite, j'ai suivi une autre formation en infographiste - metteur en page - webdesign, ou j'y ai suivi des cours en web un peut plus élargis. Ce qui fait, que lors de cette expérience, j'y ai enrichie mes connaissances et compétences en y apprenant l'utilisation de nouveaux outils et de nouvelles methodes, afin de réaliser des pages web un peu plus intérréssente.<br />
						Encore une fois, a l'issue de cette fornation, j'ai continuer en-tant qu'auto-didact et lors de mes expériences, j'ai vu et assimillé des nouvelles technique, afin, de réaliser et développer des sites et pages plus dynamique et attrayante.
						<br />Au fur et a mesure, j'ai adaptés mes propres méthodes de travail et techniques, afin d'obtenir et de faire en sorte de développer des pages plus riche dans un style classique, simple d'utilisation et moderne a la fois, tout en m'inspirant des styles et techniques déjà existentes.
					</p>
				</div>
			
				<div style="display:none;" id="competences">
					
					<div style="color: steelblue; font-weight: bold;">Développement web</div>
					<img src="imgs/dot.png" style="z-index:0; position:relative; left:8px; top:-15px;" /><img src="imgs/bas-controle-a-droite-icone.png" style="border:0;" /><img src="imgs/dossier-ouvrez-icone-big.png" style="border:0;" />
					
					<p>
						Langages pour la conception et le développement de site internet : Html, Php, CSS, Flash - Action Script, notions de JavaScript, jQuery et technologie Ajax 
					</p>
					
					<div class="posImgCompetences">
						<img class="img_competences" src="imgs/html5.png" alt="html5" />
						<img class="img_competences" src="imgs/css3.png" alt="css3" />
						<img class="img_competences" src="imgs/PHP-80.png" alt="php" />
						<img class="img_competences" src="imgs/mysql-80.png" alt="mysql" />
						<img class="img_competences" src="imgs/ajax-80.png" alt="ajax" />
						<img class="img_competences" src="imgs/jquery.png" alt="jQuery" />
					</div>
					
					<img src="imgs/dot.png" style="z-index:0; margin-right:1px; margin-top:1px; float:left;" /><img src="imgs/dot.png" style="z-index:0; transform: rotate(-90deg);" /><img src="imgs/dossier-ouvrez-icone.png" style="z-index:100; border:0;" />
					<p>
						Créations, configurations, gestions et intéractions avec des systèmes de bases de données MySQL (Bonnes notions)
					</p>
					
				</div>
				
				<div style="display:none;" id="formations">
					<p>Mes formations...</p>
				</div>
				
				<div style="display:none;" id="expPro">
					<p>Mes expériences pro...</p>
				</div>
				
				<div style="display:none;" id="contact">
					<p>Contact...</p>
				</div>

			
			</div>
		
		</div>
	
	
	</div>
	
</body></html>