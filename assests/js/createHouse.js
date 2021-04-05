const house_form = document.querySelector("#form_add_house");

house_form.addEventListener("submit", (e) => {
  e.preventDefault();
  let datas_add = new FormData(document.getElementById("form_add_house"));


 
  const url = "../controllers/HouseController.php";
  datas_add.append("typeoperation", "insert");
  
  fetch(url, {
    method: "post",
    body: datas_add,
  })
    .then((data) => data.json())
    .then((data) => {
      console.log(data)
      house_form.reset();
      Swal.fire("Exito", "Tu propiedad ha sido creada", "success");
    })
    .catch(function (error) {
      console.error("eror", error);
    });
});
