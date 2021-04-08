const user_form = document.querySelector("#register-user-form");

function PassworValidation() {
  const clave1 = document.registerform.signuppassword.value;
  const clave2 = document.registerform.signuppassword_v.value;

  if (clave1.length < 5 || clave2.length < 5) {
    alert("la clave debe ser mayor a 5  caracteres");
  } 
  else {
    if (clave1 === clave2) {
      user_form.addEventListener("submit", (e) => {
        e.preventDefault();
        let datas_user = new FormData(
          document.getElementById("register-user-form")
        );
        console.log(datas_user.get("signup-password_v"));
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
    } else {
      alert(
        "Las dos claves son distintas..."
      );
    }
  }
}
