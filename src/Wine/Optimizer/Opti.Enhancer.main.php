<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;
   
   $Main = new Class extends Enhancers { function  __construct() {  function Main( 

              array|string  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('main', $value, $attr, $id, $class);
               
          }

      }

   };
     
