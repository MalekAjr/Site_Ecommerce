
// anim input
const valideinput=document.querySelectorAll('input');
const pass=document.getElementById('lname');
const pass1=document.getElementById('lname1');
let para=document.getElementById('msg');
let forma=document.getElementById('forma');
let par=document.getElementById('msg2');
window.addEventListener('keyup',(e) =>{
    if(e.target==pass){
        if(e.target.value.length <3){
            e.target.style.borderColor="red";
            para.innerHTML="le mot de passe est faible";

    }
    else if(e.target.value.length <6){
        e.target.style.borderColor="yellow";
        para.innerHTML="le mot de passe est moyen";

}
    
    else {
        e.target.style.borderColor="green";
        para.innerHTML="le mot de passe est fort";
    }
}

    else if(e.target.value.length <3){
        e.target.style.borderColor="red";
        
    }
    else if(e.target.value.length <6){
        e.target.style.borderColor="yellow";
    }
    else {
        e.target.style.borderColor="green";
    }
});
forma. addEventListener('submit',function(e){
if(pass.value!=pass1.value){
    e.preventDefault();
    par.innerHTML="password don't match";
}


});


