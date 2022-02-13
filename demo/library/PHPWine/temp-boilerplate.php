<?php 

use \PHPWine\VanillaFlavour\System\Validate;
use \PHPWine\VanillaFlavour\System\Request;
use \PHPWine\VanillaFlavour\Optimizer\Form;

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
 */



 /**
 * BIOLERPLATE PHPWine / Optimizer
 * PHPHtml-Optimizer
 * @version   v1.2.0.2 
 * @since 1.22.22
 **/

 _div( [['id','class'],['main-container','fluid-container']] );
  
  // My attributes 
  $attributes = [
      
    // attribute key
    // attribute val
    [],
    []

  ];
  
  $child_container    =  ELEM('h1', 'WLECOME !')
                        .ELEM('p' , 'Thank you for visiting Us!');

  $boilerplate = _xdiv( 'child-container' ,

    ELEM('div', $child_container , $attributes )
   
   , attr  :  [ ]
   , class : 'container'
   , label : 'END-OF-child-container'
   , assoc :  FUNC_ASSOC  
    
  );
 
  // execution 
  echo $boilerplate;

 xdiv('END-OF-main-container');



 ########################################################################################
 /**
 * PRODUCT SECTION : w/CHILD Elements array | BIOLERPLATE PHPWine / Optimizer
 * PHPHtml-Optimizer
 * @version   v1.2.0.2 
 * @since 1.22.22
 **/
########################################################################################

_div( [['id','class'],['product-section','fluid-container']] );
  
 // My attributes 
 $attributes = [
    
  // attribute key
  // attribute val
  ['class'],
  ['col-md-6']

 ];

 $child_values    =  ELEM('h1', 'WLECOME !')
                    .ELEM('p' , 'Thank you for visiting Us!');


$boilerplate = _xdiv(  FUNC_ASSOC , [
            
    'CHILD' => [
     
      ['div', 'ATTR' => [ 'class' => 'col-md-6' ] , 'VALUE'=> [  $child_values  ] ]
 
    ]

  ]

 , attr  :  [ ]
 , class : 'container'
 , label : 'END-OF-child-container' 
  
);

// execution 
echo ( !empty( $boilerplate ) ) ?  $boilerplate : false;

xdiv('END-OF-section');


 ########################################################################################
 /**
 * TESTIMONIAL SECTION : w/CHILD Elements array | BIOLERPLATE PHPWine / Optimizer
 * PHPHtml-Optimizer
 * @version v1.2.0.2 
 * @since 1.22.22
 **/
########################################################################################



_div( [ ['id', 'class'],['testimonial-section','fluid-container'] ] );

 $attributes = [
    
  // attribute key
  // attribute val
  [],
  []

 ];

 $child_values    =  ELEM('h1', 'My Name')
                    .ELEM('p' , 'Testimonial descriptions');

 $boilerplate = _xdiv( FUNC_ASSOC   , $child_values
 
  , attr  :  [ ]
  , class :  ''
  , label : 'END-OF-child-container' 
  
 );

 $parent_container_attr = [
    
  ['class'],
  ['container']

 ];

 echo ELEM('div', [  
      
       'CHILD' => [ ['div', 'ATTR' => ['class' => 'col-md-6'], 'VALUE'=> [ $boilerplate ] ] ] 
    
      ] , $parent_container_attr );

xdiv('END-OF-testimonial-section');

