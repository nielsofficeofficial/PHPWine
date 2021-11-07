<?php namespace PHPWine\VanillaFlavour; ?>
<?php  

 use \PHPWine\VanillaFlavour\system\Auth;  
 
/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.1.2 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.1.2 free software: you can redistribute it and/or modify.
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
 * @version   v1.1.2
 *
 */

trait RequestSession
{

/**
  *
  * Defined SYSTEMQUERY PREPARED STATEMENTS
  * @since 03.19.21
  * @since v1.0
  * 
 **/
 public static function SYSTEMQUERY(string $USER_REDIRECT, string $NOTASSOCIATED_CREDENTIAL, $PASSWORD_HASCONTAINS, $stmt)
 {
  
    // Initialize bind going to be empty variables
   $username = $email = $mobile = $hashed_password = $id = $created_at  = "";

  /**
  *
  *
  * @param _1 $username
  * @param _2 $email
  * @param _3 $mobile
  * @param _4 $hashed_password
  * @param AUTH::BIND( $mySQLi, array $returnData = [] ); 
  * @param Default|CaseSensitive = ["username","email","mobile","password"...etc...]
  * @param 
     AUTH::RETURNSQL('users',[
        "username"
        ,"email"
        ,"mobile"
        ,"password"
        ,"id"
        ,"created_at"
     ]);
  *
  *
  *
  **/
  $stmt->bind_result($username, $email, $mobile, $hashed_password, $id, $created_at);
  
  if($stmt->fetch()) : 
        
        /**
         * @param _execute veryfied password
        **/
        if(password_verify($PASSWORD_HASCONTAINS, $hashed_password)) : 
         
        /**
         *
         * Defined IMPLEMENT USER REMEMBER ME Cookies
         * @since 04.06.21
         * @since v1.0
         *
         **/ 
         $getStamp = AUTH::REMEMBERME( REMEMBER , USERNAME , PASSWORD

          ,$username
          ,$PASSWORD_HASCONTAINS
          ,$timeStamp = [

          TIMES_STAMP_COOKIES_IN_TIME => [time() + (10 * 365 * 24 * 60 * 60) , time() + (10 * 365 * 24 * 60 * 60) ]

         ]);
         
        /**
         *
         * Defined password is associated then create seasion id
         * @since 04.06.21
         * @since v1.0
         *
         **/ 
         session_regenerate_id();
                           
         // ADD YOUR SESSION DATA GOES HERE
         $_SESSION["AUTH"]       = true;
         $_SESSION["id"]         = $id;
         $_SESSION["username"]   = $username;   
         $_SESSION["created_at"] = $created_at; 

 
             
    

         /**
         *
         *
         *
         * Defined if the session is set to be TRUE the redirect to certain page
         * @since 04.06.21
         * @since v1.0
         *
         *
         *
         **/ 
         AUTH::USERAUTH($USER_REDIRECT, true);
        
         // IF SESSION IF FALSE MEANS ERROR RETURN ERROR MSG
         else :

          /**
           *
           * Defined fail credentials error message will return 
           * @since 04.06.21
           * @since v1.0
           *
          **/ 
          return $NOTASSOCIATED_CREDENTIAL;
        
        endif; // verify data

  endif; // fetch data

 }



}



        