<?
class Persona {
    public $nombre;
    public $edad;
    public $pais;


    function __construct($nombre, $edad, $pais) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;

    }

    // se le llama metodo, no función 
    public function mostrarinformacion() {
        // el this hace referencia a este, la variable que esta en esta clase 
        return $this->nombre . ' tiene ' . $this->edad . 'años, y vive en ' . $this->pais;
    }

}

$carlos = new Persona;
$carlos->nombre = 'carlos Arturo';
$carlos->edad = '23';
$carlos->pais = 'Mexico';

// trabajando con el contructor:

$alejandro = new Persona('Alejandro', '22', 'Colombia');


//Herencia 
class Estudiante extends Persona {
    //el extends nos dice que heredamos todas las propiedades de la clase Padre

    public $carrera;

    function __construct($nombre, $edad, $pais,$carrera) {
        parent::__construct($nombre, $edad, $pais);
        //parent nos trae todas las propiedades del contructor padre al constructor hijo
        $this->carrera = $carrera;
    }
}
$alejandro = new Estudiante('Pablo', '24', 'España','derecho');

//scope 


//PUBLIC -> podemos acceder a esa variable desde cualquier parte, fuera y dentro de nuestra clase
//PROTECTED -> Solo podemos acceder a ella desde la propia clase o de otras que son herencia suya
//PRIVATE -> Solo podemos acceder desde la clase Original


class Usuario {
    protected $nombre;
    protected $correo;
    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }
    public function mostrarinformacion() {
        //solo podemos acceder alc orreo desde el return de una public
        return $this->nombre . ' tiene el correo ' . $this->correo ;
    }
}


//clases abstractas 



