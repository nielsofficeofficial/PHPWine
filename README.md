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

PHPWine (Vanilla Flavour) is a PHP Library design cross PHP Platform and frameworks Cloud system application development.  <br />
<br />
<i>Vanilla Flavour: Vanilla flavour means you can use methods outside the class precisely as native PHP functions.</i>

- PHPHtml-Optimizer / Code Designer
- Advance Form Builder 
- Handling Form Validation
- Form Validation_V2 ```@since v1.2```
- BASIC Authentication
- HTMLMinifier ```@since v1.2```
- PHPSaver (RESTful_API) <sup><i>Available on PHPWine v2.0</i></sup>

<h3>Downloading Library/Dependencies:</h3>
 
```PHP
// Clone repository from githug | GitBus | CMD | CLi 

// Download latest version 
 $ git clone https://github.com/nielsofficeofficial/PHPWine

// Download specified version ( --branch tag ) --branch  v1.3.0.0 
 $ git clone https://github.com/nielsofficeofficial/PHPWine --branch  v1.3.0.0
```
```PHP
// Download Repository via Composer | Packagist
 composer require phpwinevanillaflavour/phpwine
```
<h3>Library Installation:</h3>

```PHP
  # Install on header.php
  // WordPress Theme/Plugins Installation 
  # On the very top of functions.php or plugin-index.
  
  $PHPWine = new class {
        
    public function __construct() {
      
      $this->php_wine('autoload');

      new \PHPWineVanillaFlavour\Wine\Optimizer\ENHANCER_ELEM; // this is mandatory when dev use merge !
      new \PHPWineVanillaFlavour\Wine\Optimizer\HTML_H1;  // follow by merge version HTML_H1 and so on!...
      new \PHPWineVanillaFlavour\Wine\Optimizer\HTML_DIV;
      
    }

    private function php_wine(string $autoload) : void {

      require dirname(__FILE__) . DIRECTORY_SEPARATOR .'vendor/' . $autoload.'.'.'php';

    }

 }; 
```

<h3>Dependencies Installation:</h3>

