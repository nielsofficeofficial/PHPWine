<?php 

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library/PHPWine/PHPWine.php';

use \PHPWine\VanillaFlavour\Merge\Html;
use \PHPWine\VanillaFlavour\Optimizer\Html as Optimizer;
use \PHPWine\VanillaFlavour\Optimizer\Enhancers as OptimizerCare; 

$Html     = new Optimizer();

_HTML(  [['class','lang'],['no-js','']] );
_HEAD();

ATTR('META', [
 "meta-charset" => [ 'charset'    => "utf-8"],
 "meta-compat"  => [ 'http-equiv' => "x-ua-compatible", 'content' => "" ],
 "meta-des"    => [ 'name' => "description", 'content' => ""],
 "meta-vport"  => [ 'name' => "viewport",    'content' => "width=device-width, initial-scale=1" ]
]); 

ATTR('TITLE', 'Quick Start'); 

ATTR('LINK', [ 
 "manifest"   => [ 'rel' => "manifest", 'src' => "site.webmanifest"],
 "icon"       => [ 'rel' => "apple-touch-icon", 'src' => "icon.png"],
 "mains-style" => [ 'rel' => "stylesheet", 'href' => "css/style.css"]
]); 

ATTR('SCRIPT', [
 "angu-js"  => [ 'src' => "https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js" ], 

 "normz"    => [ 'src' => "js/normalize.js" ],
 "main-js"  => [ 'src' => "js/main.js" ]
]);

ATTR('CUSTOM_END', [
 "Optimize" => [ 'href' => "css/normalize.css" ]
]);

ATTR('BEGIN_CUSTOM_END', [ 
 "Opt"      => [ 'href' => "css/normalize.css" ]
]);

if(isBelongs('index', 1)) { ?>

  <style> 
   /**  Header style goes here.. **/
  </style>

  <script> 
    /**  Header script goes here.. **/
  </script>

<?php }

xHEAD();
_BODY();