<?php namespace PHPWine\VanillaFlavour\system; ?>
<?php 

 use \PHPWine\VanillaFlavour\system\Auth;
 use \PHPWine\VanillaFlavour\System\Request;

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
 
 class System extends Request
{
   
  protected CONST DataRequest = [
     
    'AUTH'

  ];  

 /**
  *
  * Defined POSTDATA Request array of data that return error handler msg
  * @since 03.19.21
  * @since v1.0
  * 
 **/
 protected static function POSTDATA($POST_DATA)
 {

    $data = [];  foreach ($POST_DATA as $dataKey => $dataValue) : $data[] = $dataValue; endforeach;  return  $data;
 
 }

 /**
  *
  * Defined sanitize request into String | set true if remove special charac.
  * @since 03.19.21
  * @since v1.0
  * 
 **/
 protected static function SANITIZEREQUEST($dataRequest, bool $specialCharRemove = false ) 
 {

   /**
    * sanitation source:
    * @source https://www.w3schools.com/php/php_form_validation.asp
    **/
    $dataRequest = trim($dataRequest);
    $dataRequest = stripslashes($dataRequest);
    $dataRequest = htmlspecialchars($dataRequest);
    /**
     * sanitation source: @source end
    **/
    
    if($specialCharRemove == true ) :
      return preg_replace('/[^a-z0-9]/i', '', $dataRequest);
    else :
      return $dataRequest;

    endif;

}

 /**
  *
  * Defined Dependencies error messages
  * @since 10.15.21
  * @since v1.3
  * 
 **/
private static function HANDLER_DEPENDENCIES( string $dependecies = 'CLASS')
{

  if(!empty($dependecies) === 'CLASS')       :   return "Missing dependencies Class is not exist or deleted Request.php";
  elseif(!empty($dependecies) === 'METHOD')  :   return "Missing dependencies CATCH_ERROR_PARAM_HANDLER is not exist or deleted at Class Request.php";
  endif;

}

 /**
  *
  * Defined BIND_SESSION_ENCRYPTDATA_REQUEST() method validate password register new user
  * @since 04.12.21
  * @since v1.0
  * 
 **/
protected static function BIND_SESSION_ENCRYPTDATA_REQUEST($BIND_SESSION_ENCRYPTDATA_REQUEST) 
{    
  $BSER                              = $BIND_SESSION_ENCRYPTDATA_REQUEST;
  $REGPASS_HASCONTAINS               = isset($BIND_SESSION_ENCRYPTDATA_REQUEST['REGPASS_HASCONTAINS']);  
  $REGPASS_HASERROR                  = isset($BIND_SESSION_ENCRYPTDATA_REQUEST['REGPASS_HASERROR']); 

  if((!is_null($BSER )      || !empty($BSER )) && $REGPASS_HASERROR == true )         : return $BIND_SESSION_ENCRYPTDATA_REQUEST['REGPASS_HASCONTAINS'];
   elseif((!is_null($BSER ) || !empty($BSER )) && $REGPASS_HASCONTAINS == true )      : return $BIND_SESSION_ENCRYPTDATA_REQUEST['REGPASS_HASERROR'] ;

  endif;
   
}

 /**
  *
  * Defined BIND_SESSION_ENCRYPTCONFIRM_REQUEST() method validate confirm password register new user
  * @since 04.12.21
  * @since v1.0
  * 
 **/
 protected static function BIND_SESSION_ENCRYPTCONFIRM_REQUEST($BIND_SESSION_ENCRYPTCONFIRM_REQUEST) 
 {
 
  $BSER                              = $BIND_SESSION_ENCRYPTCONFIRM_REQUEST;
  $CONFIRMPASS_HASCONTAINS           = isset($BIND_SESSION_ENCRYPTCONFIRM_REQUEST['CONFIRMPASS_HASCONTAINS']);    
  $CONFIRMPASS_ERROR                 = isset($BIND_SESSION_ENCRYPTCONFIRM_REQUEST['CONFIRMPASS_HASERROR']);   
 
  if((!is_null($BSER )      || !empty($BSER )) &&  $CONFIRMPASS_ERROR == true )            : return $BIND_SESSION_ENCRYPTCONFIRM_REQUEST['CONFIRMPASS_HASERROR'];
   elseif((!is_null($BSER ) || !empty($BSER )) &&  $CONFIRMPASS_HASCONTAINS == true )      : return $BIND_SESSION_ENCRYPTCONFIRM_REQUEST['CONFIRMPASS_HASCONTAINS'];  

  endif;

 }

