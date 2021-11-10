<?php namespace PHPWine\VanillaFlavour\system; ?>
<?php 

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
 
 class Validate extends System
{
    
  /**
   *
   * Defined DATA Form array handler 
   * HTML field and error msg
   * @since 04.13.21
   * @since v1.0
   *
  **/
  public static $DATAFORM   = [];

 
 /**
  *
  * Defined HASCONTAINS() check data if not empty !
  * @since 04.05.21
  * @since v1.0
  *
 **/ 
public static function HASCONTAINS(array $input ) 
{
        
 $data    = SYSTEM::POSTDATA( $input );
 $request = SYSTEM::SANITIZEREQUEST($_POST[$data[0]]);
 if( !isset($request) || empty($request) || is_null($request) ) : return SYSTEM::SANITIZEREQUEST($data[1]); 
 else                                                           : return $request; 
 endif;

}
   
/**
 *
 * Defined ERROR() check error message !
 * @since 04.05.21
 * @since v1.0
 *
**/ 
 public static function ERROR(string  $result, array $require )
 {
 
   $data = SYSTEM::POSTDATA( $require ); 
   if( $result !== $data[1] ) : return ''; 
   else                      : return  $result; 
   endif;

 }

/**
 *
 * Defined BIND() check error message !
 * @since 04.05.21
 * @since v1.0
 *
**/ 
 public static function BIND( $connection, array $bind_user_data = null , string $request = null , bool $debugging = false )
 {

  $PHPVALIDATE = NEW \PHPWine\VanillaFlavour\System\Auth;
  $PHPVALIDATE::BIND( $connection,  $bind_user_data  ,  $request  ,  $debugging );

}

 /**
   *
   * Defined CHECK STRING TYPE error messages
   * @since 10.15.21
   * @since v1.3
   * 
  **/
  public static function STRINGTYPE(   $data  , $eCatch_errors) { if(!is_string($data))   : return $eCatch_errors; endif;  }

 /**
  *
  * Defined CHECK INTEGER TYPE error messages
  * @since 10.15.21
  * @since v1.3
  * 
 **/
 public static function INTEGERTYPE(  $data  , $eCatch_errors) { if(!is_integer($data))  : return $eCatch_errors; endif;  }

 /**
  *
  * Defined CHECK FLOAT TYPE error messages
  * @since 10.15.21
  * @since v1.3
  * 
 **/
 public static function FLOATTYPE(    $data  , string $eCatch_errors = null ) { if(!is_float($data))    : return $eCatch_errors; endif;  }

 /**
  *
  * Defined CHECK NUMERIC TYPE error messages
  * @since 10.15.21
  * @since v1.3
  * 
 **/
 public static function NUMERICTYPE( $data  , string $eCatch_errors = null ) { if(!is_numeric($data))  : return $eCatch_errors; endif;  }

 /**
  *
  * Defined  FORM VAlidation error messages
  * @since 10.21.21
  * @since v1.4
  * 
 **/
 public static function FORM( string $input_result = null , array $valid_type = null ) { return self::VALIDATION(  $input_result, $valid_type );  }
 
 /**
  *
  * Defined CATCH() method is restrict only single data type for registration field !
  * @since 04.10.21
  * @since v1.0
  *
 **/ 
  public static function CATCH(string $input_result = null, string $bind_result = null, array $valid_type = null ) { return SYSTEM::RETURN_RESTRICTED_DATA($input_result, $bind_result, $valid_type);  }
    
 /**
  *
  * Defined  FORM  VALIDATION system error messages
  * @since 10.21.21
  * @since v1.4
  * 
 **/
 private static function VALIDATION( string $input_error = null , array $valid_type = null ) { return SYSTEM::RETURN_RESTRICTED_DATA( $input_error, NULL,  $valid_type ); }
 

}