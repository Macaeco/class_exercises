console.log('EJERICIOS CLASES DIA 04-12-2022')
const suma = (...a) => {
    let valor = 0;
    if (a.length === 0) {
        return console.log('ERROR: no s ehan recibido parametros')
    } else {
        for (let index = 0; index < a.length; index++) {
            const element = parseInt(a[index]);
            if (isNaN(element)) {
                return console.log('Error: Argumento no numérico')
            } else {
                valor = valor + element;
            }
        }
    }
    return console.log(' el resultado es : ', valor);
}
 
// suma('a',3,4)


const sumaArray = (a) => {

    let valor = 0;

    if (!a) {
        return console.log('ERROR: no s ehan recibido parametros')
    } else if (!Array.isArray(a)) {
        return console.log(`Error: ${a}  no es un objeto de tipo array`)
    } else if (a.length === 0) {
        return console.log('Error: El array está vacío')
    } else {
        for (let index = 0; index < a.length; index++) {
            const element = a[index];
            valor = valor + parseInt(element);
            if (isNaN(element)) {
                return console.log('Error: Argumento no numérico')
            }
        }
    }
    return console.log(' el resultado es : ', valor);
}

// sumaArray([2, '3'])



const sumaDimensional = (a) => {
    let valor = 0;
    const array = a;
    for (let index = 0; index < array.length; index++) {
        const element = array[index]
        const esArray = (e) => {
            for (let index = 0; index < e.length; index++) {
                const element2 = e[index];
                if (!isNaN(element2)) {
                    valor = valor + parseInt(element2);
                } else if (Array.isArray(e[index])) {
                    esArray(e[index])
                }
            }
        }
        if (Array.isArray(array[index])) {
            esArray(element)
        }else{
            valor = valor + parseInt(element);
        }
    }
    return console.log(' el resultado es : ', valor);
}

let arr = [
    [ 1, -2, "3", -3, -10],
    [ "5", "5", [5,9], [10,2], [0,0,1,2,-10] ], 
    [ "2", 1, [ [2,9], [8], [ [1,2], [3,4], 5] ], [2,2,2], 0, 1, 1 ]
]
sumaDimensional(arr)