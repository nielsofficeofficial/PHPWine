<?php 

 namespace PHPWine\VanillaFlavour\optimizer;

 USE \PHPWine\VanillaFlavour\Merge\Html;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.0 free software: you can redistribute it and/or modify.
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
 * @version   v1.0
 * 
 * @Method
 * FORM::TEXT();
 * FORM::BUTTONS();
 * FORM::CHECKBOX();
 * FORM::COLOR();
 * FORM::DATE();
 * FORM::DATETIME();
 * FORM::EMAIL();
 * FORM::FILE();
 * FORM::HIDDEN();
 * FORM::IMAGE();
 * FORM::MONTH();
 * FORM::NUMBER();
 * FORM::PASSWORD();
 * FORM::RADIO();
 * FORM::RANGE();
 * FORM::RESET();
 * FORM::SEARCH();
 * FORM::SUBMIT();
 * FORM::TEL();
 * FORM::TIMES();
 * FORM::URL();
 * FORM::WEEK();
 * FORM::TEXTAREA();
 * FORM::SELECT();
 * FORM::OPTION();
 * FORM::OPTGROUP();
 * FORM::FIELDSET();
 * FORM::LABEL();
 * FORM::OUTPUT();
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

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['text']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"text");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT BUTTON();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function BUTTONS(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['button']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"button");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT CHECKBOX();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function CHECKBOX(

    $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['checkbox']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"checkbox");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT COLOR();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function COLOR(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['color']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"color");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT DATE();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function DATE(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['date']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"date");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT DATETIME();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function DATETIME(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['datetime-local']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"datetime-local");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT EMAIL();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function EMAIL(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['email']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"email");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT FILE();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function FILE(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['file']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"file");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT HIDDEN();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function HIDDEN(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['hidden']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"hidden");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT IMAGE();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function IMAGE(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['img']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"img");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT MONTH();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function MONTH(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['month']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"month");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT NUMBER();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function NUMBER(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['number']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"number");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT PASSWORD();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function PASSWORD(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['password']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"password");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT RADIO();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function RADIO(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['radio']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"radio");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT RANGE();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function RANGE(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['range']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"range");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT RESET();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function RESET(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['reset']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"reset");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT SEARCH();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function SEARCH(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['search']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"search");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT SUBMIT();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function SUBMIT(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['submit']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"submit");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT TEL();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function TEL(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['tel']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"tel");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT TIME();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function TIMES(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['time']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"time");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT URL();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function URL(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['url']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"url");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder INPUT WEEK();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function WEEK(

     $id     = null
    ,$class  = null
    ,$attr   = null
    ,$assoc  = null
    
  )
  {
      
   if(!isset( $attr ) || is_null( $attr ) || empty( $attr ) ) :  $attr   = [['type'],['week']];
    else                                                      :  
      
      $attr   = $attr; 
      array_push($attr[0],"type");
      array_push($attr[1],"week");
    
    endif;

   return Parent::HtmlELements_Optimizer("INLINE",'input',  $attr , $id, $class, $assoc);
   
  }

    /**
    *
    * Defined Static Form Builder TEXTAREA();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function TEXTAREA( 

    $element_id      =  null 
   ,$value           =  null 
   ,$attr            =  null 
   ,$element_class   =  null 
   ,$label           =  null 
   ,$assoc           =  null 
 
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
    return Parent::TEXTAREA($value, $attr, $element_id, $element_class, $label, $assoc); 
 
 }

  /**
    *
    * Defined Static Form Builder SELECT();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
    static public function SELECT( 

   $element_id      =  null 
  ,$value           =  null 
  ,$attr            =  null 
  ,$element_class   =  null 
  ,$label           =  null 
  ,$assoc           =  null

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
  return Parent::SELECT($value, $attr, $element_id, $element_class, $label, $assoc); 

 }

  /**
    *
    * Defined Static Form Builder OPTION();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function OPTION( 
  
    $element_id      =  null 
   ,$value           =  null 
   ,$attr            =  null 
   ,$element_class   =  null 
   ,$label           =  null 
   ,$assoc           =  null

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
  return Parent::OPTION($value, $attr, $element_id, $element_class, $label, $assoc);  

 }

  /**
    *
    * Defined Static Form Builder OPTGROUP();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
 static public function OPTGROUP( 

  $element_id      =  null 
 ,$value           =  null 
 ,$attr            =  null 
 ,$element_class   =  null 
 ,$label           =  null 
 ,$assoc           =  null 

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
 return PArent::OPTGROUP($value, $attr, $element_id, $element_class, $label, $assoc);   

}

  /**
    *
    * Defined Static Form Builder FIELDSET();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
  static public function FIELDSET( 

  $element_id      =  null 
 ,$value           =  null 
 ,$attr            =  null 
 ,$element_class   =  null 
 ,$label           =  null 
 ,$assoc           =  null 

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
 return Parent::FIELDSET($value, $attr, $element_id, $element_class, $label, $assoc); 

}
  /**
    *
    * Defined Static Form Builder LABEL();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
 static public function LABEL( 

  $element_id      =  null 
 ,$value           =  null 
 ,$attr            =  null 
 ,$element_class   =  null 
 ,$label           =  null 
 ,$assoc           =  null

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
 return Parent::LABEL($value, $attr, $element_id, $element_class, $label, $assoc);  

}
  /**
    *
    * Defined Static Form Builder LABEL();
    * @since 11.01.2021
    * @since v1.4
    *
    **/
 static public function OUTPUT( 

   $element_id      =  null 
  ,$value           =  null 
  ,$attr            =  null 
  ,$element_class   =  null 
  ,$label           =  null 
  ,$assoc           =  null

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
   * @method  : Html::OUTPUT($value, $attr=null, $element_id, $element_class, $label, $assoc);
   *
   *
   *
   **/
  return Parent::OUTPUT($value, $attr, $element_id, $element_class, $label, $assoc);  

 }
  
}
