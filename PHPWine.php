<?php 
 
/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.0 free software: you can redistribute it and/or modify.
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
 * @version   v1.0
 *
 */

  $phpWine = new class {
        
      /**
        *
        * Defined NEW Instance Database
        * @since 10.25.21
        * @since v1.0
        * 
        **/ 
        public function wine_dbRequest($dataBase ,  $username , $password , $host )
        {

          return  $mySQLi = new mysqli( 
            
               $this->dataBase = $dataBase 
              ,$this->username = $username
              ,$this->password = $password
              ,$this->host     = $host 
            
          ); if($mySQLi === false) : die( ERROR_ESTABLISH_CONNECTION . $mySQLi->connect_error); endif;
        
        }

        public function php_wine(string $requestDependencies) 
        {

          /**
            *
            * Defined Class Dependencies
            * @since 10.25.21
            * @since v1.0
            * 
            **/ 
            require dirname(__FILE__) . DIRECTORY_SEPARATOR . $requestDependencies .'.'.'php';
        }

        public function phpWineLoader() 
        {        

          /**
            *
            * Defined SPR4 Autoloader
            * @since 10.25.21
            * @since v1.0
            * 
            **/ 
            
            spl_autoload_register(function($class) 
            {
            
                // File name space
                $systemFileRequest = DIRECTORY_FILE_REQUEST_;
            
                // base directory system file
                $sourceFileRquest  = BASE_DIR_SYSTEM_FILE;                
                if (strncmp($systemFileRequest, $class, strlen($systemFileRequest)) !== 0) return;
            
                // Directory system data files
                $dataRequest = $sourceFileRquest . str_replace('\\', '/', substr($class, strlen($systemFileRequest))) . _PHP_;
            
                // if the file exists, require it
                (file_exists($dataRequest)) ? require $dataRequest : false;
            
            });

        }
    };
    
    // Get Loader Prop
    $phpWine->php_wine('prop');
    // Get Loader db
    $phpWine->php_wine('db');
    $phpWine->phpWineLoader();
    // Define new instance connection
    $mySQLi = $phpWine->phpWineLoader(DB_SERVER , DB_USERNAME, DB_PASSWORD, DB_NAME);
   