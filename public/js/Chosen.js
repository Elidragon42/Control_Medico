const wrapper = document.querySelector(".wrapper"),
selectBtn = wrapper.querySelector(".select-btn"),
searchInp = wrapper.querySelector("#inputSearch"),
options = wrapper.querySelector(".options"),
empleadoSeleccionadoInput = document.getElementById('empleadoSeleccionado');

let dataContainer = document.getElementById('data-container');
let empleados = JSON.parse(dataContainer.getAttribute('data-empleados'));

document.addEventListener("click", function(e) {
    // Verificar si el clic fue dentro del wrapper o en el selectBtn
    if (!wrapper.contains(e.target) && e.target !== selectBtn) {
        wrapper.classList.remove("active");
    }
});

selectBtn.addEventListener("click", ()=>{
    wrapper.classList.toggle("active");
});


function updateName(selectedLi){
    wrapper.classList.remove("active");
    selectBtn.firstElementChild.innerText = selectedLi.innerText;

    let empleadoNumero = selectedLi.innerText.split("-")[0].trim();
    empleadoSeleccionadoInput.value = empleadoNumero;
}

searchInp.addEventListener("keyup", () =>{
    let arr = [];
    let searchedVal = searchInp.value.toLowerCase();
    arr = empleados.filter(empleado => {
        // Reemplaza 'data' con el nombre de la propiedad que estás buscando
        return ( 
            empleado.name.toLowerCase().startsWith(searchedVal) ||
            empleado.numero_de_empleado.toString().startsWith(searchedVal)
        );
    }).map(empleado => `<li onclick="updateName(this)">${empleado.numero_de_empleado}-${empleado.name}</li>`).join("");
    options.innerHTML = arr ? arr: `<p>Datos no encontrados</p>`;
});





