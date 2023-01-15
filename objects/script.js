// 1. Crea una función Dado(numCaras = 6) para instanciar objetos que simulen un dado.

// Tendrá un método lanzar() que devolverá un número aleatorio comprendido entre 1 y numCaras.

// Comprueba que funciona lanzándolo 100 veces y mostrando la ristra de resultados. Por ejemplo, si tiene 6 caras debe mostrarse algo como:

// 643421521346326653325263444324614156312134365261144213432311524216235452141341522135644515126462651

// 2. Crea en la página web un <div> denominado id="tapete", y dale un borde.

// 3. Define una interfaz visible para el dado. Cada vez que instancies un dado, se mostrará dentro del tapete, como un botón con un número aleatorio (la cara que salga).

// 4. Añade a cada dado, el evento que te permita lanzarlo haciendo click sobre él.

// 5. Bajo este tapete añade un botón, con el texto "Crear dado". Cada vez que pulses un botón, se creará un dado nuevo dentro del tapete.

let boton1 = document.getElementById('boton1')
let tablero = document.getElementById('tapete')

let ids = [];
let contador = 0;


// tablero.style.display = 'flex';
// tablero.style.flex = 'row';
// tablero.style.display = 'wrap'



const Dado = (event$, numCaras = 6) => {
    this.numCaras = numCaras
    this.valor = Math.floor(Math.random() * numCaras)


    const dados = document.createElement('button')
    dados.classList.add('dados')
    tablero.appendChild(dados)
    // dados.style.minWidth = '8rem';
    // dados.style.height = '8rem';
    // dados.style.backgroundColor = 'red';
    // dados.style.margin = '1rem';
    dados.textContent = this.valor

    dados.id = contador;
    ids.push(contador)
    contador++;

    console.log(dados)
    
    dados.addEventListener('click', Lanzar = (event$) => {
        const cambio = document.getElementById(dados.id)
        cambio.textContent= Math.floor(Math.random() * numCaras)
    })
    // si hubieramos    querido pasar paremtros al evento:
    // boton.addEventListener("click", () => funcion("parametro"));


}



boton1.addEventListener('click', Dado)
