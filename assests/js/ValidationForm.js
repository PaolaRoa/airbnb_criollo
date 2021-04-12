const form =document.getElementById("registerForm");
const pwT = document.getElementById("claveT");
const confPw = document.getElementById("claveConf");
const emailConf = document.getElementById("emailConf");
const email = document.getElementById("emailT");
const pwMsg = document.getElementById("pwMsg");
const emailMsg = document.getElementById("emailMsg");


console.log(emailConf);
if (confPw!= null){
    confPw.addEventListener('input', ()=>validatePw());
    pwT.addEventListener('input', ()=>validatePw());
}

emailConf.addEventListener('input', ()=>validateEmail());
email.addEventListener('input', ()=>validateEmail());


const validatePw = ()=>{
    if(pwT.value!==confPw.value && confPw.value.length>0){
        pwMsg.innerHTML = "las contraseñas no coinciden";
        confPw.setCustomValidity("las contraseñas deben ser iguales");
        pwT.setCustomValidity("las contraseñas deben ser iguales");
        form.onsubmit= "return false";
    }
    else{
        pwMsg.innerHTML = "";
        confPw.setCustomValidity("");
        pwT.setCustomValidity("");
    }
}

const validateEmail=()=>{
    if(email.value!==emailConf.value && emailConf.value.length>0){
        emailMsg.innerHTML = "el email no coincide";
        emailConf.setCustomValidity("los emails deben ser iguales");
        email.setCustomValidity("los emails deben ser iguales");
        form.onsubmit= "return false";
    }
    else{
        emailMsg.innerHTML = "";
        emailConf.setCustomValidity("");
        email.setCustomValidity("");
    }
}
