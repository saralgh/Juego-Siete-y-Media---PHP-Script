<?php
    class Juego{       
        
        private $paloBaraja = array("Oros","Copas","Espadas","Bastos");
        private $valorBaraja = array("1","2","3","4","5","6","7","Sota","Caballo","Rey");
        protected $baraja = array();
        protected $pJugador;
            
        
        function __construct(){
            
            new Jugador;
            new Maquina;
            
//            self::crearBaraja();
            //Creamos la baraja.
            foreach($this->paloBaraja as $this->palo){
                foreach($this->valorBaraja as $this->valor){
                    $this->baraja[] = array("palo"=>$this->palo,"valor"=>$this->valor);
                }
            }
            shuffle($this->baraja);
//            return $pJugador;
        }
        
//         private function crearBaraja(){
//            
//        }
        
        function masCarta(){
            $carta = array_shift($this->baraja);
            
            echo "La carta que has sacado es el " . $carta['valor'] . " de " . $carta['palo'] . "\n";
            
//            var_dump($this->baraja);
            
        }
    }

    final class Jugador extends Juego{
        
        function __construct(){
            echo "Constructor clase Maquina \n";
        }
        
//        function sumaPuntos(){
//            
//        }
    }

    final class Maquina extends Juego{
        
        function __construct(){
            echo "Constructor clase Maquina \n";
        }
    }


    

//            $line = trim(fgets(STDIN));
//            echo $line;
//             private function crearBaraja(){
//            foreach($this->paloBaraja as $this->palo){
//                foreach($this->valorBaraja as $this->valor){
//                    $this->baraja[] = array("palo"=>$this->palo,"valor"=>$this->valor);
//                }
//            }
//        }
?>