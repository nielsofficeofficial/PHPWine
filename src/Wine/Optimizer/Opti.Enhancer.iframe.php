<?php 
     
   use \PHPWine\VanillaFlavour\Wine\Optimizer\Enhancers;

   $Iframe = new Class extends Enhancers { function  __construct() {  function Iframe( 

              array|string  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('iframe', $value, $attr, $id, $class);
               
          }

      }

   };
     
