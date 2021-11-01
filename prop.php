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

 
  define('DIRECTORY_FILE_REQUEST_','PHPWine\\VanillaFlavour\\');
  define('BASE_DIR_SYSTEM_FILE', __DIR__ . '/src/');

  define('LESS_THAN','LESS_THAN');
  define('MINLENGTH','MINLENGTH');
  define('MAXLENGTH','MAXLENGTH');
  define('INPUTFIELD_EMPTY','INPUTFIELD_EMPTY');
  define('EQUALTO','EQUALTO');
  define('VALIDPASSWORD','VALIDPASSWORD');
  define('CONTAIN_UPPERCASE','CONTAIN_UPPERCASE');
  define('CONTAIN_LOWERCASE','CONTAIN_LOWERCASE');
  define('CONTAIN_NUMBER','CONTAIN_NUMBER');
  define('CONTAIN_SPECIALCHAR','CONTAIN_SPECIALCHAR');
  define('EQUAL_STRICT','EQUAL_STRICT');  
  define('GREATER_THAN','GREATER_THAN');  
  define('VALID_EMAIL','VALID_EMAIL');  
  define('STRINGTYPE','STRINGTYPE');  
  define('NUMERICTYPE','NUMERICTYPE'); 
  define('INTEGERTYPE','INTEGERTYPE');  
  define('FLOATTYPE','FLOATTYPE');  
  define('CONFIRMPASSWORD','CONFIRMPASSWORD');  
  define('QUERY_STATEMENT','QUERY_STATEMENT');
  define('USERNAME_HASCONTAINS','USERNAME_HASCONTAINS');
  define('USERNAME_ERROR','USERNAME_ERROR');
  define('PASSWORD_HASCONTAINS','PASSWORD_HASCONTAINS');
  define('PASSWORD_ERROR','PASSWORD_ERROR');
  define('NOTEXIST_CREDENTIAL','NOTEXIST_CREDENTIAL');
  define('NOTASSOCIATED_CREDENTIAL','NOTASSOCIATED_CREDENTIAL');
  define('USER_REDIRECT','USER_REDIRECT'); 
  define('INPUT_HASCONTAINS','INPUT_HASCONTAINS'); 
  define('INPUT_ERROR','INPUT_ERROR'); 
  define('INPUT_DATAEXIST','INPUT_DATAEXIST'); 
  define('SESSION_ENCRYPTDATA_REQUEST','SESSION_ENCRYPTDATA_REQUEST'); 
  define('SESSION_ENCRYPTCONFIRM_REQUEST','SESSION_ENCRYPTCONFIRM_REQUEST'); 
  define('SESSION_PORTAL_REQUEST','SESSION_PORTAL_REQUEST'); 
  define('SESSION_REGISTERDATA_REQUEST','SESSION_REGISTERDATA_REQUEST');
  define('ERROR_DEVELOPER_CONCERN',"Contact your system developer for more info. Please try again later."); 
  define('BIND_ERROR_DEVELOPER_CONCERN',"UNDEFINE OR MISSING CONSTANT PARAMETER @BIND METHOD");
  define('TIMES_STAMP_COOKIES_IN_TIME','TIMES_STAMP_COOKIES_IN_TIME');  
  define('ERROR_ESTABLISH_CONNECTION','ERROR: Could not connect.');   
  define('REMEMBER','remember');
  define('USERNAME','username');
  define('PASSWORD','password');
  define('_PHP_','.php');
  define('__CONFIG__'   , 'directories.php' ); // get config file
  define('__PROP__'     , 'prop.php' ); // get prop  
  define('SOM_PATH_DIR' ,  __DIR__ . DIRECTORY_SEPARATOR); // Set DIR PATH Default
  define('__EnHancer__' ,  '/../Enhancer.php'); // get function associated by FUNCTION ASSOCIATED
  define('FUNC_ASSOC'   ,  'FUNC_ASSOC'); // get function associated by FUNCTION ASSOCIATED
  define('METHOD_ASSOC' ,  'METHOD_ASSOC'); // get function associated by METHOD ASSOCIATED
  define('CLASS_ASSOC'  ,  'CLASS_ASSOC'); // get function associated by CLASS ASSOCIATED
  define('__PHP__'      ,  '__PHP__'); // get function assined EXTENSION .PHP 
  define('__HTML__'     ,  '__HTML__'); // get function assined EXTENSION .HTML
  define('__CSS__'      ,  '__CSS__'); // get function assined EXTENSION .CSS
  define('__JS__'       ,  '__JS__'); // get function assined EXTENSION .JS 
  define('__JPG__'      ,  '__JPG__'); // get function assined EXTENSION IMG .JPG 
  define('__JPEG__'     ,  '__JPEG__'); // get function assined EXTENSION IMG .JPEG    
  define('__PNG__'      ,  '__PNG__'); // get function assined EXTENSION IMG .PNG
  define('__GIF__'      ,  '__GIF__'); // get function assined EXTENSION IMG .GIF
  define('__BMP__'      ,  '__BMP__'); // get function assined EXTENSION IMG .BMP
  define('__TEX__'      ,  '__TEX__'); // get function assined EXTENSION IMG .TEX 
  define('__XLS__'      ,  '__XLS__'); // get function assined EXTENSION IMG .LXS
  define('__XLSX__'     ,  '__XLSX__');  // get function assined EXTENSION IMG .LXSX
  define('__DOC__'      ,  '__DOC__'); // get function assined EXTENSION IMG .DOC
  define('__DOCX__'     ,  '__DOCX__');  // get function assined EXTENSION IMG .DOCX  
  define('__PPT__'      ,  '__PPT__'); // get function assined EXTENSION IMG .PPT 
  define('__PPTX__'     ,  '__PPTX__'); // get function assined EXTENSION IMG .PPTX  
  define('__ODT__'      ,  '__ODT__');  // get function assined EXTENSION IMG .ODT
  define('__TXT__'      ,  '__TXT__');  // get function assined EXTENSION IMG .TXT 
  define('__RTF__'      ,  '__RTF__'); // get function assined EXTENSION IMG .RTF
  define('__GET_FROM_DIR_ROOT__'           ,   __DIR__ ); // get root file
  define('__GET_STATIC_CLASS_HTML__'       ,   '/src/merge/Html.php'); // get root file static HTML  
  define('__GET_INSTANTIATE_CLASS_HTML__'  ,   '/src/optimizer/Html.php'); // get root file instantiate Html   
  define('__CHECK_MAIN_MERGE_ON_PAGE__'    ,   '/../merge/Html.php'); // get root file CHECK_MAIN_MERGE_ON_PAGE
  define('__CHECK_MAIN_MERGE_ON_CLASS__'   ,   '/../optimizer/Html.php');  // get root file CHECK_MAIN_MERGE_ON_CLASS
  define('__GET_VALIDATE_FILE_PAGE_EXIST__',   '/src/merge/Html.php'); // get validate file exist
  define('__HTMLOPTIMIZER__'               ,   'Html.php'); // get file
  define('__GET_MERGE_FILES__'             ,   SOM_PATH_DIR . 'src/merge/prop.php'); // get merge   
  define('__DIRECTORY_OPTIMIZER_CLASS__'   ,   SOM_PATH_DIR . 'src/'); // get directory
  define('__DIRECTORY_OPTIMIZER_PAGE__'    ,   SOM_PATH_DIR . 'src/merge/html.php'); // get directory 
  define('__GET_LOAD_MERGE__'              ,   SOM_PATH_DIR . 'src/merge/Merge.php' ); // get root file GET_LOAD_MERGE
  define('__GET_LOAD_MERGEBOX__'           ,   SOM_PATH_DIR . 'src/merge/MergeBox.php' ); // get root file GET_LOAD_MERGEBOX
  define('__GET_LOAD_MERGEELEMENT__'       ,   SOM_PATH_DIR . 'src/merge/MergeElements.php' ); // get root file GET_LOAD_MERGEELEMENT
  define('__GET_PROPERTY_ITSELF__'         ,   SOM_PATH_DIR . '../../'.__PROP__.'' ); // get root file GET_PROPERTY_ITSELF
  define('__FILECONFIG__'                  ,   SOM_PATH_DIR . '../../'.__CONFIG__.'' ); // get config file cient
