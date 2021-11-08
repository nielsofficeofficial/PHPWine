<?php 

use \PHPWine\VanillaFlavour\System\Auth;
use \PHPWine\VanillaFlavour\System\Request;
use \PHPWine\VanillaFlavour\Optimizer\Form;

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

AUTH::USERAUTH('dashboard', true); 

$username = $password = $err_username =  $err_password = $auth_err = '';

if($_SERVER["REQUEST_METHOD"] == "POST") : 
 
    $un           = AUTH::$DATAFORM = ["username","Enter username or email or mobile"];
    $username     = AUTH::HASCONTAINS($un);  
    $err_username = AUTH::ERROR($username, $un);

    $pw           = AUTH::$DATAFORM = ["password","Please enter valid associated password."];
    $password     = AUTH::HASCONTAINS($pw);  
    $err_password = AUTH::ERROR($password, $pw);

    $auth_err    = AUTH::BIND($connection, 
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

  $sets_eCatch = _xUL( 'id-eCatch_err' ,
   
   DOIF( !empty($err_username)   ,ELEM('li' ,$err_username ,setElemAttr(['class'],['err_username_msg'])) ,FUNC_ASSOC)
  .DOIF( !empty($err_password)   ,ELEM('li' ,$err_password ,setElemAttr(['class'],['err_password_msg'])) ,FUNC_ASSOC)
  .DOIF( !empty($auth_err)       ,ELEM('li' ,$auth_err     ,setElemAttr(['class'],['err_password_msg'])) ,FUNC_ASSOC)
 
 ,null
 ,'eCatch_error'
 ,'end-of-id-eCatch_err'
 ,FUNC_ASSOC
 
);

echo (!empty($sets_eCatch)) ? $sets_eCatch : ''; 

  _FORM(setElemAttr(['action','method'],[ htmlspecialchars($_SERVER["PHP_SELF"]), 'POST']));
 
  _xDIV( 'id-login',
     FORM::LABEL('label-id-un'  , 'Username/Email/Mobile' , FUNC_ASSOC ) .__BR(FUNC_ASSOC)
    .FORM::TEXT('id-username'   , 'class-username'        , [['name', 'value'] , ['username',  (isset($_COOKIE['username'])) ? $_COOKIE['username'] :  $username ]], FUNC_ASSOC ) 
    
   ,setElemAttr(['class'],['username_from_group'])
  );

 _xDIV( 'login-password',
    FORM::LABEL('label-id-un'    , 'Password'        , FUNC_ASSOC ) .__BR(FUNC_ASSOC)
   .FORM::PASSWORD('id-username' , 'class-username'  , [['name', 'value'] , ['password', (isset($_COOKIE['password'])) ? $_COOKIE['password'] :  $password ]], FUNC_ASSOC ) 

  ,setElemAttr(['class'],['username_from_group'])
 );

  _xDIV('checkbox-remeberme',
     FORM::CHECKBOX('checkbox' , 'class-checkbox' , [['name', ''] , ['remember', (isset($_COOKIE["username"])) ? 'checked' : false ] ], FUNC_ASSOC ) 
    .FORM::LABEL('label-id-un' , 'Remember me'    , FUNC_ASSOC ) 
    
   ,setElemAttr(['class'],['rememberme_from_group'])
  );

  _xDIV('id-submit', FORM::BUTTONS( 'id-conPassword','class-submit', [['value'],['Submit']], FUNC_ASSOC ) ,setElemAttr(['class'],['submit_from_group']));
  
  _xDIV( 'singup-id', ELEM('p','Don\'t have an account?'.ELEM('a','Sign up now',[['href'],['register.php']]) ));


 xFORM(" END Of the form ");
