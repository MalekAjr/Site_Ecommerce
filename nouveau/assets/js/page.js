document.getElementById("btn1").addEventListener("click", fun);  
function fun() {  
document.getElementById("para").innerHTML = "You are Welcome to my Web site" + "<br><br>" + "MALEK'S  WEB  SITE";  
}   

let myVar = setInterval(myTimer ,1000);
function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}

function change() {
    var x = document.getElementById('name');
    x.value = x.value.toUpperCase();
}

function affecterevenement(){
    var objet=document.getElementById("m");
    objet.onclick=click;
    objet.onmouseover=function(e){survoler(e.target)};
    objet.onmouseleave=function(e){sortir(e.target)};
}
function survoler(objet){
    objet.style.backgroundColor="red";
}
function sortir(objet){
    objet.style.backgroundColor="gris";
}

function click(){
    alert("Have a nice day");
}
function myFunction3s() {
    alert( "It's after 5s,Hello you Are Welcome to Malek's shop");
}

function funny() {
    document.getElementById("link").setAttribute("href", "contact.php");
    }



