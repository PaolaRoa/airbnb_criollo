const showhouse=(houses)=>{

    let card_houses= document.querySelector("#card-house");
    card_houses.innerHTML ="";

    for(let house of houses){

        console.log(house.price_pn)
        
         card_houses.innerHTML +=
         `
         <img src="../assests/img/parquedelcafe.jpeg" alt="Avatar" style="width:50%">
         <div class="container">
           <h4><b> ${house.name}</b></h4>
           <p>${house.description}</p>
           <p>${house.num_rooms}</p>
           <p>${house.num_toilets}</p>
           <p>${house.parking_lot}</p>
           <p>${house.internet}</p>
           <p>${house.price_pn}</p>
           <button>Editar</button>
           <button onclick="deleteHouse(${house.idhouses})">Eliminar</button>
        </div>
           `
    }


}


const deleteHouse=(id)=>{
    Swal.fire({
        title: 'Estas seguro de querer eliminar esta casa?',
        text: "Ya no se podra recuperar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!'
      }).then((result) => {
        if (result.isConfirmed) {

        let url = "../controllers/HouseController.php"
        let formdata = new FormData();
        
        formdata.append('typeoperation',"delete")
        formdata.append('id',id);
        fetch(url, {
            method:'post',
            body:formdata
        }).then(data=>data.json()
        ).then(data=>{
            console.log("succes", data)
            showhouse(data);
          Swal.fire(
            'Eliminada!',
            'Tu casa ha sido eliminada.',
            'success'
          )
        }).catch(error=>
            console.error("error", error)
        )




        }
      })
}





