<?php 

USE \PHPWine\VanillaFlavour\Wine\Optimizer\Html AS Merge; 
USE \PHPWine\VanillaFlavour\Wine\system\Request;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.2.0.9 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.2.0.9 free software: you can redistribute it and/or modify.
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
 * @category   PHPLibrary PHPWine\VanillaFlavour
 * @package    PHPHtml-Optimizer | CodeDesigner/Enhancer | Advance Form Builder | Handling Form Validation | Form Validation v2 | BASIC-Authentication | HtmlMinifier
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.2.0.9
 * @since     03.03.2022
 *
 * @method / FunctionList 
 * @method _xH1();
 * @method _xH2();
 * @method _xH3();
 * @method _xH4();
 * @method _xH5();
 * @method _xH6();
 * @method _xDIV();
 * @method _xP();
 * @method _xBUTTON();
 * @method _xA();
 * @method _xIFRAME();
 * @method _xMAIN();
 * @method _xNAV();
 * @method _xSELECT();
 * @method _xFORM();
 * @method _xPICTURE();
 * @method _xSECTION();
 * @method _xTEXTAREA();
 * @method _xFOOTER();
 * @method _xSCRIPT();
 * @method _xSTYLE();
 * @method _xAUDIO();
 * @method _xVIDEO();
 * @method _xADDRESS();
 * @method _xCOLGROUP();
 * @method _xBDI();
 * @method _xBDO();
 * @method _xBLOCKQUOTE();
 * @method _xCAPTION();
 * @method _xLABEL();
 * @method _xDATALIST();
 * @method _xDETAILS();
 * @method _xSUMMARY();
 * @method _xDIALOG();
 * @method _xOPTION();
 * @method _xFIGURE();
 * @method _xFIGCAPTION();
 * @method _xMETER();
 * @method _xOBJECT();
 * @method _xOPTGROUP();
 * @method _xOUTPUT();
 * @method _xPROGRESS();
 * @method _xTEMPLATE();
 * @method _xUL();
 * @method _xOL();
 * @method _xLI();
 * @method _xTABLE();
 * @method _xTR();
 * @method _xTD();
 * @method _xTH();
 * @method _xLEGEND();
 * @method _xFIELDSET();
 * @method _xTBODY();
 * @method _xTFOOTER();
 * @method _xTHEAD();
 * @method _xSPAN();
 * @method _xEM();
 * @method _xB();
 * @method _xI();
 * @method _xSMALL();
 * @method _xMARQUEE();
 * @method _xCENTER();
 * @method _xCODE();
 * @method _xABBR();
 * @method _xMAP();
 * @method _xCANVAS();
 * @method _xDATA();
 * @method _xDL();
 * @method _xDT();
 * @method _xDD();
 * @method _xDFN();
 * @method _xINS();
 * @method _xDEL();
 * @method _xKBD();
 * @method _xMARK();
 * @method _xPRE();
 * @method _xRT();
 * @method _xS();
 * @method _xSAMP();
 * @method _xSTRONG();
 * @method _xSUB();
 * @method _xSUP();
 * @method _xIMG();
 * @method _xWBR();
 * @method _xQ();
 * @method _xHEAD();
 * @method _xTITLE();
 * @method _xBODY();
 * 
 * FIXING NOT AVAILABLE TAG USE Enhancer ELEM('svg') instead ! 
 * @since 02.04.2022
 * @since v1.2.0.0
 * # _xSVG();
 * 
 */

/**
  *
  * @since 02.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H1 TAG noHTML  
  * Inline Heading tag H1
  *
  **/
function _xH1( 

   array|string  $value  =  null 
  ,array|string  $attr   =  null 
  ,string        $id     =  null 
  ,string        $class  =  null 
  ,string        $label  =  null 
  ,string        $assoc  =  null 

) 
{ 

  /**
   * @package : Merge Heading tag H1
   * @package : Static Procedural
   * @method  : Html::H1($value, $attr=null, $id, $class, $label, $assoc);
   **/ 
  $Html    = NEW Merge(); 

  return method_exists($Html, 'H1') ? 
  
  $Html->H1(

     $value          
    ,$attr
    ,$id              
    ,$class    
    ,$label            
    ,$assoc           

   ) : PERFORM(  Request::erorrMessage() ); 

}

/**
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H2 TAG noHTML  
  * Inline Heading tag H2
  **/
