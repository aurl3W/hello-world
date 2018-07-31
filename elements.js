function btn() {

var displayNone = 'none';
var displayOk = 'inline';
var opacity_NoContent = '0';

var textBlocPresentation = document.querySelector('#presentation');
var titrePresentation = document.querySelector('#titre');

var textBlocCompetences = document.querySelector('#competences');
var titreCompetences = document.querySelector('#titre');

var textBlocFormations = document.querySelector('#formations');
var titreFormations = document.querySelector('#titre');

var textBlocExpPro = document.querySelector('#expPro');
var titreFormations = document.querySelector('#titre');

var textBlocContact = document.querySelector('#contact');
var titreContact = document.querySelector('#titre');

	textBlocPresentation.style.display = displayOk;
	titrePresentation.innerHTML = 'Qui suis-je...?';

	
	textBlocCompetences.style.display = displayNone;
	textBlocFormations.style.display = displayNone;
	textBlocExpPro.style.display = displayNone;
	textBlocContact.style.display = displayNone;
	
	textBlocPresentation.style.opacity = '1';
	
	textBlocCompetences.style.opacity = opacity_NoContent;
	textBlocFormations.style.opacity = opacity_NoContent;
	textBlocExpPro.style.opacity = opacity_NoContent;
	textBlocContact.style.opacity = opacity_NoContent;
	
/*
	document.getElementById('presentation').style.display = displayOk; 
	document.getElementById('titre').innerHTML = 'Qui suis-je...?';
	
	document.getElementById('presentation').style.opacity = '1';
	document.getElementById('competences').style.opacity = '0';
	
	document.getElementById('competences').style.display = displayNone; 
	document.getElementById('formations').style.display = displayNone;
	document.getElementById('expPro').style.display = displayNone;
	document.getElementById('contact').style.display = displayNone;
*/	
	//alert('ok');
	
}

function btn1() {

var displayNone = 'none';
var displayOk = 'inline';
var opacity_NoContent = '0';
	
	document.getElementById('competences').style.display = 'inline';
	document.getElementById('titre').innerHTML = 'Mes compétences';
	
	document.getElementById('presentation').style.display = 'none';
	document.getElementById('formations').style.display = 'none';
	document.getElementById('expPro').style.display = 'none';
	document.getElementById('contact').style.display = 'none';
	
	document.getElementById('competences').style.opacity = '1';
	
	document.getElementById('presentation').style.opacity = opacity_NoContent;
	document.getElementById('formations').style.opacity = opacity_NoContent;
	document.getElementById('expPro').style.opacity = opacity_NoContent;
	document.getElementById('contact').style.opacity = opacity_NoContent;
	
}

function btn2() {

var displayNone = 'none';
var displayOk = 'inline';
var opacity_NoContent = '0';
	
	document.getElementById('formations').style.display = 'inline'; 
	document.getElementById('titre').innerHTML = 'Mes formations';
	
	document.getElementById('presentation').style.display = 'none';
	document.getElementById('competences').style.display = 'none';
	document.getElementById('expPro').style.display = 'none';
	document.getElementById('contact').style.display = 'none';
	
	document.getElementById('formations').style.opacity = '1';
	
	document.getElementById('presentation').style.opacity = opacity_NoContent;
	document.getElementById('competences').style.opacity = opacity_NoContent;
	document.getElementById('expPro').style.opacity = opacity_NoContent;
	document.getElementById('contact').style.opacity = opacity_NoContent;
	
}

function btn3() {

var displayNone = 'none';
var displayOk = 'inline';
var opacity_NoContent = '0';
	
	document.getElementById('expPro').style.display = 'inline';
	document.getElementById('titre').innerHTML = 'Mes expériences professionnelles';
	
	document.getElementById('presentation').style.display = 'none';
	document.getElementById('competences').style.display = 'none';
	document.getElementById('formations').style.display = 'none';
	document.getElementById('contact').style.display = 'none';
	
	document.getElementById('expPro').style.opacity = '1';
	
	document.getElementById('presentation').style.opacity = opacity_NoContent;
	document.getElementById('competences').style.opacity = opacity_NoContent;
	document.getElementById('formations').style.opacity = opacity_NoContent;
	document.getElementById('contact').style.opacity = opacity_NoContent;
	
}

function btn4() {

var displayNone = 'none';
var displayOk = 'inline';
var opacity_NoContent = '0';
	
	document.getElementById('contact').style.display = 'inline';
	document.getElementById('titre').innerHTML = 'Vous souhaitez me contacter...?'; 
	
	document.getElementById('presentation').style.display = 'none';
	document.getElementById('competences').style.display = 'none';
	document.getElementById('formations').style.display = 'none';
	document.getElementById('expPro').style.display = 'none';
	
	document.getElementById('contact').style.opacity = '1';
	
	document.getElementById('presentation').style.opacity = opacity_NoContent;
	document.getElementById('competences').style.opacity = opacity_NoContent;
	document.getElementById('formations').style.opacity = opacity_NoContent;
	document.getElementById('expPro').style.opacity = opacity_NoContent;
}




function progressBar_ImgTechWeb_NO() {

var progressBar_widthStatus = '0%';

	document.getElementById('progressBar').style.width = progressBar_widthStatus;
	document.getElementById('progressBar1').style.width = progressBar_widthStatus;
	document.getElementById('progressBar2').style.width = progressBar_widthStatus;
	document.getElementById('progressBar3').style.width = progressBar_widthStatus;
	document.getElementById('progressBar4').style.width = progressBar_widthStatus;
	document.getElementById('progressBar5').style.width = progressBar_widthStatus;

}

function progressBar_ImgTechWeb_OK() {

var opacity = '1';

	document.getElementById('progressBar').style.opacity = opacity;
	document.getElementById('progressBar1').style.opacity = opacity;
	document.getElementById('progressBar2').style.opacity = opacity;
	document.getElementById('progressBar3').style.opacity = opacity;
	document.getElementById('progressBar4').style.opacity = opacity;
	document.getElementById('progressBar5').style.opacity = opacity;
	
	document.getElementById('progressBar').style.width = '100%';
	document.getElementById('progressBar1').style.width = '80%';
	document.getElementById('progressBar2').style.width = '50%'; 
	document.getElementById('progressBar3').style.width = '50%';
	document.getElementById('progressBar4').style.width = '35%';
	document.getElementById('progressBar5').style.width = '10%';
	
}

function closeMainMenu() {

	document.getElementById('menu').style.top = '-100px';
	document.getElementById('content').style.top = '0px';
	document.getElementById('menuTab').style.display = 'inline';

}

function openMainMenu() {

	document.getElementById('menu').style.top = '-15px';
	document.getElementById('content').style.top = '33px';
	document.getElementById('menuTab').style.display = 'none';

}