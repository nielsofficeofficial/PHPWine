<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $tbody = new Class extends Enhancers { function  __construct() {  function tbody( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('tbody', $value, $attr, $id, $class);
               
          }

      }

   };
     