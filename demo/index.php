<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php 

use \PHPWine\VanillaFlavour\Merge\Html;
 

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.1.4 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.1.4 free software: you can redistribute it and/or modify.
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
 * @version   v1.1.4
 *
 */
  

//  _xDIV('test-array', 
    
//   [1,2,3,4,5,6,7,8,9]
 
// ); 

// echo "<br />";
// echo "<hr />";

// echo  ELEM('h1',  [1,2,3,4,5,6,7,8] );

// FIXED attr array ugly error convert as string ! ***  merge version 

// IMPROVED HTML TAGS OPTIMIZER | MERGE >> v1.1.2++ 
// Strick type argument implementation from @since version >> v1.1.2++


// IMPROVED HTML TAGS OPTIMIZER | MERGE HEADING TAG IMPLEMENT STRICT TYPE ( format exclusive for H1 to H6 )
// /* OLD << v1.1.0 : */ _xH1('id'     , 'value'    , [['attr'],['val']] , 'class'    , 'label'    , FUNC_ASSOC );
// /* NEW >> v1.1.2 : */ _xH1(' value ', attr       , 'id'               , 'class'    , 'label'    , FUNC_ASSOC );
// /* NEW >> v1.1.2 : */ _xH1(' value ', FUNC_ASSOC , FUNC_ASSOC         , FUNC_ASSOC , FUNC_ASSOC , FUNC_ASSOC );
// /* OLD << v1.1.0 : */ _xH1('id'     , 'value'    , ""                 , ""         , ""         , FUNC_ASSOC );
// /* NEW >> v1.1.2 : */ _xH1(' Hello ', FUNC_ASSOC);
/*
 @since version 1.1.2
 _xH1(

     mixed         $value   =  null 
    ,array|string  $attr    =  null 
    ,string        $id      =  null 
    ,string        $class   =  null 
    ,string        $label   =  null 
    ,mixed         $assoc   =  null 

  ) 
  { ... }

*/

// IMPROVED HTML TAGS OPTIMIZER | MERGE
// /* OLD << v1.1.0 : */ _xUL(  'id'         , ' value '   , [['attr'],['val']] , 'class'    , 'label'    , FUNC_ASSOC );
// /* OLD << v1.1.0 : */ _xUL(  ''           , ' value '   , ''                 , ''         , ''         , FUNC_ASSOC );
// /* OLD << v1.1.0 : */ _xUL( NULL          , ' value '   , NULL               , NULL       , NULL       , FUNC_ASSOC );
// /* NEW >> v1.1.2 : */ _xUL( FUNC_ASSOC    , ' value '   , FUNC_ASSOC         , FUNC_ASSOC , FUNC_ASSOC , FUNC_ASSOC );
// /* NEW >> v1.1.2 : */ _xUL( FUNC_ASSOC    , ' value '   );
// /* NEW >> v1.1.2 : */ _xUL( 'id-container', ' value '   , FUNC_ASSOC); 
/*
 @since version 1.1.2 
_xUL( 

   string        $id      =  null 
  ,mixed         $value           =  null 
  ,array|string  $attr            =  null 
  ,string        $class   =  null 
  ,string        $label           =  null 
  ,mixed         $assoc           =  null  

) 
{ ... }

*/

// IMPROVED ADVANCE FORM BUILDER INPUT FIELD
// /* OLD << v1.1.0 : */ FORM::TEXT( ' myID         ', ' myCLass  ', []         , FUNC_ASSOC );
// /* OLD << v1.1.0 : */ FORM::TEXT( '              ', '          ', '        ' , FUNC_ASSOC );
// /* OLD << v1.1.0 : */ FORM::TEXT( ' NULL         ', ' NULL     ', NULL       , FUNC_ASSOC );
// /* NEW >> v1.1.2 : */ FORM::TEXT( FUNC_ASSOC      , FUNC_ASSOC  , FUNC_ASSOC , FUNC_ASSOC ); 
// /* NEW >> v1.1.2 : */ FORM::TEXT( 'id-text-field' , FUNC_ASSOC ); 
// /* NEW >> v1.1.2 : */ FORM::TEXT( FUNC_ASSOC ); 

/*
 @since version 1.1.2 inline none closing TAG
TEXT(

   string        $id     = null
  ,string        $class  = null
  ,array|string  $attr   = null
  ,mixed         $assoc  = null
    
)
{ ... }

 @since version 1.1.2 with closing TAG
TEXTAREA( 

  string       $id      =  null 
 ,mixed        $value           =  null 
 ,array|string $attr            =  null 
 ,string       $class   =  null 
 ,string       $label           =  null 
 ,mixed        $assoc           =  null 

) 
{ ... }
*/

