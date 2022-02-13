<?php 

USE \PHPWine\VanillaFlavour\optimizer\Html AS MergeElements; 
USE \PHPWine\VanillaFlavour\system\Request;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.2.0.4 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.2.0.4 free software: you can redistribute it and/or modify.
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
 * @version   v1.2.0.4 
 * @since     02.13.2022
 *
 * @method __HTML('my_input','my_input','INPUT');
 * @method __HTML('my_track','my_track','track');
 * @method __HTML('my_circle','my_circle','circle');
 * @method __HTML('my_param','my_param','param');
 * @method __HTML('my_meta','my_meta','meta');
 * @method __HTML('my_link','my_link','link');
 * @method __HTML('my_img','my_img','img');
 * @method __HTML('my_embed','my_embed','embed');
 * @method __HTML('my_option','my_option','option');
 * @method __HTML('my_col','my_col','col');
 * @method __HTML('my_base','my_base','base');
 * @method __HTML('my_aside','my_aside','aside');
 * @method __HTML('my_area','my_area','area');
 * 
 * @method echo _xHTML('H1');
 * @method echo _xHTML('H2');
 * @method echo _xHTML('H3');
 * @method echo _xHTML('H4');
 * @method echo _xHTML('H5');
 * @method echo _xHTML('H6');
 * @method echo _xHTML('H1');
 * @method echo _xHTML('BUTTON');
 * @method echo _xHTML('A');
 * @method echo _xHTML('IFRAME');
 * @method echo _xHTML('MAIN');
 * @method echo _xHTML('NAV');
 * @method echo _xHTML('SELECT');
 * @method echo _xHTML('FORM');
 * @method echo _xHTML('PICTURE');
 * @method echo _xHTML('SECTION');
 * @method echo _xHTML('TEXTAREA');
 * @method echo _xHTML('AUDIO');
 * @method echo _xHTML('VIDEO');
 * @method echo _xHTML('ADDRESS');
 * @method echo _xHTML('COLGROUP');
 * @method echo _xHTML('BDI');
 * @method echo _xHTML('BDO');
 * @method echo _xHTML('CAPTION');
 * @method echo _xHTML('LABEL');
 * @method echo _xHTML('DATALIST');
 * @method echo _xHTML('DETAILS');
 * @method echo _xHTML('SUMMARY');
 * @method echo _xHTML('DIALOG');
 * @method echo _xHTML('OPTION');
 * @method echo _xHTML('FIGURE');
 * @method echo _xHTML('FIGCAPTION');
 * @method echo _xHTML('METER');
 * @method echo _xHTML('OBJECT');
 * @method echo _xHTML('OPTGROUP');
 * @method echo _xHTML('OUTPUT');
 * @method echo _xHTML('PROGRESS');
 * @method echo _xHTML('TEMPLATE');
 * @method echo _xHTML('TIME');
 * @method echo _xHTML('VAR');
 * @method echo _xHTML('UL');
 * @method echo _xHTML('OL');
 * @method echo _xHTML('LI');
 * @method echo _xHTML('TABLE');
 * @method echo _xHTML('TR');
 * @method echo _xHTML('TD');
 * @method echo _xHTML('TH');
 * @method echo _xHTML('LEGEND');
 * @method echo _xHTML('FIELDSET');
 * @method echo _xHTML('TBODY');
 * @method echo _xHTML('TFOOT');
 * @method echo _xHTML('THEAD');
 * @method echo _xHTML('SPAN');
 * @method echo _xHTML('EM');
 * @method echo _xHTML('B');
 * @method echo _xHTML('I');
 * @method echo _xHTML('SMALL');
 * @method echo _xHTML('MARQUEE');
 * @method echo _xHTML('CENTER');
 * @method echo _xHTML('CODE');
 * @method echo _xHTML('ABBR');
 * @method echo _xHTML('MAP');
 * @method echo _xHTML('CANVAS');
 * @method echo _xHTML('CITE');
 * @method echo _xHTML('DATA');
 * @method echo _xHTML('DL');
 * @method echo _xHTML('DT');
 * @method echo _xHTML('DD');
 * @method echo _xHTML('INS');
 * @method echo _xHTML('DEL');
 * @method echo _xHTML('KBD');
 * @method echo _xHTML('MARK');
 * @method echo _xHTML('PRE');
 * @method echo _xHTML('RT');
 * @method echo _xHTML('RP');
 * @method echo _xHTML('S');
 * @method echo _xHTML('SAMP');
 * @method echo _xHTML('STRONG');
 * @method echo _xHTML('SUB');
 * @method echo _xHTML('SUP');
 * @method echo _xHTML('WBR');
 * @method echo _xHTML('Q');
 * @method echo _xHTML('HEAD');
 * @method echo _xHTML('TITLE');
 * @method echo _xHTML('BODY');
 * @method echo _xHTML('HTML');
 * @method echo _xHTML('BLOCKQUOTE');
 * 
 * ASSOCIATED OPEN AND CLOSED TAG HTML
 * @method echo _MERGE('id','h1');
 * @method echo xMERGE('h1');
 * @method echo _MERGE('id','h2');
 * @method echo xMERGE('h2');
 * @method echo _MERGE('id','h3');
 * @method echo xMERGE('h3');
 * @method echo _MERGE('id','h4');
 * @method echo xMERGE('h4');
 * @method echo _MERGE('id','h5');
 * @method echo xMERGE('h5');
 * @method echo _MERGE('id','h6');
 * @method echo xMERGE('h6');
 * @method echo _MERGE('id','div');
 * @method echo xMERGE('div');
 * @method echo _MERGE('id','p');
 * @method echo xMERGE('p');
 * @method echo _MERGE('id','button');
 * @method echo xMERGE('button');
 * @method echo _MERGE('id','a');
 * @method echo xMERGE('a');
 * @method echo _MERGE('id','iframe');
 * @method echo xMERGE('iframe');
 * @method echo _MERGE('id','main');
 * @method echo xMERGE('main');
 * @method echo _MERGE('id','nav');
 * @method echo xMERGE('nav');
 * @method echo _MERGE('id','select');
 * @method echo xMERGE('select');
 * @method echo _MERGE('id','form');
 * @method echo xMERGE('form');
 * @method echo _MERGE('id','picture');
 * @method echo xMERGE('picture');
 * @method echo _MERGE('id','section');
 * @method echo xMERGE('section');
 * @method echo _MERGE('id','textarea');
 * @method echo xMERGE('textarea');
 * @method echo _MERGE('id','audio');
 * @method echo xMERGE('audio');
 * @method echo _MERGE('id','video');
 * @method echo xMERGE('video');
 * @method echo _MERGE('id','address');
 * @method echo xMERGE('address');
 * @method echo _MERGE('id','colgroup');
 * @method echo xMERGE('colgroup');
 * @method echo _MERGE('id','bdi');
 * @method echo xMERGE('bdi');
 * @method echo _MERGE('id','bdo');
 * @method echo xMERGE('bdo');
 * @method echo _MERGE('id','blockquote');
 * @method echo xMERGE('blockquote');
 * @method echo _MERGE('id','caption');
 * @method echo xMERGE('caption');
 * @method echo _MERGE('id','label');
 * @method echo xMERGE('label');
 * @method echo _MERGE('id','datalist');
 * @method echo xMERGE('datalist');
 * @method echo _MERGE('id','details');
 * @method echo xMERGE('details');
 * @method echo _MERGE('id','summary');
 * @method echo xMERGE('summary');
 * @method echo _MERGE('id','dialog');
 * @method echo xMERGE('dialog');
 * @method echo _MERGE('id','option');
 * @method echo xMERGE('option');
 * @method echo _MERGE('id','figure');
 * @method echo xMERGE('figure');
 * @method echo _MERGE('id','figcaption');
 * @method echo xMERGE('figcaption');
 * @method echo _MERGE('id','meter');
 * @method echo xMERGE('meter');
 * @method echo _MERGE('id','object');
 * @method echo xMERGE('object');
 * @method echo _MERGE('id','optgroup');
 * @method echo xMERGE('optgroup');
 * @method echo _MERGE('id','output');
 * @method echo xMERGE('output');
 * @method echo _MERGE('id','progress');
 * @method echo xMERGE('progress');
 * @method echo _MERGE('id','template');
 * @method echo xMERGE('template'); 
 * @method echo _MERGE('id','time');
 * @method echo xMERGE('time');
 * @method echo _MERGE('id','var');
 * @method echo xMERGE('var');
 * @method echo _MERGE('id','ul');
 * @method echo xMERGE('ul');
 * @method echo _MERGE('id','ol');
 * @method echo xMERGE('ol');
 * @method echo _MERGE('id','li');
 * @method echo xMERGE('li');
 * @method echo _MERGE('id','table');
 * @method echo xMERGE('table');
 * @method echo _MERGE('id','tr');
 * @method echo xMERGE('tr');
 * @method echo _MERGE('id','td');
 * @method echo xMERGE('td');
 * @method echo _MERGE('id','th');
 * @method echo xMERGE('th');
 * @method echo _MERGE('id','legend');
 * @method echo xMERGE('legend');
 * @method echo _MERGE('id','fieldset');
 * @method echo xMERGE('fieldset');
 * @method echo _MERGE('id','tbody');
 * @method echo xMERGE('tbody');
 * @method echo _MERGE('id','tfoot');
 * @method echo xMERGE('tfoot');
 * @method echo _MERGE('id','thead');
 * @method echo xMERGE('thead');
 * @method echo _MERGE('id','span');
 * @method echo xMERGE('span');
 * @method echo _MERGE('id','small');
 * @method echo xMERGE('small');
 * @method echo _MERGE('id','marquee');
 * @method echo xMERGE('marquee');
 * @method echo _MERGE('id','center');
 * @method echo xMERGE('center');
 * @method echo _MERGE('id','code');
 * @method echo xMERGE('code');
 * @method echo _MERGE('id','abbr');
 * @method echo xMERGE('abbr');
 * @method echo _MERGE('id','map');
 * @method echo xMERGE('map');
 * @method echo _MERGE('id','canvas');
 * @method echo xMERGE('canvas');
 * @method echo _MERGE('id','cite');
 * @method echo xMERGE('cite');
 * @method echo _MERGE('id','data');
 * @method echo xMERGE('data');
 * @method echo _MERGE('id','dl');
 * @method echo xMERGE('dl');
 * @method echo _MERGE('id','dt');
 * @method echo xMERGE('dt');
 * @method echo _MERGE('id','dd');
 * @method echo xMERGE('dd');
 * @method echo _MERGE('id','dfn');
 * @method echo xMERGE('dfn');
 * @method echo _MERGE('id','ins');
 * @method echo xMERGE('ins');
 * @method echo _MERGE('id','del');
 * @method echo xMERGE('del');
 * @method echo _MERGE('id','mark');
 * @method echo xMERGE('mark');
 * @method echo _MERGE('id','pre');
 * @method echo xMERGE('pre');
 * @method echo _MERGE('id','rt');
 * @method echo xMERGE('rt');
 * @method echo _MERGE('id','rp');
 * @method echo xMERGE('rp');
 * @method echo _MERGE('id','s');
 * @method echo xMERGE('s');    
 * @method echo _MERGE('id','samp');
 * @method echo xMERGE('samp');   
 * @method echo _MERGE('id','strong');
 * @method echo xMERGE('strong');
 * @method echo _MERGE('id','sub');
 * @method echo xMERGE('sub'); 
 * @method echo _MERGE('id','sup');
 * @method echo xMERGE('sup');
 * @method echo _MERGE('id','wbr');
 * @method echo xMERGE('wbr');
 * @method echo _MERGE('id','q');
 * @method echo xMERGE('q');
 * @method echo _MERGE('id','head');
 * @method echo xMERGE('head');
 * @method echo _MERGE('id','title');
 * @method echo xMERGE('title');
 * @method echo _MERGE('id','body');
 * @method echo xMERGE('body');                                             
 * 
 * 
 */

 $request = NEW Request();


