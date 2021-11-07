<?php 

USE \PHPWine\VanillaFlavour\Merge\Html;
USE \PHPWine\VanillaFlavour\Optimizer\Html AS Merge; 
USE \PHPWine\VanillaFlavour\Optimizer\Enhancers AS PHPFileHandler;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.1.2 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.1.2 free software: you can redistribute it and/or modify.
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   PHPWine\VanillaFlavour
 * @package    Authentication | Login Form | Registration | Reset Password | Register Email confirmation | Recovery Email confirmation
 *             Handling Form Validation | Same page CRUD | PHPOptimizer | Advance Form Builder
 *            
 *            
 * @author    nielfernandez <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.1.2
 *
 */

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H1 TAG noHTML  
  * Inline Heading tag H1
  *
  **/
function _xH1( 

   mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_id      =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H1
   * @package : Static Procedural
   * @method  : Html::H1($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/ 
	$Html = NEW Merge(); 
  return method_exists($Html, 'H1') ? 
  
  $Html->H1(

     $value          
    ,$attr
    ,$element_id              
    ,$element_class    
    ,$label            
    ,$assoc           

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H2 TAG noHTML  
  * Inline Heading tag H2
  *
  **/
function _xH2( 

   mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_id      =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H2
   * @package : Static Procedural
   * @method  : Html::H2($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/ 
   $Html = NEW Merge(); 
   return method_exists($Html, 'H2') ? 
   
   $Html->H2(
     
     $value          
    ,$attr
    ,$element_id              
    ,$element_class    
    ,$label            
    ,$assoc   

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H3 TAG noHTML  
  * Inline Heading tag H3
  *
  **/
function _xH3( 

   mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_id      =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::H3($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/ 
   $Html = NEW Merge(); 
   return method_exists($Html, 'H3') ? 
   
   $Html->H3(

     $value          
    ,$attr
    ,$element_id              
    ,$element_class    
    ,$label            
    ,$assoc  

   ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H4 TAG noHTML  
  * Inline Heading tag H4
  *
  **/
function _xH4( 

   mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_id      =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::H3($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/ 
   $Html = NEW Merge(); 
   return method_exists($Html, 'H4') ? 
   
   $Html->H4( 
  
     $value          
    ,$attr
    ,$element_id              
    ,$element_class    
    ,$label            
    ,$assoc   

   ) : PERFORM(erorrMessage());   

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H5 TAG noHTML  
  * Inline Heading tag H5
  *
  **/
function _xH5( 

   mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_id      =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null      

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H5
   * @package : Static Procedural
   * @method  : Html::H5($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html, 'H5') ? 
   
   $Html->H5(

     $value          
    ,$attr
    ,$element_id              
    ,$element_class    
    ,$label            
    ,$assoc   

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H6 TAG noHTML  
  * Inline Heading tag H6
  *
  **/
function _xH6( 

   mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_id      =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null     

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H6
   * @package : Static Procedural
   * @method  : Html::H6($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'H6') ? 
   
   $Html->H6( 

     $value          
    ,$attr
    ,$element_id              
    ,$element_class    
    ,$label            
    ,$assoc   

    ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DIV TAG noHTML  
  * Inline Heading tag DIV
  *
  **/
function _xDIV( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag H6
   * @package : Static Procedural
   * @method  : Html::DIV($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'DIV') ? 
   
    $Html->DIV( 

     $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

    ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PARAGRAPH TAG noHTML  
  * Inline Heading tag PARAGRAPH
  *
  **/
function _xP( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag PARAGRAPH
   * @package : Static Procedural
   * @method  : Html::P($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'P') ? 
   
    $Html->P( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

    ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BUTTON noHTML  
  * Inline Heading tag BUTTON
  *
  **/
function _xBUTTON( 
 
   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag BUTTON
   * @package : Static Procedural
   * @method  : Html::BUTTON($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'BUTTON') ? 
   
    $Html->BUTTON(

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML ANCHOR noHTML  
  * Inline Heading tag ANCHOR
  *
  **/
function _xA( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag A LINK
   * @package : Static Procedural
   * @method  : Html::A($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'A') ? 
   
    $Html->A( 

     $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc
   
   ) : PERFORM(erorrMessage());
   
}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML IFRAME noHTML  
  * Inline Heading tag IFRAME
  *
  **/
function _xIFRAME( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null    

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag A IFRAME
   * @package : Static Procedural
   * @method  : Html::IFRAME($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'IFRAME') ?
   
    $Html->IFRAME( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

    ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MAIN noHTML  
  * Inline Heading tag MAIN
  *
  **/
function _xMAIN( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

 ) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag MAIN
   * @package : Static Procedural
   * @method  : Html::MAIN($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'MAIN') ? 
  
   $Html->MAIN( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML NAV noHTML  
  * Inline Heading tag NAV
  *
  **/
function _xNAV( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

 ) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag NAV
   * @package : Static Procedural
   * @method  : Html::NAV($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'NAV') ? 
   
    $Html->NAV( 

     $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

    ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SELECT noHTML  
  * Inline Heading tag SELECT
  *
  **/
function _xSELECT( 

   string $element_id      =  null 
  ,mixed  $value           =  null 
  ,array  $attr            =  null 
  ,string $element_class   =  null 
  ,string $label           =  null 
  ,mixed  $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SELECT
   * @package : Static Procedural
   * @method  : Html::SELECT($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'SELECT') ?
   
    $Html->SELECT( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

    ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FORM noHTML  
  * Inline Heading tag FORM
  *
  **/
function _xFORM( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag FORM
   * @package : Static Procedural
   * @method  : Html::FORM($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'FORM') ? 
   
    $Html->FORM( 
    
     $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

    ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PICTURE noHTML  
  * Inline Heading tag PICTURE
  *
  **/
function _xPICTURE( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag PICTURE
   * @package : Static Procedural
   * @method  : Html::PICTURE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'PICTURE') ? 
  
   $Html->PICTURE( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SECTION noHTML  
  * Inline Heading tag SECTION
  *
  **/
function _xSECTION( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SECTION
   * @package : Static Procedural
   * @method  : Html::SECTION($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
   $Html = NEW Merge(); 
   return method_exists($Html,'SECTION') ? 
   
    $Html->SECTION( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

    ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEXTAREA noHTML  
  * Inline Heading tag TEXTAREA
  *
  **/
function _xTEXTAREA( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TEXTAREA
   * @package : Static Procedural
   * @method  : Html::TEXTAREA($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TEXTAREA') ? 
  
   $Html->TEXTAREA( 
    
     $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FOOTER noHTML  
  * Inline Heading tag TEXTAREA
  *
  **/
function _xFOOTER( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TEXTAREA
   * @package : Static Procedural
   * @method  : Html::TEXTAREA($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'FOOTER') ? 
  
   $Html->FOOTER( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SCRIPT noHTML  
  * Inline Heading tag SCRIPT
  *
  **/
function _xSCRIPT( 

     mixed        $value          =  null
    ,array|string $attr           =  null
    ,mixed        $assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SCRIPT
   * @package : Static Procedural
   * @method  : Html::SCRIPT($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SCRIPT') ? 
  
  $Html->SCRIPT(
    
     $value
     ,$attr
     ,null
     ,null
     ,null
     ,$assoc
     
  ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SCRIPT noHTML  
  * Inline Heading tag SCRIPT
  *
  **/
function _xSTYLE( 

     mixed        $value          =  null
    ,array|string $attr           =  null
    ,mixed        $assoc          =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TEXTAREA
   * @package : Static Procedural
   * @method  : Html::TEXTAREA($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'STYLE') ?
  
   $Html->STYLE(
     
     $value
     ,$attr
     ,null
     ,null
     ,null
     ,$assoc
     
  ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML AUDIO noHTML  
  * Inline Heading tag AUDIO
  *
  **/
function _xAUDIO( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag AUDIO
   * @package : Static Procedural
   * @method  : Html::AUDIO($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'AUDIO') ? 
  
   $Html->AUDIO( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML VIDEO noHTML  
  * Inline Heading tag VIDEO
  *
  **/
function _xVIDEO( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag VIDEO
   * @package : Static Procedural
   * @method  : Html::VIDEO($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'VIDEO') ? 
  
   $Html->VIDEO( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML ADDRESS noHTML  
  * Inline Heading tag ADDRESS
  *
  **/
function _xADDRESS( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag ADDRESS
   * @package : Static Procedural
   * @method  : Html::ADDRESS($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'ADDRESS') ? 
  
   $Html->ADDRESS( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML COLGROUP noHTML  
  * Inline Heading tag COLGROUP
  *
  **/
function _xCOLGROUP( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag COLGROUP
   * @package : Static Procedural
   * @method  : Html::COLGROUP($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'COLGROUP') ? 
  
   $Html->COLGROUP( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BDI noHTML  
  * Inline Heading tag BDI
  *
  **/
function _xBDI( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag BDI
   * @package : Static Procedural
   * @method  : Html::BDI($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'COLGROUP') ?
  
   $Html->BDI( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BDO noHTML  
  * Inline Heading tag BDO
  *
  **/
function _xBDO( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag BDO
   * @package : Static Procedural
   * @method  : Html::BDO($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'BDO') ? 
  
   $Html->BDO( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BLOCKQUOTE noHTML  
  * Inline Heading tag BLOCKQUOTE
  *
  **/
function _xBLOCKQUOTE( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag BLOCKQUOTE
   * @package : Static Procedural
   * @method  : Html::BLOCKQUOTE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'BLOCKQUOTE') ? 
  
   $Html->BLOCKQUOTE( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CAPTION noHTML  
  * Inline Heading tag CAPTION
  *
  **/
function _xCAPTION( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag CAPTION
   * @package : Static Procedural
   * @method  : Html::CAPTION($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'CAPTION') ?
  
   $Html->CAPTION(  

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LABEL noHTML  
  * Inline Heading tag LABEL
  *
  **/
function _xLABEL( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  


) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag LABEL
   * @package : Static Procedural
   * @method  : Html::LABEL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'LABEL') ?
  
   $Html->LABEL( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DATALIST noHTML  
  * Inline Heading tag DATALIST
  *
  **/
function _xDATALIST( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DATALIST
   * @package : Static Procedural
   * @method  : Html::DATALIST($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DATALIST') ? 
  
   $Html->DATALIST( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DETAILS noHTML  
  * Inline Heading tag DETAILS
  *
  **/
function _xDETAILS( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DETAILS
   * @package : Static Procedural
   * @method  : Html::DETAILS($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DETAILS') ? 
  
   $Html->DETAILS( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc
    
  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUMMARY noHTML  
  * Inline Heading tag SUMMARY
  *
  **/
function _xSUMMARY( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SUMMARY
   * @package : Static Procedural
   * @method  : Html::SUMMARY($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SUMMARY') ?
  
   $Html->SUMMARY( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label            
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DIALOG noHTML  
  * Inline Heading tag DIALOG
  *
  **/
function _xDIALOG( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DIALOG
   * @package : Static Procedural
   * @method  : Html::DIALOG($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'DIALOG') ? 
  
   $Html->DIALOG( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc 

   ) : PERFORM(erorrMessage());   

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OPTION noHTML  
  * Inline Heading tag OPTION
  *
  **/
function _xOPTION( 
  
   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag OPTION
   * @package : Static Procedural
   * @method  : Html::OPTION($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'OPTION') ? 
  
   $Html->OPTION( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIGURE noHTML  
  * Inline Heading tag FIGURE
  *
  **/
function _xFIGURE( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag FIGURE
   * @package : Static Procedural
   * @method  : Html::FIGURE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'FIGURE') ? 
  
   $Html->FIGURE( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIGCAPTION noHTML  
  * Inline Heading tag FIGCAPTION
  *
  **/
function _xFIGCAPTION( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag FIGCAPTION
   * @package : Static Procedural
   * @method  : Html::FIGCAPTION($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'FIGCAPTION') ?
  
   $Html->FIGCAPTION( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML METER noHTML  
  * Inline Heading tag METER
  *
  **/
function _xMETER( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag METER
   * @package : Static Procedural
   * @method  : Html::METER($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'METER') ?
  
   $Html->METER( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OBJECT noHTML  
  * Inline Heading tag OBJECT
  *
  **/
function _xOBJECT( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag OBJECT
   * @package : Static Procedural
   * @method  : Html::OBJECT($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'OBJECT') ? 
  
   $Html->OBJECT( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OPTGROUP noHTML  
  * Inline Heading tag OPTGROUP
  *
  **/
function _xOPTGROUP( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag OPTGROUP
   * @package : Static Procedural
   * @method  : Html::OPTGROUP($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'OPTGROUP') ? 
  
   $Html->OPTGROUP( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());   

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OUTPUT noHTML  
  * Inline Heading tag OUTPUT
  *
  **/
function _xOUTPUT( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag OUTPUT
   * @package : Static Procedural
   * @method  : Html::OUTPUT($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'OUTPUT') ? 
  
   $Html->OUTPUT( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

   ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PROGRESS noHTML  
  * Inline Heading tag PROGRESS
  *
  **/
function _xPROGRESS( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag PROGRESS
   * @package : Static Procedural
   * @method  : Html::PROGRESS($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'PROGRESS') ? 
  
   $Html->PROGRESS( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SVG noHTML  
  * Inline Heading tag SVG
  *
  **/
function _xSVG( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SVG
   * @package : Static Procedural
   * @method  : Html::SVG($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SVG') ? 
  
   $Html->SVG( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEMPLATE noHTML  
  * Inline Heading tag TEMPLATE
  *
  **/
function _xTEMPLATE( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TEMPLATE
   * @package : Static Procedural
   * @method  : Html::TEMPLATE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TEMPLATE') ?
  
   $Html->TEMPLATE( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

   ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML UL noHTML  
  * Inline Heading tag UL
  *
  **/
function _xUL( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag UL
   * @package : Static Procedural
   * @method  : Html::UL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'UL') ?
  
   $Html->UL( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

   ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OL noHTML  
  * Inline Heading tag OL
  *
  **/
function _xOL( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag OL
   * @package : Static Procedural
   * @method  : Html::OL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'OL') ? 
  
   $Html->OL( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

   ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LI noHTML  
  * Inline Heading tag LI
  *
  **/
function _xLI( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag LI
   * @package : Static Procedural
   * @method  : Html::LI($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'LI') ?
  
   $Html->LI( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

   ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TABLE noHTML  
  * Inline Heading tag TABLE
  *
  **/
function _xTABLE( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TABLE
   * @package : Static Procedural
   * @method  : Html::TABLE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TABLE') ? 
  
   $Html->TABLE( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TR noHTML  
  * Inline Heading tag TR
  *
  **/
function _xTR( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TR
   * @package : Static Procedural
   * @method  : Html::TR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TR') ? 
  
   $Html->TR( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TD noHTML  
  * Inline Heading tag TD
  *
  **/
function _xTD( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TD
   * @package : Static Procedural
   * @method  : Html::TD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TD') ?
  
   $Html->TD( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

   ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TH noHTML  
  * Inline Heading tag TH
  *
  **/
function _xTH( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TH
   * @package : Static Procedural
   * @method  : Html::TH($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'TH') ? 
  
  $Html->TH( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LEGEND noHTML  
  * Inline Heading tag LEGEND
  *
  **/
function _xLEGEND( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag LEGEND
   * @package : Static Procedural
   * @method  : Html::LEGEND($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'LEGEND') ?
  
   $Html->LEGEND( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIELDSET noHTML  
  * Inline Heading tag FIELDSET
  *
  **/
function _xFIELDSET( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag FIELDSET
   * @package : Static Procedural
   * @method  : Html::FIELDSET($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'FIELDSET') ? 
  
   $Html->FIELDSET( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc
      
  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TBODY noHTML  
  * Inline Heading tag TBODY
  *
  **/
function _xTBODY( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TBODY
   * @package : Static Procedural
   * @method  : Html::TBODY($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TBODY') ? 
  
   $Html->TBODY( 
    
    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TFOOTER noHTML  
  * Inline Heading tag TFOOTER
  *
  **/
function _xTFOOTER( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TBODY
   * @package : Static Procedural
   * @method  : Html::TBODY($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TFOOT') ? 
  
   $Html->TFOOT( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML THEAD noHTML  
  * Inline Heading tag THEAD
  *
  **/
function _xTHEAD( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag THEAD
   * @package : Static Procedural
   * @method  : Html::THEAD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'THEAD') ? 
  
   $Html->THEAD( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SPAN noHTML  
  * Inline Heading tag SPAN
  *
  **/
function _xSPAN( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SPAN
   * @package : Static Procedural
   * @method  : Html::SPAN($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SPAN') ? 
  
   $Html->SPAN(

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML EM noHTML  
  * Inline Heading tag EM
  *
  **/
function _xEM( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag EM
   * @package : Static Procedural
   * @method  : Html::EM($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'EM') ? 
  
   $Html->EM( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML B noHTML  
  * Inline Heading tag B
  *
  **/
function _xB( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 


) 
{
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag B
   * @package : Static Procedural
   * @method  : Html::B($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'B') ? 
  
   $Html->B( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML I noHTML  
  * Inline Heading tag I
  *
  **/
function _xI( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag I
   * @package : Static Procedural
   * @method  : Html::I($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'I') ? 
  
   $Html->I( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SMALL noHTML  
  * Inline Heading tag SMALL
  *
  **/
function _xSMALL( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SMALL
   * @package : Static Procedural
   * @method  : Html::SMALL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SMALL') ? 
  
   $Html->SMALL( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MARQUEE noHTML  
  * Inline Heading tag MARQUEE
  *
  **/
function _xMARQUEE( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag MARQUEE
   * @package : Static Procedural
   * @method  : Html::MARQUEE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'MARQUEE') ? 
  
   $Html->MARQUEE( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CENTER noHTML  
  * Inline Heading tag CENTER
  *
  **/
function _xCENTER( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag CENTER
   * @package : Static Procedural
   * @method  : Html::CENTER($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'CENTER') ? 
  
   $Html->CENTER( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CODE noHTML  
  * Inline Heading tag CODE
  *
  **/
function _xCODE( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag CODE
   * @package : Static Procedural
   * @method  : Html::CODE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'CODE') ? 
  
   $Html->CODE( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  
 
}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML ABBR noHTML  
  * Inline Heading tag ABBR
  *
  **/
function _xABBR( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag ABBR
   * @package : Static Procedural
   * @method  : Html::ABBR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'ABBR') ?
  
   $Html->ABBR( 
    
    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MAP noHTML  
  * Inline Heading tag MAP
  *
  **/
function _xMAP( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag ABBR
   * @package : Static Procedural
   * @method  : Html::ABBR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'MAP') ? 
  
   $Html->MAP( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CANVAS noHTML  
  * Inline Heading tag CANVAS
  *
  **/
function _xCANVAS( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag ABBR
   * @package : Static Procedural
   * @method  : Html::ABBR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'CANVAS') ?
  
   $Html->CANVAS(

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());   

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DATA noHTML  
  * Inline Heading tag DATA
  *
  **/
function _xDATA( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DATA
   * @package : Static Procedural
   * @method  : Html::DATA($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DATA') ? 
  
   $Html->DATA( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DL noHTML  
  * Inline Heading tag DL
  *
  **/
function _xDL( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DL
   * @package : Static Procedural
   * @method  : Html::DL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DL') ? 
  
   $Html->DL( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DT noHTML  
  * Inline Heading tag DT
  *
  **/
function _xDT( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DT
   * @package : Static Procedural
   * @method  : Html::DT($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DT') ? 
  
   $Html->DT( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DD noHTML  
  * Inline Heading tag DD
  *
  **/
function _xDD( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DD
   * @package : Static Procedural
   * @method  : Html::DD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DD') ? 
  
   $Html->DD( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DFN noHTML  
  * Inline Heading tag DFN
  *
  **/
function _xDFN( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DD
   * @package : Static Procedural
   * @method  : Html::DD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DFN') ? 
  
   $Html->DFN( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML INS noHTML  
  * Inline Heading tag INS
  *
  **/
function _xINS( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag INS
   * @package : Static Procedural
   * @method  : Html::INS($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'INS') ? 
  
   $Html->INS( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DEL noHTML  
  * Inline Heading tag DEL
  *
  **/
function _xDEL( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag DEL
   * @package : Static Procedural
   * @method  : Html::DEL($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'DEL') ? 
  
   $Html->DEL( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML KBD noHTML  
  * Inline Heading tag KBD
  *
  **/
function _xKBD( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag KBD
   * @package : Static Procedural
   * @method  : Html::KBD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'KBD') ? 
  
   $Html->KBD( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MARK noHTML  
  * Inline Heading tag MARK
  *
  **/
function _xMARK( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null    

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag MARK
   * @package : Static Procedural
   * @method  : Html::MARK($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'MARK') ?
  
   $Html->MARK( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PRE noHTML  
  * Inline Heading tag PRE
  *
  **/
function _xPRE( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag PRE
   * @package : Static Procedural
   * @method  : Html::PRE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'PRE') ? 
  
   $Html->PRE( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML RT noHTML  
  * Inline Heading tag RT
  *
  **/
function _xRT( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag PRE
   * @package : Static Procedural
   * @method  : Html::PRE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'RT') ? 
  
   $Html->RT( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML S noHTML  
  * Inline Heading tag S
  *
  **/
function _xS( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null   

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag S
   * @package : Static Procedural
   * @method  : Html::S($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'S') ? 
  
   $Html->S( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SAMP noHTML  
  * Inline Heading tag SAMP
  *
  **/
function _xSAMP( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null    

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SAMP
   * @package : Static Procedural
   * @method  : Html::SAMP($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'SAMP') ?
  
   $Html->SAMP( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML STRONG noHTML  
  * Inline Heading tag STRONG
  *
  **/
function _xSTRONG( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag STRONG
   * @package : Static Procedural
   * @method  : Html::STRONG($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'STRONG') ? 
  
   $Html->STRONG( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUB noHTML  
  * Inline Heading tag SUB
  *
  **/
function _xSUB( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SUB
   * @package : Static Procedural
   * @method  : Html::SUB($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SUB') ? 
  
   $Html->SUB( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUP noHTML  
  * Inline Heading tag SUP
  *
  **/
function _xSUP( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag SUP
   * @package : Static Procedural
   * @method  : Html::SUP($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'SUP') ? 
  
   $Html->SUP( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML WBR noHTML  
  * Inline Heading tag WBR
  *
  **/
function _xWBR( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag WBR
   * @package : Static Procedural
   * @method  : Html::WBR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'WBR') ? 
  
   $Html->WBR( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML Q noHTML  
  * Inline Heading tag Q
  *
  **/
function _xQ( 

   string        $element_id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $element_class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag WBR
   * @package : Static Procedural
   * @method  : Html::WBR($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'Q') ? 
  
   $Html->Q( 

    $element_id 
    ,$value          
    ,$attr             
    ,$element_class    
    ,$label 
    ,$assoc

  ) : PERFORM(erorrMessage()); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML HEAD noHTML  
  * Inline Heading tag HEAD
  *
  **/
function _xHEAD( 

   string         $value           =  null 
  ,array|string   $attr            =  null 
  ,string         $element_id      =  null 
  ,string         $element_class   =  null 
  ,string         $label           =  null 
  ,mixed          $assoc           =  null 

) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag HEAD
   * @package : Static Procedural
   * @method  : Html::HEAD($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'HEAD') ? 
  
   $Html->HEAD(
     
    $value, 
    $attr, 
    $element_id, 
    $element_class, 
    $label, 
    $assoc
    
  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TITLE noHTML  
  * Inline Heading tag TITLE
  *
  **/
function _xTITLE( 

   string         $value           =  null 
  ,array|string   $attr            =  null 
  ,string         $element_id      =  null 
  ,string         $element_class   =  null 
  ,string         $label           =  null 
  ,mixed          $assoc           =  null 


) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag TITLE
   * @package : Static Procedural
   * @method  : Html::TITLE($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge(); 
  return method_exists($Html,'TITLE') ? 
  
  $Html->TITLE(
    
    $value, 
    $attr, 
    $element_id, 
    $element_class, 
    $label, 
    $assoc
    
  ) : PERFORM(erorrMessage());  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BODY noHTML  
  * Inline Heading tag BODY
  *
  **/
function _xBODY( 

   string         $value           =  null 
  ,array|string   $attr            =  null 
  ,string         $element_id      =  null 
  ,string         $element_class   =  null 
  ,string         $label           =  null 
  ,mixed          $assoc           =  null 


) 
{ 
  /**
   *
   *
   *
   *
   *
   * @package : Merge Heading tag BODY
   * @package : Static Procedural
   * @method  : Html::BODY($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  $Html = NEW Merge();
  return method_exists($Html,'BODY') ? 
  
   $Html->BODY(
     
    $value, 
    $attr, 
    $element_id, 
    $element_class, 
    $label, 
    $assoc
    
  ) : PERFORM(erorrMessage());  

}

