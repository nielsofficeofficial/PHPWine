<?php 

use \PHPWine\VanillaFlavour\System\Auth;
use \PHPWine\VanillaFlavour\System\Request;

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
 */
  
/**
 *
 * Defined If the session is true or active then redirect to certain page!
 * @since 04.05.21
 * @since v1.0
 * 
 **/ 
AUTH::USERAUTH('dashboard', true); 

/**
 * 
 * Defined Defined vars initialize with empty values
 * @since 04.05.21
 * @since v1.0
 *
 **/ 
$username = $password = $err_username =  $err_password = $auth_err = '';

/**
 *
 * Defined Make request for data formlogin when submit it !
 * @since 04.06.21
 * @since v1.0
 *
 **/ 
if($_SERVER["REQUEST_METHOD"] == "POST") : 
 
   /**
    *
    * Defined Check if username has contains
    * @since 04.06.21
    * @since v1.0
    *
    **/ 
    $un           = AUTH::$DATAFORM = ["username","Enter username or email or mobile"];
    $username     = AUTH::HASCONTAINS($un);  
    $err_username = AUTH::ERROR($username, $un);

   /**
    *
    * Defined Check if password has contains
    * @since 04.06.21
    * @since v1.0
    *
    **/ 
    $pw           = AUTH::$DATAFORM = ["password","Please enter valid associated password."];
    $password     = AUTH::HASCONTAINS($pw);  
    $err_password = AUTH::ERROR($password, $pw);

   /**
    *
    * Defined Default|CaseSensitive = ["username","email","mobile","password"...etc...]
    * @since 04.06.21
    * @since v1.0
    *
    **/ 
    $auth_err    = AUTH::BIND($mySQLi, 
    [   
       
        'QUERY_STATEMENT'         => AUTH::RETURNSQL('users_log',['username','email','mobile','password','id','created_at'])
       ,'USERNAME_HASCONTAINS'    => $username 
       ,'USERNAME_ERROR'          => $err_username
       ,'PASSWORD_HASCONTAINS'    => $password
       ,'PASSWORD_ERROR'          => $err_password
       ,'NOTEXIST_CREDENTIAL'     => "USERNAME OR PASSWORD IS NOT ACCOSIATED WITH OUR SYSTEM" // email and password not exist to system
       ,'NOTASSOCIATED_CREDENTIAL'=> "INVALID CREDENTIALS ! NOT YET ACCOSIATED WITH OUR SYSTEM!" // either password/mobile/email/username is not assciated to system
       ,'USER_REDIRECT'           => "dashboard"

    ], REQUEST::SESSION_PORTAL_REQUEST ); 

  endif;

  _xH3("PHP Authentication Pretty Easy v1.2!");
  _xH6("Welcome to Login page");
  

 /**
  *
  * Defined error message handler reg form !
  * @since 0.06.21
  * @since v1.2
  *
  **/ 
  $sets_eCatch = _xUL(
   
   DOIF( !empty($err_username)   ,ELEM('li' ,$err_username ,setElemAttr(['class'],['err_username_msg'])) ,FUNC_ASSOC)
  .DOIF( !empty($err_password)   ,ELEM('li' ,$err_password ,setElemAttr(['class'],['err_password_msg'])) ,FUNC_ASSOC)
  .DOIF( !empty($auth_err)       ,ELEM('li' ,$auth_err     ,setElemAttr(['class'],['err_password_msg'])) ,FUNC_ASSOC)
 
 ,null
 ,'eCatch_err'
 ,'eCatch_error'
 ,'eCatch_err_messages'
 ,FUNC_ASSOC
 
);

echo (!empty($sets_eCatch)) ? $sets_eCatch : ''; 

 /**
  *
  * Defined BEGIN the Login Form !
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
  _FORM(setElemAttr(['action','method'],[ htmlspecialchars($_SERVER["PHP_SELF"]), 'POST']));
 
 /**
  *
  * Defined Input username
  * @since 04.06.21
  * @since v1.0
  * 
  **/ 
  _xdiv(
     ELEM('label','Username/Email/Mobile' ) 
    .__BR(FUNC_ASSOC) 
    .__HTML('username','input' , setElemAttr(['type','name','value'],['text','username', (isset($_COOKIE['username'])) ? $_COOKIE['username'] :  $username ]) , 'username', (!empty($err_username)) ? 'invalid' : '' ,FUNC_ASSOC)
    
   ,setElemAttr(['class'],['username_from_group'])
  );

 /**
  *
  * Defined Input password
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
 _xdiv(
   ELEM('label','password' ) 
   .__BR(FUNC_ASSOC)
   .__HTML('password','input' , setElemAttr(['type','name','value'],['password','password', (isset($_COOKIE['password'])) ? $_COOKIE['password'] :  $username]) , 'password', (!empty($err_password)) ? 'invalid' : '' , FUNC_ASSOC)

  ,setElemAttr(['class'],['username_from_group'])
 );

 /**
  *
  * Defined checkbox remember me
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
  _xdiv(
  __HTML('checkbox','input' ,setElemAttr(['type','name',''],['checkbox','remember', (isset($_COOKIE["username"])) ? 'checked' : false ]) , 'checkbox', '' , FUNC_ASSOC)
  .ELEM('label','Remember me' )

 ,setElemAttr(['class'],['username_from_group'])
);

 /**
  *
  * Defined Input btn submit
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
 _xdiv(
   __HTML('submit-btn','input' ,setElemAttr(['type','class','value'],['submit','btn-submit','Login']), '','', FUNC_ASSOC)

  ,setElemAttr(['class'],['submit_from_group'])
 );
  
 /**
  *
  * Defined Link register form
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
 _xP("Don't have an account?".ELEM('a','Sign up now',setElemAttr(['href'],['register.php'])));


 xFORM(" END Of the form ");
