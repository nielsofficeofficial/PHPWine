<?php 
     
   use \PHPWine\VanillaFlavour\Wine\Optimizer\Enhancers;

   $Datalist = new Class extends Enhancers { function  __construct() {  function Datalist( 

              array|string  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('datalist', $value, $attr, $id, $class);
               
          }

      }

   };
     
