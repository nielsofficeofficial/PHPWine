<?php 

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.1 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.1 free software: you can redistribute it and/or modify.
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
 * @version   v1.1
 *
 */

/**
 *
 * Defined REQUEST VALIDATION REFERENCES
 * @since 04.10.21
 * @since v1.0
 *
 **/ 
 function VALIDATE_EMAIL_REQUEST      (string $formName, string $error_msg)   { return 'VALIDATE_EMAIL_REQUEST'; }
 function VALIDATE_STRINGTYPE_REQUEST (string $formName, string $error_msg)   { return 'VALIDATE_STRINGTYPE_REQUEST'; }
 function VALIDATE_NUMERICTYPE_REQUEST(string $formName, string $error_msg)   { return 'VALIDATE_NUMERICTYPE_REQUEST'; }
 function VALIDATE_FLOATTYPE_REQUEST  (string $formName, string $error_msg)   { return 'VALIDATE_FLOATTYPE_REQUEST'; }
 function VALIDATE_MINLENGTH_REQUEST  (string $formName, int $arg_minLenght, string $error_msg)   { return 'VALIDATE_MINLENGTH_REQUEST'; }
 function VALIDATE_MAXLENGTH_REQUEST  (string $formName, int $arg_maxLenght, string $error_msg)   { return 'VALIDATE_MAXLENGTH_REQUEST'; }
 
/**
 * 
 * Defined LOGIN CONSTANT / FUNCTION REFERENCES
 * @since 04.10.21
 * @since v1.0
 * 
 **/ 
 function QUERY_STATEMENT          (AUTH::RETURNSQL('users',["username","email","mobile","password"...etc...])  { return 'QUERY_STATEMENT'; }
 function USERNAME_HASCONTAINS     (auth $formData|AUTH::HASCONTAINS())     { return "USERNAME_HASCONTAINS"; }
 function USERNAME_ERROR           (auth $formData|AUTH::ERROR())           { return "USERNAME_ERROR"; }
 function PASSWORD_HASCONTAINS     (auth $formData|AUTH::HASCONTAINS())     { return "PASSWORD_HASCONTAINS"; }
 function PASSWORD_ERROR           (auth $formData|AUTH::ERROR())           { return "PASSWORD_ERROR"; }
 function NOTEXIST_CREDENTIAL      (string $err_msg)                        { return "NOTEXIST_CREDENTIAL"; }
 function NOTASSOCIATED_CREDENTIAL (string $err_msg)                        { return "NOTASSOCIATED_CREDENTIAL"; }
 function USER_REDIRECT            (string $uri, bool $optional = false)    { return "USER_REDIRECT"; } // means session is not active/ user not yet login

/**
 * 
 * Defined REGISTER CONSTANT / FUNCTION REFERENCES
 * @since 04.10.21
 * @since v1.0
 * 
 **/ 
 function QUERY_STATEMENT         (AUTH::RETURNSQL('users',["id"],["email"]))   { return "QUERY_STATEMENT"; }
 function INPUT_HASCONTAINS       (auth $formData|AUTH::INPUT_HASCONTAINS())    { return "INPUT_HASCONTAINS"; }
 function INPUT_ERROR             (auth $formData|AUTH::INPUT_ERROR())          { return "INPUT_ERROR"; }
 function INPUT_DATAEXIST         (string $error_msg |AUTH::INPUT_DATAEXIST())  { return "INPUT_DATAEXIST"; }
 function VALIDATE_CONFIRMPASSORD_REQUEST   (string $firstPass, string $secondPass, string $error_msg)   { return 'VALIDATE_CONFIRMPASSORD_REQUEST'; }
 function SESSION_ENCRYPTDATA_REQUEST       ()   { return 'SESSION_ENCRYPTDATA_REQUEST'; }
 function SESSION_ENCRYPTCONFIRM_REQUEST    ()   { return 'SESSION_ENCRYPTCONFIRM_REQUEST'; }
 function SESSION_REGISTERDATA_REQUEST      ()   { return 'SESSION_REGISTERDATA_REQUEST'; }
 
/**
 * 
 * Defined LOGIN CONSTANT / FUNCTION REFERENCES
 * @since 04.10.21
 * @since v1.0
 * 
 **/ 
 function SESSION_PORTAL_REQUEST     ()                                          { return 'SESSION_PORTAL_REQUEST'; }
 function TIMES_STAMP_COOKIES_IN_TIME($timeStamp_username, $timeStamp_password) { return 'TIMES_STAMP_COOKIES_IN_TIME'; }
 
 
 
 

 