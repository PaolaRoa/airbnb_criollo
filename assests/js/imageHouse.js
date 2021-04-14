function img(smaLLImg) {
  var fuLLImg = document.getElementById("image-box");
  fuLLImg.src = smaLLImg.src;
}

function editServices(id) {
  let url = "../controllers/ServicesController.php";
  let formdata = new FormData();

  formdata.append("operationHouse", "editservice");
  formdata.append("id", id);

  fetch(url, {
    method: "post",
    body: formdata,
  })
    .then((data) => data.json())
    .then((data) => {
      console.log(data);
    })
    .catch(function (error) {
      console.error(error)
    });
}