  /**
    *
    * Defined REDIRECT() redirect method
    * @since 04.05.21
    * @since v1.0
    *
   **/ 
  static protected function REDIRECTTO(string $pageRequestTo)
  {
  
      header("location: {$pageRequestTo}.php");
      exit;
  }

  /**
    *
    * Defined BIND_VALIDATE_PORTAL_KEYS() RETURN ERROR VALUES AND EXPECTED
    * @since 10.06.21
    * @since v1.2
    *
   **/ 
  protected static function BIND_VALIDATE_PORTAL_KEYS( $PARAM_PORTAL_VALIDATION, $PARAM_REQUEST, $eCatch_errors)
  {

    if( is_null( $PARAM_PORTAL_VALIDATION ) || empty(  $PARAM_PORTAL_VALIDATION ) || $PARAM_PORTAL_VALIDATION !== $PARAM_REQUEST ) : return $eCatch_errors;  endif;

  }

  /**
    *
    * Defined BIND_VALIDATION_PARAMS() VALIDATE PARAMS VALUE
    * @since 10.06.21
    * @since v1.2
    *
   **/ 
  protected static function BIND_VALIDATION_PARAMS( $QUERY_STATEMENT_PORTAL_ERROR , $eCatch_errors )
  {

    if( !isset( $QUERY_STATEMENT_PORTAL ) && empty( $QUERY_STATEMENT_PORTAL ) ) : print $eCatch_errors . "<br />"; endif;

  }
 
  
 /**
  *
  * Defined secondary function vanilla into array error messages
  * @since 10.15.21
  * @since v1.3
  * 
 **/
  private static function RETURN_ARRAY_AS_STRING($request)
  {
    return implode($request);
  }
  
