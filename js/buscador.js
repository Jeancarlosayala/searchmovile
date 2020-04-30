const buscar = document.querySelector('#buscar');
const boton = document.querySelector('#boton');
const precio = document.querySelector("#buscar2")
const btnprecio = document.querySelector("#boton2");
const resultado = document.querySelector('#resultados');

const celulares = [
    {nombre: 'Samsung A50', precio: 4500, color: 'rojo'},
    {nombre: 'Samsung S20 Ultra', precio: 12000},
    {nombre: 'Samsung Note 10+', precio: 1400},
    {nombre: 'Samsung A51', precio: 7250}
]


const filtrarnombre = () =>{
    resultado.innerHTML = '';

    const texto = buscar.value.toLowerCase();
    
    for(let celular of celulares){
        let nombre = celular.nombre.toLowerCase();
        if(nombre.indexOf(texto) !== -1){
            resultado.innerHTML += `    
                <li><a>${celular.nombre} - Valor ${celular.precio}</a> </li>
            `
        }

        if(resultado.innerHTML === ''){
            resultado.innerHTML += `
                <li>Producto no encontrado</li>
            `
        }
    }
}

const filtrarprecio = () =>{
    resultado.innerHTML = '';

    const texto = precio.value.toString();
    
    for(let celular of celulares){
        let nombre = celular.precio.toString();
        if(nombre.indexOf(texto) !== -1){
            resultado.innerHTML += `    
                <li>${celular.nombre} - Valor ${celular.precio}</li>
            `
        }

        if(resultado.innerHTML === ''){
            resultado.innerHTML += `
                <li>Producto no encontrado</li>
            `
        }
    }
}

btnprecio.addEventListener('click', filtrarprecio);
boton.addEventListener('click', filtrarnombre);

buscar.addEventListener('keyup',filtrarnombre);
precio.addEventListener('keyup', filtrarprecio);