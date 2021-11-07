<?php 

use \PHPWine\VanillaFlavour\System\Auth;
use \PHPWine\VanillaFlavour\System\Request;
use \PHPWine\VanillaFlavour\System\Validation;
use \PHPWine\VanillaFlavour\Optimizer\Form;

 #############################################################################################################
 # THIS IS FOR DEMO DATABASE CONNECTION !!! BUILD YOUR OWN DATABSE CONENCTION BASE ON YOUR CURRENT FRAMEWORK !
 #############################################################################################################
   
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_NAME', 'auth');

  // Define new instance connection
  $mySQLi = new mysqli( DB_SERVER , DB_USERNAME, DB_PASSWORD, DB_NAME);

 #############################################################################################################
 # THIS IS FOR DEMO DATABASE CONNECTION !!! BUILD YOUR OWN DATABSE CONENCTION BASE ON YOUR CURRENT FRAMEWORK !
 #############################################################################################################

 $username = $email = $mobile = $catch_un = $catch_ue = $catch_um = $catch_up = $auth_up_bind = $conpassword_err =  '';
 
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {  

   $initializeRequestError = ( 

        !empty($catch_un)     && !empty($catch_ue)    
     && !empty($catch_up)     && !empty($catch_um)    

   ) ? true : false ;

    $un               =   AUTH::$DATAFORM = ["username","Please enter a username."];
    $username         =   AUTH::HASCONTAINS($un);  
    $username_err     =   AUTH::ERROR($username, $un);    

    $ue               =   AUTH::$DATAFORM = ["email","Please enter a email."];
    $email            =   AUTH::HASCONTAINS($ue);  
    $email_err        =   AUTH::ERROR($email, $ue);    

    $up               =   AUTH::$DATAFORM = ["password","Please enter a password..."];
    $userpassword     =   AUTH::HASCONTAINS($up);  
    $userpassword_err =   AUTH::ERROR($userpassword , $up);  

    $upc              =   AUTH::$DATAFORM = ["confirm_password","Please confirm password..."];
    $conpassword      =   AUTH::HASCONTAINS($upc);  
    $conpassword_err  =   AUTH::ERROR( $conpassword, $upc);  

    $um               =   AUTH::$DATAFORM = ["mobile","Please enter a Phone."];
    $mobile           =   AUTH::HASCONTAINS($um);  
    $mobile_err       =   AUTH::ERROR($mobile, $um);    

    $auth_un_bind  = AUTH::BIND($mySQLi, 
    [   
    
        'QUERY_STATEMENT'    => AUTH::RETURNSQL('users_log',["id"],["username"])
       ,'INPUT_HASCONTAINS'  => $username  
       ,'INPUT_DATAEXIST'    => "This {$username} was already used."
  
    ], REQUEST::SESSION_REGISTERDATA_REQUEST ); 

    $auth_ue_bind  = AUTH::BIND($mySQLi, 
    [   
    
        'QUERY_STATEMENT'    => AUTH::RETURNSQL('users_log',["id"],["email"])
       ,'INPUT_HASCONTAINS'  => $email  
       ,'INPUT_DATAEXIST'    => "This {$email} was already used."
  
    ], REQUEST::SESSION_REGISTERDATA_REQUEST); 

    $auth_um_bind  = AUTH::BIND($mySQLi, 
    [   
    
        'QUERY_STATEMENT'    => AUTH::RETURNSQL('users_log',["id"],["mobile"])
       ,'INPUT_HASCONTAINS'  => $mobile  
       ,'INPUT_DATAEXIST'    => "This {$mobile} was already used."
  
    ], REQUEST::SESSION_REGISTERDATA_REQUEST); 
 
    $catch_un       = AUTH::CATCH( $username_err, $auth_un_bind, $validType = [
       
     MINLENGTH      => [ 'username', 7, 'MIN of 7 characters!' ]
      
    ]);

    $catch_ue = AUTH::CATCH($email_err, $auth_ue_bind, $validType = [
       
      VALID_EMAIL   => ['email','must be valid email']
 
    ]);

    $catch_up = VALIDATION::FORM( $userpassword_err, $validType = [
      
      MINLENGTH        => ['password', 8,'Password must have atleast 8 characters.'],
      VALIDPASSWORD    => ['password',   'Requere password has at least 8 characters + one number + one upper case letter + one lower case letter and one special character.' ],
      CONFIRMPASSWORD  => [ $userpassword, $conpassword,  'Not Match!'  ] 
    
    ]);

    $catch_um = AUTH::CATCH( $mobile_err ,$auth_um_bind, $validType = [
       
      NUMERICTYPE   => ['mobile' ,'Phone must be numeric ex. 123'],
      MAXLENGTH     => ['mobile' , 11 ,'Mobile number must be maximum 11 Digit!'],
      MINLENGTH     => ['mobile' , 4  ,'Mobile number must greater than 4 Digit!']
  
   ]);
    

        if( isset($initializeRequestError) == true ) :
            
            if($stmt = $mySQLi->prepare( AUTH::BINDSQL( 'users_log', ['username', 'email', 'mobile', 'password'] , ['?', '?', '?' , '?']) ) ) : 

                $stmt->bind_param("ssss", $param_username, $param_email, $param_mobile, $param_password);

                $param_username =  DOIF(is_null($catch_un)   ,  $username      , FUNC_ASSOC);
                $param_email    =  DOIF(is_null($catch_ue)   ,  $email         , FUNC_ASSOC);
                $param_mobile   =  DOIF(is_null($catch_um)   ,  $mobile        , FUNC_ASSOC);
                $param_password =  DOIF(is_null($catch_up)   ,  password_hash( $userpassword , PASSWORD_DEFAULT) , FUNC_ASSOC);
                
                AUTH::BINDEXECUTE('login', ERROR_DEVELOPER_CONCERN);        
   
                $stmt->close();

            endif;

        endif;
        
        $mySQLi->close();
   
 }

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

  _FORM(setElemAttr(['action','method'],[ htmlspecialchars($_SERVER["PHP_SELF"]), 'POST']));
  
  _xdiv( 'id-username_from_group',
    FORM::LABEL('label-id-un' , 'Username'       , FUNC_ASSOC ) .__BR(FUNC_ASSOC)
   .FORM::TEXT('id-username'  , 'class-username' , [['name', 'value'] , ['username', DOIF(is_null($catch_un),  $username, FUNC_ASSOC)]], FUNC_ASSOC ) 

   ,setElemAttr(['class'],['username_from_group'])
  );  
  
  _xdiv('id-email_from_group',
    FORM::LABEL('label-id-e'  , 'Email'       , FUNC_ASSOC) .__BR(FUNC_ASSOC)
   .FORM::TEXT('id-email'     , 'class-email' , [['name', 'value'] , ['email', DOIF(is_null($catch_um), $mobile, FUNC_ASSOC)]], FUNC_ASSOC ) 

   ,setElemAttr(['class'],['email_from_group'])
  );

  _xdiv('id-mobile_from_group',
   FORM::LABEL('label-id-m'  , 'Mobile'       , FUNC_ASSOC) .__BR(FUNC_ASSOC)
  .FORM::TEXT('id-mobile'    , 'class-mobile' , [['name', 'value'],['mobile', DOIF(is_null($catch_ue), $email, FUNC_ASSOC)]], FUNC_ASSOC ) 

   ,setElemAttr(['class'],['mobile_from_group'])
  );

  _xdiv('id-password_from_group',
   FORM::LABEL('label-id-p'   , 'Password'     , FUNC_ASSOC ) .__BR(FUNC_ASSOC)
  .FORM::PASSWORD('id-mobile' , 'class-mobile' , [['name'],['password']]  , FUNC_ASSOC ) 

   ,setElemAttr(['class'],['username_from_group'])
  );

  _xdiv('id-cp_from_group',
    FORM::LABEL('label-id-confirm_password' , 'Confirm Password'  ,FUNC_ASSOC) .__BR(FUNC_ASSOC)
   .FORM::PASSWORD('id-conPassword'         , 'class-conPassword' , [['name'],['confirm_password']], FUNC_ASSOC ) 

   ,setElemAttr(['class'],['username_from_group'])
  );

  _xdiv('id-button_from_group',
   FORM::BUTTONS('id-conPassword' , 'class-submit' , [['value'],['Submit']] , FUNC_ASSOC ) 
  .FORM::RESET('id-conPassword'   , 'class-submit' , [['value'],['Reset']]  , FUNC_ASSOC ) 

  ,setElemAttr(['class'],['submit_from_group'])
  );

  _xP('id-heading-Para',"Already have an account?".ELEM('a','Log in now',setElemAttr(['href'],['login.php'])));
 
  xFORM(" END Of the form ");
