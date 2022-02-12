<?php 

namespace PHPWine\VanillaFlavour\optimizer;

 USE \PHPWine\VanillaFlavour\Merge\Html;

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
 * @method FORM::TEXT();
 * @method FORM::BUTTONS();
 * @method FORM::CHECKBOX();
 * @method FORM::COLOR();
 * @method FORM::DATE();
 * @method FORM::DATETIME();
 * @method FORM::EMAIL();
 * @method FORM::FILE();
 * @method FORM::HIDDEN();
 * @method FORM::MONTH();
 * @method FORM::NUMBER();
 * @method FORM::PASSWORD();
 * @method FORM::RADIO();
 * @method FORM::RANGE();
 * @method FORM::RESET();
 * @method FORM::SEARCH();
 * @method FORM::SUBMIT();
 * @method FORM::TEL();
 * @method FORM::TIMES();
 * @method FORM::URL();
 * @method FORM::WEEK();
 * @method FORM::TEXTAREA();
 * @method FORM::SELECT();
 * @method FORM::OPTION();
 * @method FORM::OPTGROUP();
 * @method FORM::FIELDSET();
 * @method FORM::LABEL();
 * @method FORM::OUTPUT();
 *
 */


   /**
    *
    * Defined CLASS ADVANCE FORM BUILDER;
    * @since 11.01.2021
    * @since v1.4 ( Optimizer )
    *
    **/
 class Form extends Html {
   

    /**
    *
    * Defined Static Form Builder INPUT TEXT();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function TEXT(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
      
    return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'text' ) , 
     $id, 
     $class, 
     $assoc
  
  );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT BUTTON();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function BUTTONS(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
      
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'submit' ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT CHECKBOX();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function CHECKBOX(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
 
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE(  $attr, 'type', 'checkbox' ) , 
     $id, 
     $class, 
     $assoc
    
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT COLOR();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function COLOR(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
      
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'color' ) , 
     $id, 
     $class, 
     $assoc
  
  );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT DATE();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function DATE(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
        
    return  Parent::HtmlELements_Optimizer(
      
      "INLINE",
      'input',  
       $attr = HTML::FORMTYPE( $attr, 'type', 'date' ) , 
       $id, 
       $class, 
       $assoc
    
    );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT DATETIME();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function DATETIME(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
 
   return   Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'datetime' ) , 
     $id, 
     $class, 
     $assoc
  
  );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT EMAIL();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function EMAIL(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
  
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'email' ) , 
     $id, 
     $class, 
     $assoc
    
  );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT FILE();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function FILE(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
 
   return   Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'file' ) , 
     $id, 
     $class, 
     $assoc
  
  );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT HIDDEN();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function HIDDEN(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {

   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'hidden' ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT MONTH();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function MONTH(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
 
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'month' ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT NUMBER();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function NUMBER(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {

   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'number' ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT PASSWORD();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function PASSWORD(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
  
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE(  $attr, 'type', 'password'  ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT RADIO();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function RADIO(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
 
   return Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'radio' ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT RANGE();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function RANGE(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
 
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'range' ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT RESET();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function RESET(
 
     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
  
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'reset' ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT SEARCH();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function SEARCH(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
  
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'search' ) , 
     $id, 
     $class, 
     $assoc
    
    );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT SUBMIT();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function SUBMIT(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
  
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'submit'  ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT TEL();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function TEL(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
  
   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'tel' ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT TIME();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function TIMES(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {

   return  Parent::HtmlELements_Optimizer( 
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'time'  ) , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT URL();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function URL(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {

   return  Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'url' ) , 
     $id, 
     $class, 
     $assoc
   
   );
   
  }

    /**
    *
    * Defined Static Form Builder INPUT WEEK();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function WEEK(

     string        $id     = null
    ,string        $class  = null
    ,array|string  $attr   = null
    ,string        $assoc  = null
    
  )
  {
  
   return Parent::HtmlELements_Optimizer(
     
    "INLINE",
    'input',  
     $attr = HTML::FORMTYPE( $attr, 'type', 'week') , 
     $id, 
     $class, 
     $assoc
  
   );
   
  }

    /**
    *
    * Defined Static Form Builder TEXTAREA();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function TEXTAREA( 

    string       $id      =  null 
   ,mixed        $value   =  null 
   ,array|string $attr    =  null 
   ,string       $class   =  null 
   ,string       $label   =  null 
   ,string       $assoc   =  null 
 
 ) 
 { 
   /**
    *
    *
    * @package : Merge Heading tag TEXTAREA
    * @package : Static Procedural
    * @method  : Html::TEXTAREA($value, $attr=null, $id, $class, $label, $assoc);
    *
    *
    **/
    return Parent::TEXTAREA(
      
      $id, 
      $value, 
      $attr, 
      $class, 
      $label, 
      $assoc
    
   ); 
 
 }

  /**
    *
    * Defined Static Form Builder SELECT();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
    static public function SELECT( 

       string       $id      =  null 
      ,mixed        $value   =  null 
      ,array|string $attr    =  null 
      ,string       $class   =  null 
      ,string       $label   =  null 
      ,string       $assoc   =  null 

 ) 
 { 
 /**
  *
  *
  * @package : Merge Heading tag SELECT
  * @package : Static Procedural
  * @method  : Html::SELECT($value, $attr=null, $id, $class, $label, $assoc);
  *
  *
  **/
  return Parent::SELECT(
    
    $id, 
    $value, 
    $attr, 
    $class, 
    $label, 
    $assoc
  
   ); 

 }

  /**
    *
    * Defined Static Form Builder OPTION();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function OPTION( 
  
    string       $id      =  null 
   ,mixed        $value   =  null 
   ,array|string $attr    =  null 
   ,string       $class   =  null 
   ,string       $label   =  null 
   ,string       $assoc   =  null 

 ) 
 { 
 /**
  *
  *
  * @package : Merge Heading tag OPTION
  * @package : Static Procedural
  * @method  : Html::OPTION($value, $attr=null, $id, $class, $label, $assoc);
  *
  *
  **/
  return Parent::OPTION(
    
     $id, 
     $value, 
     $attr, 
     $class, 
     $label, 
     $assoc
    
   );  

 }

  /**
    *
    * Defined Static Form Builder OPTGROUP();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
 static public function OPTGROUP( 

   string       $id      =  null 
  ,mixed        $value   =  null 
  ,array|string $attr    =  null 
  ,string       $class   =  null 
  ,string       $label   =  null 
  ,string       $assoc   =  null 

) 
{ 
 /**
  *
  *
  * @package : Merge Heading tag OPTGROUP
  * @package : Static Procedural
  * @method  : Html::OPTGROUP($value, $attr=null, $id, $class, $label, $assoc);
  *
  *
  **/
 return Parent::OPTGROUP(
   
   $id, 
   $value, 
   $attr, 
   $class, 
   $label, 
   $assoc
  
  );  

}

  /**
    *
    * Defined Static Form Builder FIELDSET();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function FIELDSET( 

    string       $id      =  null 
   ,mixed        $value   =  null 
   ,array|string $attr    =  null 
   ,string       $class   =  null 
   ,string       $label   =  null 
   ,string       $assoc   =  null 

) 
{ 
 /**
  *
  *
  * @package : Merge Heading tag FIELDSET
  * @package : Static Procedural
  * @method  : Html::FIELDSET($value, $attr=null, $id, $class, $label, $assoc);
  *
  *
  **/
 return Parent::FIELDSET(
   
   $id, 
   $value, 
   $attr, 
   $class, 
   $label, 
   $assoc
  
  );

}
  /**
    *
    * Defined Static Form Builder LABEL();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
 static public function LABEL( 

   string       $id      =  null 
  ,mixed        $value   =  null 
  ,array|string $attr    =  null 
  ,string       $class   =  null 
  ,string       $label   =  null 
  ,mixed        $assoc   =  null 

) 
{ 
 /**
  *
  *
  * @package : Merge Heading tag LABEL
  * @package : Static Procedural
  * @method  : Html::LABEL($value, $attr=null, $id, $class, $label, $assoc);
  *
  *
  **/
 return Parent::LABEL(
   
   $id, 
   $value, 
   $attr, 
   $class, 
   $label, 
   $assoc
  
  );  

}
  /**
    *
    * Defined Static Form Builder LABEL();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
 static public function OUTPUT( 

   string       $id      =  null 
  ,mixed        $value   =  null 
  ,array|string $attr    =  null 
  ,string       $class   =  null 
  ,string       $label   =  null 
  ,mixed        $assoc   =  null 

 ) 
 { 
  /**
   *
   *
   * <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">
   * <input type="range" id="a" value="50">
   * +<input type="number" id="b" value="25">
   * =<output name="x" for="a b"></output>
   * </form>
   * @package : Merge Heading tag OUTPUT
   * @package : Static Procedural
   * @method  : Html::OUTPUT($value, $attr=null, $id, $class, $label, $assoc);
   *
   *
   *
   **/
  return Parent::OUTPUT(
    
    $id, 
    $value, 
    $attr, 
    $class, 
    $label, 
    $assoc
  
   );

 }
  
}
