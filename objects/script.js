

let boton1 = document.getElementById('boton1')
let tablero = document.getElementById('tapete')

let ids = [];
let contador = 0;





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

}



boton1.addEventListener('click', Dado)
