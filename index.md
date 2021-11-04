<img src="https://img.shields.io/badge/license-MIT-blue"> <img src="https://www.code-inspector.com/project/29588/score/svg"> <img src="https://www.code-inspector.com/project/29588/status/svg"> 
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/nielsofficeofficial/PHPWine) 
![GitHub repo size](https://img.shields.io/github/repo-size/nielsofficeofficial/PHPWine) 
![Lines of code](https://img.shields.io/tokei/lines/github/nielsofficeofficial/PHPWine) 
![GitHub Release Date](https://img.shields.io/github/release-date/nielsofficeofficial/PHPWine)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/nielsofficeofficial/PHPWine/graphs/commit-activity) 
![Maintainer](https://img.shields.io/badge/maintainer-NielsOffice-green) 
![GitHub contributors](https://img.shields.io/github/contributors/nielsofficeofficial/PHPWine?color=blue)
[![GitHub Release](https://img.shields.io/github/release/nielsofficeofficial/PHPWine.svg?style=flat)](https://github.com/nielsofficeofficial/PHPWine/releases) 
![GitHub last commit](https://img.shields.io/github/last-commit/nielsofficeofficial/PHPWine)
[![Issues](https://img.shields.io/github/issues-raw/nielsofficeofficial/PHPWine.svg?maxAge=25000)](https://github.com/nielsofficeofficial/PHPWine/issues) 
[![Active](http://img.shields.io/badge/Status-Active-green.svg)](https://nielsofficeofficial.github.io/PHPWine/) 
[![Ask Me Anything !](https://img.shields.io/badge/Ask%20me-anything-1abc9c.svg)](https://github.com/nielsofficeofficial/PHPWine/issues/new) 
# PHPWine - (Vanilla Flavour) 
Support PHP v7.4.9 and v8++ 

PHPWine v1.0 (Vanilla Flavour) design for corePHP and WordPress Cloud system application development. <br />
<i>Vanilla Flavour: Vanilla flavour means you can use methods outside the class precisely as native PHP functions.</i>

PHP code encrypted, PHP Library, Code designer and Optimizer, Html-minifier Advance Form builder, Form Validation and more... 

- Authentication
- Login Form
- Registration
- Reset Password
- Register Email confirmation
- Recovery Email confirmation
- Handling Form Validation
- PHPOptimizer v1.0 (stable)
- Advance Form Builder <i>(Optimizier v1.0 (stable))</i>

<h3>Downloading Library/Repository:</h3>

```PHP

// Clone repository from githug | GitBus | CMD | CLi
$ git clone https://github.com/nielsofficeofficial/PHPWine
```
```PHP
// Download Repository via Composer | Packagist
composer require phpwinevanillaflavour/phpwine

```
<h3>Library Installation:</h3>

```PHP
// Install on header.php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library/PHPWine/PHPWine.php';

use \PHPWine\VanillaFlavour\Merge\Html;
use \PHPWine\VanillaFlavour\Optimizer\Html as Optimizer;
use \PHPWine\VanillaFlavour\Optimizer\Enhancers as OptimizerCare; 

$Html     = new Optimizer();
$Enhancer = new OptimizerCare();

```
<h3>Method file Installation:</h3>

```PHP

// Use on every pages
use \PHPWine\VanillaFlavour\Optimizer\Form;
use \PHPWine\VanillaFlavour\Merge\Html;
use \PHPWine\VanillaFlavour\System\Auth;
use \PHPWine\VanillaFlavour\System\Request;
use \PHPWine\VanillaFlavour\System\Validation;

```
<h3>SQL demo for Authentication and Handling form Validation :</h3>

```PHP

 // Create database table for user run with SQL environment for demo file
 
 CREATE TABLE IF NOT EXISTS `users_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(65) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

 ```
<h2><b>Initial Documentation:</b></h2>
<h3>Prepare Initialize User Request/Data</h3>

```PHP
$un           = AUTH::$DATAFORM = [string $inputName, string $err_msg];
$username     = AUTH::HASCONTAINS($un);  
$username_err = AUTH::ERROR($username, $un); 
```
<h3>Handling Bind Parameters</h3>

```PHP
// Constant param
SESSION_PORTAL_REQUEST
SESSION_ENCRYPTDATA_REQUEST     

```
```PHP
Usage: 
// Handling bind user data session portal param
$auth_err    = AUTH::BIND(string $db, 
[   
  // SESSION_PORTAL_REQUEST Params     
  'QUERY_STATEMENT'         => AUTH::RETURNSQL(string $db,[string $colNames])
 ,'USERNAME_HASCONTAINS'    => string $username 
 ,'USERNAME_ERROR'          => string $err_username 
 ,'PASSWORD_HASCONTAINS'    => string $password
 ,'PASSWORD_ERROR'          => string $err_password
 ,'NOTEXIST_CREDENTIAL'     => string $err_msg
 ,'NOTASSOCIATED_CREDENTIAL'=> string $err_msg
 ,'USER_REDIRECT'           => string $pageName

], SESSION_PORTAL_REQUEST );

```
```PHP
Usage: 
// Handling bind user data session registerdata param
$auth_un_err  = AUTH::BIND(string $db, 
[   
   // SESSION_REGISTERDATA_REQUEST Params  
  'QUERY_STATEMENT'    => AUTH::RETURNSQL(string $db,[int $col_id],[string $inputName])
 ,'INPUT_HASCONTAINS'  => string $username
 ,'INPUT_DATAEXIST'    => string $err_msg
  
 ], SESSION_REGISTERDATA_REQUEST ); 

```
<h3>Handling Form Validation</h3>

```PHP
// Constant param
LESS_THAN 
MINLENGTH
MAXLENGTH
EQUALTO
EQUAL_STRICT
GREATER_THAN
VALID_EMAIL
STRINGTYPE
NUMERICTYPE
INTEGERTYPE
FLOATTYPE
CONFIRMPASSWORD
CONTAIN_UPPERCASE
CONTAIN_LOWERCASE
CONTAIN_NUMBER
CONTAIN_SPECIALCHAR
VALIDPASSWORD 

Getting Array Argument:
// First Set Validation param you need ex. below :
$err_catch = AUTH::CATCH( $err_input, $err_bind, $validType = [
   
   // Stay empty array to figure out the argument
   // Click Submit button or run the program then the error message will popup 
   // Then the arguments will show to you included data type
   // Otherwise go with documentation | Documentation is currently on going.. .
   STRINGTYPE   => [ ]
       
]); 

Usage: 
// Handling Validation Catch method
$err_catch = AUTH::CATCH( $err_input, $err_bind, $validType = [
       
   STRINGTYPE   => [USERNAME,'No special character letter and space are allowed'],
   MAXLENGTHT   => [USERNAME,5,'Not more than 5 characters!']
       
]); 

// FORM Validation
$validation = VALIDATION::FORM( $userpassword_err, $validType = [
        
    MINLENGTH        => ['password', 8,'Password must have atleast 8 characters.'],
    VALIDPASSWORD    => ['password',   'Requere password has at least 8 characters + one number + one upper case letter + one lower case letter and one special character.' ],
    CONFIRMPASSWORD  => [$userpassword, $conpassword,  'Not Match!'  ] 
    
]);

```
<h3>Display all Error in one time & Design errors static PHP in one time return result (tooltips) !  </h3>


```PHP

 // Display all Error in one time
 $catch_un      = VALIDATION::FORM( $username_err, $validType = [
       
 MINLENGTH      => [ 'username', 7, 'MINLENGTH' ], // 'MIN of 7 characters!'
 STRINGTYPE     => [ 'username', 'STRINGTYPE' ] // Must be Alphanumeric
      
]);

// Design errors static PHP in one time return result !
$eCatch_ =  _xUL( 'id-eCatch_err',
   
   _xSTYLE( '
             
             .green { color: green; }
             .red { color: red;   } 

             ' 
             , null, ' Display all Error in one time ', FUNC_ASSOC ) 
    .DOIF( ( $catch_un == 'MINLENGTH' ||  $catch_un == 'STRINGTYPE') || is_null($catch_un) 
    ,_xUL( 'Child_id',
     ELEM('li','MIN of 7 characters!' ,setElemAttr(['class'],[ (   !empty($catch_un) && $catch_un == 'MINLENGTH' ) ? 'red' : 'green' ] ))
    .ELEM('li','Must be Alphanumeric' ,setElemAttr(['class'],[ (  (!empty($catch_un) && $catch_un == 'MINLENGTH') || (!empty($catch_un) && $catch_un == 'STRINGTYPE') ) ? 'red' : 'green' ] )) 
  
    ,setElemAttr(['class'],['err_username_msg']), 'Child_Class', 'end-of-Child_id' , FUNC_ASSOC) , FUNC_ASSOC)

,null
,'eCatch_error'
,'end-of-id-eCatch_err'
,FUNC_ASSOC );

echo (!empty($eCatch_)) ? $eCatch_ : '';


```
<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my PHP Library PHPAuth-Effortless to repository<br /> 
php.net : To oppurtunity Develop web application using corePHP - PHPFrameworks<br />
</h5>

__Please kindly read license and agreement under by MIT__

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
<br />

__For suggestion and donation/sponsors you can send via GCash : +639650332900__ <br /> __Also you can send via Paypal account: syncdevprojects@gmail.com__ 
<br /><br /> Thanks and good luck! 
 

[![GitHub stars](https://img.shields.io/github/stars/nielsofficeofficial/PHPWine.svg?style=social&label=Star)](https://github.com/nielsofficeofficial/PHPWine/)
[![GitHub watchers](https://img.shields.io/github/watchers/nielsofficeofficial/PHPWine.svg?style=social&label=Watch)](https://github.com/nielsofficeofficial/PHPWine/)
[![GitHub forks](https://img.shields.io/github/forks/nielsofficeofficial/PHPWine.svg?style=social&label=Fork)](https://github.com/nielsofficeofficial/PHPWine/)
[![GitHub followers](https://img.shields.io/github/followers/nielsofficeofficial.svg?style=social&label=Follow)](https://github.com/nielsofficeofficial)
