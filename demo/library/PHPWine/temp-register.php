<?php 


use \PHPWine\VanillaFlavour\System\Auth;
use \PHPWine\VanillaFlavour\System\Request;
use \PHPWine\VanillaFlavour\System\Validation;
use \PHPWine\VanillaFlavour\Optimizer\Form;

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


 #############################################################################################################
 # THIS IS FOR DEMO DATABASE CONNECTION !!! BUILD YOUR OWN DATABSE CONENCTION BASE ON YOUR CURRENT FRAMEWORK !
 #############################################################################################################
   
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_NAME', 'auth');

  // Define new instance connection
  $connection = new mysqli( DB_SERVER , DB_USERNAME, DB_PASSWORD, DB_NAME);

 #############################################################################################################
 # THIS IS FOR DEMO DATABASE CONNECTION !!! BUILD YOUR OWN DATABSE CONENCTION BASE ON YOUR CURRENT FRAMEWORK !
 #############################################################################################################


/**
 * @param _Define variables and initialize with empty values
**/ 
$username = $email = $mobile = $catch_un = $catch_ue = $catch_um = $catch_up = $auth_up_bind = $conpassword_err =  '';

/**
 * @param _Processing form data new user register
**/ 
if($_SERVER["REQUEST_METHOD"] == "POST")
{  

  /**
   * @param _Check_error_if input errors empty | 
   * bring to very last the field accept null value on your database !
   * like sample below: $catch_um
   **/ 
   $initializeRequestError = ( 

        !empty($catch_un)     && !empty($catch_ue)    
     && !empty($catch_up)     && !empty($catch_um)    

   ) ? true : false ;

    /**
     *
     * Defined User info 
     * @since 04.12.21
     * @since v1.0
     *
     **/
    $un               =   AUTH::$DATAFORM = ["username","Please enter a username."];
    $username         =   AUTH::HASCONTAINS( input: $un);  
    $username_err     =   AUTH::ERROR( input: $username, require : $un);    

    $ue               =   AUTH::$DATAFORM = ["email","Please enter a email."];
    $email            =   AUTH::HASCONTAINS( input: $ue);  
    $email_err        =   AUTH::ERROR( input: $email, require: $ue);    

   /**
    * @param _Bind process request mobile from users
    * Bring at the very bottom as mobile accept as null value, check your database table 
    **/ 
    $um               =   AUTH::$DATAFORM = ["mobile","Please enter a Phone."];
    $mobile           =   AUTH::HASCONTAINS( input: $um);  
    $mobile_err       =   AUTH::ERROR( input: $mobile, require: $um);    

   /**    
     *
     * Defined Password 
     * @since 04.12.21
     * @since v1.0
     *
     **/
    $up               =   AUTH::$DATAFORM = ["password","Please enter a password..."];
    $userpassword     =   AUTH::HASCONTAINS( input : $up);  
    $userpassword_err =   AUTH::ERROR( input: $userpassword , require : $up);  

    $upc              =   AUTH::$DATAFORM = ["confirm_password","Please confirm password..."];
    $conpassword      =   AUTH::HASCONTAINS( input : $upc);  
    $conpassword_err  =   AUTH::ERROR( input : $conpassword,  require : $upc);  



   /**
    *  VALIDATE BIND BEGIN 
    **/ 
  
   /**
    * @param _Bind process request unsername from users
    **/ 

    $auth_un_bind  = AUTH::BIND( connection : $connection, 

    bind_user_data : [   
    
        'QUERY_STATEMENT'    => AUTH::RETURNSQL('users_log',["id"],["username"])
       ,'INPUT_HASCONTAINS'  => $username  
       ,'INPUT_DATAEXIST'    => "This {$username} was already used."
  
    ], request : REQUEST::SESSION_REGISTERDATA_REQUEST ); 

  /**
    * @param _Bind process request email from users
    **/ 
    $auth_ue_bind  = AUTH::BIND($connection, 
    [   
    
        'QUERY_STATEMENT'    => AUTH::RETURNSQL('users_log',["id"],["email"])
       ,'INPUT_HASCONTAINS'  => $email  
       ,'INPUT_DATAEXIST'    => "This {$email} was already used."
  
    ], REQUEST::SESSION_REGISTERDATA_REQUEST); 

   /**
    * @param _Bind process request mobile from users
    * Bring at the very bottom as mobile accept as null value, check your database table 
    **/ 
    $auth_um_bind  = AUTH::BIND($connection, 
    [   
    
        'QUERY_STATEMENT'    => AUTH::RETURNSQL( table : 'users_log', col_id : ["id"], col_name : ["mobile"])
       ,'INPUT_HASCONTAINS'  => $mobile  
       ,'INPUT_DATAEXIST'    => "This {$mobile} was already used."
  
    ], REQUEST::SESSION_REGISTERDATA_REQUEST); 

   /**
    * @param _Validate information request email from users
    * Bring at the very bottom as mobile accept as null value, check your database table 
    **/ 
    $catch_um = AUTH::CATCH(input_error :  $mobile_err , bind_error : $auth_um_bind, valid_type :  $valid_type = [
       
      NUMERICTYPE   => ['mobile' ,'Phone must be numeric ex. 123'],
      MAXLENGTH     => ['mobile' , 11 ,'Mobile number must be maximum 11 Digit!'],
      MINLENGTH     => ['mobile' , 4  ,'Mobile number must greater than 4 Digit!']
  
   ]);
    


   /**
    * @param _Validate information request unsername from users
    **/ 
    $catch_un       = AUTH::CATCH( $username_err, $auth_un_bind, $valid_type = [
       
     MINLENGTH      => [ 'username', 7, 'MIN of 7 characters!' ]
      
    ]);

   /**
    * @param _Validate information request email from users
    **/ 
    $catch_ue = AUTH::CATCH($email_err, $auth_ue_bind, $valid_type = [
       
      VALID_EMAIL   => ['email','must be valid email']
 
    ]);

   /**
    * @param _Validate information request passwords from users
    **/ 
    $catch_up = VALIDATION::FORM( input_error: $userpassword_err, valid_type: $valid_type = [
      
      MINLENGTH        => ['password', 8,'Password must have atleast 8 characters.'],
      VALIDPASSWORD    => ['password',   'Requere password has at least 8 characters + one number + one upper case letter + one lower case letter and one special character.' ],
      CONFIRMPASSWORD  => [ $userpassword, $conpassword,  'Not Match!'  ] 
    
    ]);


        /**
         * @param _process_Check input errors empty
        **/    
        if( isset($initializeRequestError) == true ) :
            
            /**
             * @param _Prepare insert statement clean up sql
            **/            

            if($stmt = $connection->prepare( AUTH::BINDSQL( 'users_log', ['username', 'email', 'mobile', 'password'] , ['?', '?', '?' , '?']) ) ) : 

                /**
                * @param _Bind variables statement as parameters
                **/ 
                $stmt->bind_param("ssss", $param_username, $param_email, $param_mobile, $param_password);

                /**
                * @param _parameters
                **/ 
                $param_username =  DOIF(is_null($catch_un)   ,  $username      , FUNC_ASSOC);
                $param_email    =  DOIF(is_null($catch_ue)   ,  $email         , FUNC_ASSOC);
                $param_mobile   =  DOIF(is_null($catch_um)   ,  $mobile        , FUNC_ASSOC);
                $param_password =  DOIF(is_null($catch_up)   ,  password_hash( $userpassword , PASSWORD_DEFAULT) , FUNC_ASSOC);
                
                /**
                * @param _execute the prepared statement /  redirect
                **/ 
                AUTH::BINDEXECUTE( redirect : 'login', report : ERROR_DEVELOPER_CONCERN);        
   
               /**
                * @param _Close statement
                **/
                $stmt->close();

            endif;

        endif;
        
        /**
         * @param _Close connection
        **/
        $connection->close();
   
 }


 /**
  *
  * Defined error message handler reg form !
  * @since 0.06.21
  * @since v1.0
  *
  **/ 
  $eCatch_errors =  _xUL( 'id-eCatch_err',
   
    DOIF( !empty($catch_un)        ,ELEM('li' , $catch_un        ,setElemAttr(['class'],['err_username_msg']))     ,FUNC_ASSOC)
   .DOIF( !empty($catch_ue)        ,ELEM('li' , $catch_ue        ,setElemAttr(['class'],['err_user_email_msg']))   ,FUNC_ASSOC)
   .DOIF( !empty($catch_um )       ,ELEM('li' , $catch_um        ,setElemAttr(['class'],['err_user_mobile_msg']))  ,FUNC_ASSOC)
   .DOIF( !empty($catch_up)        ,ELEM('li' , $catch_up        ,setElemAttr(['class'],['err_con_password_msg'])) ,FUNC_ASSOC)
   .DOIF( !empty($conpassword_err) ,ELEM('li' , $conpassword_err ,setElemAttr(['class'],['err_password_msg']))     ,FUNC_ASSOC)

 ,null
 ,'eCatch_error'
 ,'end-of-id-eCatch_err'
 ,FUNC_ASSOC

 );
  
 echo (!empty($eCatch_errors)) ? $eCatch_errors : '';

 /**
  *
  * Defined BEGIN the register new user Form !
  * @since 09.18.21
  * @since v1.0
  *
  **/ 
  _FORM( attr : setElemAttr(['action','method'],[ htmlspecialchars($_SERVER["PHP_SELF"]), 'POST']));
  
 /**
  *
  * Defined Input email
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
 _xdiv( 'id-username_from_group',
   
    FORM::LABEL('label-id-un' , 'Username'       , FUNC_ASSOC ) .__BR(FUNC_ASSOC)
   .FORM::TEXT('id-username'  , 'class-username' , [['name', 'value'] , ['username', DOIF(is_null($catch_un),  $username, FUNC_ASSOC)]], FUNC_ASSOC ) 

  ,setElemAttr(['class'],['username_from_group'])
 );  
  
 /**
  *
  * Defined Input email
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
 _xdiv('id-email_from_group',
 
    FORM::LABEL('label-id-e'  , 'Email'       , FUNC_ASSOC) .__BR(FUNC_ASSOC)
   .FORM::TEXT('id-email'     , 'class-email' , [['name', 'value'] , ['email',  DOIF(is_null($catch_ue), $email, FUNC_ASSOC)  ]], FUNC_ASSOC ) 

  ,setElemAttr(['class'],['email_from_group'])
 );

 /**
  *
  * Defined Input mobile
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
 _xdiv('id-mobile_from_group',

   FORM::LABEL('label-id-m'  , 'Mobile'       , FUNC_ASSOC) .__BR(FUNC_ASSOC)
  .FORM::TEXT('id-mobile'    , 'class-mobile' , [['name', 'value'],['mobile', DOIF(is_null($catch_um), $mobile, FUNC_ASSOC) ]], FUNC_ASSOC ) 

  ,setElemAttr(['class'],['mobile_from_group'])
 );

/**
  *
  * Defined Input password
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
 _xdiv('id-password_from_group',

   FORM::LABEL('label-id-p'   , 'Password'     , FUNC_ASSOC ) .__BR(FUNC_ASSOC)
  .FORM::PASSWORD('id-mobile' , 'class-mobile' , [['name'],['password']]  , FUNC_ASSOC ) 

  ,setElemAttr(['class'],['username_from_group'])
 );

/**
  *
  * Defined Input confirm password
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
 _xdiv('id-cp_from_group',

   FORM::LABEL('label-id-confirm_password' , 'Confirm Password'  ,FUNC_ASSOC) .__BR(FUNC_ASSOC)
  .FORM::PASSWORD('id-conPassword'         , 'class-conPassword' , [['name'],['confirm_password']], FUNC_ASSOC ) 

  ,setElemAttr(['class'],['username_from_group'])
 );

/**
  *
  * Defined Input btn submit
  * @since 04.06.21
  * @since v1.0
  *
  **/ 

  _xdiv('id-button_from_group',

   FORM::BUTTONS('id-conPassword' , 'class-submit' , [['value'],['Submit']] , FUNC_ASSOC ) 
  .FORM::RESET('id-conPassword'   , 'class-submit' , [['value'],['Reset']]  , FUNC_ASSOC ) 

 ,setElemAttr(['class'],['submit_from_group'])
 );

 /**
  *
  * Defined Link register form
  * @since 04.06.21
  * @since v1.0
  *
  **/ 
  _xP('id-heading-Para',"Already have an account?".ELEM('a','Log in now',setElemAttr(['href'],['login.php'])));

  xFORM(" END Of the form ");
