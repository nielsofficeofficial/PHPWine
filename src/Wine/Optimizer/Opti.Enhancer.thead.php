<?php 
     
   use \PHPWine\VanillaFlavour\Wine\Optimizer\Enhancers;

   $thead = new Class extends Enhancers { function  __construct() {  function thead( 

              array|string  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('thead', $value, $attr, $id, $class);
               
          }

      }

   };
     