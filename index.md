<img src="https://img.shields.io/badge/license-MIT-blue"> <img src="https://www.code-inspector.com/project/29588/score/svg"> <img src="https://www.code-inspector.com/project/29588/status/svg"> 
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/nielsofficeofficial/PHPWine) 
![GitHub repo size](https://img.shields.io/github/repo-size/nielsofficeofficial/PHPWine) 
![Lines of code](https://img.shields.io/tokei/lines/github/nielsofficeofficial/PHPWine) 
![GitHub Release Date](https://img.shields.io/github/release-date/nielsofficeofficial/PHPWine)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/nielsofficeofficial/PHPWine/graphs/commit-activity) 
![Maintainer](https://img.shields.io/badge/maintainer-NielsOffice-green) 
![GitHub contributors](https://img.shields.io/github/contributors/nielsofficeofficial/PHPWine?color=blue)
[![GitHub Release](https://img.shields.io/github/release/nielsofficeofficial/PHPWine.svg?style=flat)](https://github.com/nielsofficeofficial/PHPWine/releases) 
![Packagist Version (custom server)](https://img.shields.io/packagist/v/phpwinevanillaflavour/phpwine?color=orange)
![GitHub last commit](https://img.shields.io/github/last-commit/nielsofficeofficial/PHPWine)
[![Issues](https://img.shields.io/github/issues-raw/nielsofficeofficial/PHPWine.svg?maxAge=25000)](https://github.com/nielsofficeofficial/PHPWine/issues) 
[![Active](http://img.shields.io/badge/Status-Active-green.svg)](https://nielsofficeofficial.github.io/PHPWine/) 
[![Ask Me Anything !](https://img.shields.io/badge/Ask%20me-anything-1abc9c.svg)](https://github.com/nielsofficeofficial/PHPWine/issues/new) 
# PHPWine - (Vanilla Flavour) 
Support PHP v8 and future++ 

PHPWine (Vanilla Flavour) design for corePHP and WordPress Cloud system application development. <br />
<i>Vanilla Flavour: Vanilla flavour means you can use methods outside the class precisely as native PHP functions.</i>

PHP code encrypted, PHP Library, Code designer and Optimizer, Html-minifier Advance Form builder, Form Validation and more... 

- PHPHtml-Optimizer / Code Designer
- Advance Form Builder <i>(Optimizier v1.0 )</i>
- Handling Form Validation
- Authentication
- Login Form
- Registration
- Reset Password
- Register Email confirmation
- Recovery Email confirmation

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
$un           = VALIDATE::$DATAFORM = [string $inputName, string $err_msg];
$username     = VALIDATE::HASCONTAINS( input : $un);  
$username_err = VALIDATE::ERROR( result : $username, require : $un); 
```
<h3>Handling Bind Parameters</h3>

```PHP
// Constant param
SESSION_PORTAL_REQUEST
SESSION_REGISTERDATA_REQUEST   

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
$auth_un_err  = VALIDATE::BIND(string $db, 
[   
   // SESSION_REGISTERDATA_REQUEST Params  
  'QUERY_STATEMENT'    => AUTH::CHECKQUERY(string $db,[int $col_id],[string $inputName])
 ,'INPUT_HASCONTAINS'  => string $username
 ,'INPUT_DATAEXIST'    => string $err_msg
  
 ]); 

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
$err_catch = VALIDATE::CATCH( $err_input, $err_bind, $validType = [
   
   // Stay empty array to figure out the argument
   // Click Submit button or run the program then the error message will popup 
   // Then the arguments will show to you included data type
   // Otherwise go with documentation | Documentation is currently on going.. .
   STRINGTYPE   => [ ]
       
]); 

Usage: 
// Handling Validation Catch method
$err_catch = VALIDATE::CATCH( $err_input, $err_bind, $validType = [
       
   STRINGTYPE   => [USERNAME,'No special character letter and space are allowed'],
   MAXLENGTHT   => [USERNAME,5,'Not more than 5 characters!']
       
]); 

// FORM Validation
$validation = VALIDATE::FORM( $userpassword_err, $validType = [
        
    MINLENGTH        => ['password', 8,'Password must have atleast 8 characters.'],
    VALIDPASSWORD    => ['password',   'Requere password has at least 8 characters + one number + one upper case letter + one lower case letter and one special character.' ],
    CONFIRMPASSWORD  => [$userpassword, $conpassword,  'Not Match!'  ] 
    
]);

```
<h3>Display all Error in one time & Design errors static PHP in one time return result (tooltips) !  </h3>


```PHP
 
 // Display all Error in one time
 // Replace NULL first argument $username_err to run one at the time
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

<h4>Demo codes | PHP with HTML Default (Wrapping Html)/Procedural</h4>

```PHP

<?php 

$html   = ""; 
$html  .= "<ul id=\"My_id_ParentTags\" class=\"MyClass\">";
    
    $datas = [];
    for ($i = 1; $i <= 10; $i++) 
    { 
     $datas[] = "<li class=\"col-sm-3\" id=\"MyList\">Count Number. " $i . "</li>";  
    }
    return implode('', $datas); 
    
$html  .= "</ul >";

// Loop and excuted
 print $html;

?>

```

<h4>Demo Codes | PHPHtml-Optimizer/Procedural</h4>

```PHP

<?php 

 function my_data() {     
  $datas = [];
    for ($i = 1; $i <= 10; $i++) 
    {
       $datas[] = html::ELEMENT('LI',$i,NULL,'myID','MyCLass',NULL); 
    }
     return implode('', $datas);  
  }
  
  // ASSOCIATED WITH FUNCTION | METHOD | CLASS it is seta s return need to perform using  PHPHtml-Optimizer  
  PERFORM ( Html::ELEMENT('UL', my_data(), NULL, 'MyID', 'MyCLass') );
  
?>

```

<h4>Demo Codes | PHP with HTML Default (IF Statement)/Procedural</h4>

```PHP

// Default HTML Procedural:
if (TRUE) {

  print "<h1>Default HTML Procedural: YES </h1> ";

} 

// Sample Code | PHPHtml-Optimizer/Procedural
// PHPHtml-Optimizer/Merge:
_xH1('heading-id',DOIF( TRUE ,'PHPHtml-Optimizer/Merge: Yes', FUNC_ASSOC));

```

<h4>Demo Codes | PHP with HTML Default (IF ELSE Statement)/Procedural</h4>

```PHP

// Default HTML Procedural:
if (FLASE) {

  print "<h1> Default HTML Procedural: YES </h1>";

} else {
   
  print "<h1> Default HTML Procedural: NO </h1>";

}

// Sample Code | PHPHtml-Optimizer/Procedural
// PHPHtml-Optimizer/Merge:
_xH1('heading-id',DOELSE( FALSE ,'Yes', 'PHPHtml-Optimizer/Merge: NO', FUNC_ASSOC));

```

```PHP

// Demo Codes | PHPHtml-Optimizer/Merge Using File Extension
// PHPHtml-Optimizer/Merge:
// SetExtension($argu);  

function setExtension($src,$path,$argu) {

   $merge = $path.$extension = Html::setFileExtension($argu);
       
    return $sets = [
        
      $attr_name = [$src],
      $attr_val  = [$merge]
       
    ];
}

Html::ELEM('id','class', 'link', setExtension('src','/../profile', __PHP__),'Profile' );

```

```PHP

// Demo Codes | PHPHtml-Optimizer/Merge Using Image Extension
// PHPHtml-Optimizer/Merge:
// SetImageExtension()

function SetImgExtension($src,$path, $argu=null) {

      $merge = $path.$extension = Html::SetFileExtension($argu);
        
       return $sets = [
         
           $attr_name = [$src],
           $attr_val  = [$merge]
        
        ];

}

$name = 'fileName';

__HTML('id','Avatar','img',SetImgExtension('src','/../'.$name.'', __PNG__ ));

```

<h4>Demo Codes | Using Method MERGE() PHPHtml-Optimizer/Procedural</h4>

```PHP

// Method USING MERGE() 1
_xHTML('id-div','div',Html::MERGE(
  
  // Heading
  _xHTML('id-div','h1','Hello World') .
  // Content
  _xHTML('id-div','div', $object->UsersList() )

 ) // End of Merge
 
 // Begin  Div Attributes & End of . Div ParentContainer
,SetElemtAttr(['attr_name'],['attr_val']), $id='ParentContainer', $class=null ); 

// Method USING MERGE() 2
USE \PHPHtml\CodeOptimizer\merge\Html; 

// BEGIN Parent
  _div('id-parent',SetElemtAttr(['id'],['ParentContainer'])); 
  
  // Begin Child
   _xdiv('id-child',Html::MERGE( 
   
     //  your code goes here...   
   
    )
 
   ,SetElemtAttr(['id'],['ChildContainer']));
  // END pf / Child Container 
 
 xdiv('END / of ParentContainer '); 
// END of / Parent Container

```

```PHP

// BONUS: 

_div('id','parentTagElement'); 

  Html::PERFORM( $getCons = [
         'do_print' => function ($trim, $trims) {
         
            $TrimThis  =  trim($trim);
            $TrimThis_ =  trim($trims);
            $merge   = $TrimThis . $check = $varVal = isset($TrimThis_) ? $TrimThis_ : '' ; 
            
            return $getReturn = $varSet = TRUE ?  $merge : 'Nope'; 
            
          }  // end of index
          
  ], FUNC_ASSOC);
  
 _xdiv(
    
    Html::MERGE(
  
     _xHTML('heading-1-id','h1',$user->allUsers,'','H1_iD') .
     _xHTML('para-id','p', $getCons['do_print']('Hello','World') ) 
     
    ) // End of merge
    
  ); // End of div
  
xdiv('END of / parentTagElement'); 

```


```PHP

// ANONYMOUS CALL_BACK
function make_merge($cb, $do) {
  return $cb; 
}

Html::PERFORM(

  make_merge('Check_cb', $cb_merge = function () {
  
   return   'Hello Merge return ';
  
  }) . $cb_merge();

);

$TrimThis = $message = 'Hello World';

Html::PERFORM(

  make_merge('Check_cb', $do_merge = function () use ($message) { return  $message; }) 
  . $do_merge() 
);

// RETURN CALL_BACK
_xdiv('id-container', Html::MERGE( 

   _xHTML('id','div', make_merge('CHECK_IF_TRUE_THEN', $cb_merge = function () use ($TrimThis)  { 
   
         $merge   = $TrimThis . $check = $varVal = isset($TrimThis_) ? $TrimThis_ : '' ; 
         return $getReturn = $varSet = TRUE ?  $merge : 'Nope'; 
   
   }) 
  )  
 ) . _xHTML('heading-id','h1',$cb_merge()) <br />
);

```

<h5>Understanding Class Method Parameters</h5>

| PARAMETER'S    | Description |
| ---            | ---         |
| `METHOD_ASSOC` | Is a Paramenter that will use and position to the very end of function or methods Optional Associated |
| `CLASS_ASSOC`  | Is a Paramenter that will use and position to the very end of function or methods Optional Associated |
| `FUNC_ASSOC`   | Is a Paramenter that will use and position to the very end of function or methods Optional Associated |


```PHP

// EXTENDING PHPHtml-Optimizer CLASSES
USE \PHPHtml\CodeOptimizer\merge\Html;
USE \PHPHtml\CodeOptimizer\optimizer\Html AS MyProjectName;
USE \PHPHtml\CodeOptimizer\optimizer\Enhancers AS OptimizerCare; 

Class ProgramName extends MyProjectName {
  
  public function __construct() {
   
   $this->H1('Hello World'); 

   }

}

```

<h5>Usage: Static Method | More Samples with Parameters</h5>

```PHP

// Html Custom attributes: 
 function my_htmattr() {

    return $sets = [

      $attr_name = ['1','2'],
      $attr_val  = ['_niel_','_fernandez_']  

    ];

 }
 
PERFORM ( html::H1('MyID',"Hello World",my_htmattr(),,'MyClass','End-of-MyID', FUNC_ASSOC) );

```

<h5>Static ELEMENTS and parameters </h5>

```PHP
// Associated or simply means return function
Html::ELEMENT($elem =  null , $value = null ,$attr =  null , $id = null , $class = null ,$label = null)

// Optional Associated or simply print or return if set as associated function
Html::ELEM($id=null, $class=null, $elem=null, $attr=null, $label=null, $assoc=null)

// Optional Associated or simply print or return if set as associated function
Html::H1($value=null, $attr=null, $id=null, $class=null, $label=null, $assoc=null)
Html::DIV($id=null, $value=null, $attr=null,  $class=null, $label=null, $assoc=null)

// None or never be Associated or simply print function
Html::_H1( $attr=null, $id=null, $class=null)

... content goes here ...

Html::xH1($label=null)

```

<h5 id="element">Static Methods List HTML element supported</h5>


|Opt./ASSOCIATED | HTML/Descript. | ASSOCIATED     | Opt.ASSOCIATED/Inline noneClosing tag |  None ASSOCIATED _H1(begin)/xH1(end) |
|:---            |:---            |:---            |:---                           |:---              |
| `Html::BREAK()`  | Break          | `Html::ELEMENT('H1')`    |`Html::ELEM('my_input','INPUT')`|`Html::_H1()`/`Html::xH1()`|
| `Html::LINE()`   | Line           | `Html::ELEMENT('H2')`    |`Html::ELEM('my_track','track')`|`Html::_H2()`/`Html::xH2()`|
| `Html::STRING()` | wout/Element   | `Html::ELEMENT('H3')`    |`Html::ELEM('my_circle','circle')`|`Html::_H3()`/`Html::xH3()`|
| `Html::H1()`     | Heading 1      | `Html::ELEMENT('H4')`    |`Html::ELEM('my_param','param')`|`Html::_H4()`/`Html::xH4()`|
| `Html::H2()`     | Heading 2      | `Html::ELEMENT('H5')`    |`Html::ELEM('my_meta','meta')`|`Html::_H5()`/`Html::xH5()`|
| `Html::H3()`     | Heading 3      | `Html::ELEMENT('H6')`    |`Html::ELEM('my_link','link')`|`Html::_H6()`/`Html::xH6()`|
| `Html::H4()`     | Heading 4      | `Html::ELEMENT('H1')`    |`Html::ELEM('my_img','img')`|`Html::_DIV()`/`Html::xDIV()`|
| `Html::H5()`     | Heading 5      | `Html::ELEMENT('BUTTON')` | `Html::ELEM('my_embed','embed')`|`Html::_P()`/`Html::xP()`|
| `Html::H6()`     | Heading 6      | `Html::ELEMENT('A')`     | `Html::ELEM('my_option','option')`|`Html::_BUTTON()`/`Html::xBUTTON()`|
| `Html::DIV()`    | Element        | `Html::ELEMENT('IFRAME')`| `Html::ELEM('my_col','col')`| `Html::_A()`/`Html::xA()`|
| `Html::P()`      | Paragraph      | `Html::ELEMENT('MAIN')`    | `Html::ELEM('my_base','base')`| `Html::_IFRAME()`/`Html::xIFRAME()`|
| `Html::BUTTON()` | Element        | `Html::ELEMENT('NAV')`    | `Html::ELEM('my_aside','aside')`|`Html::_MAIN()`/`Html::xMAIN()`|
| `Html::A()`      | Link Element   | `Html::ELEMENT('SELECT')`    | `Html::ELEM('my_area','area')`| `Html::_NAV()`/`Html::xNAV()`|
| `Html::IFRAME()` | Element        | `Html::ELEMENT('FORM')` |  `Html::ELEM('my_DOCTYPE','DOCTYPE')`| `Html::_SELECT()`/`Html::xSELECT()`|
| `Html::IFRAME()` | Element        | `Html::ELEMENT('PICTURE')`    |   | `Html::_FORM()`/`Html::xFORM()`|
| `Html::MAIN()`   | Element        | `Html::ELEMENT('SECTION')`    |   | `Html::_PICTURE()`/`Html::xPICTURE()`|
| `Html::NAV()`    | Element        | `Html::ELEMENT('TEXTAREA')`    |  | `Html::_SECTION()`/`Html::xSECTION()`|
| `Html::SELECT()` | Element        | `Html::ELEMENT('AUDIO')`    |   | `Html::_TEXTAREA()`/`Html::xTEXTAREA()`|
| `Html::FORM()`   | Element        | `Html::ELEMENT('VIDEO')`    |   | `Html::_AUDIO()`/`Html::xAUDIO()`|
| `Html::PICTURE()`| Element        | `Html::ELEMENT('ADDRESS')`    |  | `Html::_VIDEO()`/`Html::xVIDEO()`|
| `Html::SECTION()`| Element        | `Html::ELEMENT('COLGROUP')`    |  | `Html::_ADDRESS()`/`Html::xADDRESS()`|
| `Html::TEXTAREA()`| Element        | `Html::ELEMENT('BDI')`    | | `Html::_COLGROUP()`/`Html::xCOLGROUP()`|
| `Html::AUDIO()`| Element        | `Html::ELEMENT('BDO')`    |  | `Html::_BDI()`/`Html::xBDI()`|
| `Html::VIDEO()`| Element        | `Html::ELEMENT('CAPTION')` |  | `Html::_BDO()`/`Html::xBDO()`|
| `Html::ADDRESS()`| Element        | `Html::ELEMENT('LABEL')`    |  | `Html::_BLOCKQUOTE()`/`Html::xBLOCKQUOTE()`|
| `Html::COLGROUP()`| Element        | `Html::ELEMENT('DATALIST')`    |  | `Html::_CAPTION()`/`Html::xCAPTION()`|
| `Html::BDI()`| Element        | `Html::ELEMENT('DETAILS')`    |  | `Html::_LABEL()`/`Html::xLABEL()`|
| `Html::BDO()`| Element        | `Html::ELEMENT('SUMMARY')` |   | `Html::_DATALIST()`/`Html::xDATALIST()`|
| `Html::BLOCKQUOTE()`| Element        | `Html::ELEMENT('DIALOG')` |  | `Html::_DETAILS()`/`Html::xDETAILS()`|
| `Html::CAPTION()`| Element        | `Html::ELEMENT('OPTION')` |   | `Html::_SUMMARY()`/`Html::xSUMMARY()`|
| `Html::LABEL()`| Element        | `Html::ELEMENT('FIGURE')` |   | `Html::_DIALOG()`/`Html::xDIALOG()`|
| `Html::DATALIST()`| Element        | `Html::ELEMENT('FIGCAPTION')` |  | `Html::_OPTION()`/`Html::xOPTION()`|
| `Html::DETAILS()`| Element        | `Html::ELEMENT('METER')` | | `Html::_FIGURE()`/`Html::xFIGURE()`|
| `Html::SUMMARY()`| Element        | `Html::ELEMENT('OBJECT')`    |  | `Html::_FIGCAPTION()`/`Html::xFIGCAPTION()`|
| `Html::DIALOG()`| Element        | `Html::ELEMENT('OPTGROUP')`    | | `Html::_METER()`/`Html::xMETER()`|
| `Html::OPTION()`| Element        | `Html::ELEMENT('OUTPUT')`    |  | `Html::_OBJECT()`/`Html::xOBJECT()`|
| `Html::FIGURE()`| Element        | `Html::ELEMENT('PROGRESS')`    | | `Html::_OPTGROUP()`/`Html::xOPTGROUP()`|
| `Html::FIGCAPTION()`| Element        | `Html::ELEMENT('SVG')`    | | `Html::_OUTPUT()`/`Html::xOUTPUT()`|
| `Html::METER()`| Element        | `Html::ELEMENT('TEMPLATE')` | | `Html::_PROGRESS()`/`Html::xPROGRESS()`|
| `Html::OBJECT()`| Element        | `Html::ELEMENT('TIME')` |  | `Html::_SVG()`/`Html::xSVG()`|
| `Html::OPTGROUP()`| Element        | `Html::ELEMENT('VAR')` |  | `Html::_TEMPLATE()`/`Html::xTEMPLATE()`|
| `Html::OUTPUT()`| Element        | `Html::ELEMENT('UL')` |  | `Html::_TIME()`/`Html::xTIME()`|
| `Html::PROGRESS()`| Element        | `Html::ELEMENT('OL')` |  | `Html::_VAR()`/`Html::xVAR()`|
| `Html::SVG()`| Element        | `Html::ELEMENT('LI')` |   | `Html::_UL()`/`Html::xUL()`|
| `Html::TEMPLATE()`| Element        | `Html::ELEMENT('TABLE')` | | `Html::_OL()`/`Html::xOL()`|
| `Html::TIME()`| Element        | `Html::ELEMENT('TR')`    | | `Html::_LI()`/`Html::xLI()`|
| `Html::VAR()`| Element        | `Html::ELEMENT('TD')`    |  | `Html::_TABLE()`/`Html::xTABLE()`|
| `Html::UL()`| Element        | `Html::ELEMENT('TH')`|  | `Html::_TR()`/`Html::xTR()`|
| `Html::OL()`| Element        | `Html::ELEMENT('LEGEND')`    |  | `Html::_TD()`/`Html::xTD()`|
| `Html::LI()`| Element        | `Html::ELEMENT('FIELDSET')`    |  | `Html::_TH()`/`Html::xTH()`|
| `Html::TABLE()`| Element        | `Html::ELEMENT('TBODY')`    |  | `Html::_LEGEND()`/`Html::xLEGEND()`|
| `Html::TR()`| Element        | `Html::ELEMENT('TFOOT')` |   | `Html::_FIELDSET()`/`Html::xFIELDSET()`|
| `Html::TD()`| Element        | `Html::ELEMENT('THEAD')` |  | `Html::_TBODY()`/`Html::xTBODY()`|
| `Html::TH()`| Element        | `Html::ELEMENT('SPAN')` |  | `Html::_TFOOT()`/`Html::xTFOOT()`|
| `Html::LEGEND()`| Element        | `Html::ELEMENT('EM')` |  | `Html::_THEAD()`/`Html::xTHEAD()`|
| `Html::FIELDSET()`| Element        | `Html::ELEMENT('B')` |  | `Html::_SPAN()`/`Html::xSPAN()`|  
| `Html::TBODY()`| Element        | `Html::ELEMENT('I')` |    | `Html::_EM()`/`Html::xEM()`|
| `Html::TFOOT()`| Element        | `Html::ELEMENT('SMALL')` |  | `Html::_B()`/`Html::xB()`|
| `Html::THEAD()`| Element        | `Html::ELEMENT('MARQUEE')`    | | `Html::_I()`/`Html::xI()`|
| `Html::SPAN()`| Element        | `Html::ELEMENT('CENTER')` |  | `Html::_SMALL()`/`Html::xSMALL()`|
| `Html::EM()`| Element        | `Html::ELEMENT('CODE')` |   | `Html::_STRIKE()`/`Html::xSTRIKE()`|
| `Html::B()`| Element        | `Html::ELEMENT('ABBR')` |  | `Html::_MARQUEE()`/`Html::xMARQUEE()`|
| `Html::I()`| Element        | `Html::ELEMENT('MAP')` |   | `Html::_CENTER()`/`Html::xCENTER()`|
| `Html::SMALL()`| Element        | `Html::ELEMENT('CANVAS')` |  | `Html::_ABBR()`/`Html::xABBR()`|
| `Html::MARQUEE()`| Element        | `Html::ELEMENT('CITE')` |  | `Html::_MAP()`/`Html::xMAP()`|
| `Html::CENTER()`| Element        | `Html::ELEMENT('DATA')` |  | `Html::_CANVAS()`/`Html::xCANVAS()`|
| `Html::CODE()`| Element        | `Html::ELEMENT('DL')` |    | `Html::_CITE()`/`Html::xCITE()`|
| `Html::ABBR()`| Element        | `Html::ELEMENT('DT')` |   |`Html::_DATA()`/`Html::xDATA()`|
| `Html::MAP()`| Element        | `Html::ELEMENT('DD')` |   |`Html::_DL()`/`Html::xDL()`|
| `Html::CANVAS()`| Element        | `Html::ELEMENT('INS')`|  |`Html::_DT()`/`Html::xDT()`|
| `Html::CITE()`| Element        | `Html::ELEMENT('DEL')` |  |`Html::_DD()`/`Html::xDD()`|
| `Html::DATA()`| Element        | `Html::ELEMENT('KBD')` |  |`Html::_DFN()`/`Html::xDFN()`|
| `Html::DL()`| Element        | `Html::ELEMENT('MARK')` |  |`Html::_INS()`/`Html::xINS()`|
| `Html::DT()`| Element        | `Html::ELEMENT('PRE')` |   |`Html::_DEL()`/`Html::xDEL()`|
| `Html::DD()`| Element        | `Html::ELEMENT('RT')`    |  |`Html::_KBD()`/`Html::xKBD()`|
| `Html::DFN()`| Element        | `Html::ELEMENT('RP')` |   |`Html::_MARK()`/`Html::xMARK()`|
| `Html::INS()`| Element        | `Html::ELEMENT('S')` |   |`Html::_PRE()`/`Html::xPRE()`|
| `Html::DEL()`| Element        | `Html::ELEMENT('SAMP')` |  |`Html::_RT()`/`Html::xRT()`|
| `Html::KBD()`| Element        | `Html::ELEMENT('STRONG')` |  |`Html::_RP()`/`Html::xRP()`|
| `Html::MARK()`| Element        | `Html::ELEMENT('SUB')`    |   |`Html::_S()`/`Html::xS()`|
| `Html::PRE()`| Element        | `Html::ELEMENT('SUP')` |   |`Html::_SAMP()`/`Html::xSAMP()`|
| `Html::RT()`| Element        | `Html::ELEMENT('WBR')`    |  |`Html::_STRONG()`/`Html::xSTRONG()`|
| `Html::RP()`| Element        | `Html::ELEMENT('Q')` |   |`Html::_SUB()`/`Html::xSUB()`|
| `Html::S()`| Element        | `Html::ELEMENT('HEAD')` |  |`Html::_SUP()`/`Html::xSUP()`|
| `Html::SAMP()`| Element        | `Html::ELEMENT('TITLE')`  |  |`Html::_WBR()`/`Html::xWBR()`|
| `Html::STRONG()`| Element        | `Html::ELEMENT('BODY')` |  |`Html::_Q()`/`Html::xQ()`|
| `Html::SUB()`| Element        | `Html::ELEMENT('HTML')`    |  |`Html::_HEAD()`/`Html::xHEAD()`|
| `Html::SUP()`| Element        | `Html::ELEMENT('BLOCKQUOTE')`    |  |`Html::_TITLE()`/`Html::xTITLE()`|
| `Html::WBR()`| Element        |       |  |`Html::_BODY()`/`Html::xBODY()`|
| `Html::Q()`| Element          |       |  |`Html::_noHTML()`/`Html::xnoHTML()`|
| `Html::HEAD()`| Element        |      |  |
| `Html::TITLE()`| Element       |      |  |
| `Html::BODY()`| Element        |      |  |
| `Html::noHTML()`| Element      |      |  |


<h6>PHPHtml-Optimizer Merge Version</h6>
<p>PHPHtml-Merge version is more shorthand and simplier than PHPHTML-Optimizer in terms of functionality Both Optimizer is absolutely the same, The difference is the way you call the function and the way you use it.</p>

<h5>ELEMENTS and parameters </h5>

```PHP

// Merge version Associated or simply means return function
_xHTML($id=null, $elem=null, $value=null, $attr=null, $class=null, $label=null);

// Merge version Optional Associated or simply print or return if set as associated function
__HTML($id=null, $label=null, $elem=null, $attr=null, $class=null, $assoc=null);

// Merge version Optional Associated or simply print or return if set as associated function
_xH1(  $value=null,  $attr=null,  $id=null,  $class=null, $label=null, $assoc=null ); 
_xDIV( $id=null, $value=null,  $attr=null, $class=null, $label=null, $assoc=null ); 

// Merge version None or never be Associated or simply print function
_H1($id=null, $attr=null, $class=null) 

... content goes here ...

xH1($label = NULL)

//Merge version Associated or simply return function
_MERGE( $id=null, $elem=null,  $attr=null, $class=null);

... content goes here ...

xMERGE($elem=null);

// Merge version Optional Associated or simply print or return if set as associated function
_xSCRIPT($value=null, $attr=null, $label=null, $assoc=null);

// Merge version Optional Associated or simply print or return if set as associated function
_xSTYLE($value=null,  $attr=null, $label=null, $assoc=null);

// Merge version None or never be Associated or simply print function
_SCRIPT($attr=null);
 ...content goes here ...
xSCRIPT($label = NULL);

// Merge version None or never be Associated or simply print function
_STYLE($attr=null);
 ...content goes here ...
xSTYLE($label = NULL);

```

<h5>Functions List HTML supported</h5>

|Opt./ASSOCIATED | HTML/Descript. | ASSOCIATED | Opt.ASSOCIATED/Inline noneClosing tag |  None ASSOCIATED _H1(begin)/xH1(end) | ASSOCIATED/Merge Version _(begin)/x(End) |
|:---            |:---            |:---            |:---                           |:---                                  |:--- |
| `_xH1()`         | Heading 1      | `_xHTML('id','H1')` |`__HTML('my_input','INPUT')`   |`_H1()`/`xH1()`                       |`_MERGE('H1')`/`xMERGE('H1')` |
| `_xH2()`         | Heading 2      | `_xHTML('id','H2')` |`__HTML('my_track','track')`   |`_H2()`/`xH2()`                       |`_MERGE('H2')`/`xMERGE('H2')` |
| ...            | ...            | ...            |...                            |...                                   | <a href="#element">loading...</a>                   |


*Merge not support HTML : _I(italic)/xI(italic), _B(bold)/xB(bold), _Q(Q)/xQ(Q), _a(a link)/xa(a link);

<h3>PHPHtml-Optimizer w/Enhancer </h3>


|Function        | Method         |  Description   |  Parameters |  
|:---            |:---            |:---            |:---      |
| `send_to()`    | `send_to()`    | redirect to    |url       |
| `view_to()`    | `view_to()`    | template file  |DIR/KEY/filename |
| `bring_to()`    | `bring_to()`  | get file       |DIR/KEY/filename/Extension/INCLUDES/INCLUDES_ONCE/REQUIRE |
| `isbelongs()`   | `belongs_to()` | send file into page ? |PageName/KeyFolderPath/__KEY_FOLDER_PATH__/'keyFolderPath' |
| `getKeyPath()`   | `GetKeyFolderPath()` | get page? folder key | none |
| `__BR()`   | `BREAK()` | Html `<Br/>` tag | FUNC_ASSOC/METHOD_ASSOC/CLASS_ASSOC |
| `__HR()`   | `LINE()` | Html `<hr/>` tag | FUNC_ASSOC/METHOD_ASSOC/CLASS_ASSOC |
| `__space()`   | `SPACE()` | Space string | none |
| `MERGE()`   | `MERGE()` | Make ELEM/ELEMENTS Once at the time| none |
| `SetFileExT()`   | `SetFileExtension() ` | Set file extention | `__PHP__`,` __HTML__ `,`__CSS__`,`__JS__`,`__JPG__`,`__JPEG__`,`__PNG__`,`__GIF__`, ` __BMP__`, `__TEX__`,`__XLS__`,`__XLSX__`,`__DOCX__`, `__DOCX__`,`__PPT__`,`__PPTX__`,`__ODT__`, `__TXT__`, `__RTF__` |
| `SetElemAttr()`   | `SetElemAttr()` | Set Elements HTML custom attr | ['attrName'],['attrValue'] |
| `DOIF()`   | `__magicIF()` | append version of IF statements design for optimizer inline | Condition[Bool]/Result __NOTE:__ Not support Global variable use Ternary IF instead |
| `DOELSE()`   | `__magicELSE()` | append version of IFELSE statements design for optimizer inline | Condition[Bool]/DefaultValue/Result  __NOTE:__ Not support Global variable use Ternary IF instead|
| `PERFORM()`   | `PERFORM()` | Execute Association Optimizer Method/Function | MethodsOrFunctions/FUNC_ASSOC/METHOD_ASSOC/CLASS_ASSOC |
| `STRING()`   | `STRING()` | Print "String" without Element | strings/FUNC_ASSOC/METHOD_ASSOC/CLASS_ASSOC |
| `ATTR()`   | `ATTR()` | Html Header body template | META / TITLE / LINK / SCRIPT / CUSTOM_END / BEGIN_CUSTOM_END |
| `ELEM()`   | `ELEM()` | Custom HTML Elements/Tags | ElemName/Value/ElemAttr/ElemId/ElemClass |
| `GETFROM()`   | `GETFROM()` | Directory/Path Cleaner parameter of bring_to,view_to  | DIR/KEY/ ` bring_to(GETFROM(['PATH','inc']), 'hero', __PHP__);` `view_to()` |
| `SET_DIR_PATH()`   | `SET_DIR_PATH()` | Path/Dir/Ruri - registration holder | folder-file-directory, LOCALHOST |

__directories.php__ file register file currently support : PATH | DIR | RURI, make your code clean and safe. 

```PHP
<?php $Care = NEW \PHPHtml\CodeOptimizer\optimizer\Enhancers();  ?>
<?php 
/*
|
| Register Current PATH 
|--------------------------------------------------------------------------
|
*/
$PATH['REGISTERED'] = [
 
 // live version
 'inc' => SET_DIR_PATH('includes'),
 
 // Localhost version 
 'inc' => SET_DIR_PATH('includes', LOCALHOST)

];

/*
|
| Register Current DIR / VIEW Templates
|--------------------------------------------------------------------------
|
*/
$VIEWS['REGISTERED'] = [
 
  'Views'        => SET_DIR_PATH('saver/views'),
  'VTemplates'   => SET_DIR_PATH('saver/views/templates')        

];

/*
|
| Register Current RURI / LOCALHOST
|--------------------------------------------------------------------------   
|
*/
$RURI['REGISTERED'] = [
  
  // For LocalHost 
  'redirect'   => SET_DIR_PATH('404')     

];

```
<a href="https://github.com/nielsofficeofficial/PHPWine/blob/gh-pages/index.md">Clear Version Docx Click here >></a>

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
