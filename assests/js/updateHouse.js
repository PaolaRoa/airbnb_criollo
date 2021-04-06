const showhouse = (houses) => {
    let card_houses = document.querySelector("#card-house");
    card_houses.innerHTML = "";

    for (let house of houses) {
        card_houses.innerHTML += `
        <div class="card ">
            <!-- Data main -->
            <img src="../assests/img/parquedelcafe.jpeg" class="card-img-top" alt="photos">
            <div class="card-body">
                <h3 class="card-title">${house.name}</h3>
                <div>
                    <p class="card-text">${house.description}</p>
                </div>
                
            </div>

            <!-- House Components -->
            <ul class="list-group">
                <li class="list-group-item"><i class="fas fa-bed"></i>${house.num_rooms} Habitaciones </li>
                <li class="list-group-item"><i class="fas fa-bath"></i>${house.num_toilets} Baños</li>
                <li class="list-group-item"><i class="fas fa-wifi"></i>Zona WiFi: ${house.internet}</li>
                <li class="list-group-item"><i class="fas fa-parking"></i>Parqueadero: ${house.parking_lot}</li>
            </ul>

            <ul class="list-group-two">
                <li class="list-group-item"><i class="fas fa-dollar-sign"></i>${house.price_pn} Valor por noche </li>
            </ul>

            <!-- Buttons Crud -->
            <div class="buttons">
                <button class="btn-primary" onclick="editHouse(${house.idhouses})"><i class="fas fa-pencil-alt"></i>Editar</button>
                <button class="btn-danger" onclick="deleteHouse(${house.idhouses})"><i class="fas fa-trash-alt"></i>Eliminar</button>
                </br>
            </div>
        </div>
           `;
    }
};

const editHouse = (id) => {
    let url = "../controllers/HouseController.php";
    let formdata = new FormData();

    formdata.append("typeoperation", "edit");
    formdata.append("id", id);

    fetch(url, {
            method: "post",
            body: formdata,
        })
        .then((data) => data.json())
        .then((data) => {
            let parking_lot;
            for (let item of data) {
                var id = item.idhouses;
                var name = item.name;
                var description = item.description;
                var num_rooms = item.num_rooms;
                var num_toilets = item.num_toilets;
                parking_lot = item.parking_lot;
                var internet = item.internet;
                var price_pn = item.price_pn;

                if (parking_lot === "Si") {
                    parking_lot = `
            <select class="form-control" aria-label="Default select example" name="parqueadero_u"  id="parqueadero_u">
            <option >Selecciona</option>
            <option value="Si" selected >Si</option>
            <option value="No">No</option>
            </select>
            `;
                } else if (parking_lot == "No") {
                    parking_lot = `
            <select class="form-control" aria-label="Default select example" name="parqueadero_u"  id="parqueadero_u">
            <option >Selecciona</option>
            <option value="Si"  >Si</option>
            <option value="No" selected>No</option>
            </select>
            `;
                }

                if (internet === "Si") {
                    internet = `
          <select class="form-control" aria-label="Default select example" name="internet_u"  id="internet_u">
          <option >Selecciona</option>
          <option value="Si" selected >Si</option>
          <option value="No">No</option>
          </select>
          `;
                } else if (internet == "No") {
                    internet = `
          <select class="form-control"  aria-label="Default select example" name="internet_u"  id="internet_u">
          <option >Selecciona</option>
          <option value="Si"  >Si</option>
          <option value="No" selected>No</option>
          </select>
          `;
                }
            }

            Swal.fire({
                title: "Actulizar información",
                html: `
        <form id="update_form" class="form-group">
        <input class="form-control" type = "number" name="id_u" hidden="true" value="${id}" placeholder ${id}>
        <hr>
        <label>Nombre Casa</label>
        <input class="form-control" type = "text" name="name_u" value="${name}" placeholder ${name}>
        <hr>
        <label>Descripción</label>
        <input class="form-control" type = "text" name="description_u"  value="${description}" placeholder ${description}>
        <hr>
        <label>Numero de habitaciones</label>
        <input class="form-control" type = "number" name="num_rooms_u" value="${num_rooms}" placeholder ${num_rooms}>
        <hr>
        <label>Numero de baños</label>
        <input class="form-control" type = "number" name="num_toilets_u"  value="${num_toilets}"placeholder ${num_toilets}>
        <hr>
        <label>Parqueaderos</label>
        ${parking_lot}
        <hr>
        <label>Internet</label>
        ${internet}
        <hr>
        <label>Precio por noche</label>
        <input  class="form-control" type = "number" name="price_pn_u" value="${price_pn}" placeholder ${price_pn}>
        <hr>
        </form>
      `,
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Actualizar",
            }).then((result) => {
                if (result.value) {
                    const datas = document.querySelector("#update_form");

                    let datas_update = new FormData(datas);

                    const url = "../controllers/HouseController.php";
                    datas_update.append("typeoperation", "update");

                    fetch(url, {
                            method: "post",
                            body: datas_update,
                        })
                        .then((data) => data.json())
                        .then((data) => {
                            showhouse(data);
                            Swal.fire("Exito", "Tu casa ha sido actulizada", "success");
                        })
                        .catch(function(error) {
                            console.error("eror", error);
                        });
                }
            });
        })
        .catch((error) => console.error("error", error));
};

const deleteHouse = (id) => {
    Swal.fire({
        title: "¿Estas seguro de querer eliminar esta casa?",
        text: "Ya no se podra recuperar",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, eliminar!",
    }).then((result) => {
        if (result.isConfirmed) {
            let url = "../controllers/HouseController.php";
            let formdata = new FormData();
            formdata.append("typeoperation", "delete");
            formdata.append("id", id);
            fetch(url, {
                    method: "post",
                    body: formdata,
                })
                .then((data) => data.json())
                .then((data) => {
                    showhouse(data);
                    Swal.fire("Eliminada!", "Tu casa ha sido eliminada.", "success");
                })
                .catch((error) => console.error("error", error));
        }
    });
};