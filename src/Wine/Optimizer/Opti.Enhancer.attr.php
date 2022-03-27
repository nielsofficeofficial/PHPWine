<?php 
     
  use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

  $object = new Class extends Enhancers { function  __construct() { function ATTR(

        $tag
       ,$attr
     
      )
      {
    
       $Enhancer = new Enhancers; return method_exists($Enhancer, 'ATTR') ? 
     
       $Enhancer->ATTR($tag, $attr) : false;
     
      }

  }

};
     