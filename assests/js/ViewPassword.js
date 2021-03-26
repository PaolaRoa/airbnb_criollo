const pw = document.getElementById("signup-password");
const check = document.getElementById("show");




check.addEventListener('click', ()=>showHidePw());

function showHidePw(){
   if(pw.getAttribute('type')== 'password'){
       pw.setAttribute("type","text");
       
   }
   else{
    pw.setAttribute("type","password");
    
   }
}