/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined OPTIONAL ASSOCIATED ELEMENTS  
  * NONE CLOSING TAG INLINE HTML
  *
  **/
function __HTML(  


      string $id            =  null
     ,string $label         =  null
     ,string $elem          =  null
     ,array  $attr          =  null
     ,string $class         =  null
     ,string $assoc         =  null

)
{

  global $request;

  /**
   *
   *
   * @package : Merge OPTIONAL ASSOCIATED ELEMENTS 
   * @package : Static Procedural
   * @method  : Html::_ELEMENT($label, $elem, $attr=null, $id, $class, $assoc);
   *
   *
   **/ 
  $Html = NEW MergeElements();

  return method_exists($Html,'ELEMS') ? 
  
    $Html->ELEMS(
      
       $label, 
       $elem, 
       $attr, 
       $id, 
       $class, 
       $assoc
       
  ) : PERFORM( $request->erorrMessage() );

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined ASSOCIATED ELEMENTS  
  * WITH CLOSING TAG INLINE HTML
  *
  **/
function _xHTML(

      string        $id      =  null
     ,string        $elem    =  null
     ,array|string  $value   =  null
     ,array|string  $attr    =  null
     ,string        $class   =  null
     ,string        $label   =  null

)
{

  global $request;

  /**
   * @package : Merge ASSOCIATED ELEMENTS 
   * @package : Static Procedural
   * @method  : Html::ELEMENT($elem, $value, $attr=null, $id, $class, $label)
   *
   **/ 
  $Html = NEW MergeElements();

  return method_exists($Html,'ELEMENT') ? 
  
   $Html->ELEMENT(
     
    $elem, 
    $value, 
    $attr, 
    $id, 
    $class, 
    $label
  
  ) : PERFORM( $request->erorrMessage() ); 

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined ASSOCIATED ELEMENTS  
  * BEGIN TAG HTML
  *
  **/
function _MERGE(

      string        $id     =  null
     ,string        $elem   =  null
     ,string        $class  =  null
     ,array|string  $attr   =  null


)
{

  global $request;

  /**
   * @package : Merge ASSOCIATED ELEMENTS 
   * @package : Static Procedural
   * @method  : Html::__magicMERGE($elem, 'MERGE', $attr=null, $id, $class);
   *
   **/ 
  $Html = NEW MergeElements();

  return method_exists($Html,'__magicMERGE') ? 
  
   $Html->__magicMERGE(
     
     $elem, 
     'MERGE', 
     $attr, 
     $id, 
     $class
     
  ) : PERFORM( $request->erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPHtml-Merge
  * @ Method Defined ASSOCIATED ELEMENTS  
  * END TAG HTML
  *
  **/
function xMERGE( 

 string $elem        =  null

)
{

 global $request;

 $Html = NEW MergeElements(); 
 
 return method_exists($Html,'__magicMERGE') ? 
 
  $Html->__magicMERGE(
    
    $elem, 
    'MERGE_END'
 
 ) : PERFORM( $request->erorrMessage() );
	
}


