<?php 

USE \PHPWine\VanillaFlavour\Optimizer\Html AS MergeBox; 
USE \PHPWine\VanillaFlavour\system\Request;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.2.0.3 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.2.0.3 free software: you can redistribute it and/or modify.
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
 * @version   v1.2.0.3 
 * @since     02.13.2022
 *
 * @method / FunctionList 
 * @method _H1();
 * @method xH1();
 * @method _H2();
 * @method xH2();
 * @method _H3();
 * @method xH3();
 * @method _H4();
 * @method xH4(); 
 * @method _H5();
 * @method xH5();
 * @method _H6();
 * @method xH6();
 * @method _DIV();
 * @method xDIV(); 
 * @method _P();
 * @method xP();
 * @method _BUTTON();
 * @method xBUTTON();
 * @method _A();
 * @method xA();
 * @method _IFRAME();
 * @method xIFRAME();
 * @method _MAIN();
 * @method xMAIN();
 * @method _NAV();
 * @method xNAV();
 * @method _SELECT();
 * @method xSELECT();
 * @method _FORM();
 * @method xFORM();
 * @method _PICTURE();
 * @method xPICTURE();
 * @method _SECTION();
 * @method xSECTION();
 * @method _TEXTAREA();
 * @method xTEXTAREA();
 * @method _FOOTER();
 * @method xFOOTER();
 * @method _SCRIPT();
 * @method xSCRIPT();
 * @method _STYLE();
 * @method xSTYLE();
 * @method _AUDIO();
 * @method xAUDIO();
 * @method _VIDEO();
 * @method xVIDEO();
 * @method _ADDRESS();
 * @method xADDRESS();
 * @method _COLGROUP();
 * @method xCOLGROUP();
 * @method _BDI();
 * @method xBDI();
 * @method _BDO();
 * @method xBDO();
 * @method _BLOCKQUOTE();
 * @method xBLOCKQUOTE();
 * @method _CAPTION();
 * @method xCAPTION();
 * @method _LABEL();
 * @method xLABEL();
 * @method _DATALIST();
 * @method xDATALIST();
 * @method _DETAILS();
 * @method xDETAILS();
 * @method _SUMMARY();
 * @method xSUMMARY();
 * @method _DIALOG();
 * @method xDIALOG();
 * @method _OPTION();
 * @method xOPTION();
 * @method _FIGURE();
 * @method xFIGURE();
 * @method _FIGCAPTION();
 * @method xFIGCAPTION();
 * @method _METER();
 * @method xMETER();
 * @method _OBJECT();
 * @method xOBJECT();
 * @method _OPTGROUP();
 * @method xOPTGROUP();
 * @method _OUTPUT();
 * @method xOUTPUT();
 * @method _PROGRESS();
 * @method xPROGRESS();
 * @method _TEMPLATE();
 * @method xTEMPLATE();
 * @method _UL();
 * @method xUL();
 * @method _OL();
 * @method xOL();
 * @method _LI();
 * @method xLI();
 * @method _TABLE();
 * @method xTABLE();
 * @method _TR();
 * @method xTR();
 * @method _TD();
 * @method xTD();
 * @method _TH();
 * @method xTH();
 * @method _LEGEND();
 * @method xLEGEND();
 * @method _FIELDSET();
 * @method xFIELDSET();
 * @method _TBODY();
 * @method xTBODY();
 * @method _TFOOT();
 * @method xTFOOT();
 * @method _THEAD();
 * @method xTHEAD();
 * @method _SPAN();
 * @method xSPAN();
 * @method _EM();
 * @method xEM();
 * @method _SMALL();
 * @method xSMALL();
 * @method _MARQUEE();
 * @method xMARQUEE();
 * @method _CENTER();
 * @method xCENTER();
 * @method _CODE();
 * @method xCODE();
 * @method _ABBR();
 * @method xABBR();
 * @method _MAP();
 * @method xMAP();
 * @method _CANVAS();
 * @method xCANVAS();
 * @method _DATA();
 * @method xDATA();
 * @method _DL();
 * @method xDL();
 * @method _DT();
 * @method xDT();
 * @method _DD();
 * @method xDD();
 * @method _DFN();
 * @method xDFN();
 * @method _INS();
 * @method xINS();
 * @method _DEL();
 * @method xDEL();
 * @method _KBD();
 * @method xKBD();
 * @method _MARK();
 * @method xMARK();
 * @method _xPRE();
 * @method _RT();
 * @method xRT();
 * @method _SAMP();
 * @method xSAMP();
 * @method _STRONG();
 * @method xSTRONG();
 * @method _SUB();
 * @method xSUB();
 * @method _SUP();
 * @method xSUP();
 * @method _WBR();
 * @method xWBR();
 * @method _HEAD();
 * @method xHEAD();
 * @method _TITLE();
 * @method xTITLE();
 * @method _BODY();
 * @method xBODY();
 * 
 *  # SINGLE CHARACTER HTML TAG SUCH LIST BELOW ARE NOT SUPPORTED FOR MERGEBOX BASE ON PHP STANDARD !
 *  # _P();
 *  # xP();
 *  # _A();
 *  # xA();
 *  # _i();
 *  # xi();
 *  # _b();
 *  # xb();
 * 
 */

$request = NEW Request();

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H1 OPEN TAG noHTML  
  * Inline Heading tag H1
  *
  **/