 /**
  *
  * Defined RETURN_ERRORS() methods catch single data type for form file registration.
  * @since 03.19.21
  * @since v1.0
  * 
 **/
 protected static function RETURN_RESTRICTED_DATA($USER_ERROR, $AUTH_SESSION_DATA, $VALIDTYPE)
 {

  /**
   *
   * Defined CATCH METHOD ARGUNMENT ERROR HANDLER
   * @since 04.10.21
   * @since v1.0
   * 
  **/
  

   if( !empty( $USER_ERROR))             :  return $USER_ERROR;
   elseif( empty( $USER_ERROR ) )        : 

      if( !empty($AUTH_SESSION_DATA) )   : return $AUTH_SESSION_DATA;
      else                               : 
        
         if ( new \PHPWine\VanillaFlavour\System\Request() !== false)   :  $RequestErrorHandler = NEW \PHPWine\VanillaFlavour\System\Validation();
         else                                                                     :  print( self::HANDLER_DEPENDENCIES( 'CLASS' ) ); 
         endif;
         
         /**
          * 
          * Defined CHECK VALID MIN LENGTH
          * @since 04.10.21
          * @since v1.2
          * 
          **/
          if(isset($VALIDTYPE[LESS_THAN])) :

           error_reporting(0);
               
             $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
           
             $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[LESS_THAN][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_LESS_THAN']));
             $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $VALIDTYPE[LESS_THAN][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_LESS_THAN']));
             $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[LESS_THAN][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_LESS_THAN']));
           

             if(  ( isset( $REH_SP1 )) == true )
             {
              
               print( $RequestErrorHandler::report_dump($VALIDTYPE, LESS_THAN));
               print( $REH_SP1 );
               print( "<br />" );
              
             }
             if( ( isset(  $REH_SP2 ) ) == true )
             {
              
               print( $RequestErrorHandler::report_dump($VALIDTYPE, LESS_THAN));
               print( $REH_SP2 );
              
            }

             if(  ( isset(  $REH_SP3  ) ) == true )
             {

              print( $RequestErrorHandler::report_dump($VALIDTYPE, LESS_THAN));
              print( $REH_SP3 );
              print( "<br />" );

            }

            if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; endif;
           
            $VALIDLESSTHAN_ID             =  $VALIDTYPE[LESS_THAN][0];
            $VALIDLESSTHAN_ARG            =  $VALIDTYPE[LESS_THAN][1];
            $VALIDERROR_VALIDLESSTHAN_MSG =  $VALIDTYPE[LESS_THAN][2];
            $VALIDLESSTHAN                =  $_POST[$VALIDLESSTHAN_ID];

            if( strlen($VALIDLESSTHAN) < $VALIDLESSTHAN_ARG ) : return $VALIDERROR_VALIDLESSTHAN_MSG;   endif;
    
          endif; // VALIDATE_LENGTH_LESS_THAN_REQUEST 

         /**
          *
          * Defined CHECK VALID LENGTH GREATER THAN
          * @since 04.10.21
          * @since v1.2
          * 
        **/
         if (isset($VALIDTYPE[GREATER_THAN])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[GREATER_THAN][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_GREATER_THAN']));
          $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $VALIDTYPE[GREATER_THAN][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_GREATER_THAN']));
          $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[GREATER_THAN][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_GREATER_THAN']));

          if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, GREATER_THAN));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, GREATER_THAN));
             print( $REH_SP2 );
             
           }

           if(  ( isset(  $REH_SP3  ) ) == true )
           {

             print( $RequestErrorHandler::report_dump($VALIDTYPE, GREATER_THAN));
             print( $REH_SP3 );
             print( "<br />" );

           }

           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
          endif;

          $VALIDGREATER_THAN_ID        =  $VALIDTYPE[GREATER_THAN][0];
          $VALIDGREATER_THAN_ID_ARG    =  $VALIDTYPE[GREATER_THAN][1];
          $VALIDERROR_GREATER_THAN_MGS =  $VALIDTYPE[GREATER_THAN][2];
          $VALIDGREATER_THAN           =  $_POST[$VALIDGREATER_THAN_ID];
 
          if(strlen( $VALIDGREATER_THAN  ) > $VALIDGREATER_THAN_ID_ARG)  : return $VALIDERROR_GREATER_THAN_MGS; endif;
 
         endif; // CHECK VALID LENGTH GREATER THAN

          /**
           * 
           * Defined CHECK VALID MIN LENGTH
           * @since 04.10.21
           * @since v1.0
           * 
           **/
          if( isset($VALIDTYPE[MINLENGTH])) :

            error_reporting(0);

            $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
            
            $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[MINLENGTH][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_MINLENGTH']));
            $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $VALIDTYPE[MINLENGTH][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_MINLENGTH']));
            $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[MINLENGTH][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_MINLENGTH']));

             if(  ( isset( $REH_SP1 )) == true )
             {
               
               print( $RequestErrorHandler::report_dump($VALIDTYPE, MINLENGTH));
               print( $REH_SP1 );
               print( "<br />" );
               
             }
             if( ( isset(  $REH_SP2 ) ) == true )
             {
               
               print( $RequestErrorHandler::report_dump($VALIDTYPE, MINLENGTH));
               print( $REH_SP2 );
               
             }
  
             if(  ( isset(  $REH_SP3  ) ) == true )
             {
  
               print( $RequestErrorHandler::report_dump($VALIDTYPE, MINLENGTH));
               print( $REH_SP3 );
               print( "<br />" );
  
             }
  
             if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
            endif;
            
            $VALIDMINLENGTH_ID      =  $VALIDTYPE[MINLENGTH][0];
            $VALIDMINLENGTH_ARG     =  $VALIDTYPE[MINLENGTH][1];
            $VALIDERROR_MINLENGTH   =  $VALIDTYPE[MINLENGTH][2];
            $VALIDMINLENGTH         =  $_POST[$VALIDMINLENGTH_ID];
  
            if(strlen($VALIDMINLENGTH) <= $VALIDMINLENGTH_ARG) : return $VALIDERROR_MINLENGTH; endif;

          endif; // VALIDATE_MINLENGTH_REQUEST LESS THAN EQUAL

         /**
          *
          * Defined CHECK VALID MAX LENGTH
          * @since 04.10.21
          * @since v1.0
          * 
          **/
          if ( isset($VALIDTYPE[MAXLENGTH])) :

            error_reporting(0); 

            $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
            
            $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[MAXLENGTH][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_MAXLENGTH']));
            $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $VALIDTYPE[MAXLENGTH][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_MAXLENGTH']));
            $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[MAXLENGTH][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_MAXLENGTH']));

  
             if(  ( isset( $REH_SP1 )) == true )
             {
               
               print( $RequestErrorHandler::report_dump($VALIDTYPE, MAXLENGTH));
               print( $REH_SP1 );
               print( "<br />" );
               
             }
             if( ( isset(  $REH_SP2 ) ) == true )
             {
               
               print( $RequestErrorHandler::report_dump($VALIDTYPE, MAXLENGTH));
               print( $REH_SP2 );
               
             }
  
             if(  ( isset(  $REH_SP3  ) ) == true )
             {
  
               print( $RequestErrorHandler::report_dump($VALIDTYPE, MAXLENGTH));
               print( $REH_SP3 );
               print( "<br />" );
  
             }
  
             if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
            endif;
           
            $VALIDMAXLENGTH_ID      =  $VALIDTYPE[MAXLENGTH][0];
            $VALIDMAXLENGTH_ARG     =  $VALIDTYPE[MAXLENGTH][1];
            $VALIDERROR_MAXLENGTH   =  $VALIDTYPE[MAXLENGTH][2];
            $VALIDMAXLENGTH         =  $_POST[$VALIDMAXLENGTH_ID];

           if(strlen($VALIDMAXLENGTH) >= $VALIDMAXLENGTH_ARG)  : return $VALIDERROR_MAXLENGTH; endif;

         endif; // VALIDATE_MAXLENGTH_REQUEST GREATER THAN EQUAL

         /**
          *
          * Defined CHECK VALID LENGTH EQUALTO
          * @since 04.10.21
          * @since v1.2
          * 
          **/
         if (isset($VALIDTYPE[EQUALTO])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[EQUALTO][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_EQUALTO']));
          $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $VALIDTYPE[EQUALTO][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_EQUALTO']));
          $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[EQUALTO][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_EQUALTO']));

           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, EQUALTO));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, EQUALTO));
             print( $REH_SP2 );
             
           }

           if(  ( isset(  $REH_SP3  ) ) == true )
           {

             print( $RequestErrorHandler::report_dump($VALIDTYPE, EQUALTO));
             print( $REH_SP3 );
             print( "<br />" );

           }

           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
          endif;
          
            $EQUALTO_ID          =  $VALIDTYPE[EQUALTO][0];
            $EQUALTO_ARG         =  $VALIDTYPE[EQUALTO][1];
            $VALIDERROR_EQUALTO  =  $VALIDTYPE[EQUALTO][2];
            $EQUALTO             =  $_POST[$EQUALTO_ID];

          if(strlen($EQUALTO) == $EQUALTO_ARG)  : return  $VALIDERROR_EQUALTO; endif;

         endif;

        /**
         *
         * Defined CHECK VALID LENGTH EQUALTO STRICT
         * @since 04.10.21
         * @since v1.2
         * 
         **/
        if (isset($VALIDTYPE[EQUAL_STRICT])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[EQUAL_STRICT][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_EQUAL_STRICT']));
          $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $VALIDTYPE[EQUAL_STRICT][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_EQUAL_STRICT']));
          $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[EQUAL_STRICT][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_EQUAL_STRICT']));

           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, EQUAL_STRICT));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, EQUAL_STRICT));
             print( $REH_SP2 );
             
           }

           if(  ( isset(  $REH_SP3  ) ) == true )
           {

             print( $RequestErrorHandler::report_dump($VALIDTYPE, EQUAL_STRICT));
             print( $REH_SP3 );
             print( "<br />" );

           }

           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
          endif;

          $EQUAL_STRICT_ID         =  $VALIDTYPE[EQUAL_STRICT][0];
          $EQUAL_STRICT_ARG        =  $VALIDTYPE[EQUAL_STRICT][1];
          $VALIDERROR_EQUAL_STRICT =  $VALIDTYPE[EQUAL_STRICT][2];
          $EQUAL_STRICT            =  $_POST[$EQUAL_STRICT_ID];

          if(strlen($EQUAL_STRICT) === $EQUAL_STRICT_ARG )  : return $VALIDERROR_EQUAL_STRICT; endif;

        endif;

        /**
         *
         * Defined CHECK VALID EMAIL with @mail.com
         * @since 04.10.21
         * @since v1.2
         * 
        **/
        if( isset($VALIDTYPE[VALID_EMAIL]) ) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[VALID_EMAIL][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_VALID_EMAIL']));
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[VALID_EMAIL][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_VALID_EMAIL']));

           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, VALID_EMAIL));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, VALID_EMAIL));
             print( $REH_SP2 );
             
           }

           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;
    
          $VALID_EMAIL_ID         =  $VALIDTYPE[VALID_EMAIL][0];
          $VALIDERROR_VALID_EMAIL =  $VALIDTYPE[VALID_EMAIL][1];
          $VALID_EMAIL            =  $_POST[$VALID_EMAIL_ID];
    
          if(!filter_var($VALID_EMAIL , FILTER_VALIDATE_EMAIL)) : return  $VALIDERROR_VALID_EMAIL; endif;

        endif;

        /**
         *
         * Defined CHECK VALID STRING DATA TYPE
         * @since 04.10.21
         * @since v1.0
         * 
        **/
        if ( isset($VALIDTYPE[STRINGTYPE])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[STRINGTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_STRINGTYPE']));
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[STRINGTYPE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_STRINGTYPE']));

          if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, STRINGTYPE));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, STRINGTYPE));
             print( $REH_SP2 );
             
           }

           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;

          $VALIDSTRING_ID       =  $VALIDTYPE[STRINGTYPE][0];
          $VALIDERROR_STRING    =  $VALIDTYPE[STRINGTYPE][1];
          $VALIDSTRING          =  $_POST[$VALIDSTRING_ID];

        if(!preg_match("/^[a-zA-Z-' ]*$/", $VALIDSTRING)) : return $VALIDERROR_STRING; endif;

        endif;

       /**
        *
        * Defined CHECK VALID NUMERIC DATA TYPE
        * @since 04.10.21
        * @since v1.0
        * 
       **/
       if ( isset($VALIDTYPE[NUMERICTYPE]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[NUMERICTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_NUMERICTYPE']));
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[NUMERICTYPE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_NUMERICTYPE']));

         if(  ( isset( $REH_SP1 )) == true )
         {
           
           print( $RequestErrorHandler::report_dump($VALIDTYPE, NUMERICTYPE));
           print( $REH_SP1 );
           print( "<br />" );
           
         }
         if( ( isset(  $REH_SP2 ) ) == true )
         {
           
           print( $RequestErrorHandler::report_dump($VALIDTYPE, NUMERICTYPE));
           print( $REH_SP2 );
           
         }

         if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
        endif;

         $VALIDNUMERIC_ID      =  $VALIDTYPE[NUMERICTYPE][0];
         $VALIDERROR_NUMERIC   =  $VALIDTYPE[NUMERICTYPE][1];
         $VALIDNUMERIC         =  $_POST[$VALIDNUMERIC_ID];

        if (!is_numeric($VALIDNUMERIC)) : return $VALIDERROR_NUMERIC; 
        endif;

       endif;

       /**
        *
        * Defined CHECK VALID NUMERIC DATA TYPE
        * @since 04.10.21
        * @since v1.0
        * 
       **/
      if ( isset($VALIDTYPE[INTEGERTYPE]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[INTEGERTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_INTEGERTYPE'])  );
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[INTEGERTYPE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_INTEGERTYPE']) );

         if(  ( isset( $REH_SP1 )) == true )
         {
           
           print( $RequestErrorHandler::report_dump($VALIDTYPE, INTEGERTYPE));
           print( $REH_SP1 );
           print( "<br />" );
           
         }
         if( ( isset(  $REH_SP2 ) ) == true )
         {
           
           print( $RequestErrorHandler::report_dump($VALIDTYPE, INTEGERTYPE));
           print( $REH_SP2 );
           
         }

        if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
        endif;
       
         $VALIDINTIGERTYPE_ID      =  $VALIDTYPE[INTEGERTYPE][0];
         $VALIDERROR_INTIGERTYPE   =  $VALIDTYPE[INTEGERTYPE][1];
         $VALIDINTIGERTYPE         =  $_POST[$VALIDINTIGERTYPE_ID];

        if(!is_integer( $VALIDINTIGERTYPE)) : return $VALIDERROR_INTIGERTYPE; 
        endif;
      
      endif;

       /**
        *
        * Defined CHECK VALID FLOAT DATA TYPE
        * @since 04.10.21
        * @since v1.0
        * 
        **/
       if (isset($VALIDTYPE[FLOATTYPE])) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[FLOATTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_FLOATTYPE'])  );
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[FLOATTYPE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_FLOATTYPE']) );

         if(  ( isset( $REH_SP1 )) == true )
         {
           
           print( $RequestErrorHandler::report_dump($VALIDTYPE, FLOATTYPE));
           print( $REH_SP1 );
           print( "<br />" );
           
         }
         if( ( isset(  $REH_SP2 ) ) == true )
         {
           
           print( $RequestErrorHandler::report_dump($VALIDTYPE, FLOATTYPE));
           print( $REH_SP2 );
           
         }

         if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
        endif;

         $VALIDFLOAT_ID         =  $VALIDTYPE[FLOATTYPE][0];
         $VALIDERROR_FLOAT      =  $VALIDTYPE[FLOATTYPE][1];
         $VALIDFLOAT            =  $_POST[$VALIDFLOAT_ID];

         if(!is_float($VALIDFLOAT)) : return $VALIDERROR_FLOAT; 
         endif;

       endif;

      /**
        *
        * Defined CHECK CONTAIN UPPER CASE TYPE
        * @since 10.21.21 
        * @since v1.4
        * 
        **/
        if (isset($VALIDTYPE[CONTAIN_UPPERCASE])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[CONTAIN_UPPERCASE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_UPPERCASE'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[CONTAIN_UPPERCASE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_UPPERCASE']) );
  
           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, CONTAIN_UPPERCASE));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, CONTAIN_UPPERCASE));
             print( $REH_SP2 );
             
           }
  
           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;
  
           $VALIDCONTAIN_UPPERCASE_ID         =  $VALIDTYPE[CONTAIN_UPPERCASE][0];
           $VALIDERROR_CONTAIN_UPPERCASE      =  $VALIDTYPE[CONTAIN_UPPERCASE][1];
           $VALIDCONTAIN_UPPERCASE            =  $_POST[$VALIDCONTAIN_UPPERCASE_ID];
  
           if(!preg_match('@[A-Z]@', $VALIDCONTAIN_UPPERCASE)) : return $VALIDERROR_CONTAIN_UPPERCASE; 
           endif;
  
         endif;

       /**
        *
        * Defined CHECK CONTAIN LOWER CASE TYPE
        * @since 10.21.21 
        * @since v1.4
        * 
        **/
        if (isset($VALIDTYPE[CONTAIN_LOWERCASE])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[CONTAIN_LOWERCASE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_LOWERCASE'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[CONTAIN_LOWERCASE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_LOWERCASE']) );
  
           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, CONTAIN_LOWERCASE ));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, CONTAIN_LOWERCASE ));
             print( $REH_SP2 );
             
           }
  
           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;
  
