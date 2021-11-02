<img src="https://img.shields.io/badge/license-MIT-blue">
# PHPWine - (Vanilla Flavour) 
PHPWine v1.0 (Vanilla Flavour) design for corePHP and WordPress Cloud system application development. <br />
<i>Vanilla Flavour: Vanilla flavour means you can use methods outside the class precisely as native PHP functions.</i>

- Authentication
- Login Form
- Registration
- Reset Password
- Register Email confirmation
- Recovery Email confirmation
- Handling Form Validation
- PHPOptimizer v1.0 (stable)
- Advance Form Builder <i>(Optimizier v1.0 (stable))</i>


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