function _H1(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H1
   * @package : Static Procedural
   * @method  : Html::_H1($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_H1') ? 
  
   $Html->_H1(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM($request->erorrMessage());	

}
/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H1 CLOSE TAG noHTML  
  * Inline Heading tag H1
  *
  **/
function xH1(

    string $label   =  NULL

)
{
 
  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xH1') ? 
  
   $Html->xH1($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H2 OPEN TAG noHTML  
  * Inline Heading tag H2
  *
  **/
function _H2(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{
 
  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H2
   * @package : Static Procedural
   * @method  : Html::_H2($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   
 $Html = NEW MergeBox(); 

 return method_exists($Html, '_H2') ? 
 
  $Html->_H2(
   
   $attr, 
   $id, 
   $class
   
   ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H2 CLOSE TAG noHTML  
  * Inline Heading tag H2
  *
  **/
function xH2(

    string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xH2') ? 
  
   $Html->xH2($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H3 OPEN TAG noHTML  
  * Inline Heading tag H3
  *
  **/
function _H3(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{
  
  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   
 $Html = NEW MergeBox(); 

 return method_exists($Html, '_H3') ? 
 
  $Html->_H3(
   
  $attr, 
  $id, 
  $class
  
   ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H3 CLOSE TAG noHTML  
  * Inline Heading tag H3
  *
  **/
function xH3(

    string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xH3') ? 
  
   $Html->xH3($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H4 OPEN TAG noHTML  
  * Inline Heading tag H4
  *
  **/
function _H4(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{
  
  global $request;
  
  /**
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 
 $Html = NEW MergeBox(); 

 return method_exists($Html, '_H4') ? 
 
  $Html->_H4(
   
  $attr, 
  $id, 
  $class
  
   ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H4 CLOSE TAG noHTML  
  * Inline Heading tag H4
  *
  **/
function xH4(

   string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 
  
  return method_exists($Html, 'xH4') ?
  
   $Html->xH4($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H5 OPEN TAG noHTML  
  * Inline Heading tag H5
  *
  **/
function _H5(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H5
   * @package : Static Procedural
   * @method  : Html::_H5($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/
 $Html = NEW MergeBox(); 

 return method_exists($Html, '_H5') ? 
 
  $Html->_H5(
   
  $attr, 
  $id, 
  $class
  
   ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H5 CLOSE TAG noHTML  
  * Inline Heading tag H5
  *
  **/
function xH5( 

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xH5') ? 
  
   $Html->xH5($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H6 OPEN TAG noHTML  
  * Inline Heading tag H6
  *
  **/
function _H6(
 
   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H6
   * @package : Static Procedural
   * @method  : Html::_H($v6alue, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
 $Html = NEW MergeBox(); 

 return method_exists($Html, '_H6') ?
 
   $Html->_H6(
   
  $attr, 
  $id, 
  $class
  
  ) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML H6 CLOSE TAG noHTML  
  * Inline Heading tag H6
  *
  **/
function xH6(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xH6') ?
  
   $Html->xH6($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DIV OPEN TAG noHTML  
  * Inline Heading tag DIV
  *
  **/
function _DIV(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag DIV
   * @package : Static Procedural
   * @method  : Html::_DIV($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_DIV') ? 
  
   $Html->_DIV(
    
    $attr, 
    $id, 
    $class
    
    ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DIV CLOSE TAG noHTML  
  * Inline Heading tag DIV
  *
  **/
function xDIV(  

  string  $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xDIV') ?
  
   $Html->xDIV($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BUTTON OPEN TAG noHTML  
  * Inline Heading tag BUTTON
  *
  **/
function _BUTTON(  

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag BUTTON
   * @package : Static Procedural
   * @method  : Html::_BUTTON($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_BUTTON') ? 
  
   $Html->_BUTTON(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BUTTON CLOSE TAG noHTML  
  * Inline Heading tag BUTTON
  *
  **/
function xBUTTON(

  string  $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xBUTTON') ? 
  
   $Html->xBUTTON($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML IFRAME OPEN TAG noHTML  
  * Inline Heading tag IFRAME
  *
  **/
function _IFRAME( 

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag IFRAME
   * @package : Static Procedural
   * @method  : Html::_IFRAME($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_IFRAME') ? 
  
   $Html->_IFRAME(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML IFRAME CLOSE TAG noHTML  
  * Inline Heading tag IFRAME
  *
  **/
function xIFRAME(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xIFRAME') ? 
  
   $Html->xIFRAME($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MAIN OPEN TAG noHTML  
  * Inline Heading tag MAIN
  *
  **/
function _MAIN(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag MAIN
   * @package : Static Procedural
   * @method  : Html::_MAIN($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_MAIN') ?
  
   $Html->_MAIN(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MAIN CLOSE TAG noHTML  
  * Inline Heading tag MAIN
  *
  **/
function xMAIN(

   string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xMAIN') ? 
  
   $Html->xMAIN($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML NAV OPEN TAG noHTML  
  * Inline Heading tag NAV
  *
  **/
function _NAV(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag NAV
   * @package : Static Procedural
   * @method  : Html::_NAV($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox();

  return method_exists($Html, '_NAV') ? 
  
   $Html->_NAV(
    
    $attr, 
    $id, 
    $class
  
   ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML NAV CLOSE TAG noHTML  
  * Inline Heading tag NAV
  *
  **/
function xNAV(

   string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xNAV') ?
  
   $Html->xNAV($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SELECT OPEN TAG noHTML  
  * Inline Heading tag SELECT
  *
  **/
function _SELECT(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag SELECT
   * @package : Static Procedural
   * @method  : Html::_SELECT($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_SELECT') ? 
  
   $Html->_SELECT(
    
    $attr, 
    $id, 
    $class
  
   ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SELECT CLOSE TAG noHTML  
  * Inline Heading tag SELECT
  *
  **/
function xSELECT(

  $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xSELECT') ? 
  
   $Html->xSELECT($label) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FORM OPEN TAG noHTML  
  * Inline Heading tag FORM
  *
  **/
function _FORM(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag FORM
   * @package : Static Procedural
   * @method  : Html::_FORM($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox();

  return method_exists($Html, '_FORM') ? 
  
   $Html->_FORM(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FORM CLOSE TAG noHTML  
  * Inline Heading tag FORM
  *
  **/
function xFORM(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xFORM') ? 
  
   $Html->xFORM($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PICTURE OPEN TAG noHTML  
  * Inline Heading tag PICTURE
  *
  **/
function _PICTURE(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag PICTURE
   * @package : Static Procedural
   * @method  : Html::_PICTURE($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 
  $Html = NEW MergeBox(); 
  
  return method_exists($Html, '_PICTURE') ?
  
   $Html->_PICTURE(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PICTURE CLOSE TAG noHTML  
  * Inline Heading tag PICTURE
  *
  **/
function xPICTURE(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 
 
  return method_exists($Html, 'xPICTURE') ? 
  
   $Html->xPICTURE($label) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SECTION OPEN TAG noHTML  
  * Inline Heading tag SECTION
  *
  **/
function _SECTION(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag SECTION
   * @package : Static Procedural
   * @method  : Html::_SECTION($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_SECTION') ? 
  
   $Html->_SECTION(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SECTION CLOSE TAG noHTML  
  * Inline Heading tag SECTION
  *
  **/
function xSECTION(

  string $label = NULL

)
{

  global $request;
  
  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xSECTION') ? 
  
   $Html->xSECTION($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEXTAREA OPEN TAG noHTML  
  * Inline Heading tag TEXTAREA
  *
  **/
function _TEXTAREA(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_TEXTAREA') ? 
  
   $Html->_TEXTAREA(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEXTAREA CLOSE TAG noHTML  
  * Inline Heading tag TEXTAREA
  *
  **/
function xTEXTAREA(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xTEXTAREA') ? 
  
   $Html->xTEXTAREA($label) : PERFORM( $request->erorrMessage() ); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEXTAREA OPEN TAG noHTML  
  * Inline Heading tag TEXTAREA
  *
  **/
function _FOOTER(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_FOOTER') ? 
  
   $Html->_FOOTER(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );   

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEXTAREA CLOSE TAG noHTML  
  * Inline Heading tag TEXTAREA
  *
  **/
function xFOOTER(

 string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xFOOTER') ?
  
   $Html->xFOOTER($label) : PERFORM( $request->erorrMessage() );   

}

/**
  *
  * @since 11.02.2021
  * @category PHPHtml-Merge
  * @ Method Defined HTML SCRIPT OPEN TAG noHTML  
  * Inline Heading tag SCRIPT
  *
  **/
function _SCRIPT(


    mixed $attr           =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  
  $Html = NEW MergeBox();

  return method_exists($Html, '_SCRIPT') ? 
  
   $Html->_SCRIPT(
    
    $attr, 
    NULL, 
    NULL
  
   ) : PERFORM( $request->erorrMessage() );   

}

/**
  *
  * @since 11.02.2021
  * @category PHPHtml-Merge
  * @ Method Defined HTML xSCRIPT CLOSE TAG noHTML  
  * Inline Heading tag xSCRIPT
  *
  **/
function xSCRIPT(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 
  
  return method_exists($Html, 'xSCRIPT') ? 
  
   $Html->xSCRIPT($label) : PERFORM( $request->erorrMessage() );   

}


/**
  *
  * @since 11.02.2021
  * @category PHPHtml-Merge
  * @ Method Defined HTML STYLE OPEN TAG noHTML  
  * Inline Heading tag STYLE
  *
  **/
function _STYLE(


   mixed $attr           =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge _STYLE TAG
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_STYLE') ? 
  
   $Html->_STYLE(
    
    $attr, 
    NULL, 
    NULL
    
 ) : PERFORM( $request->erorrMessage() );   

}

/**
  *
  * @since 11.02.2021
  * @category PHPHtml-Merge
  * @ Method Defined HTML _STYLE CLOSE TAG noHTML  
  * Inline Heading tag _STYLE
  *
  **/
function xSTYLE(

  $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xSTYLE') ? 
  
   $Html->xSTYLE($label) : PERFORM( $request->erorrMessage() );   

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML AUDIO OPEN TAG noHTML  
  * Inline Heading tag AUDIO
  *
  **/
function _AUDIO(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

)
{
 
  global $request;
  /**
   *
   *
   * @package : Merge Heading tag AUDIO
   * @package : Static Procedural
   * @method  : Html::_AUDIO($value, $attr=null, $id, $class, $label, $assoc);
   *
   **/	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_AUDIO') ? 
  
   $Html->_AUDIO(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML AUDIO CLOSE TAG noHTML  
  * Inline Heading tag AUDIO
  *
  **/
function xAUDIO(

   string $label   = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xAUDIO') ? 
  
   $Html->xAUDIO($label) : PERFORM( $request->erorrMessage() ); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML VIDEO OPEN TAG noHTML  
  * Inline Heading tag VIDEO
  *
  **/
function _VIDEO(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag VIDEO
   * @package : Static Procedural
   * @method  : Html::_VIDEO($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_VIDEO') ? 
  
   $Html->_VIDEO(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() ); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML VIDEO CLOSE TAG noHTML  
  * Inline Heading tag VIDEO
  *
  **/
function xVIDEO(

   string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox();
  return method_exists($Html, 'xVIDEO') ?
  
   $Html->xVIDEO($label) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML ADDRESS OPEN TAG noHTML  
  * Inline Heading tag ADDRESS
  *
  **/
function _ADDRESS(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null
 
 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag ADDRESS
   * @package : Static Procedural
   * @method  : Html::_ADDRESS($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_ADDRESS') ? 
  
   $Html->_ADDRESS(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML ADDRESS CLOSE TAG noHTML  
  * Inline Heading tag ADDRESS
  *
  **/
function xADDRESS(


  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xADDRESS') ? 
  
   $Html->xADDRESS($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML COLGROUP OPEN TAG noHTML  
  * Inline Heading tag COLGROUP
  *
  **/
function _COLGROUP(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_COLGROUP') ? 
  
  $Html->_COLGROUP(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML COLGROUP CLOSE TAG noHTML  
  * Inline Heading tag COLGROUP
  *
  **/
function xCOLGROUP(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xCOLGROUP') ?
  
   $Html->xCOLGROUP($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BDI OPEN TAG noHTML  
  * Inline Heading tag BDI
  *
  **/
function _BDI(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_BDI') ?
  
  $Html->_BDI(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BDI CLOSE TAG noHTML  
  * Inline Heading tag BDI
  *
  **/
function xBDI(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xBDI') ? 
  
   $Html->xBDI($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BDO OPEN TAG noHTML  
  * Inline Heading tag BDO
  *
  **/
function _BDO(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_BDO') ?
  
   $Html->_BDO(
  
   $attr, 
   $id, 
   $class
  
 ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BDO CLOSE TAG noHTML  
  * Inline Heading tag BDO
  *
  **/
function xBDO(  

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xBDO') ? 
  
   $Html->xBDO($label) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BLOCKQUOTE OPEN TAG noHTML  
  * Inline Heading tag BLOCKQUOTE
  *
  **/
function _BLOCKQUOTE(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag BLOCKQUOTE
   * @package : Static Procedural
   * @method  : Html::_BLOCKQUOTE($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
 $Html = NEW MergeBox(); 

 return method_exists($Html, '_BLOCKQUOTE') ? 
 
  $Html->_BLOCKQUOTE(
   
  $attr, 
  $id, 
  $class
 
  ) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BLOCKQUOTE CLOSE TAG noHTML  
  * Inline Heading tag BLOCKQUOTE
  *
  **/
function xBLOCKQUOTE(  

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xBLOCKQUOTE') ? 
  
   $Html->xBLOCKQUOTE($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CAPTION OPEN TAG noHTML  
  * Inline Heading tag CAPTION
  *
  **/
function _CAPTION(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag CAPTION
   * @package : Static Procedural
   * @method  : Html::_CAPTION($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_CAPTION') ? 
  
   $Html->_CAPTION(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CAPTION CLOSE TAG noHTML  
  * Inline Heading tag CAPTION
  *
  **/
function xCAPTION(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xCAPTION') ? 
   
   $Html->xCAPTION($label) : PERFORM(  $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LABEL OPEN TAG noHTML  
  * Inline Heading tag LABEL
  *
  **/
function _LABEL(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag LABEL
   * @package : Static Procedural
   * @method  : Html::_LABEL($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 
  $Html = NEW MergeBox();

  return method_exists($Html, '_LABEL') ? 
  
   $Html->_LABEL(
    
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LABEL CLOSE TAG noHTML  
  * Inline Heading tag LABEL
  *
  **/
function xLABEL(

  string $label = NULL

)
{
  
  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xLABEL') ? 
  
   $Html->xLABEL($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DATALIST OPEN TAG noHTML  
  * Inline Heading tag DATALIST
  *
  **/
function _DATALIST(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag DATALIST
   * @package : Static Procedural
   * @method  : Html::_DATALIST($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 
  
  return method_exists($Html, '_DATALIST') ? 
  
   $Html->_DATALIST(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DATALIST CLOSE TAG noHTML  
  * Inline Heading tag DATALIST
  *
  **/
function xDATALIST(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xDATALIST') ? 
  
   $Html->xDATALIST($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DETAILS OPEN TAG noHTML  
  * Inline Heading tag DETAILS
  *
  **/
function _DETAILS(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag DETAILS
   * @package : Static Procedural
   * @method  : Html::_DETAILS($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
 $Html = NEW MergeBox(); 

 return method_exists($Html, '_DETAILS') ? 
 
  $Html->_DETAILS(
   
  $attr, 
  $id, 
  $class
 
 ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DETAILS CLOSE TAG noHTML  
  * Inline Heading tag DETAILS
  *
  **/
function xDETAILS(

 string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xDETAILS') ? 
  
   $Html->xDETAILS($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUMMARY OPEN TAG noHTML  
  * Inline Heading tag SUMMARY
  *
  **/
function _SUMMARY(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

  )
  {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_SUMMARY') ? 
  
   $Html->_SUMMARY(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUMMARY CLOSE TAG noHTML  
  * Inline Heading tag SUMMARY
  *
  **/
function xSUMMARY(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xSUMMARY') ?

    $Html->xSUMMARY($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DIALOG OPEN TAG noHTML  
  * Inline Heading tag DIALOG
  *
  **/
function _DIALOG(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag DIALOG
   * @package : Static Procedural
   * @method  : Html::_DIALOG($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_DIALOG') ?
  
   $Html->_DIALOG(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DIALOG CLOSE TAG noHTML  
  * Inline Heading tag DIALOG
  *
  **/
function xDIALOG(

 string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xDIALOG') ?
  
   $Html->xDIALOG($label) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OPTION OPEN TAG noHTML  
  * Inline Heading tag OPTION
  *
  **/
function _OPTION(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag OPTION
   * @package : Static Procedural
   * @method  : Html::_OPTION($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   	
  $Html = NEW MergeBox();

  return method_exists($Html, '_OPTION') ?
  
   $Html->_OPTION(
    
    $attr, 
    $id, 
    $class
   
  ) : PERFORM($request->erorrMessage());  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OPTION CLOSE TAG noHTML  
  * Inline Heading tag OPTION
  *
  **/
function xOPTION(

 string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xOPTION') ? 
  
   $Html->xOPTION($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIGURE OPEN TAG noHTML  
  * Inline Heading tag FIGURE
  *
  **/
function _FIGURE(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag FIGURE
   * @package : Static Procedural
   * @method  : Html::_FIGURE($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_FIGURE') ? 
  
   $Html->_FIGURE(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIGURE CLOSE TAG noHTML  
  * Inline Heading tag FIGURE
  *
  **/
function xFIGURE(

  string $label = NULL

 )
 {
  
  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xFIGURE') ?
  
   $Html->xFIGURE($label) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIGCAPTION OPEN TAG noHTML  
  * Inline Heading tag FIGCAPTION
  *
  **/
function _FIGCAPTION(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag FIGCAPTION
   * @package : Static Procedural
   * @method  : Html::_FIGCAPTION($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_FIGCAPTION') ?
  
   $Html->_FIGCAPTION(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIGCAPTION CLOSE TAG noHTML  
  * Inline Heading tag FIGCAPTION
  *
  **/
function xFIGCAPTION(

    $label = NULL

 )
 {
  
  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xFIGCAPTION') ?
  
   $Html->xFIGCAPTION($label) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML METER OPEN TAG noHTML  
  * Inline Heading tag METER
  *
  **/
function _METER(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag METER
   * @package : Static Procedural
   * @method  : Html::_METER($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_METER') ? 
  
   $Html->_METER(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML METER CLOSE TAG noHTML  
  * Inline Heading tag METER
  *
  **/
function xMETER(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xMETER') ?
   
  $Html->xMETER($label) : PERFORM( $request->erorrMessage() );  	

}


/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OBJECT OPEN TAG noHTML  
  * Inline Heading tag OBJECT
  *
  **/
function _OBJECT(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag OBJECT
   * @package : Static Procedural
   * @method  : Html::_OBJECT($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_OBJECT') ? 
  
   $Html->_OBJECT(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OBJECT CLOSE TAG noHTML  
  * Inline Heading tag OBJECT
  *
  **/
function xOBJECT(

 string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xOBJECT') ? 
  
   $Html->xOBJECT($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OPTGROUP OPEN TAG noHTML  
  * Inline Heading tag OPTGROUP
  *
  **/
function _OPTGROUP(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag OPTGROUP
   * @package : Static Procedural
   * @method  : Html::_OPTGROUP($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_OPTGROUP') ? 
  
  $Html->_OPTGROUP(
    
    $attr, 
    $id, 
    $class
  
 ) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OPTGROUP CLOSE TAG noHTML  
  * Inline Heading tag OPTGROUP
  *
  **/
function xOPTGROUP(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xOPTGROUP') ? 
  
  $Html->xOPTGROUP($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OUTPUT OPEN TAG noHTML  
  * Inline Heading tag OUTPUT
  *
  **/
function _OUTPUT(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag OUTPUT
   * @package : Static Procedural
   * @method  : Html::_OUTPUT($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox();

  return method_exists($Html, '_OUTPUT') ?
  
  $Html->_OUTPUT(
    
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );   	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OUTPUT CLOSE TAG noHTML  
  * Inline Heading tag OUTPUT
  *
  **/
function xOUTPUT(

 string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xOUTPUT') ?
  
   $Html->xOUTPUT($label) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PROGRESS OPEN TAG noHTML  
  * Inline Heading tag PROGRESS
  *
  **/
function _PROGRESS(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag PROGRESS
   * @package : Static Procedural
   * @method  : Html::_PROGRESS($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_PROGRESS') ?
  
    $Html->_PROGRESS(
      
      $attr, 
      $id, 
      $class
  
  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PROGRESS CLOSE TAG noHTML  
  * Inline Heading tag PROGRESS
  *
  **/
function xPROGRESS(

  string  $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xPROGRESS') ? 
  
  $Html->xPROGRESS($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SVG OPEN TAG noHTML  
  * Inline Heading tag SVG
  *
  **/
function _SVG(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag SVG
   * @package : Static Procedural
   * @method  : Html::_SVG($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_SVG') ?
  
  $Html->_SVG(
   
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SVG CLOSE TAG noHTML  
  * Inline Heading tag SVG
  *
  **/
function xSVG(

 string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xSVG') ? 
  
   $Html->xSVG($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEMPLATE OPEN TAG noHTML  
  * Inline Heading tag TEMPLATE
  *
  **/
function _TEMPLATE(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 ) 
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag TEMPLATE
   * @package : Static Procedural
   * @method  : Html::_TEMPLATE($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_TEMPLATE') ? 
  
  $Html->_TEMPLATE(
    
    $attr, 
    $id, 
    $class
 
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TEMPLATE CLOSE TAG noHTML  
  * Inline Heading tag TEMPLATE
  *
  **/
function xTEMPLATE(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xTEMPLATE') ? 
  
    $Html->xTEMPLATE($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML UL OPEN TAG noHTML  
  * Inline Heading tag UL
  *
  **/
function _UL(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag UL
   * @package : Static Procedural
   * @method  : Html::_UL($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_UL') ?
  
   $Html->_UL(
     
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML UL CLOSE TAG noHTML  
  * Inline Heading tag UL
  *
  **/
function xUL(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xUL') ?
  
   $Html->xUL($label) : PERFORM( $request->erorrMessage() );
	
}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OL OPEN TAG noHTML  
  * Inline Heading tag OL
  *
  **/
function _OL(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag OL
   * @package : Static Procedural
   * @method  : Html::_OL($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/	
  $Html = NEW MergeBox();

  return method_exists($Html, '_OL') ? 
  
    $Html->_OL(
       
      $attr, 
      $id, 
      $class
      
  ) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML OL CLOSE TAG noHTML  
  * Inline Heading tag OL
  *
  **/
function xOL(  

  string $label = NULL

 )
 {
  
  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xOL') ? 
  
   $Html->xOL($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LI OPEN TAG noHTML  
  * Inline Heading tag LI
  *
  **/
function _LI(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag LI
   * @package : Static Procedural
   * @method  : Html::_LI($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_LI') ? 
  
    $Html->_LI(
      
      $attr, 
      $id, 
      $class
      
  ) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LI CLOSE TAG noHTML  
  * Inline Heading tag LI
  *
  **/
function xLI(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xLI') ?
  
   $Html->xLI($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TABLE OPEN TAG noHTML  
  * Inline Heading tag TABLE
  *
  **/
function _TABLE(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag TABLE
   * @package : Static Procedural
   * @method  : Html::_TABLE($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_TABLE') ? 
  
   $Html->_TABLE(
     
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TABLE CLOSE TAG noHTML  
  * Inline Heading tag TABLE
  *
  **/
function xTABLE(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xTABLE') ? 
  
    $Html->xTABLE($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TR OPEN TAG noHTML  
  * Inline Heading tag TR
  *
  **/
function _TR(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

  )
  {

    global $request;

  /**
   *
   *
   * @package : Merge Heading tag TR
   * @package : Static Procedural
   * @method  : Html::_TR($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
 $Html = NEW MergeBox(); 

 return method_exists($Html, '_TR') ? 
 
  $Html->_TR(
    
    $attr, 
    $id, 
    $class
    
 ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TR CLOSE TAG noHTML  
  * Inline Heading tag TR
  *
  **/
function xTR(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xTR') ? 
  
   $Html->xTR($label) : PERFORM( $request->erorrMessage() );  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TD OPEN TAG noHTML  
  * Inline Heading tag TD
  *
  **/
function _TD(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

 /**
   *
   *
   * @package : Merge Heading tag TD
   * @package : Static Procedural
   * @method  : Html::_TD($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_TD') ?
  
   $Html->_TD(
     
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TD CLOSE TAG noHTML  
  * Inline Heading tag TD
  *
  **/
function xTD(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox();
  return method_exists($Html, 'xTD') ?
  
   $Html->xTD($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TH OPEN TAG noHTML  
  * Inline Heading tag TH
  *
  **/
function _TH(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag TH
   * @package : Static Procedural
   * @method  : Html::_TH($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  
  $Html = NEW MergeBox();

  return method_exists($Html, '_TH') ? 
  
    $Html->_TH(
       
      $attr, 
      $id, 
      $class

  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TH CLOSE TAG noHTML  
  * Inline Heading tag TH
  *
  **/
function xTH(


  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 
  
  return method_exists($Html, 'xTH') ? 
  
    $Html->xTH($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LEGEND OPEN TAG noHTML  
  * Inline Heading tag LEGEND
  *
  **/
function _LEGEND(
   
   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag LEGEND
   * @package : Static Procedural
   * @method  : Html::_LEGEND($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   	
  $Html = NEW MergeBox();

  return method_exists($Html, '_LEGEND') ? 
  
   $Html->_LEGEND(
      
      $attr, 
      $id, 
      $class
   
   ) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML LEGEND CLOSE TAG noHTML  
  * Inline Heading tag LEGEND
  *
  **/
function xLEGEND(

 string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xLEGEND') ? 
  
   $Html->xLEGEND($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIELDSET OPEN TAG noHTML  
  * Inline Heading tag FIELDSET
  *
  **/
function _FIELDSET(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag H3
   * @package : Static Procedural
   * @method  : Html::_H3($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_FIELDSET') ? 
  
    $Html->_FIELDSET(
      
      $attr, 
      $id, 
      $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML FIELDSET CLOSE TAG noHTML  
  * Inline Heading tag FIELDSET
  *
  **/
function xFIELDSET(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xFIELDSET') ?
  
    $Html->xFIELDSET($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TBODY OPEN TAG noHTML  
  * Inline Heading tag TBODY
  *
  **/
function _TBODY(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag TBODY
   * @package : Static Procedural
   * @method  : Html::_TBODY($value, $attr=null, $id, $class, $label, $assoc);
   * 
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_TBODY') ? 
  
   $Html->_TBODY(
      
     $attr, 
     $id, 
     $class
  
  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TBODY CLOSE TAG noHTML  
  * Inline Heading tag TBODY
  *
  **/
function xTBODY(

  string $label = NULL

)
{
  
  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xTBODY') ?
  
   $Html->xTBODY($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TFOOT OPEN TAG noHTML  
  * Inline Heading tag TFOOT
  *
  **/
function _TFOOT(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag TFOOT
   * @package : Static Procedural
   * @method  : Html::_TFOOT($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_TFOOT') ?
  
   $Html->_TFOOT(
     
    $attr, 
    $id, 
    $class
 
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TFOOT CLOSE TAG noHTML  
  * Inline Heading tag TFOOT
  *
  **/
function xTFOOT(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xTFOOT') ?
  
   $Html->xTFOOT($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML THEAD OPEN TAG noHTML  
  * Inline Heading tag THEAD
  *
  **/
function _THEAD(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag THEAD
   * @package : Static Procedural
   * @method  : Html::_THEAD($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_THEAD') ?
  
   $Html->_THEAD(
     
    $attr, 
    $id, 
    $class
 
  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML THEAD CLOSE TAG noHTML  
  * Inline Heading tag THEAD
  *
  **/
function xTHEAD(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xTHEAD') ? 
  
   $Html->xTHEAD($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SPAN OPEN TAG noHTML  
  * Inline Heading tag SPAN
  *
  **/
function _SPAN(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

  )
  {

    global $request;

  /**
   *
   *
   * @package : Merge Heading tag SPAN
   * @package : Static Procedural
   * @method  : Html::_SPAN($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_SPAN') ? 
  
    $Html->_SPAN(
      
      $attr, 
      $id, 
      $class
  
   ) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SPAN CLOSE TAG noHTML  
  * Inline Heading tag SPAN
  *
  **/
function xSPAN(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xSPAN') ? 
  
   $Html->xSPAN($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML EM OPEN TAG noHTML  
  * Inline Heading tag EM
  *
  **/
function _EM(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag EM
   * @package : Static Procedural
   * @method  : Html::_EM($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_EM') ? 
  
    $Html->_EM(
      
      $attr, 
      $id, 
      $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML EM CLOSE TAG noHTML  
  * Inline Heading tag EM
  *
  **/
function xEM(

   string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xEM') ? 
  
    $Html->xEM($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SMALL OPEN TAG noHTML  
  * Inline Heading tag SMALL
  *
  **/
function _SMALL(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag SMALL
   * @package : Static Procedural
   * @method  : Html::_SMALL($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_SMALL') ? 
  
   $Html->_SMALL(
     
    $attr, 
    $id, 
    $class
  
  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SMALL CLOSE TAG noHTML  
  * Inline Heading tag SMALL
  *
  **/
function xSMALL(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xSMALL') ? 
   
   $Html->xSMALL($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML STRIKE OPEN TAG noHTML  
  * Inline Heading tag STRIKE
  *
  **/
function _STRIKE(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {
 
  global $request;

  /**
   *
   *
   * @package : Merge Heading tag STRIKE
   * @package : Static Procedural
   * @method  : Html::_STRIKE($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_STRIKE') ? 
  
    $Html->_STRIKE(
      
      $attr, 
      $id, 
      $class
  
  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML STRIKE CLOSE TAG noHTML  
  * Inline Heading tag STRIKE
  *
  **/
function xSTRIKE(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xSTRIKE') ? 
  
    $Html->xSTRIKE($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MARQUEE OPEN TAG noHTML  
  * Inline Heading tag MARQUEE
  *
  **/
function _MARQUEE(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag MARQUEE
   * @package : Static Procedural
   * @method  : Html::_MARQUEE($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox();

  return method_exists($Html, '_MARQUEE') ?
  
   $Html->_MARQUEE(
       
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MARQUEE CLOSE TAG noHTML  
  * Inline Heading tag MARQUEE
  *
  **/
function xMARQUEE(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xMARQUEE') ? 
   
   $Html->xMARQUEE($label) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CENTER OPEN TAG noHTML  
  * Inline Heading tag CENTER
  *
  **/
function _CENTER(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag CENTER
   * @package : Static Procedural
   * @method  : Html::_CENTER($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/	
  $Html = NEW MergeBox();

  return method_exists($Html, '_CENTER') ? 
  
   $Html->_CENTER(
     
    $attr, 
    $id, 
    $class
 
 ) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CENTER CLOSE TAG noHTML  
  * Inline Heading tag CENTER
  *
  **/
function xCENTER(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xCENTER') ? 
  
   $Html->xCENTER($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML ABBR OPEN TAG noHTML  
  * Inline Heading tag ABBR
  *
  **/
function _ABBR(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag ABBR
   * @package : Static Procedural
   * @method  : Html::_ABBR($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
 $Html = NEW MergeBox();

 return method_exists($Html, '_ABBR') ?
 
  $Html->_ABBR(
    
     $attr, 
     $id, 
     $class
  
  ) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML ABBR CLOSE TAG noHTML  
  * Inline Heading tag ABBR
  *
  **/
function xABBR(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xABBR') ? 
  
   $Html->xABBR($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MAP OPEN TAG noHTML  
  * Inline Heading tag MAP
  *
  **/
function _MAP(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag MAP
   * @package : Static Procedural
   * @method  : Html::_MAP($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox();

  return method_exists($Html, '_MAP') ? 
    
   $Html->_MAP(
     
     $attr, 
     $id, 
     $class
     
  ) : PERFORM( $request->erorrMessage() );  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MAP CLOSE TAG noHTML  
  * Inline Heading tag MAP
  *
  **/
function xMAP(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xMAP') ? 
   
   $Html->xMAP($label) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CANVAS OPEN TAG noHTML  
  * Inline Heading tag CANVAS
  *
  **/
function _CANVAS(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag CANVAS
   * @package : Static Procedural
   * @method  : Html::_CANVAS($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_CANVAS') ? 
  
    $Html->_CANVAS(
      
        $attr, 
        $id, 
        $class
    
   ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CANVAS CLOSE TAG noHTML  
  * Inline Heading tag CANVAS
  *
  **/
function xCANVAS(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xCANVAS') ? 
  
   $Html->xCANVAS($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CITE OPEN TAG noHTML  
  * Inline Heading tag CITE
  *
  **/
function _CITE(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag CITE
   * @package : Static Procedural
   * @method  : Html::_CITE($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_CITE') ? 
  
   $Html->_CITE(
     
     $attr, 
     $id, 
     $class
     
  ) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML CITE CLOSE TAG noHTML  
  * Inline Heading tag CITE
  *
  **/
function xCITE(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xCITE') ? 
    
   $Html->xCITE($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DATA OPEN TAG noHTML  
  * Inline Heading tag DATA
  *
  **/
function _DATA(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag DATA
   * @package : Static Procedural
   * @method  : Html::_DATA($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_DATA') ? 
  
    $Html->_DATA(
      
      $attr, 
      $id, 
      $class
   
   ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DATA CLOSE TAG noHTML  
  * Inline Heading tag DATA
  *
  **/
function xDATA(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 
  return method_exists($Html, 'xDATA') ? 
  
   $Html->xDATA($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DL OPEN TAG noHTML  
  * Inline Heading tag DL
  *
  **/
function _DL(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag DL
   * @package : Static Procedural
   * @method  : Html::_DL($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   
  $Html = NEW MergeBox();

  return method_exists($Html, '_DL') ?
  
   $Html->_DL(
     
     $attr, 
     $id, 
     $class
  
  ) : PERFORM( $request->erorrMessage() ); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DL CLOSE TAG noHTML  
  * Inline Heading tag DL
  *
  **/
function xDL(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xDL') ? 
  
   $Html->xDL($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DT OPEN TAG noHTML  
  * Inline Heading tag DT
  *
  **/
function _DT(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag DT
   * @package : Static Procedural
   * @method  : Html::_DT($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox();

  return method_exists($Html, '_DT') ?
  
   $Html->_DT(
     
     $attr, 
     $id, 
     $class
   
 ) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DT CLOSE TAG noHTML  
  * Inline Heading tag DT
  *
  **/
function xDT(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xDT') ? 
  
   $Html->xDT($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DD OPEN TAG noHTML  
  * Inline Heading tag DD
  *
  **/
function _DD(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag DD
   * @package : Static Procedural
   * @method  : Html::_DD($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_DD') ?
  
   $Html->_DD(
     
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DD CLOSE TAG noHTML  
  * Inline Heading tag DD
  *
  **/
function xDD(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xDD') ? 
  
   $Html->xDD($label) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DFN OPEN TAG noHTML  
  * Inline Heading tag DFN
  *
  **/
function _DFN(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag DFN
   * @package : Static Procedural
   * @method  : Html::_DFN($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_DFN') ? 
  
   $Html->_DFN(
     
    $attr, 
    $id, 
    $class
   
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DFN CLOSE TAG noHTML  
  * Inline Heading tag DFN
  *
  **/
function xDFN(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xDFN') ? 
  
   $Html->xDFN($label) : PERFORM( $request->erorrMessage() );  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML INS OPEN TAG noHTML  
  * Inline Heading tag INS
  *
  **/
function _INS(
 
      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag INS
   * @package : Static Procedural
   * @method  : Html::_INS($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox();

  return method_exists($Html, '_INS') ?
  
   $Html->_INS(
     
    $attr, 
    $id, 
    $class
 
 ) : PERFORM( $request->erorrMessage() ); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML INS CLOSE TAG noHTML  
  * Inline Heading tag INS
  *
  **/
function xINS(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xINS') ?
  
   $Html->xINS($label) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DEL OPEN TAG noHTML  
  * Inline Heading tag DEL
  *
  **/
function _DEL(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag DEL
   * @package : Static Procedural
   * @method  : Html::_DEL($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_DEL') ? 
  
   $Html->_DEL(
     
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML DEL CLOSE TAG noHTML  
  * Inline Heading tag DEL
  *
  **/
function xDEL(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xDEL') ? 
  
    $Html->xDEL($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML KBD OPEN TAG noHTML  
  * Inline Heading tag KBD
  *
  **/
function _KBD(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

 /**
   *
   *
   * @package : Merge Heading tag KBD
   * @package : Static Procedural
   * @method  : Html::_KBD($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_KBD') ?
  
   $Html->_KBD(
  
     $attr, 
     $id, 
     $class
     
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML KBD CLOSE TAG noHTML  
  * Inline Heading tag KBD
  *
  **/
function xKBD(

   string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xKBD') ?
  
   $Html->xKBD($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MARK OPEN TAG noHTML  
  * Inline Heading tag MARK
  *
  **/
function _MARK(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

 /**
   *
   *
   * @package : Merge Heading tag MARK
   * @package : Static Procedural
   * @method  : Html::_MARK($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox();

  return method_exists($Html, '_MARK') ? 
  
   $Html->_MARK(
     
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML MARK CLOSE TAG noHTML  
  * Inline Heading tag MARK
  *
  **/
function xMARK(

 string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xMARK') ? 
  
   $Html->xMARK($label) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PRE OPEN TAG noHTML  
  * Inline Heading tag PRE
  *
  **/
function _PRE(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag PRE
   * @package : Static Procedural
   * @method  : Html::_PRE($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_PRE') ?
  
   $Html->_PRE(
     
    $attr, 
    $id, 
    $class
    
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML PRE CLOSE TAG noHTML  
  * Inline Heading tag PRE
  *
  **/
function xPRE(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xPRE') ?
  
   $Html->xPRE($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML RT OPEN TAG noHTML  
  * Inline Heading tag RT
  *
  **/
function _RT(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

 /**
   *
   *
   * @package : Merge Heading tag RT
   * @package : Static Procedural
   * @method  : Html::_RT($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_RT') ? 
  
   $Html->_RT(
     
     $attr, 
     $id, 
     $class
     
  ) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML RT CLOSE TAG noHTML  
  * Inline Heading tag RT
  *
  **/
function xRT(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xRT') ? 
  
   $Html->xRT($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML RP OPEN TAG noHTML  
  * Inline Heading tag RP
  *
  **/
function _RP(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

  )
  {

    global $request;

  /**
   *
   *
   * @package : Merge Heading tag RP
   * @package : Static Procedural
   * @method  : Html::_RP($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/	
  $Html = NEW MergeBox();

  return method_exists($Html, '_RP') ?
  
   $Html->_RP(
     
     $attr, 
     $id, 
     $class
   
  ) : PERFORM( $request->erorrMessage() ); 	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML RP CLOSE TAG noHTML  
  * Inline Heading tag RP
  *
  **/
function xRP(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xRP') ?
  
   $Html->xRP($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SAMP OPEN TAG noHTML  
  * Inline Heading tag SAMP
  *
  **/
function _SAMP(
 
      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag SAMP
   * @package : Static Procedural
   * @method  : Html::_SAMP($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_SAMP') ? 
  
    $Html->_SAMP(
     
      $attr, 
      $id, 
      $class
      
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SAMP CLOSE TAG noHTML  
  * Inline Heading tag SAMP
  *
  **/
function xSAMP(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xSAMP') ? 
  
   $Html->xSAMP($label) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML STRONG OPEN TAG noHTML  
  * Inline Heading tag STRONG
  *
  **/
function _STRONG(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag STRONG
   * @package : Static Procedural
   * @method  : Html::_STRONG($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_STRONG') ?
  
   $Html->_STRONG(
     
     $attr, 
     $id, 
     $class
     
   ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML STRONG CLOSE TAG noHTML  
  * Inline Heading tag STRONG
  *
  **/
function xSTRONG(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xSTRONG') ? 
  
   $Html->xSTRONG($label) : PERFORM( $request->erorrMessage() );  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUB OPEN TAG noHTML  
  * Inline Heading tag SUB
  *
  **/
function _SUB(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

  )
  {

    global $request;

  /**
   *
   * 
   * @package : Merge Heading tag SUB
   * @package : Static Procedural
   * @method  : Html::_SUB($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
  $Html = NEW MergeBox();

  return method_exists($Html, '_SUB') ? 
  
    $Html->_SUB(
      
      $attr, 
      $id, 
      $class
  
  ) : PERFORM( $request->erorrMessage() );  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUB CLOSE TAG noHTML  
  * Inline Heading tag SUB
  *
  **/
function xSUB(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xSUB') ? 
  
   $Html->xSUB($label) : PERFORM( $request->erorrMessage() );  	
}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUP OPEN TAG noHTML  
  * Inline Heading tag SUP
  *
  **/
function _SUP(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag SUP
   * @package : Static Procedural
   * @method  : Html::_SUP($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_SUP') ? 
    
    $Html->_SUP(
     
     $attr, 
     $id, 
     $class
   
   ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML SUP CLOSE TAG noHTML  
  * Inline Heading tag SUP
  *
  **/
function xSUP(

  string $label = NULL

 )
 {
  
  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xSUP') ? 
  
   $Html->xSUP($label) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML WBR OPEN TAG noHTML  
  * Inline Heading tag WBR
  *
  **/
function _WBR(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag WBR
   * @package : Static Procedural
   * @method  : Html::_WBR($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/   
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_WBR') ?
    
  $Html->_WBR(
    
    $attr, 
    $id, 
    $class
      
  ) : PERFORM( $request->erorrMessage() ); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML WBR CLOSE TAG noHTML  
  * Inline Heading tag WBR
  *
  **/
function xWBR(

   string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 
  
  return method_exists($Html, 'xWBR') ? 
    
    $Html->xWBR($label) : PERFORM( $request->erorrMessage() );

}


/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML WBR OPEN TAG noHTML  
  * Inline Heading tag WBR
  *
  **/
  function _CODE(

    array        $attr  =  null
   ,string       $id    =  null
   ,string       $class =  null

)
{

  global $request;

/**
 *
 *
 * @package : Merge Heading tag WBR
 * @package : Static Procedural
 * @method  : Html::_WBR($value, $attr=null, $id, $class, $label, $assoc);
 *
 *
 **/   
$Html = NEW MergeBox(); 

return method_exists($Html, '_CODE') ?
  
$Html->_CODE(
  
  $attr, 
  $id, 
  $class
    
) : PERFORM( $request->erorrMessage() ); 

}

/**
*
* @since 20.19.2020
* @category PHPHtml-Merge
* @ Method Defined HTML WBR CLOSE TAG noHTML  
* Inline Heading tag WBR
*
**/
function xCODE(

 string $label = NULL

)
{

global $request;

$Html = NEW MergeBox(); 

return method_exists($Html, 'xCODE') ? 
  
  $Html->xCODE($label) : PERFORM( $request->erorrMessage() );

}


/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML HEAD OPEN TAG noHTML  
  * Inline Heading tag HEAD
  *
  **/
function _HEAD(

   array        $attr  =  null
  ,string       $id    =  null
  ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag HEAD
   * @package : Static Procedural
   * @method  : Html::_HEAD($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_HEAD') ? 
     
    $Html->_HEAD(
      
      $attr, 
      $id, 
      $class
  
  ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML HEAD CLOSE TAG noHTML  
  * Inline Heading tag HEAD
  *
  **/
function xHEAD(

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xHEAD') ? 
  
    $Html->xHEAD($label) : PERFORM( $request->erorrMessage() );  

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TITLE OPEN TAG noHTML  
  * Inline Heading tag TITLE
  *
  **/
function _TITLE(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null 

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag TITLE
   * @package : Static Procedural
   * @method  : Html::_TITLE($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
  $Html = NEW MergeBox(); 

  return method_exists($Html, '_TITLE') ?
  
   $Html->_TITLE(
     
     $attr, 
     $id, 
     $class
     
  ) : PERFORM( $request->erorrMessage() );  	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML TITLE CLOSE TAG noHTML  
  * Inline Heading tag TITLE
  *
  **/
function xTITLE(  

   string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox();

  return method_exists($Html, 'xTITLE') ? 
  
   $Html->xTITLE($label) : PERFORM( $request->erorrMessage() );    

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BODY OPEN TAG noHTML  
  * Inline Heading tag BODY
  *
  **/
function _BODY(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag BODY
   * @package : Static Procedural
   * @method  : Html::_BODY($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/ 	
 $Html = NEW MergeBox();

 return method_exists($Html, '_BODY') ? 
 
  $Html->_BODY(
    
    $attr, 
    $id, 
    $class
 
 ) : PERFORM( $request->erorrMessage() );	

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML BODY CLOSE TAG noHTML  
  * Inline Heading tag BODY
  *
  **/
function xBODY(  

  string $label = NULL

 )
 {

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xBODY') ? 
  
   $Html->xBODY($label) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML HTML OPEN TAG noHTML  
  * Inline Heading tag HTML
  *
  **/
function _HTML(

      array        $attr  =  null
     ,string       $id    =  null
     ,string       $class =  null

 )
 {

  global $request;

  /**
   *
   *
   * @package : Merge Heading tag HTML
   * @package : Static Procedural
   * @method  : Html::_HTML($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   **/  	
 $Html = NEW MergeBox(); 

 return method_exists($Html, '_noHTML') ? 
 
   $Html->_noHTML(
     
     $attr, 
     $id, 
     $class
     
   ) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined HTML HTML CLOSE TAG noHTML  
  * Inline Heading tag HTML
  *
  **/
function xHTML(

  string $label = NULL

)
{

  global $request;

  $Html = NEW MergeBox(); 

  return method_exists($Html, 'xnoHTML') ? 
  
    $Html->xnoHTML($label) : PERFORM( $request->erorrMessage() );	

}














