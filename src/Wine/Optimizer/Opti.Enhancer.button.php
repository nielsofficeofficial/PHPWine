<?php 
     
   use \PHPWine\VanillaFlavour\Wine\Optimizer\Enhancers;

   $Button = new Class extends Enhancers { function  __construct() {  function Button( 

              array|string  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('Button', $value, $attr, $id, $class);
               
          }

      }

   };
     