           $VALIDCONTAIN_LOWERCASE_ID         =  $VALIDTYPE[CONTAIN_LOWERCASE][0];
           $VALIDERROR_CONTAIN_LOWERCASE      =  $VALIDTYPE[CONTAIN_LOWERCASE][1];
           $VALIDCONTAIN_LOWERCASE            =  $_POST[$VALIDCONTAIN_LOWERCASE_ID ];
  
           if(!preg_match('@[a-z]@',  $VALIDCONTAIN_LOWERCASE)) : return  $VALIDERROR_CONTAIN_LOWERCASE ; 
           endif;
  
         endif;

       /**
        *
        * Defined CHECK CONTAIN CONTAIN_NUMBER TYPE
        * @since 10.21.21 
        * @since v1.4
        * 
        **/
        if (isset($VALIDTYPE[CONTAIN_NUMBER])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[CONTAIN_NUMBER][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_NUMBER'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[CONTAIN_NUMBER][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_NUMBER']) );
  
           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, CONTAIN_NUMBER ));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, CONTAIN_NUMBER ));
             print( $REH_SP2 );
             
           }
  
           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;
  
           $VALIDCONTAIN_NUMBER_ID         =  $VALIDTYPE[CONTAIN_NUMBER][0];
           $VALIDERROR_CONTAIN_NUMBER      =  $VALIDTYPE[CONTAIN_NUMBER][1];
           $VALIDCONTAIN_NUMBER            =  $_POST[ $VALIDCONTAIN_NUMBER_ID ];
  
           if(!preg_match('@[0-9]@', $VALIDCONTAIN_NUMBER )) : return   $VALIDERROR_CONTAIN_NUMBER ; 
           endif;
  
         endif;

       /**
        *
        * Defined CHECK CONTAIN CONTAIN_SPECIALCHAR TYPE
        * @since 10.21.21 
        * @since v1.4
        * 
        **/
        if (isset($VALIDTYPE[CONTAIN_SPECIALCHAR])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[CONTAIN_SPECIALCHAR][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_SPECIALCHAR'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[CONTAIN_SPECIALCHAR][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_SPECIALCHAR']) );
  
           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, CONTAIN_SPECIALCHAR ));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($VALIDTYPE, CONTAIN_SPECIALCHAR ));
             print( $REH_SP2 );
             
           }
  
           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;
  
           $VALIDCONTAIN_SPECIALCHAR_ID         =  $VALIDTYPE[CONTAIN_SPECIALCHAR][0];
           $VALIDERROR_CONTAIN_SPECIALCHAR      =  $VALIDTYPE[CONTAIN_SPECIALCHAR][1];
           $VALIDCONTAIN_SPECIALCHAR            =  $_POST[ $VALIDCONTAIN_SPECIALCHAR_ID  ];
  
           if( !preg_match('@[^\w]@', $VALIDCONTAIN_SPECIALCHAR )) : return   $VALIDERROR_CONTAIN_SPECIALCHAR; 
           endif;
  
         endif;

      /**
       *
       * Defined CHECK VALID STRONG PASSWORD
       * @since 10.21.21
       * @since v1.4
       * 
      **/
      if ( isset($VALIDTYPE[VALIDPASSWORD]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[VALIDPASSWORD][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_VALIDPASSWORD'])  );
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[VALIDPASSWORD][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_VALIDPASSWORD']) );

         if(  ( isset( $REH_SP1 )) == true )
         {
           
           print( $RequestErrorHandler::report_dump($VALIDTYPE, VALIDPASSWORD));
           print( $REH_SP1 );
           print( "<br />" );
           
         }
         if( ( isset(  $REH_SP2 ) ) == true )
         {
           
           print( $RequestErrorHandler::report_dump($VALIDTYPE, VALIDPASSWORD));
           print( $REH_SP2 );
           
         }

         if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
        endif;

        $VALIDATE_VALIDPASSORD_REQUEST_DEFAULT   =  $VALIDTYPE[VALIDPASSWORD][0];
        $VALIDATE_VALIDPASSORD_REQUEST_ERROR     =  $VALIDTYPE[VALIDPASSWORD][1];
        $VALIDATE_VALIDPASSWORD                  =  $_POST[$VALIDATE_VALIDPASSORD_REQUEST_DEFAULT];
    
        if( !preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $VALIDATE_VALIDPASSWORD )) : return $VALIDATE_VALIDPASSORD_REQUEST_ERROR; 
        endif;
     
      endif;    


      /**
       *
       * Defined CHECK NULL_OR_EMPTY
       * @since 10.21.21
       * @since v1.4
       * 
      **/
      if ( isset($VALIDTYPE[INPUTFIELD_EMPTY]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[INPUTFIELD_EMPTY][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_INPUTFIELD_EMPTY'])  );
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $VALIDTYPE[INPUTFIELD_EMPTY][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_INPUTFIELD_EMPTY']) );

         if(  ( isset( $REH_SP1 )) == true )
         {
           
           print( $RequestErrorHandler::report_dump($VALIDTYPE, INPUTFIELD_EMPTY ));
           print( $REH_SP1 );
           print( "<br />" );
           
         }
         if( ( isset(  $REH_SP2 ) ) == true )
         {
           
           print( $RequestErrorHandler::report_dump($VALIDTYPE, INPUTFIELD_EMPTY ));
           print( $REH_SP2 );
           
         }

         if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
        endif;

        $VALIDATE_NULL_OR_EMPTY_ID        =  $VALIDTYPE[INPUTFIELD_EMPTY][0];
        $VALIDATE_NULL_OR_EMPTY_ERROR     =  $VALIDTYPE[INPUTFIELD_EMPTY][1];
        $VALIDATE_NULL_OR_EMPTY           =  $_POST[ $VALIDATE_NULL_OR_EMPTY_ID ];
    
        if(  !isset( $VALIDATE_NULL_OR_EMPTY ) || empty( $VALIDATE_NULL_OR_EMPTY ) || is_null( $VALIDATE_NULL_OR_EMPTY ) ) : return $VALIDATE_NULL_OR_EMPTY_ERROR; 
        endif;
     
      endif;   

      /**
       *
       * Defined CHECK VALID CONFIRM PASSWORD
       * @since 04.10.21
       * @since v1.0
       * 
      **/
      if ( isset($VALIDTYPE[CONFIRMPASSWORD]) ) :

        error_reporting(0);
               
        $CATCH_ERROR_PARAM_HANDLER = REQUEST::CATCH_ERROR_PARAM_HANDLER();
      
        $REH_SP1 = VALIDATION::STRINGTYPE(  $VALIDTYPE[CONFIRMPASSWORD][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONFIRMPASSWORD']));
        $REH_SP2 = VALIDATION::STRINGTYPE(  $VALIDTYPE[CONFIRMPASSWORD][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONFIRMPASSWORD']));
        $REH_SP3 = VALIDATION::STRINGTYPE(  $VALIDTYPE[CONFIRMPASSWORD][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_CONFIRMPASSWORD']));
      

        if(  ( isset( $REH_SP1 )) == true )
        {
         
          print( $RequestErrorHandler::report_dump($VALIDTYPE, CONFIRMPASSWORD ));
          print( $REH_SP1 );
          print( "<br />" );
         
        }
        if( ( isset(  $REH_SP2 ) ) == true )
        {
         
          print( $RequestErrorHandler::report_dump($VALIDTYPE, CONFIRMPASSWORD ));
          print( $REH_SP2 );
         
        }
        if(  ( isset(  $REH_SP3  ) ) == true )
        {

         print( $RequestErrorHandler::report_dump($VALIDTYPE, CONFIRMPASSWORD ));
         print( $REH_SP3 );
         print( "<br />" );

        }

       if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
      endif;

        $VALIDATE_CONFIRMPASSORD_REQUEST_DEFAULT   =  $VALIDTYPE[CONFIRMPASSWORD][0];
        $VALIDATE_CONFIRMPASSORD_REQUEST_CONFIRM   =  $VALIDTYPE[CONFIRMPASSWORD][1];
        $VALIDATE_CONFIRMPASSORD_REQUEST_ERROR     =  $VALIDTYPE[CONFIRMPASSWORD][2];
        
    
        if( $VALIDATE_CONFIRMPASSORD_REQUEST_DEFAULT !== $VALIDATE_CONFIRMPASSORD_REQUEST_CONFIRM ) : return $VALIDATE_CONFIRMPASSORD_REQUEST_ERROR; 
        endif;
     
      endif;    

     /**
      *
      * Defined USER_REDIRECT
      * @since 04.10.21
      * @since v1.0
      * 
      **/
     if( isset($VALIDTYPE[USER_REDIRECT])) :

       $USER_REDIRECT         =  $VALIDTYPE[USER_REDIRECT][0];
       $USER_SESSIONTRUE      =  $VALIDTYPE[USER_REDIRECT][1];

      if(isset($USER_SESSIONTRUE) == true) : AUTH::USERAUTH($USER_REDIRECT, $USER_SESSIONTRUE);  else : AUTH::USERAUTH($USER_REDIRECT); 
      endif;

     endif;

    endif;

  endif;
  
 }

} // Class end
