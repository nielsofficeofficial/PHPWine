<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $fieldset = new Class extends Enhancers { function  __construct() {  function fieldset( 

              array|string  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('fieldset', $value, $attr, $id, $class);
               
          }

      }

   };
     