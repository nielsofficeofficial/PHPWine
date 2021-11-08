<?php 

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library/PHPWine/PHPWine.php';

use \PHPWine\VanillaFlavour\Merge\Html;
use \PHPWine\VanillaFlavour\Optimizer\Html as optimizer;
use \PHPWine\VanillaFlavour\Optimizer\Enhancers as optimizerCare; 

$html        = new optimizer();
$fileEnhance = new optimizerCare();

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
  
    if( isbelongs(['index']          , [1,2,3] ) )  : _xH1("Welcome Home! ");
     elseif ( isbelongs(['register'] , [1,2,3] ) )  : _xH1("Welcome to Register! "); 
     elseif ( isbelongs(['login']    , [1,2,3] ) )  : _xH1("Welcome to Login! ");
    endif;

    $main_menu =  _xUL( FUNC_ASSOC , 
   
     DOIF( !isbelongs(['index']    , [1,2,3] )    , ELEM('Li', ELEM('a', 'Home'    , [['href'],['index.php']])    ) ,  FUNC_ASSOC  )
    .DOIF( !isbelongs(['register'] , [1,2,3] )    , ELEM('Li', ELEM('a', 'Register', [['href'],['register.php']]) ) ,  FUNC_ASSOC  )
    .DOIF( !isbelongs(['login']    , [1,2,3] )    , ELEM('Li', ELEM('a', 'Login'   , [['href'],['login.php']])    ) ,  FUNC_ASSOC  )

    , [['a'],['b']], 'MyClass', ' This is it ! ' );

    echo ($main_menu) ? $main_menu : false ;