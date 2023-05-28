[].slice.call(document.querySelectorAll('.dropdown .nav-link')).forEach(function(el){
    el.addEventListener('click', onClick, false);
});

function onClick(e){
    e.preventDefault();
    var el = this.parentNode;
    el.classList.contains('show-submenu') ? hideSubMenu(el) : showSubMenu(el);
}

function showSubMenu(el){
    el.classList.add('show-submenu');
    document.addEventListener('click', function onDocClick(e){
        e.preventDefault();
        if(el.contains(e.target)){
            return;
        }
        document.removeEventListener('click', onDocClick);
        hideSubMenu(el);
    });
}

function hideSubMenu(el){
    el.classList.remove('show-submenu');
}

/*******************************effets left_page(cadre à gauche)************************************/

function affecterevenement(){
    var objet=document.getElementById("left_page");
    objet.onclick=click;
    objet.onmouseover=function(e){survoler(e.target)};
    objet.onmouseleave=function(e){sortir(e.target)};
}
function survoler(objet){
    objet.style.backgroundColor="aqua";
}
function sortir(objet){
    objet.style.backgroundColor="#3498db";
}

function click(){
    alert("Have a nice day");
}
/*******************************effets right_page(cadre à droite)************************************/
function affecterevenementtt(){
    var objet=document.querySelector(".right_page");
    objet.onclick=click;
    objet.onmouseover=function(e){survoler(e.target)};
    objet.onmouseleave=function(e){sortir(e.target)};
}
function survoler(objet){
    objet.style.backgroundColor="aqua";
}
function sortir(objet){
    objet.style.backgroundColor="#3498db";
}

function click(){
    alert("You Are Welcome");
}


/*******************************effets centre_page(change d'image aprés un certain temps)************************************/

/****************************************************************************************************************************/
window.onload=function(){
    var imgs=["url('images/T-shirt1.jpg')","url('images/T-shirt2.jpg')","url('images/pantalon1.jpg')","url('images/pantalon2.jpg')"];
    image= document.querySelector('.change_imagepartemps');
    index=0;
    function hop(){
        image.style.background=imgs[(index++)%imgs.length];
        image.style.backgroundSize='cover';
    }
    cool=setInterval(hop,3000);
}



/************************************Effets des clicks dans les 2 cadres+ fonction de footer**************************************************/
  
document.getElementById("btn").addEventListener("click", fun);  
function fun() {  
document.getElementById("para").innerHTML = "You are Welcome to my Web site" + "<br><br>" + "MALEK'S  WEB  SITE";  
}   

function change() {
    var x = document.getElementById('name');
    x.value = x.value.toUpperCase();
}

function funny() {
document.getElementById("link").setAttribute("href", "AboutUs.php");
}

function myFunction() {
        alert( "It's after 5s,Hello you Are Welcome to Malek's shop");
}

function myFunction3s() {
    alert( "It's after 5s,Hello you Are Welcome to Malek's shop");
}

function reloadpage(){
    document.write("The page is loaded successfully");
}

/********Pour la Page form*******/
function focusevent()
	{
		document.getElementById("nn").style.background="red";
	}

    function focusevent1()
	{
		document.getElementById("pp").style.background="green";
	}

    function focusevent2()
	{
		document.getElementById("email").style.background="yellow";
	}

    function focusevent3()
	{
		document.getElementById("password").style.background="fuchsia";
	}

    function focusevent4()
	{
		document.getElementById("repetermotd").style.background="blueviolet";
	}

    function focusevent5()
	{
		document.getElementById("age").style.background="orange";
	}
/*************************************effets click (animation)****************************/
window.addEventListener('click',(e) =>{
    console.log(e);
    const etoile =document.createElement('div');
    etoile.className='malek';
    etoile.innerHTML="★";
    etoile.style.left=`${e.pageX - 50}px`;
    etoile.style.top=`${e.pageY - 50}px`;
    document.body.appendChild(etoile);
    setTimeout(()=>{
        etoile.remove();
    },500)
   

})





