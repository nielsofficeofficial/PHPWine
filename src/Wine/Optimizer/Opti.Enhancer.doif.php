<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $object = new Class extends Enhancers { function  __construct() { function DOIF(

        bool  $condition      =  null
       ,string $if_result     =  null
   
    )
    {
   
     $Enhancer = new Enhancers; return method_exists($Enhancer, '__magicIF') ? 
   
     $Enhancer->__magicIF($condition, $if_result, METHOD_ASSOC ) : false;
   
   }

 } 

};
     