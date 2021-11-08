<?php 

USE \PHPWine\VanillaFlavour\merge\Html;
USE \PHPWine\VanillaFlavour\optimizer\Html AS Optimzer;
USE \PHPWine\VanillaFlavour\optimizer\Enhancers AS PHPFileHandler;

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
 *
 * @method belongs_to(); 
 * @method KeyFolderPath();  
 *
 */

/**
  *
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined bring_to(GETFROM(['PATH','KEY']), 'file',__PHP__, OPTIONAL);
  * 
  *
  **/
function bring_to(

   $config
  ,$fileName    =  null
  ,$extension   =  null
  ,$Optional    =  null

 )
 {
  
 /**
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
   *
   *
   *
   **/  
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'bring_to') ? 
        $Enhancer->bring_to($config, $fileName, $extension, $Optional) : 
        PERFORM(erorrMessage());
} 

/**
  *
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined view_to(GETFROM(['PATH','KEY']), 'about' );
  * 
  *
  **/
function view_to(

   $config
  ,$fileName

)
{
  
 /**
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
   *
   *
   *
   **/  
  $Enhancer = new PHPFileHandler();

  return method_exists($Enhancer, 'view_to') ?  
         $Enhancer->view_to($config, $fileName) : 
         PERFORM(erorrMessage());
 
} 

/**
  *
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined send_to($uri);
  * 
  *
  **/
function send_to(

  $uri

 )
 {
  
 /**
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
   *
   *
   *
   **/  
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'send_to') ? 
        $Enhancer->send_to($uri) : 
        PERFORM(erorrMessage());
 
} 

/**
  *
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined 'UNIQUE_KEY' => SET_DIR_PATH('dir');  
  * 
  *
  **/
function SET_DIR_PATH(

   $uri
  ,$serverHost     = null

  )
  {
 
  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->SET_DIR_PATH(['path','dir'])
   *
   *
   *
   **/  
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'SET_DIR_PATH') ? 
        $Enhancer->SET_DIR_PATH($uri, $serverHost) : 
        PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined GETFROM(['array'])  
  * GETFROM(['PATH','DIR']) //  SUPPRTED/VALID PARAM  : PATH | VIEWS | RURI 
  *
  **/
function  GETFROM( 

    $array_realpath_dir   = null

 )
 {  
 
  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->GETFROM(['path','dir'])
   *
   *
   *
   **/ 
 $array_realpath_dir = !is_array($array_realpath_dir) ? FILE_HANDLER_MSG_STR : $array_realpath_dir ;
  
 $getValues = array_values($array_realpath_dir);
 $REAL_PATH = strtolower($getValues[0]);
 $Enhancer  = new PHPFileHandler();

 return method_exists($Enhancer, 'GETFROM') ? 
        $Enhancer->GETFROM($REAL_PATH, $array_realpath_dir[1]) : 
        PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined isbelong()  noHTML  
  *
  **/
function isbelongs(

    array|string $page               = null 
   ,array|string $GetKeyFolderPath   = null 

 )
 {
 
  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->belongs_to('index',  4)
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'belongs_to') ? 
        $Enhancer->belongs_to($page, $GetKeyFolderPath) : 
        PERFORM(erorrMessage());

}

/**
  *
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined getKeyPath() noHTML  
  *
  **/
function getKeyPath() {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : MapFolderPath()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'GetKeyFolderPath') ? 
        $Enhancer->GetKeyFolderPath() : 
        PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined Break tag Optinal ASSOC  
  *
  **/
function __BR(

    $optional_assoc     = null

)
{

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : BR()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'BREAK') ? 

    $Enhancer->BREAK($optional_assoc) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined HR   
  *
  **/
function __HR(

   $optional_assoc     = null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : HR()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'LINE') ? 

    $Enhancer->LINE($optional_assoc) :

      PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined __space  
  *
  **/
function __space() {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : __space()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'SPACE') ? 

    $Enhancer->SPACE() :

      PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined SetFileEx  
  *
  **/
function SetFileExT(

   $argu

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : SetFileEx()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'SetFileExtension') ? 

    $Enhancer->SetFileExtension($argu) :

      PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined SetElemAttr  
  *
  **/
function SetElemAttr(

    array $attr_type
   ,array $attr_value

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : SetElemAttr()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'SetElemAttr') ? 

    $Enhancer->SetElemAttr($attr_type, $attr_value) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined ATTR  
  *
  **/
function ATTR(

   $tag
  ,$attr

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : ATTR()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'ATTR') ? 

    $Enhancer->ATTR($tag, $attr) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined MODIFIED ELEM HTML  
  *
  **/
function ELEM(

    string        $elem    =  null
   ,mixed         $value      =  null
   ,array|string  $attr   =  null
   ,string        $id     =  null
   ,string        $class  =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : MODIFIED ELEM() HTML
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'ELEM') ? 

    $Enhancer->ELEM($elem, $value, $attr, $id, $class) : 

      PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined DOELSE()  
  *
  **/
function DOELSE(

    bool  $condition     =  null
   ,mixed $if_result     =  null
   ,mixed $else_result   =  null
   ,mixed $assoc         =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : DOELSE()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, '__magicELSE') ? 

    $Enhancer->__magicELSE($condition, $if_result, $else_result, $assoc) : 

      PERFORM(erorrMessage());

}


/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined DOIF()  
  *
  **/
function DOIF(

    bool  $condition     =  null
   ,mixed $if_result     =  null
   ,mixed $assoc         =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : DOIF()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, '__magicIF') ? 

    $Enhancer->__magicIF($condition, $if_result, $assoc) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined MERGE()  
  *
  **/
function MERGE(

   $merge     =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : MERGE()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'MERGE') ? 

    $Enhancer->MERGE($merge) : 

       PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined PERFORM()  
  *
  **/
function PERFORM(

     mixed $str      =  null
    ,mixed $assoc    =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : PERFORM()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'PERFORM') ?

     $Enhancer->PERFORM($str, $assoc) :

        PERFORM(erorrMessage());

}

/**
  *
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined STRING()  
  *
  **/
function STRING(

    string $str   =  null
   ,mixed $assoc =  null

 )
 {

  /**
   *
   *
   *
   *
   *
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : STRING()
   *
   *
   *
   **/ 
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'STRING') ? 

   $Enhancer->STRING($str, $assoc) : 

     PERFORM(erorrMessage());

}



function erorrMessage() {

  return "Class can Extends but cannot be modify" . __BR();
 
}