function _xH2( 

   array|string  $value  =  null 
  ,array|string  $attr   =  null 
  ,string        $id     =  null 
  ,string        $class  =  null 
  ,string        $label  =  null 
  ,string        $assoc  =  null   

) 
{ 
  
  /**
   * @package : Merge Heading tag H2
   * @package : Static Procedural
   * @method  : Html::H2($value, $attr=null, $id, $class, $label, $assoc);
   **/ 
   
   $Html    = NEW Merge(); 

   return method_exists($Html, 'H2') ? 
   
   $Html->H2(
     
     $value          
    ,$attr
    ,$id              
    ,$class    
    ,$label            
    ,$assoc   

   ) : PERFORM( Request::erorrMessage() ); 

}

/**
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H3 TAG noHTML  
  * Inline Heading tag H3
  **/
function _xH3( 

   array|string  $value  =  null
  ,array|string  $attr   =  null 
  ,string        $id     =  null 
  ,string        $class  =  null 
  ,string        $label  =  null 
  ,string        $assoc  =  null 

) 
{ 

  /**
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::H3($value, $attr=null, $id, $class, $label, $assoc);
   **/ 
  
  $Html    = NEW Merge(); 

   return method_exists($Html, 'H3') ? 
   
   $Html->H3(

     $value          
    ,$attr
    ,$id              
    ,$class    
    ,$label            
    ,$assoc  

   ) : PERFORM( Request::erorrMessage() );  

}

/**
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H4 TAG noHTML  
  * Inline Heading tag H4
  **/
