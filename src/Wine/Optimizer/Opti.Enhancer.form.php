<?php 
     
   use \PHPWine\VanillaFlavour\Wine\Optimizer\Enhancers;

   $Form = new Class extends Enhancers { function  __construct() {  function Form( 

              array|string  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('form', $value, $attr, $id, $class);
               
          }

      }

   };
     