```PHP
# Namespace / Dependencies
use \PHPWineVanillaFlavour\Wine\Optimizer\Html;
use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;
use \PHPWineVanillaFlavour\Wine\Optimizer\Form;
use \PHPWineVanillaFlavour\Wine\Merge\Html;
use \PHPWineVanillaFlavour\Wine\System\Auth;
use \PHPWineVanillaFlavour\Wine\System\Request;
use \PHPWineVanillaFlavour\Wine\System\Validate;
use \PHPWineVanillaFlavour\Wine\System\Validate_v2;
```
```PHP
# Using Enhancer Installation 
new \PHPWineVanillaFlavour\Wine\Optimizer\ENHANCER_ELEM; // then follow by other dependencies

# HTML Tags using ( Merge Version PHPWine v1.3.0.0 )
new \PHPWineVanillaFlavour\Wine\Optimizer\HTML_H1;
new \PHPWineVanillaFlavour\Wine\Optimizer\HTML_H2;
new \PHPWineVanillaFlavour\Wine\Optimizer\HTML_H3;
new \PHPWineVanillaFlavour\Wine\Optimizer\HTML_H4;
new \PHPWineVanillaFlavour\Wine\Optimizer\HTML_H5;
new \PHPWineVanillaFlavour\Wine\Optimizer\HTML_H6;

// Merge HTML Definition 
H1( array|string [ $value ] , array|string [ $attr ] , string $id , string $class );
// execution 
echo H1('Hello World!', [['style'],['color: blue;']], 'id', 'class' );
```
```HTML
<!-- End result -->
<h1 style='color: blue;' id='id' class='class'> Hello World </h1> 

<!-- Browser result -->
Hello World
```
```PHP
// Callable value data type @since v1.3.0.3
function Div( 

    array|string|callable  $value  =  null
   ,array|string  $attr   =  null
   ,string        $id     =  null
   ,string        $class  =  null
  
)
           
 echo div( function() {

   return H1('Hi Call back', [['attr'],['value']] , 'id' , 'class');

 }, [['attr_div'],['val_div']] );
 
 // variable loop arrays of data inside of div element
 $data  = array('Hello','World','From','PHP');

 echo div( function() use ( $data ) { 
 
  return UL((new Class {

   private array $container = [];
   private array $holder = [];

   public function menu_items( array $data) : string  { $this->container = $data;

     if( is_array($this->container) ) { 
       
       foreach ($this->container  as $value) { 
           
        $this->holder[] = li( alink($value, [['href'],['#']]) );  
       
       } 
    
     }

       return implode(" ", $this->holder);
   }

  })->menu_items($data));

 }, [['attr_div'],['val_div']] );
```
```HTML
<!-- End result | Loop array menu_items Callable @since v1.3.0.3 -->
<div attr_div="val_div">
  <ul>
    <li> <a href="#"> Hello  </a> </li>
    <li> <a href="#"> World </a> </li>
    <li> <a href="#"> From </a> </li>
    <li> <a href="#"> PHP </a> </li>
  </ul>
</div>

```
```PHP
// Installing dependecies HTML Elements 
new \HTML_SELECT; [ select(); ]  |  new \HTML_ABBR; [ abbr(); ]     |  new \HTML_ADDRESS; [ address(); ]
new \HTML_AUDIO;  [ audio(); ]   |  new \HTML_BDI;  [ bdi(); ]      |  new \HTML_BDO; [ bdo(); ]
new \HTML_BODY;   [ body(); ]    |  new \HTML_BOLD; [ bold(); ]     |  new \HTML_BLOCKQUOTE; [ blockquote(); ]
new \HTML_BUTTON; [ button(); ]  |  new \HTML_CODE; [ code(); ]     |  new \HTML_CANVAS; [ canvas(); ]
new \HTML_DATA;   [ data(); ]    |  new \HTML_DD;   [ dd();  ]      |  new \HTML_CAPTION; [ caption(); ]
new \HTML_CENTER; [ center(); ]  |  new \HTML_DEL;  [ del(); ]      |  new \HTML_COLGROUP; [ colgroup(); ]
new \HTML_DFN;    [ dfn(); ]     |  new \HTML_DIV;  [ div(); ]      |  new \HTML_DATALIST; [ datalist(); ]
new \HTML_DL;     [ dl(); ]      |  new \HTML_DT;   [ dt(); ]       |  new \HTML_EM; [ em(); ]
new \HTML_FORM;   [ form(); ]    |  new \HTML_IMG;  [ img(); ]      |  new \HTML_FOOTER;  [ footer(); ]
new \HTML_INS;    [ ins(); ]     |  new \HTML_HEAD; [ head(); ]     |  new \HTML_KBD; [ kbd(); ]
new \HTML_LI;     [ li(); ]      |  new \HTML_LINK; [ alink(); ]    |  new \HTML_FIGCAPTION; [ figcaption(); ] 
new \HTML_MAIN;   [ main(); ]    |  new \HTML_LABEL;[ label(); ]    |  new \HTML_DIALOG; [ dialog(); ] 
new \HTML_MARK;   [ mark(); ]    |  new \HTML_OL;   [ ol(); ]       |  new \HTML_LEGEND; [ legend(); ]
new \HTML_Q;      [ q(); ]       |  new \HTML_PRE;  [ pre(); ]      |  new \HTML_OPTGROUP; [ optgroup(); ]
new \HTML_NAV;    [ nav(); ]     |  new \HTML_PARA; [ para(); ]     |  new \HTML_FIELDSET; [ fieldset(); ]
new \HTML_RT;     [ rt(); ]      |  new \HTML_SAMP; [ samp(); ]     |  new \HTML_PROGRESS; [ progress(); ]
new \HTML_S;      [ s(); ]       |  new \HTML_SPAN; [ span(); ]     |  new \HTML_PICTURE; [ picture(); ]
new \HTML_SMALL;  [ small(); ]   |  new \HTML_TH;   [ th();  ]      |  new \HTML_METER; [ meter(); ]
new \HTML_TD;     [ td(); ]      |  new \HTML_SUB;  [ sub(); ]      |  new \HTML_DETAILS; [ details(); ]
new \HTML_SUP;    [ sup(); ]     |  new \HTML_STYLE;[ style(); ]    |  new \HTML_MARQUEE; [ marquee(); ]
new \HTML_TR;     [ tr(); ]      |  new \HTML_UL;   [ ul(); ]         | new \HTML_WBR; [ wbr(); ]
new \HTML_TABLE;  [ table(); ]   |  new \HTML_FIGURE;  [ figure(); ]  | new \HTML_IFRAME; [ iframe(); ] 
new \HTML_ITALIC; [ italic(); ]  |  new \HTML_OBJECT;  [ object(); ]  | new \HTML_TEXTAREA; [ textarea(); ]
new \HTML_SCRIPT; [ script(); ]  |  new \HTML_SECTION; [ section(); ] | new \HTML_TITLE; [ title(); ]
new \HTML_TBODY;  [ tbody(); ]   |  new \HTML_THEAD;   [ thead(); ]   | new \HTML_VIDEO; [ video(); ]
new \HTML_SELECT; [ select(); ]  |  new \HTML_STRONG;  [ strong(); ]  | new \HTML_TEMPLATE; [ template(); ]
new \HTML_SUMMARY;[ summary(); ] |  new \HTML_TFOOTER  [ tfooter(); ];
```
```PHP
// Merge open and close associated HTML Definition 
_MERGE( string $id , string $elem , string $class , array [ $attr ] ); // open
xMERGE( string $elem ); // close

// execution 
echo _MERGE( 'id', 'h1', 'class', [['style'],['color: blue;']] );
echo Hello World
echo xMERGE( 'h1' );
```
```HTML
<!-- End result -->
<h1 style='color: blue;' id='id' class='class'> Hello World </h1> 

<!-- Browser result -->
Hello World
```
```HTML
// Installing more HTML Merge Elements 

h2, h3, h4, h5, h6, div, p, a, nav, main, form, bdi, bdo, time, audio, button, iframe, select, picture, section, textarea, video, address, colgroup, blockquote, caption, label, datalist, details, summary, dialog, option, figure, figcaption, meter, object, optgroup, output, progress, template, var, ul, ol, li, table, tr, td, th, legend, fieldset, tbody, tfoot, thead, span, small, marquee, center, code, abbr, map, canvas, cite, data, dl, dt, dd, dfn, ins, del, mark, pre, rt, rp, s, samp, strong, sub, sup, wbr, q, head, title, body.  
```
<h3> Child Element Array keys: CHILD | ATTR | VALUE | INNER :</h3>

