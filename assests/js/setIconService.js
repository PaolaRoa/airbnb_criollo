const icons = document.getElementsByTagName("i");

for (i = 0; i < icons.length; i++) {
  let icon = icons[i];
  let iconId = icon.id;
  if (iconId != null) {
    switch (iconId) {
      case "1":
        icon.classList.add("fa-swimmer");
        break;
      case "2":
        icon.classList.add("fa-broom");
        break;
      case "3":
        icon.classList.add("fa-wind");
        break;
      case "4":
        icon.classList.add("fa-shower");
        break;
      case "5":
        icon.classList.add("fa-hot-tub");
    }
  }
}

const showIcons = (Services) => {
  let services = document.querySelector("#data-two");
  services.innerHTML = "";

  for (let service of Services) {
    services.innerHTML += `<i class='fas' id=${service}></i>`;
  }

  const icons = document.getElementsByTagName("i");

  for (i = 0; i < icons.length; i++) {
    let icon = icons[i];
    let iconId = icon.id;
    if (iconId != null) {
      switch (iconId) {
        case "1":
          icon.classList.add("fa-swimmer");
          break;
        case "2":
          icon.classList.add("fa-broom");
          break;
        case "3":
          icon.classList.add("fa-wind");
          break;
        case "4":
          icon.classList.add("fa-shower");
          break;
        case "5":
          icon.classList.add("fa-hot-tub");
      }
    }
  }
};

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

      Swal.fire({
        title: "Actualizar información",
        html: ` <form id="form_update_service" class="fieldset">


            <label class="image-replace cd-email" for="description">Servicios adicionales</label>
            <p class="fieldset">
            <input type="checkbox" id="checkbox_piscina_u" value="piscina" name="piscina">
            <label for="accept-terms"><i class="fas fa-swimmer"></i>Piscina</label>
            </br>
            </br>
            <input type="checkbox" id="checkbox_servicios_u" value="limpieza" name="limpieza"  >
            <label for="accept-terms"><i class="fas fa-broom"></i>Limpieza</label>
            </br>
            </br>
            <input type="checkbox" id="checkbox_aire_u" value="aire" name="aire">
            <label for="accept-terms"><i class="fas fa-wind"></i>Aire acondicionado</label>
            </br>
            </br>
            <input type="checkbox" id="checkbox_agua_u" value="agua" name="agua">
            <label for="accept-terms"><i class="fas fa-shower"></i>Agua caliente</label>
            </br>
            </br>
            <input type="checkbox" id="checkbox_sauna_u"  value="sauna" name="sauna">
            <label for="accept-terms"><i class="fas fa-hot-tub"></i>Sauna</label>
            </br>

        </form>`,
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Actualizar",
      }).then((result) => {
        if (result.value) {
          const datas = document.querySelector("#form_update_service");

          let datas_update = new FormData(datas);

          console.log(datas_update.get("piscina"));

          const url = "../controllers/ServicesController.php";
          datas_update.append("operationHouse", "update_services");
          datas_update.append("id", id);

          fetch(url, {
            method: "post",
            body: datas_update,
          })
            .then((data) => data.json())
            .then((data) => {
              showIcons(data);
              Swal.fire(
                "Exito",
                "Servicios adicionales actulizados",
                "success"
              );
            })
            .catch(function (error) {
              console.error("eror", error);
            });
        }
      });
    })
    .catch((error) => console.error("error", error));
}
