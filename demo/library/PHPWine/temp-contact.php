<?php 

use \PHPWine\VanillaFlavour\Optimizer\Form; 
use \PHPWine\VanillaFlavour\system\Validate_v2 as v2; 

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.2.0.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.2.0.0 free software: you can redistribute it and/or modify.
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
 * @version   v1.2.0.0 
 * @since     02.09.2022
 *
 */

$validationV2 = NEW class extends v2 {

/**
  * @var 
  * @property 
  * defined array key $validate_tag property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
public static array|string|null $validate_tag;

/**
  * @var 
  * @property 
  * defined array key $request_value property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
public static array|string|null $request_value;

/**
  * @var 
  * @property 
  * defined array key $tooltips_validate_tag property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
public static array|string|null $tooltips_validate_tag;

/**
  * @var 
  * @property 
  * defined array key $tooltips property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
public static array|string|null $tooltips;

/**
  * @var 
  * @property 
  * defined array key $tooltips_validate_tag property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
  public static array|string|null $tooltips_email_tag;

  /**
    * @var 
    * @property 
    * defined array key $tooltips property
    * @since v1.2.0.0 
    * @since 02.07.2022
    **/  
  public static array|string|null $validtype_email;

/**
  * @var 
  * @property 
  * defined array key $validtype_email_tag property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
  public static array|string|null $validtype_email_tag;

  /**
    * @var 
    * @property 
    * defined array key $tooltips_email property
    * @since v1.2.0.0 
    * @since 02.07.2022
    **/  
  public static array|string|null $tooltips_email;

/**
  * @var 
  * @property 
  * defined array key $validtype_validate_tag property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/ 
public static array|string|null $validtype_validate_tag;

/**
  * @var 
  * @property 
  * defined array key $validtype property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
public static array|string|null $validtype;


/**
  * @var 
  * @property 
  * defined array key $require_fields property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
private static array $require_fields = [
           
      'username'  => [

            'mandatory'  => 'Please Enter your username',
            'tooltips'   => [ 
                               MINLENGTH           => [  8 , 'MINLENGTH' ]      , // Not less than 8 Char !
                               CONTAIN_SPECIALCHAR => [ 'CONTAIN_SPECIALCHAR' ]    // Must have special characters such underscore _

                            ],
            'valid_type' => [

                              MINLENGTH           => [ 8 , 'Invalid username!' ] ,  
                              CONTAIN_SPECIALCHAR => [ 'Invalid username!' ] 

            ],
            'bind_data'  => [ 'table_name', 'id' , 'This username was already used !']
          
       ],
      
      'last_name' => [

            'mandatory'  => 'Please Enter your last name',
            'tooltips'   => [],
            'valid_type' => [],
            'bind_data'  => []
      
      ],

      'email'     => [

            'mandatory'  => 'Please Enter your email',
            'tooltips'   => [ VALID_EMAIL => ['VALID_EMAIL'] ],
            'valid_type' => [ VALID_EMAIL => ['Invalid Email !'] ],
            'bind_data'  => [ 'email', 'id', 'email' , 'This username was already used !']
          
       ],

      'website'   => [

            'mandatory'  => 'Please Enter your website or social media',
            'tooltips'   => [],
            'valid_type' => [],
            'bind_data'  => []
          
       ],

      'message'   => [ 

            'mandatory'  => 'Please Enter your message',
            'tooltips'   => [],
            'valid_type' => [],
            'bind_data'  => []
          
       ]
    
 ];

/**
  * @var 
  * @property MANDATORY
  * defined array key to MANDATORY Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
 public static function mandatory_validate_tag(  array|string  $tag_name ) { return v2::MANDATORY( $tag_name , SELF::$require_fields ); }
 
/**
  * @var 
  * @property TOOLTIPS
  * defined array key toTOOLTIPS Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  public static function tooltips_validate_tag(  string  $tag_name ) { return v2::TOOLTIPS( $tag_name , SELF::$require_fields ); }

/**
  * @var 
  * @property VALIDTYPE
  * defined array key to VALIDTYPE Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  public static function validtype_validate_tag(  string $tag_name ) { return v2::VALIDTYPE( $tag_name , SELF::$require_fields ); }

  /**
  * @var 
  * @property SANITIZED_VALUE
  * defined array key to SANITIZED_VALUE Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  public static function sanitized_request_value( array|string  $tag_name ) { return v2::SANITIZED_VALUE( $tag_name ); }
   
}; // END OF CLASS VALIDATION
 
 
if($_SERVER["REQUEST_METHOD"] == "POST")
{  

   # SANITIZED FOR DATABASE
   $validationV2::$request_value = $validationV2::sanitized_request_value( ['username','last_name','email'] );

/**
  * @var 
  * @property MANDATORY_ARRAY_TYPE 
  * defined array key to MANDATORY Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  $validationV2::$validate_tag  = $validationV2::mandatory_validate_tag(  [ 'username','last_name', 'email', 'website', 'message' ] );
  
  $attributes = [
    
     [],
     []

   ];
     
  $required  = []; foreach ($validationV2::$validate_tag as $value) { $required[] =  ELEM('li',  $value ); }  _xdiv( 'Required' , ELEM('UL', implode("", $required ) , $attributes ) );

/**
  * @var 
  * @property VALIDTYPE_STRING_TYPE_ONLY
  * defined to VALIDTYPE Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  $validationV2::$validtype_validate_tag  = $validationV2::validtype_validate_tag( 'username' );   
  $validationV2::$validtype_email_tag     = $validationV2::validtype_validate_tag( 'email' );   

  $valid_type_child = DOIF( !empty(  $validationV2::$validtype_validate_tag ) , ELEM('li',  $validationV2::$validtype_validate_tag ,  [['class'],['red']] ) , FUNC_ASSOC )
                     .DOIF( !empty(  $validationV2::$validtype_email_tag   )  , ELEM('li',  $validationV2::$validtype_email_tag    ,  [['class'],['red']] ) , FUNC_ASSOC );
                      
  _xdiv( 'validtype' , 
  
    ELEM('UL', $valid_type_child ) 
 
  );

/**
  * @var 
  * @property TOOLTIP_STRING_TYPE_ONLY
  * defined to TOOLTIP Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  $validationV2::$tooltips_validate_tag  = $validationV2::tooltips_validate_tag( 'username' );   
    
   if( ( $validationV2::$tooltips_validate_tag == MINLENGTH )  || ( $validationV2::$tooltips_validate_tag == CONTAIN_SPECIALCHAR )  || is_null( $validationV2::$tooltips_validate_tag) ) 
   {

     _xSTYLE( ' .red { color: red; } .green { color: green; } ' );
     
    $first_child_attr =  [
       
      ['class'],
      [ (  !empty( $validationV2::$tooltips_validate_tag ) &&  $validationV2::$tooltips_validate_tag == MINLENGTH ) ? 'red' : 'green' ]
    
    ];

    $second_child_attr = [
        
      [ 'class' ],
      [ ( (!empty( $validationV2::$tooltips_validate_tag ) &&  $validationV2::$tooltips_validate_tag == MINLENGTH ) || (!empty( $validationV2::$tooltips_validate_tag ) &&  $validationV2::$tooltips_validate_tag == CONTAIN_SPECIALCHAR )  ) ? 'red' : 'green' ]
    
    ];

    $validationV2::$tooltips =  _xUL( 'tooltips',
      
       ELEM('li', 'Not less than 8 Characters'             , $first_child_attr  ) 
      .ELEM('li', 'Must have atleast 1 Special Character'  , $second_child_attr )
      
      ,FUNC_ASSOC );

   }

  $validationV2::$tooltips_email_tag  = $validationV2::tooltips_validate_tag( 'email' );   
    
   if( ( $validationV2::$tooltips_email_tag == VALID_EMAIL ) || is_null( $validationV2::$tooltips_email_tag) ) 
   {

     _xSTYLE( ' .red { color: red; } .green { color: green; } ' );
     
    $first_child_attr =  [
       
      ['class'],
      [ (  !empty( $validationV2::$tooltips_email_tag ) &&  $validationV2::$tooltips_email_tag == VALID_EMAIL ) ? 'red' : 'green' ]
    
    ];

    $validationV2::$tooltips_email =  _xUL( 'tooltips' ,
      
       ELEM('li', 'Must be Valid Email ex. youremail@domain.com' , $first_child_attr  ) 
      
      , FUNC_ASSOC );

  }

  } # END POST METHOD FORM SUBMIT !


/*******************************************************************
 * PROGRAM FOR ID_SECTION : contact-form
 *******************************************************************/

 _div( [['id'],['contact']] );
 _FORM( attr : setElemAttr(['action','method'],[ htmlspecialchars($_SERVER["PHP_SELF"]), 'POST']));
  
  // attributes 
  $username_attr = [
      
    ['id'] ,
    ['user_name_con']

   ];

  $username_input_attr = [
      
     ['name'     ,  'value'],
     ['username' ,  !empty($validationV2::$request_value[0]) ? $validationV2::$request_value[0] : false ]

   ];
  
  $user_name =  ELEM('div', (!empty($validationV2::$tooltips)) ? $validationV2::$tooltips : false )
               .FORM::LABEL('label_username' , 'Username: '                        , FUNC_ASSOC )
               .FORM::TEXT('username'        , 'username'   , $username_input_attr , FUNC_ASSOC );

  $last_name_attr = [
      
    ['id'],
    ['last_name_con']

   ];

  $last_name_input_attr = [
      
    ['name'      , 'value'],
    ['last_name' , !empty($validationV2::$request_value[1]) ? $validationV2::$request_value[1] : false  ]

   ];

  $last_name =  FORM::LABEL('label_last_name' , 'Last name: '                          , FUNC_ASSOC )
               .FORM::TEXT('last_name'        , 'last_name'   , $last_name_input_attr  , FUNC_ASSOC );

  $email_attr = [
      
    ['id'       ],
    ['email_con']

   ];

  $email_input_attr = [
      
    ['name'  , 'value'],
    ['email' , !empty($validationV2::$request_value[2]) ? $validationV2::$request_value[2] : false  ]

   ];

  $email =  ELEM('div', (!empty($validationV2::$tooltips_email)) ? $validationV2::$tooltips_email : false )
           .FORM::LABEL('email' , 'Email: '                     , FUNC_ASSOC )
           .FORM::TEXT('email'  , 'email'  , $email_input_attr  , FUNC_ASSOC );


  $website_attr = [
      
    ['id'],
    ['website_con']

   ];

  $website = FORM::LABEL('website' , 'Website: '                          , FUNC_ASSOC )
            .FORM::TEXT('website'  , 'website'   , [['name'],['website']] , FUNC_ASSOC );
  
  $message_attr = [
      
    ['id'],
    ['messages_con']

   ];

  $message = FORM::LABEL('message'     , 'Message: '                  , FUNC_ASSOC  )
            .FORM::TEXTAREA('message'  , '' , [['name'],['message']]  , FUNC_ASSOC  );

  $contact_form  = _xdiv( 'contact-form' ,
  
     ELEM('div', $user_name , $username_attr  )
    .ELEM('div', $last_name , $last_name_attr )
    .ELEM('div', $email     , $email_attr     )
    .ELEM('div', $website   , $website_attr   )
    .ELEM('div', $message   , $message_attr   )

    .FORM::BUTTONS('submit', 'submit' , [['value'],['submit']] , FUNC_ASSOC ) 

    ,FUNC_ASSOC
           
  );
 
 /*******************************************************************
 * PROGRAM FOR ID_SECTION : contact-form
 *******************************************************************/

  echo (!empty( $contact_form )) ? $contact_form : null;

 xFORM();
 xdiv('END-OF-contact');












 