function _xH4( 

   array|string  $value  =  null
  ,array|string  $attr   =  null 
  ,string        $id     =  null 
  ,string        $class  =  null 
  ,string        $label  =  null 
  ,string        $assoc  =  null    

) 
{ 

  /**
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::H3($value, $attr=null, $id, $class, $label, $assoc);
   **/ 
  
  $Html    = NEW Merge(); 

   return method_exists($Html, 'H4') ? 
   
   $Html->H4( 
  
     $value          
    ,$attr
    ,$id              
    ,$class    
    ,$label            
    ,$assoc   

   ) : PERFORM( Request::erorrMessage() );   

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

   array|string  $value  =  null
  ,array|string  $attr   =  null 
  ,string        $id     =  null 
  ,string        $class  =  null 
  ,string        $label  =  null 
  ,string        $assoc  =  null       

) 
{ 

  /**
   * @package : Merge Heading tag H5
   * @package : Static Procedural
   * @method  : Html::H5($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

   return method_exists($Html, 'H5') ? 
   
   $Html->H5(

     $value          
    ,$attr
    ,$id              
    ,$class    
    ,$label            
    ,$assoc   

   ) : PERFORM( Request::erorrMessage() ); 

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

   array|string  $value  =  null
  ,array|string  $attr   =  null 
  ,string        $id     =  null 
  ,string        $class  =  null 
  ,string        $label  =  null 
  ,string        $assoc  =  null      

) 
{ 

  /**
   * @package : Merge Heading tag H6
   * @package : Static Procedural
   * @method  : Html::H6($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

   return method_exists($Html,'H6') ? 
   
   $Html->H6( 

     $value          
    ,$attr
    ,$id              
    ,$class    
    ,$label            
    ,$assoc   

    ) : PERFORM( Request::erorrMessage() ); 

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag H6
   * @package : Static Procedural
   * @method  : Html::DIV($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

   return method_exists($Html,'DIV') ? 
   
    $Html->DIV( 

     $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

    ) : PERFORM( Request::erorrMessage() ); 

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag PARAGRAPH
   * @package : Static Procedural
   * @method  : Html::P($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

   return method_exists($Html,'P') ? 
   
    $Html->P( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

    ) : PERFORM( Request::erorrMessage() ); 

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
 
   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null

) 
{ 

  /**
   * @package : Merge Heading tag BUTTON
   * @package : Static Procedural
   * @method  : Html::BUTTON($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

   return method_exists($Html,'BUTTON') ? 
   
    $Html->BUTTON(

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag A LINK
   * @package : Static Procedural
   * @method  : Html::A($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

   return method_exists($Html,'A') ? 
   
    $Html->A( 

     $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc
   
   ) : PERFORM( Request::erorrMessage() );
   
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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null     

) 
{ 

  /**
   * @package : Merge Heading tag A IFRAME
   * @package : Static Procedural
   * @method  : Html::IFRAME($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

   return method_exists($Html,'IFRAME') ?
   
    $Html->IFRAME( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

    ) : PERFORM( Request::erorrMessage() ); 

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null     

 ) 
{ 

  /**
   * @package : Merge Heading tag MAIN
   * @package : Static Procedural
   * @method  : Html::MAIN($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'MAIN') ? 
  
   $Html->MAIN( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() ); 

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null  

 ) 
{ 

  /**
   * @package : Merge Heading tag NAV
   * @package : Static Procedural
   * @method  : Html::NAV($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

   return method_exists($Html,'NAV') ? 
   
    $Html->NAV( 

     $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

    ) : PERFORM( Request::erorrMessage() ); 

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag SELECT
   * @package : Static Procedural
   * @method  : Html::SELECT($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

   return method_exists($Html,'SELECT') ?
   
    $Html->SELECT( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

    ) : PERFORM( Request::erorrMessage() ); 

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null    

) 
{ 

  /**
   * @package : Merge Heading tag FORM
   * @package : Static Procedural
   * @method  : Html::FORM($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

   return method_exists($Html,'FORM') ? 
   
    $Html->FORM( 
    
     $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

    ) : PERFORM( Request::erorrMessage() ); 

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag PICTURE
   * @package : Static Procedural
   * @method  : Html::PICTURE($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'PICTURE') ? 
  
   $Html->PICTURE( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );  

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag SECTION
   * @package : Static Procedural
   * @method  : Html::SECTION($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

   return method_exists($Html,'SECTION') ? 
   
    $Html->SECTION( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

    ) : PERFORM( Request::erorrMessage() );  

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null   

) 
{ 

  /**
   * @package : Merge Heading tag TEXTAREA
   * @package : Static Procedural
   * @method  : Html::TEXTAREA($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'TEXTAREA') ? 
  
   $Html->TEXTAREA( 
    
     $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() ); 

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

   string        $id      =  null 
  ,array|string  $value   =  null 
  ,array|string  $attr    =  null 
  ,string        $class   =  null 
  ,string        $label   =  null 
  ,string        $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag TEXTAREA
   * @package : Static Procedural
   * @method  : Html::TEXTAREA($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'FOOTER') ? 
  
   $Html->FOOTER( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );

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

     string       $value          =  null
    ,array|string $attr           =  null
    ,string       $assoc          =  null 

) 
{ 

  /**
   * @package : Merge Heading tag SCRIPT
   * @package : Static Procedural
   * @method  : Html::SCRIPT($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'SCRIPT') ? 
  
  $Html->SCRIPT(
    
     $value
     ,$attr
     ,null
     ,null
     ,null
     ,$assoc
     
  ) : PERFORM( Request::erorrMessage() );

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

   string       $value          =  null
  ,array|string $attr           =  null
  ,string       $assoc          =  null 

) 
{ 

  /**
   * @package : Merge Heading tag TEXTAREA
   * @package : Static Procedural
   * @method  : Html::TEXTAREA($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

  return method_exists($Html,'STYLE') ?
  
   $Html->STYLE(
     
     $value
     ,$attr
     ,null
     ,null
     ,null
     ,$assoc
     
  ) : PERFORM( Request::erorrMessage() );

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag AUDIO
   * @package : Static Procedural
   * @method  : Html::AUDIO($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'AUDIO') ? 
  
   $Html->AUDIO( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag VIDEO
   * @package : Static Procedural
   * @method  : Html::VIDEO($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'VIDEO') ? 
  
   $Html->VIDEO( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null   

) 
{ 

  /**
   * @package : Merge Heading tag ADDRESS
   * @package : Static Procedural
   * @method  : Html::ADDRESS($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'ADDRESS') ? 
  
   $Html->ADDRESS( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag COLGROUP
   * @package : Static Procedural
   * @method  : Html::COLGROUP($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'COLGROUP') ? 
  
   $Html->COLGROUP( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null   

) 
{ 

  /**
   * @package : Merge Heading tag BDI
   * @package : Static Procedural
   * @method  : Html::BDI($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'COLGROUP') ?
  
   $Html->BDI( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag BDO
   * @package : Static Procedural
   * @method  : Html::BDO($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

  return method_exists($Html,'BDO') ? 
  
   $Html->BDO( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag BLOCKQUOTE
   * @package : Static Procedural
   * @method  : Html::BLOCKQUOTE($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'BLOCKQUOTE') ? 
  
   $Html->BLOCKQUOTE( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag CAPTION
   * @package : Static Procedural
   * @method  : Html::CAPTION($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'CAPTION') ?
  
   $Html->CAPTION(  

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

   ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  


) 
{ 

  /**
   * @package : Merge Heading tag LABEL
   * @package : Static Procedural
   * @method  : Html::LABEL($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'LABEL') ?
  
   $Html->LABEL( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag DATALIST
   * @package : Static Procedural
   * @method  : Html::DATALIST($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'DATALIST') ? 
  
   $Html->DATALIST( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag DETAILS
   * @package : Static Procedural
   * @method  : Html::DETAILS($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'DETAILS') ? 
  
   $Html->DETAILS( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc
    
  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag SUMMARY
   * @package : Static Procedural
   * @method  : Html::SUMMARY($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'SUMMARY') ?
  
   $Html->SUMMARY( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label            
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag DIALOG
   * @package : Static Procedural
   * @method  : Html::DIALOG($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'DIALOG') ? 
  
   $Html->DIALOG( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc 

   ) : PERFORM( Request::erorrMessage() );   

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
  
   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag OPTION
   * @package : Static Procedural
   * @method  : Html::OPTION($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'OPTION') ? 
  
   $Html->OPTION( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag FIGURE
   * @package : Static Procedural
   * @method  : Html::FIGURE($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'FIGURE') ? 
  
   $Html->FIGURE( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag FIGCAPTION
   * @package : Static Procedural
   * @method  : Html::FIGCAPTION($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'FIGCAPTION') ?
  
   $Html->FIGCAPTION( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag METER
   * @package : Static Procedural
   * @method  : Html::METER($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'METER') ?
  
   $Html->METER( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

   ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag OBJECT
   * @package : Static Procedural
   * @method  : Html::OBJECT($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'OBJECT') ? 
  
   $Html->OBJECT( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag OPTGROUP
   * @package : Static Procedural
   * @method  : Html::OPTGROUP($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'OPTGROUP') ? 
  
   $Html->OPTGROUP( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );   

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag OUTPUT
   * @package : Static Procedural
   * @method  : Html::OUTPUT($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'OUTPUT') ? 
  
   $Html->OUTPUT( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag PROGRESS
   * @package : Static Procedural
   * @method  : Html::PROGRESS($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

  return method_exists($Html,'PROGRESS') ? 
  
   $Html->PROGRESS( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

   ) : PERFORM( Request::erorrMessage() ); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SVG NOT AVAILABLE FOR MERGE VERSION USE Enhancer ELEM('svg') instead !  
  * Inline Heading tag SVG
  *
  **/
# function _xSVG( 
#  string         $id      =  null 
# ,array|string   $value   =  null 
# ,array|string   $attr    =  null 
# ,string         $class   =  null 
# ,string         $label   =  null 
# ,string         $assoc   =  null   
# ) 
# { 
  /**
   *
   *
   * @package : Merge Heading tag SVG
   * @package : Static Procedural
   * @method  : Html::SVG($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/
# $Html = NEW Merge(); 
# return method_exists($Html,'SVG') ? 
# $Html->SVG( 
#      $id 
#     ,$value          
#     ,$attr             
#     ,$class    
#     ,$label 
#     ,$assoc
#    ) : PERFORM(erorrMessage()); 
# }

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEMPLATE noHTML  
  * Inline Heading tag TEMPLATE
  *
  **/
function _xTEMPLATE( 

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag TEMPLATE
   * @package : Static Procedural
   * @method  : Html::TEMPLATE($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'TEMPLATE') ?
  
   $Html->TEMPLATE( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag UL
   * @package : Static Procedural
   * @method  : Html::UL($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'UL') ?
  
   $Html->UL( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

   ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag OL
   * @package : Static Procedural
   * @method  : Html::OL($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

  return method_exists($Html,'OL') ? 
  
   $Html->OL( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag LI
   * @package : Static Procedural
   * @method  : Html::LI($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'LI') ?
  
   $Html->LI( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 
  
  /**
   * @package : Merge Heading tag TABLE
   * @package : Static Procedural
   * @method  : Html::TABLE($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'TABLE') ? 
  
   $Html->TABLE( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag TR
   * @package : Static Procedural
   * @method  : Html::TR($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); ;

  return method_exists($Html,'TR') ? 
  
   $Html->TR( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag TD
   * @package : Static Procedural
   * @method  : Html::TD($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'TD') ?
  
   $Html->TD( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

   ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 
  /**
   * @package : Merge Heading tag TH
   * @package : Static Procedural
   * @method  : Html::TH($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'TH') ? 
  
  $Html->TH( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null   

) 
{ 

  /**
   * @package : Merge Heading tag LEGEND
   * @package : Static Procedural
   * @method  : Html::LEGEND($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

  return method_exists($Html,'LEGEND') ?
  
   $Html->LEGEND( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag FIELDSET
   * @package : Static Procedural
   * @method  : Html::FIELDSET($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'FIELDSET') ? 
  
   $Html->FIELDSET( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc
      
  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag TBODY
   * @package : Static Procedural
   * @method  : Html::TBODY($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'TBODY') ? 
  
   $Html->TBODY( 
    
    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag TBODY
   * @package : Static Procedural
   * @method  : Html::TBODY($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

  return method_exists($Html,'TFOOT') ? 
  
   $Html->TFOOT( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag THEAD
   * @package : Static Procedural
   * @method  : Html::THEAD($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'THEAD') ? 
  
   $Html->THEAD( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag SPAN
   * @package : Static Procedural
   * @method  : Html::SPAN($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

  return method_exists($Html,'SPAN') ? 
  
   $Html->SPAN(

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag EM
   * @package : Static Procedural
   * @method  : Html::EM($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'EM') ? 
  
   $Html->EM( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 


) 
{

  /**
   * @package : Merge Heading tag B
   * @package : Static Procedural
   * @method  : Html::B($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'B') ? 
  
   $Html->B( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag I
   * @package : Static Procedural
   * @method  : Html::I($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'I') ? 
  
   $Html->I( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag SMALL
   * @package : Static Procedural
   * @method  : Html::SMALL($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'SMALL') ? 
  
   $Html->SMALL( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag MARQUEE
   * @package : Static Procedural
   * @method  : Html::MARQUEE($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'MARQUEE') ? 
  
   $Html->MARQUEE( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{

  /**
   * @package : Merge Heading tag CENTER
   * @package : Static Procedural
   * @method  : Html::CENTER($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'CENTER') ? 
  
   $Html->CENTER( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag CODE
   * @package : Static Procedural
   * @method  : Html::CODE($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'CODE') ? 
  
   $Html->CODE( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  
 
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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag ABBR
   * @package : Static Procedural
   * @method  : Html::ABBR($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'ABBR') ?
  
   $Html->ABBR( 
    
    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag ABBR
   * @package : Static Procedural
   * @method  : Html::ABBR($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'MAP') ? 
  
   $Html->MAP( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag ABBR
   * @package : Static Procedural
   * @method  : Html::ABBR($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'CANVAS') ?
  
   $Html->CANVAS(

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );   

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag DATA
   * @package : Static Procedural
   * @method  : Html::DATA($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'DATA') ? 
  
   $Html->DATA( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag DL
   * @package : Static Procedural
   * @method  : Html::DL($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'DL') ? 
  
   $Html->DL( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag DT
   * @package : Static Procedural
   * @method  : Html::DT($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 
  
  return method_exists($Html,'DT') ? 
  
   $Html->DT( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag DD
   * @package : Static Procedural
   * @method  : Html::DD($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'DD') ? 
  
   $Html->DD( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag DD
   * @package : Static Procedural
   * @method  : Html::DD($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'DFN') ? 
  
   $Html->DFN( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag INS
   * @package : Static Procedural
   * @method  : Html::INS($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'INS') ? 
  
   $Html->INS( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag DEL
   * @package : Static Procedural
   * @method  : Html::DEL($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'DEL') ? 
  
   $Html->DEL( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag KBD
   * @package : Static Procedural
   * @method  : Html::KBD($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'KBD') ? 
  
   $Html->KBD( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null   

) 
{ 

  /**
   * @package : Merge Heading tag MARK
   * @package : Static Procedural
   * @method  : Html::MARK($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'MARK') ?
  
   $Html->MARK( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag PRE
   * @package : Static Procedural
   * @method  : Html::PRE($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

  return method_exists($Html,'PRE') ? 
  
   $Html->PRE( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag PRE
   * @package : Static Procedural
   * @method  : Html::PRE($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  
  
  return method_exists($Html,'RT') ? 
  
   $Html->RT( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null    

) 
{ 

  /**
   * @package : Merge Heading tag 
   * @package : Static Procedural
   * @method  : Html::S($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'S') ? 
  
   $Html->S( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null     

) 
{ 

  /**
   * @package : Merge Heading tag SAMP
   * @package : Static Procedural
   * @method  : Html::SAMP($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'SAMP') ?
  
   $Html->SAMP( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null   

) 
{ 

  /**
   * @package : Merge Heading tag STRONG
   * @package : Static Procedural
   * @method  : Html::STRONG($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'STRONG') ? 
  
   $Html->STRONG( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null  

) 
{ 

  /**
   * @package : Merge Heading tag SUB
   * @package : Static Procedural
   * @method  : Html::SUB($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'SUB') ? 
  
   $Html->SUB( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );  

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag SUP
   * @package : Static Procedural
   * @method  : Html::SUP($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'SUP') ? 
  
   $Html->SUP( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() );

}

/**
  *
  * @since 11.30.2021
  * @category PHPHtml-Merge
  * @ Method Defined HTML IMG TAG noHTML  
  * Inline Heading tag  IMG
  *
  **/
  function _xIMG( 

     string       $id     = null
    ,string       $class  = null
    ,array|string $attr   = null
    ,string       $inline = null
    ,mixed        $assoc  = null
  
  ) 
  { 

   /**
    * @package : Merge Heading tag IMG
    * @package : Static Procedural
    * @method  : Html::H1($value, $attr=null, $id, $class, $label, $assoc);
    **/ 
    
    $Html    = NEW Merge(); 

   return method_exists($Html, 'ELEMS') ? 
   
   $Html->ELEMS(
  
     $id
    ,$class
    ,'img'
    ,$attr
    ,$inline
    ,$assoc          
  
    ) : PERFORM( Request::erorrMessage() ); 
  
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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag WBR
   * @package : Static Procedural
   * @method  : Html::WBR($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'WBR') ? 
  
   $Html->WBR( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ); 

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

   string         $id      =  null 
  ,array|string   $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag WBR
   * @package : Static Procedural
   * @method  : Html::WBR($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge();  

  return method_exists($Html,'Q') ? 
  
   $Html->Q( 

    $id 
    ,$value          
    ,$attr             
    ,$class    
    ,$label 
    ,$assoc

  ) : PERFORM( Request::erorrMessage() ) ; 

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

   string         $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $id      =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 

) 
{ 

  /**
   * @package : Merge Heading tag HEAD
   * @package : Static Procedural
   * @method  : Html::HEAD($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'HEAD') ? 
  
   $Html->HEAD(
     
    $value, 
    $attr, 
    $id, 
    $class, 
    $label, 
    $assoc
    
  ) : PERFORM( Request::erorrMessage() );  

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

   string         $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $id      =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 


) 
{ 

  /**
   * @package : Merge Heading tag TITLE
   * @package : Static Procedural
   * @method  : Html::TITLE($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'TITLE') ? 
  
  $Html->TITLE(
    
    $value, 
    $attr, 
    $id, 
    $class, 
    $label, 
    $assoc
    
  ) : PERFORM( Request::erorrMessage() );  

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

   string         $value   =  null 
  ,array|string   $attr    =  null 
  ,string         $id      =  null 
  ,string         $class   =  null 
  ,string         $label   =  null 
  ,string         $assoc   =  null 


) 
{ 

  /**
   * @package : Merge Heading tag BODY
   * @package : Static Procedural
   * @method  : Html::BODY($value, $attr=null, $id, $class, $label, $assoc);
   **/
  
  $Html    = NEW Merge(); 

  return method_exists($Html,'BODY') ? 
  
   $Html->BODY(
     
    $value, 
    $attr, 
    $id, 
    $class, 
    $label, 
    $assoc
    
  ) : PERFORM( Request::erorrMessage() );  

}

