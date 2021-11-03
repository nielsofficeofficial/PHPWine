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
<h3>Initial Documentation:</h3>
<h3>Prepare Initialize User Request/Data</h3>

```PHP
$un           = AUTH::$DATAFORM = [string $inputName, string $err_msg];
$username     = AUTH::HASCONTAINS($un);  
$username_err = AUTH::ERROR($username, $un); 
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
