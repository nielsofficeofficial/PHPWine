<?php 

USE \PHPWine\VanillaFlavour\optimizer\Enhancers AS PHPFileHandler;
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
 * @method deprecated @since v1.1.4.1 bring_to();
 * @method deprecated @since v1.1.4.1 view_to();
 * @method deprecated @since v1.1.4.1 SET_DIR_PATH();
 * @method deprecated @since v1.1.4.1 GETFROM();
 * @method deprecated @since v1.1.4.1 setFileExT()
 * 
 */
 
 $request = NEW Request();

/**
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined bring_to(GETFROM(['PATH','KEY']), 'file',__PHP__, OPTIONAL);
  **/
function bring_to(

   $config
  ,$fileName    =  null
  ,$extension   =  null
  ,$Optional    =  null

 )
 {
  
  global $request;

 /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
   **/  
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'bring_to') ? 

        $Enhancer->bring_to($config, $fileName, $extension, $Optional) : 
 
        PERFORM( $request->erorrMessage() );
} 

/**
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined view_to(GETFROM(['PATH','KEY']), 'about' );
  **/
function view_to(

   $config
  ,$fileName

)
{
  global $request;

 /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
   **/  
  $Enhancer = new PHPFileHandler();

  return method_exists($Enhancer, 'view_to') ? 

         $Enhancer->view_to($config, $fileName) : 
  
         PERFORM( $request->erorrMessage());
 
} 

/**
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined send_to($uri);
  **/
function send_to(

  $uri

 )
 {
  
  global $request;

 /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
   **/  
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'send_to') ? 

        $Enhancer->send_to($uri) : 
 
        PERFORM( $request->erorrMessage());
 
} 

/**
  * @since 22.11.2020
  * @category PHPFileEnhancer
  * @method Defined 'UNIQUE_KEY' => SET_DIR_PATH('dir');  
  **/
function SET_DIR_PATH(

   $uri
  ,$serverHost     = null

  )
  {
  
  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->SET_DIR_PATH(['path','dir'])
   **/  
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'SET_DIR_PATH')   ? 

        $Enhancer->SET_DIR_PATH($uri, $serverHost) : 

        PERFORM( $request->erorrMessage());

}

/**
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined GETFROM(['array'])  
  * GETFROM(['PATH','DIR']) //  SUPPRTED/VALID PARAM  : PATH | VIEWS | RURI 
  **/
function  GETFROM( 

    $array_realpath_dir   = null

 )
 {  
  
  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->GETFROM(['path','dir'])
   **/ 
 $array_realpath_dir = !is_array($array_realpath_dir) ? FILE_HANDLER_MSG_STR : $array_realpath_dir ;
  
 $getValues = array_values($array_realpath_dir);
 $REAL_PATH = strtolower($getValues[0]);
 $Enhancer  = new PHPFileHandler();

 return method_exists($Enhancer, 'GETFROM') ? 
        $Enhancer->GETFROM($REAL_PATH, $array_realpath_dir[1]) : 
        PERFORM( $request->erorrMessage());

}

/**
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined isbelong()  noHTML  
  **/
function isbelongs(

    array|string $page               = null 
   ,array|string $GetKeyFolderPath   = [] 

 )
 {
  
  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : $FileEnhance->belongs_to('index',  4)
   **/  

 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'belongs_to')    ? 

        $Enhancer->belongs_to($page, $GetKeyFolderPath = [1,2,3,4,5,6,7,8] ) : 
 
        PERFORM($request->erorrMessage());

}

/**
  * @since 20.19.2020
  * @category PHPFileEnhancer
  * @method Defined getKeyPath() noHTML  
  **/
function getKeyPath() {

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : MapFolderPath()
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'GetKeyFolderPath') ? 

        $Enhancer->GetKeyFolderPath() : 
 
        PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined Break tag Optinal ASSOC  
  **/
function __BR(

    $optional_assoc     = null

)
{

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : BR()
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'BREAK') ? 

    $Enhancer->BREAK($optional_assoc) : 

    PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined HR   
  **/
function __HR(

   $optional_assoc     = null

 )
 {

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : HR()
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'LINE') ? 

        $Enhancer->LINE($optional_assoc) :

        PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined __space 
  **/
function __space() {

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : __space()
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'SPACE') ? 

        $Enhancer->SPACE() :

        PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined SetFileEx  
  **/
function setFileExT(

   $argu

 )
 {

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : SetFileEx()
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'SetFileExtension') ? 

        $Enhancer->SetFileExtension($argu) :

        PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined SetElemAttr  
  **/
function setElemAttr(

    array $attr_type
   ,array $attr_value

 )
 {

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : SetElemAttr()
   **/ 
 $Enhancer = new PHPFileHandler();

   return method_exists($Enhancer, 'SetElemAttr') ? 

   $Enhancer->SetElemAttr($attr_type, $attr_value) : 

   PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined ATTR  
  **/
function ATTR(

   $tag
  ,$attr

 )
 {

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : ATTR()
   **/ 
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'ATTR') ? 

        $Enhancer->ATTR($tag, $attr) : 

        PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined MODIFIED ELEM HTML  
  **/
function ELEM(

    string        $elem   =  null
   ,array|string  $value  =  null
   ,array|string  $attr   =  null
   ,string        $id     =  null
   ,string        $class  =  null

 )
 {

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : MODIFIED ELEM() HTML
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'ELEM') ? 

        $Enhancer->ELEM($elem, $value, $attr, $id, $class) : 

        PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined DOELSE()  
  **/
function DOELSE(

    bool  $condition     =  null
   ,mixed $if_result     =  null
   ,mixed $else_result   =  null
   ,mixed $assoc         =  null

 )
 {
 
  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : DOELSE()
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, '__magicELSE') ? 

    $Enhancer->__magicELSE($condition, $if_result, $else_result, $assoc) : 

      PERFORM( $request->erorrMessage());

}


/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined DOIF()  
  **/
function DOIF(

    bool  $condition     =  null
   ,mixed $if_result     =  null
   ,mixed $assoc         =  null

 )
 {

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : DOIF()
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, '__magicIF') ? 

        $Enhancer->__magicIF($condition, $if_result, $assoc) : 

        PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined MERGE()  
  **/
function MERGE(

   $merge     =  null

 )
 {

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : MERGE()
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'MERGE') ? 

        $Enhancer->MERGE($merge) : 

        PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined PERFORM()  
  **/
function PERFORM(

     mixed $str      =  null
    ,mixed $assoc    =  null

 )
 {
  
  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : PERFORM()
   **/ 
 $Enhancer = new PHPFileHandler();

 return method_exists($Enhancer, 'PERFORM') ?

        $Enhancer->PERFORM($str, $assoc) :

        PERFORM( $request->erorrMessage());

}

/**
  * @since 05.11.2020
  * @category PHPFileEnhancer
  * @method Defined STRING()  
  **/
function STRING(

    string $str   =  null
   ,mixed $assoc =  null

 )
 {

  global $request;

  /**
   * @package : PHPFileEnhancer
   * @package : Static Procedural
   * @method  : STRING()
   **/ 
 $Enhancer = new PHPFileHandler();
 
 return method_exists($Enhancer, 'STRING') ? 

        $Enhancer->STRING($str, $assoc) : 

        PERFORM( $request->erorrMessage());

}









