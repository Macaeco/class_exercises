// ‣ Nuestro proyecto consistirá en un formulario con un botón y tres <input>:
// Al pulsar el botón se mostrará el resultado de dividir() en el <input> de la derecha.
 


const formNumber = document.getElementById('form_')
const cajaResultado =document.getElementById('cajaResultado')

// const handleOnSubmit = (e) => {   
//     e.preventDefault();
//     const caja1= e.target.caja1.value;
//     const caja2= e.target.caja2.value;
//     dividir(caja1,caja2);  
// }

// formNumber.addEventListener("submit", handleOnSubmit);

// const dividir =(x,y)=>{ 
//     let resultado = x/y
//     cajaResultado.value = resultado;
// }




//ASINCRONO CON CALLBACKS:
//LOS CALLBACKS SON FUNCIONES QUE SE MANDAN COMO ARGUMENTO 

const dividir = (x,y, callback) => { 

    let resultado =x/y

    setTimeout(() => {

        callback(resultado)

    }, 500);
}

const handleOnSubmit = (e) => {   
    e.preventDefault();
    const caja1= e.target.caja1.value;
    const caja2= e.target.caja2.value;

    dividir(caja1 , caja2, (resultado)=>{

        cajaResultado.value = resultado;

    });  


}

formNumber.addEventListener("submit", handleOnSubmit);

//AÑADIR SUMAR RESTAR T MULTIPLICAR
let operacion = '';




const form2 = document.getElementById('form_2')


const cajaResultado2 =document.getElementById('cajaResultado2')

const sumar = document.getElementById('sumar').addEventListener('click',()=>{ 
    operacion = 'sumar'
});
const restar = document.getElementById('restar').addEventListener('click',()=>{ 
    operacion = 'restar'
});
const multiplicar = document.getElementById('multiplicar').addEventListener('click',()=>{ operacion = 'multiplicar'
});
const division = document.getElementById('dividir').addEventListener('click',()=>{ 
    operacion = 'dividir'
});

const calculadora = (x,y, callback) => {
    let resultado = '';


    switch (operacion) {
        case 'sumar': resultado = Number(x) + Number(y);
        
        break;
        case 'restar': resultado = x - y;
        
        break;
        case 'multiplicar': resultado = x * y;
        
        break;   
        case 'dividir': resultado = x / y;       
        break;
        
        default: NaN
            break;
    }

    callback(resultado)

}


const handleOnForm = (e)=>{
    e.preventDefault();
    const caja3= e.target.caja3.value;
    const caja4= e.target.caja4.value;
    
    calculadora(caja3,caja4, (resultado)=>{

        cajaResultado2.value = resultado

    });
        
}
    
form2.addEventListener("submit",handleOnForm)

//TERCER FORMULARIO CALLBACKHELL

const form_3 = document.getElementById('form_3');

const resultado3 =document.getElementById('resultado3');


const sumar3 =(x,y, callback )=>{ 
    let resultado = Number(x) + Number(y);
    callback(resultado);
}

const handleOnSuma = (e) => {   
    e.preventDefault();
    const caja1= e.target.caja5.value;
    const caja2= e.target.caja6.value;
    const caja3= e.target.caja7.value;



    sumar3(caja1,caja2,(op)=>{
        
        sumar3(op,caja3, (num)=>{

                resultado3.value = num
        })

    });  
}

form_3.addEventListener("submit", handleOnSuma);