```PHP

  $childElement = [ CHILD => [
  
    ['div', ATTR  => ['class' =>'demo'] , VALUE => [ H1('Hello!') ]],  
    ['p'  , VALUE => ["This is the array values!"] 
          , INNER => [

        ['p'   , VALUE => ["Hello"] , ATTR => ['class' =>'demo'] ],
        ['SPAN', VALUE => ["World"] , ATTR => ['class' =>'demo'] ]

    ]],

    ['div', VALUE => ["Say hi! "]    , ATTR => [ 'class' =>'demo'] ],
    ['div', VALUE => ["Say hello! "] , ATTR => [ 'class' =>'demo'] ]

  ]]
  
  echo div($childElement , [['attr'],['value']], 'id' , 'class');
```

<h3>Functions and Constant:</h3>
<p>Support only plain PHPWine ``` @since v1.2.1.0 ```. </p>

```PHP
 // Functions
 isbelongs( array|string $page_name ); 
  
 // Constant
 define('PHPWINE_MINIFIED', true );
```

<h3>PHPWine Plugins + (FrontEnd Frameworks) :</h3>
<h5>Wants to become a contributor in PHPWine Plugins?, Let's talk email me at: syncdevprojects@gmail.com</h5>
 <ul>
  <li><a href="https://github.com/nielsofficeofficial/PHPCrud">PHPCRUD: </a><span> Extend PHPWine Features crud </span>
      <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
  </li>
    <li><a href="https://github.com/nielsofficeofficial/PHPCrud-sample-data">PHPCrud-sample-data v1.2.0.0</a><span> Sample data PHPCrud snippet </span>
      <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
  </li>
   <li><a href="https://github.com/nielsofficeofficial/PHPCrud_RESTAPI-Template">PHPCRUD_RESTAPI-Template: </a><span> Rest-api using PHPCrud snippet </span>
      <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
  </li>
 
   <li><a href="https://github.com/nielsofficeofficial/PHPPortal">PHPPortal : </a><span> Wine Portal/Login System snippet. </span>
    <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
   </li>

</ul>

<hr /> 

<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my PHP Library PHPWine Vanilla Flavour to repository<br /> 
php.net : To oppurtunity Develop web application using corePHP - PHPFrameworks<br />
</h5>

__LICENSE BY MIT__

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
<br />

<hr />
Would you like me to treat a cake and coffee ? <br />
Become a donor, Because with you! We can build more... 

Donate: <br />
GCash : +639650332900 <br /> 
Paypal account: syncdevprojects@gmail.com
<hr />
<br />
Thanks and good luck! 


[![GitHub stars](https://img.shields.io/github/stars/nielsofficeofficial/PHPWine.svg?style=social&label=Star)](https://github.com/nielsofficeofficial/PHPWine/)
[![GitHub watchers](https://img.shields.io/github/watchers/nielsofficeofficial/PHPWine.svg?style=social&label=Watch)](https://github.com/nielsofficeofficial/PHPWine/)
[![GitHub forks](https://img.shields.io/github/forks/nielsofficeofficial/PHPWine.svg?style=social&label=Fork)](https://github.com/nielsofficeofficial/PHPWine/)
[![GitHub followers](https://img.shields.io/github/followers/nielsofficeofficial.svg?style=social&label=Follow)](https://github.com/nielsofficeofficial)
