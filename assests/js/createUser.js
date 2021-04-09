const user_form = document.querySelector("#register-user-form");

const pwMsg = document.getElementById("pwMsg");

const pwT = document.getElementById("signup-password");
const confPw = document.getElementById("signup-password_v");

if (confPw!= null){
  confPw.addEventListener('input', ()=>validatePw());
  pwT.addEventListener('input', ()=>validatePw());
}


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





user_form.addEventListener("submit", (e) => {
        e.preventDefault();
        let datas_user = new FormData(
          document.getElementById("register-user-form")
        );
        const url = "../controllers/RegisterController.php";
        datas_user.append("typeoperation", "insert_user");

        fetch(url, {
          method: "post",
          body: datas_user,
        })
          .then((data) => data.json())
          .then((data) => {
            user_form.reset();
            Swal.fire("Exito", "Tu usuario ha sido creado", "success");
          })
          .catch(function (error) {
            user_form.reset();
            Swal.fire("Error", "ya hay un usuario con este correo", "warning");
          });
      });