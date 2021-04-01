const user_form = document.querySelector("#register-user-form");

user_form.addEventListener("submit", (e) => {
  e.preventDefault();
  let datas_user = new FormData(document.getElementById("register-user-form"))
  const url = "../controllers/RegisterController.php";
  datas_user.append("typeoperation", "insert_user");

  fetch(url, {
    method: "post",
    body: datas_user,
  })
    .then((data) =>data.json())
    .then((data) => {
      user_form.reset();
      Swal.fire("Exito", "Tu usuario ha sido creado", "success");
    })
    .catch(function (error) {
      Swal.fire("Error", "ya hay un usuario con este correo", "warning");
    });
  

})