/******************************************effet sur input**************************************************/
function validateForm(){
    //const name=document.getElemnetById('username').value;
    //const name=document.forms['signin']['username'];
    const name=document.querySelector('#username');
    window.addEventListener('username',() =>{
        if(valideinput.value.length <3){
            valideinput.style.borderColor="red";
        }else {
            valideinput.style.borderColor="green";
        }
    const name=document.querySelector('#password');
    window.addEventListener('password',() =>{
        if(valideinput.value.length <3){
            valideinput.style.borderColor="red";
        }else {
            valideinput.style.borderColor="green";
        }
    //const name=document.querySelector('input.classCSS');
    })
})
}

/*************************************effets form (log in)******************************************/
function validateForm(){
    //const name=document.getElemnetById('username').value;
    //const name=document.forms['signin']['username'];
    const name=document.querySelector('#fname');
    window.addEventListener('fname',() =>{
        if(valideinput.value.length <3){
            valideinput.style.borderColor="red";
        }else {
            valideinput.style.borderColor="green";
        }
    const name=document.querySelector('#password');
    window.addEventListener('password',() =>{
        if(valideinput.value.length <3){
            valideinput.style.borderColor="red";
        }else {
            valideinput.style.borderColor="green";
        }
    //const name=document.querySelector('input.classCSS');
    })
})
}
/*************************************effets form (log in administrateur)******************************************/
function validateForm(){
    //const name=document.getElemnetById('username').value;
    //const name=document.forms['signin']['username'];
    const name=document.querySelector('#username');
    window.addEventListener('username',() =>{
        if(valideinput.value.length <3){
            valideinput.style.borderColor="red";
        }else {
            valideinput.style.borderColor="green";
        }
    const name=document.querySelector('#password');
    window.addEventListener('password',() =>{
        if(valideinput.value.length <3){
            valideinput.style.borderColor="red";
        }else {
            valideinput.style.borderColor="green";
        }
    //const name=document.querySelector('input.classCSS');
    })
})
}

/***********************************************Page from (formulaire)*************************************************/
function valideForrrrrm(){
    var name= document.forms["RegForm"]["nom"];
    var username= document.forms["RegForm"]["prenom"];
    var email= document.forms["RegForm"]["email"];
    var password= document.forms["RegForm"]["mot_de_passe"];
    var homme= document.forms["RegForm"]["homme"];
    var femme= document.forms["RegForm"]["femme"];
    var age= document.forms["RegForm"]["age"];
    var what= document.forms["RegForm"]["Sujet"];
    var repeatPWD= document.forms["RegForm"]["repeat"];
    
     if(name.value==""){
         alert("svp entrez votre nom !:");
         name.focus();
         return false;
     }if(username.value==""){
        alert("svp entrez votre prenom !:");
        username.focus();
        return false;
    }
     if(email.value==""){
        alert("svp entrez votre email:");  
        email.focus();
        return false; 
     }if (email.value.indexOf("@",0)<0){
        alert("Adresse mail invalide !");
        email.focus();
        return false; 
     }if(email.value.indexOf(".",0)<0){
         alert("Adresse mail invalide !");
         email.focus();
         return false;
     }if(password.value ==""){
         alert("vide");
         return false;
     }
     if(password.value.length >5){
        alert("mot de passe longue !!!");
        return false;
    }
     if(password.value!=repeatPWD.value){
         alert("mot de passe invalide !!!");
         return false;
     }if(age.value>=18){
        alert("Vous ne pouvez pas acceder a ce site Verifier votre age qui doit etre>=18!!!");
        return false;
     }if (what.selectedIndex <1){
        alert("svp choisir un livre");
        what.focus();
        return false;
     }
     else{
         return true;
     }
    }

    /********************************************************Pour L'ajout et Suppression des produits***************************************************************/

    var p=[];

    /*******************************************************pour l'ajout et supprimer du Panier****************************************/
    

    /***********************gffg*********************************/
    function ffff(){
        document.getElementById("malek").innerHTML="Heloo Guys";
    }



    let myVar = setInterval(myTimer ,1000);
    function myTimer() {
      const d = new Date();
      document.getElementById("demo").innerHTML = d.toLocaleTimeString();
    }

