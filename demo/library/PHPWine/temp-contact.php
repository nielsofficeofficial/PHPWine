<?php 

use \PHPWine\VanillaFlavour\Optimizer\Form; 
use \PHPWine\VanillaFlavour\system\Validate_v2 as v2; 

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.2.0.5 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.2.0.5 free software: you can redistribute it and/or modify.
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
 * @version   v1.2.0.5
 * @since     02.15.2022
 * 
 * Would you like me to treat a cake and coffee ?
 * Become a donor, Because with you! We can build more...
 * Donate:
 * GCash : +639650332900
 * Paypal account: syncdevprojects@gmail.com
 *
 */

$v2 = NEW class extends v2 {

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
            ]
          
       ],
      
      'last_name' => [

            'mandatory'  => 'Please Enter your last name',
            'tooltips'   => [],
            'valid_type' => []
      
      ],

      'email'     => [

            'mandatory'  => 'Please Enter your email',
            'tooltips'   => [ VALID_EMAIL => ['VALID_EMAIL'] ],
            'valid_type' => [ VALID_EMAIL => ['Invalid Email !'] ]
          
       ],

      'website'   => [

            'mandatory'  => 'Please Enter your website or social media',
            'tooltips'   => [],
            'valid_type' => []
          
       ],

      'message'   => [ 

            'mandatory'  => 'Please Enter your message',
            'tooltips'   => [],
            'valid_type' => []
          
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
   $v2::$request_value = $v2::sanitized_request_value( ['username','last_name','email'] );

/**
  * @var 
  * @property MANDATORY_ARRAY_TYPE 
  * defined array key to MANDATORY Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  $v2::$validate_tag  = $v2::mandatory_validate_tag(  [ 'username','last_name', 'email', 'website', 'message' ] );
  
  $attributes = [
    
     [],
     []

   ];
     
  $required  = []; foreach ($v2::$validate_tag as $value) { $required[] =  ELEM('li',  $value ); }  _xdiv( 'Required' , ELEM('UL', implode("", $required ) , $attributes ) );

/**
  * @var 
  * @property VALIDTYPE_STRING_TYPE_ONLY
  * defined to VALIDTYPE Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  $v2::$validtype_validate_tag  = $v2::validtype_validate_tag( 'username' );   
  $v2::$validtype_email_tag     = $v2::validtype_validate_tag( 'email' );   

  $valid_type_child = DOIF( !empty(  $v2::$validtype_validate_tag ) , ELEM('li',  $v2::$validtype_validate_tag ,  [['class'],['red']] ) )
                     .DOIF( !empty(  $v2::$validtype_email_tag   )  , ELEM('li',  $v2::$validtype_email_tag    ,  [['class'],['red']] ) );
                      
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
  $v2::$tooltips_validate_tag  = $v2::tooltips_validate_tag( 'username' );   
    
   if( ( $v2::$tooltips_validate_tag == MINLENGTH )  || ( $v2::$tooltips_validate_tag == CONTAIN_SPECIALCHAR )  || is_null( $v2::$tooltips_validate_tag) ) 
   {

     _xSTYLE( ' .red { color: red; } .green { color: green; } ' );
     
    $first_child_attr =  [
       
      ['class'],
      [ (  !empty( $v2::$tooltips_validate_tag ) &&  $v2::$tooltips_validate_tag == MINLENGTH ) ? 'red' : 'green' ]
    
    ];

    $second_child_attr = [
        
      [ 'class' ],
      [ ( (!empty( $v2::$tooltips_validate_tag ) &&  $v2::$tooltips_validate_tag == MINLENGTH ) || (!empty( $v2::$tooltips_validate_tag ) &&  $v2::$tooltips_validate_tag == CONTAIN_SPECIALCHAR )  ) ? 'red' : 'green' ]
    
    ];

    $v2::$tooltips =  _xUL( 'tooltips',
      
       ELEM('li', 'Not less than 8 Characters'             , $first_child_attr  ) 
      .ELEM('li', 'Must have atleast 1 Special Character'  , $second_child_attr )
      
    ,FUNC_ASSOC );

   }

   $v2::$tooltips_email_tag  = $v2::tooltips_validate_tag( 'email' );   
    
   if( ( $v2::$tooltips_email_tag == VALID_EMAIL ) || is_null( $v2::$tooltips_email_tag) ) 
   {

    $first_child_attr =  [
       
      ['class'],
      [ (  !empty( $v2::$tooltips_email_tag ) &&  $v2::$tooltips_email_tag == VALID_EMAIL ) ? 'red' : 'green' ]
    
    ];

    $v2::$tooltips_email =  _xUL( 'tooltips' , ELEM('li', 'Must be Valid Email ex. youremail@domain.com' , $first_child_attr  ) , FUNC_ASSOC );

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
     ['username' ,  !empty($v2::$request_value[0]) ? $v2::$request_value[0] : false ]

   ];
  
  $user_name =  ELEM('div', (!empty($v2::$tooltips)) ? $v2::$tooltips : false )
               .FORM::LABEL('label_username' , 'Username: '                        )
               .FORM::TEXT('username'        , 'username'   , $username_input_attr );

  $last_name_attr = [
      
    ['id'],
    ['last_name_con']

   ];

  $last_name_input_attr = [
      
    ['name'      , 'value'],
    ['last_name' , !empty($v2::$request_value[1]) ? $v2::$request_value[1] : false  ]

   ];

  $last_name =  FORM::LABEL('label_last_name' , 'Last name: '                         )
               .FORM::TEXT('last_name'        , 'last_name'   , $last_name_input_attr );

  $email_attr = [
      
    ['id'       ],
    ['email_con']

   ];

  $email_input_attr = [
      
    ['name'  , 'value'],
    ['email' , !empty($v2::$request_value[2]) ? $v2::$request_value[2] : false  ]

   ];

  $email =  ELEM('div', (!empty($v2::$tooltips_email)) ? $v2::$tooltips_email : false )
           .FORM::LABEL('email' , 'Email: '                     )
           .FORM::TEXT('email'  , 'email'  , $email_input_attr  );


  $website_attr = [
      
    ['id'],
    ['website_con']

   ];

  $website = FORM::LABEL('website' , 'Website: '                          )
            .FORM::TEXT('website'  , 'website'   , [['name'],['website']] );
  
  $message_attr = [
      
    ['id'],
    ['messages_con']

   ];

  $message = FORM::LABEL('message'     , 'Message: '                  )
            .FORM::TEXTAREA('message'  , '' , [['name'],['message']]  );

  $contact_form  = _xdiv( 'contact-form' ,
  
     ELEM('div', $user_name , $username_attr  )
    .ELEM('div', $last_name , $last_name_attr )
    .ELEM('div', $email     , $email_attr     )
    .ELEM('div', $website   , $website_attr   )
    .ELEM('div', $message   , $message_attr   )

    .FORM::BUTTONS('submit', 'submit' , [['value'],['submit']] ) 

    ,FUNC_ASSOC
           
  );
 
 /*******************************************************************
 * PROGRAM FOR ID_SECTION : contact-form
 *******************************************************************/

  echo (!empty( $contact_form )) ? $contact_form : null;

 xFORM();
 xdiv('END-OF-contact');












 