# Reaccionando al usuario

Cuando un usuario navega por la web, lo que está haciendo es interactuar con la misma y generar eventos que pueden ser escuchados utilizando JS.

Cuando un usuario genera un evento, lo que queremos realizar es una accion en nuestro código. Esta acción se le conoce como `handler` (manejador) y no es más que una función JS que se ejecutará cuando el usuario genere el evento.

## Registrando un Evento en JS

Todos los elementos del DOM tienen una función que nos permite escuchar un evento que se produzca en ese elemento del DOM.

La función se llama `addEventListener`, que acepta 3 parámetros. Solo vamos a ver los dos primeros.

```js
// queremos escuchar un click de un botón
const btn = document.querySelector(".btn"); // selecciono el elemento del DOM al que le voy a asignar el evento

btn.addEventListener("_nombre_del_evento_", () => {
  /*HANDLER del evento*/
});
```

Los primeros dos parámetros de la función `addEventListener` son:

- **Nombre del evento**: De tipo string, debemos indicar que evento (o eventos separandolos por espacio) queremos escuchar. Los eventos están predefinidos por JS. Algunos de los eventos comunes son:
  - `click`: Se produce cuando un usuario hace click en un elemento HTML
  - `submit`: Se produce cuando un usuario hace click en el botón submit de un formulario
  - `mouseenter` o `mouseleave`: Se produce cuando un usuario hace hover con el raton (`mouseenter`) o cuando sale de ese hover (`mouseleave`)
  - ... [Listado de Eventos](https://developer.mozilla.org/en-US/docs/Web/Events)

- **Handler**: Es una función que se va a ejecutar cada vez que el usuario produzca un evento. Es lo que utilizamos para ejecuta cierto código reaccionando a lo que el usuario ha interactuado. Es un callback. Esta función recibe, por parte de JS (que es quien llama a la función), un parámetro de tipo objeto que representa la información adicional del evento. De aqui podemos sacar cosas como: El elemento HTML que produjo el evento, la posicion x,y del ratón en caso que hagamos un click.

```js

// queremos crear un p que diga hola mundo y añadirlo al body cada vez que se pulse un botón que ya existe en el HTML.

const btn = document.querySelector('#MY_BTN');
btn.addEventListener('click', e => {
    // esto solo se ejecuta cuando el usuario haga click al botón
    // #MY_BTN
    const p = document.createElement('p');
    p.textContent = 'Hola mundo';
    document.body.appendChild(p);
});

// se pueden añadir tantos eventos del mismo tipo como queramos a un mismo elemento HTML
btn.addEventListener('click', e => {
    console.log('Este tambien se ejecuta');
});
```

## Eliminando un evento registrado

Para poder eliminar un handler ya registrado tengo que usar la funcion `removeEventListener`. Esta función tiene los mismo parámetros que el addEventListener.

Debemos indicar de qué evento queremos borrar un handler (primer parámetro) y pasarle la **MISMA** función que metimos al addEventListener

```js

// ejemplo que NO funciona
document.body.addEventListener('click', () => console.log('hola'));
// ... 3 doritos despues
document.body.removeEventListener('click', () => console.log('hola'));
// Esto no va a funcionar porque los dos handlers NO SON el mismo, aunque si realicen la misma acción

// Ejemplo que SI funciona
const handleClick = () => console.log('hola');
document.body.addEventListener('click', handleClick);
// ... 3 doritos despues
document.body.removeEventListener('click', handleClick);
// en este caso si que son EXACTAMENTE

```