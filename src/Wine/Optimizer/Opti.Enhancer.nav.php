<?php 
     
   use \PHPWine\VanillaFlavour\Wine\Optimizer\Enhancers;

   $Nav = new Class extends Enhancers { function  __construct() {  function Nav( 

              array|string  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('nav', $value, $attr, $id, $class);
               
          }

      }

   };
     