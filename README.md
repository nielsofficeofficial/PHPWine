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

PHPWine v1.2.0.5 (Vanilla Flavour) is a PHP Library design cross PHP Platform and frameworks Cloud system application development.  <br />
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

// Download specified version ( --branch tag ) --branch  v1.2.0.0 
 $ git clone https://github.com/nielsofficeofficial/PHPWine --branch  v1.2.0.4
```
```PHP
// Download Repository via Composer | Packagist
 composer require phpwinevanillaflavour/phpwine
```
<h3>Library Installation:</h3>

```PHP
// Install on header.php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library/PHPWine/PHPWine.php';

use \PHPWine\VanillaFlavour\Wine\Optimizer\Html as Optimizer;
use \PHPWine\VanillaFlavour\Wine\Optimizer\Enhancers as OptimizerCare; 

$html     = new Optimizer();
$enhancer = new OptimizerCare();
```
<h3>WordPress Installation:</h3>

```PHP
// WordPress Theme/Plugins Installation 
| - root folder
  | - Theme folder
    | - Library folder // create Library folder if not yet exist !
      | - PHPWine
        | - src
        | - PHPWine.php
        | - prop.php
        | - LICENSE
        | - README.md
        | - composer.json        
        
// on the very top of functions.php or plugin-index.
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library/PHPWine/PHPWine.php';

...
```

<h3>Dependencies Installation:</h3>

```PHP
# Namespace / Dependencies
use \PHPWine\VanillaFlavour\Wine\Optimizer\Enhancers;
use \PHPWine\VanillaFlavour\Wine\Optimizer\Form;
use \PHPWine\VanillaFlavour\Wine\System\Auth;
use \PHPWine\VanillaFlavour\Wine\System\Request;
use \PHPWine\VanillaFlavour\Wine\System\Validate;
use \PHPWine\VanillaFlavour\Wine\System\Validate_v2;
use \PHPWine\VanillaFlavour\Wine\Merge\Html;
```

<h3>PHPWine Plugins + (FrontEnd Frameworks) :</h3>
<h5>Wants to become a contributor in PHPWine Plugins?, Let's talk email me at: syncdevprojects@gmail.com</h5>
 <ul>
  <li><a href="https://github.com/nielsofficeofficial/PHPPortal">PHPPortal : </a><span> Wine Portal/Login System. </span>
    <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
   </li>
  <li><a href="https://github.com/nielsofficeofficial/PHPCrud">PHPCRUD: </a><span> Extend PHPWine Features crud </span>
      <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
  </li>
   <li><a href="https://github.com/nielsofficeofficial/PHPCrud_RESTAPI-Template">PHPCRUD_RESTAPI-Template: </a><span> Rest-api using PHPCrud snippet </span>
      <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
  </li>
 
  <li>(soon!)<a href="#">PHPDashboard: </a><span> Bootstrap dashboard into PHPWine. 
  </span>
     <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
  </li>
  <li>(soon!)<a href="#">PHPMenu : </a><span> Dynamic Bootstrap menu. </span> 
  <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
  </li>
    <li>(soon!)<a href="#">PHPUserProfile: </a><span>Fully optimized bootstrap user profile. </span>
  <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>  
  </li>
  <li>(soon!)<a href="#">PHPSlider : </a><span> Dynamic and fully optimized create variety of slider hero and topfold. </span></li>
  <li>(soon!)<a href="#">PHPProductSlider : </a><span> Display Dynamic and fully optimized product slider. </span></li>
  <li>(soon!)<a href="#">PHPTestimonials: </a><span> Display Dynamic and fully optimized tetimonial Slider. </span></li>
  <li>(soon!)<a href="#">PHPContactPage: </a><span> Static contact page with form validation and PHPMailer.  </span></li>
  <li>(soon!)<a href="#">PHPUserRole: </a><span>Dynamic restrict user role and permission. </span></li>
  <li>(soon!)<a href="#">PHPStore: </a><span> eCommerce/online store. </span></li>
  <li>(soon!)<a href="#">PHPCart: </a><span> Cart integrating all payment gateway </span></li>
  <li>(soon!)<a href="#">PHPBlog: </a><span> Optimize module blog post including category and tag post  </span></li>
  <li>(soon!)<a href="#">PHPCategory: </a><span> Create a category and extended  </span></li>
  <li>(soon!)<a href="#">PHPTag: </a><span> Create a tag and extended  </span></li>

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
