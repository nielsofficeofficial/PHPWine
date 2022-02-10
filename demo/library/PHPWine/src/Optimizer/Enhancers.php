<?php 

 namespace PHPWine\VanillaFlavour\optimizer;

 USE \PHPWine\VanillaFlavour\Merge\Html;
 USE \PHPWine\VanillaFlavour\Optimizer\Html AS Optimizer;
 
/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.1.4 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.1.4 free software: you can redistribute it and/or modify.
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
 * @package    Basic Authentication | Login Form | Registration | Reset Password | Register Email confirmation | Recovery Email confirmation
 *             Handling Form Validation | Same page CRUD | PHPOptimizer | Advance Form Builder
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.4.0.0
 *
 * @method belongs_to(); 
 * @method GetKeyFolderPath(); 
 * @method bring_to(); 
 * @method deliver_to(); 
 * @method send_to(); 
 * @method view_to();
 * @method setFileExtension()
 * @method setElemAttr() 
 * @method BREAK();     
 * @method LINE();  
 * @method SPACE();    
 * @method MERGE();   
 * @method PERFORM();    
 * @method DOIF();  
 * @method DOELSE();    
 * @method STRING();   
 * @method ATTR();     
 * @method ELEM();  
 *
 */

class Enhancers Extends Optimizer {

/**
  * @method _construct 
  * @property @html_extend load functions file get from parents
  * defined __construct parent Optimizer
  **/
public function __construct() {

/**
  *
  * @method public function parent __construct() load function
  * Defined as require files
  * @since 11.04.2020
  *
  **/    
  parent::__construct();

} 

/**
  *
  * @method public function add breaktag html as noHTML
  * Defined as break tag no string quotes 
  * send_to()
  *
  **/ 
public function send_to(

     $uri

  )
  {

     return function_exists(__SENDTO__) ?

        header('Location: https://www.'.trim($uri).'.com/') : 

          $this->EnhanceeCoreErrorMsg();   // 

  }

/**
  *
  * @method public function add breaktag html as noHTML
  * Defined as break tag no string quotes 
  * view_to()
  *
  **/ 
public function view_to(

   $config
  ,$fileName

 )
 {
  
   return function_exists(__VIEWSTO__) ? 

      $this->cps_ixb6_FileHandler_bring_to($config, $fileName, __PHP__, __INCONCE__) : 

         $this->EnhanceeCoreErrorMsg(); 

 }

/**
  *
  * @method public function add breaktag html as noHTML
  * Defined as break tag no string quotes 
  * bring_to()
  *
  **/ 
public function bring_to(

   $config
  ,$fileName      =  null
  ,$extension     =  null
  ,$optional      =  null

 )
 {
  
    return function_exists(__BRINGTO__) ? 

      $this->cps_ixb6_FileHandler_bring_to($config, $fileName, $extension, $optional) : 

        $this->EnhanceeCoreErrorMsg(); 
}

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined Usage: belong_to() 
  * RETURN TRUE IF YOU ARE IN CURRENT PAGE BASE ON CONFIG.PHP
  * @since 27.10.2020
  *
  * belong_to('PageName', __KEY_FOLDER_PATH__ ) ||  belong_to('PageName', 'keyFolderPath' ) // MAPFOLDERPATH
  * belong_to('PageName', 4 ) // ASSIGN MAP  || IN ARRAY  belong_to(['PageName1','PageName2']', [4,5] ) 
  * belong_to('PageName') //  DEFAULT PAGE 
  *
  */
public function belongs_to(

    array|string $thisPage     = null
   ,array|string $page_array   = [1,2,3,4,5,6,7,8,9] 

 )
 {
   
    return function_exists(__ISBELONG__) ? 

       $this->cpe_xib6_FileHandler_belongs_to($thisPage, $page_array) : 

          $this->PERFORM($this->Enhacer_ErrorMsg());  
 
 }

/**
  *
  * @method public function PHPFileEnhancer
  * @static Method Defined Usage: CountFolderFromPath 
  * RETURN DATA FROM ARRAY PRINT FROM PAGE TO GET THE VALUE 
  * NEED TO BE REGISTER TO CONFIGP.HP
  * @since 27.10.2020`
  *
  * $Enhancer->MapFolderPath() // MAPFOLDERPATH
  *
  */
public function GetKeyFolderPath() {
 
  return function_exists(__KEYPATH__) ? 

     $this->cpe_xib6_FileHandler_count() : 

       $this->PERFORM($this->Enhacer_ErrorMsg()); 

}

/**
  *
  * @method public function add breaktag html as noHTML
  * Defined as break tag no string quotes 
  * Neat and clean noHTML
  *
  **/
  public function BREAK(

    mixed $assoc      =  null

  )
  { 
 
   return function_exists(__BR__) ? 

      parent::is_true_break_assoc($assoc) : 

         $this->EnhanceeCoreErrorMsg(); 
 
 }

/**
  *
  * @method public function add line html as noHTML
  * Defined as horizontal line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
   public function LINE(

     mixed $assoc     =  null

  )
  { 

      return function_exists(__HR__) ? 

         parent::_isTrueLine_assoc($assoc) : 

            $this->EnhanceeCoreErrorMsg();     
 
  }

/**
  *
  * @method public function add add Space between text/String
  * Defined as horizontal line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
public function SPACE() { 
 
  return function_exists(__SPACE__) ?
     
     parent::_tagSPACER() : 

       $this->EnhanceeCoreErrorMsg();     


}

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" && execute function with another "" (string) line tag no string quotes
  * echo x"x"x | html::_exe(function()); 
  * Neat and clean noHTML
  *
  **/
 public function MERGE(

     $merge    = null 

 )
 { 

     return function_exists(__MERGE__) ? 

        $this->is_true_set_merge($merge) : 

           $this->EnhanceeCoreErrorMsg();     
 }

 /**
  *
  * @method public Method Set File Asstes Extension within custom att HTML 
  * Defined File Image Extension | __getAssEXTENSION__
  * $extension = Html::SetExtension($argu); 
  
    function getMeIMG($src,$path, $argu=null) 
    {

       $extension = Html::SetImageExtension($argu);
        
       return $sets = [
         
           $attr_name = [$src],
           $attr_val  = [$path.$extension]
        
        ];

    }

  * Build Beautiful and Maintainable
  *
  **/  
  public function setFileExtension(

      $argu     = null

  )
  {

       return function_exists(__FILEEXTENSION__) ? 

         parent::Validate_extension_assets_files($argu) : 

             $this->EnhanceeCoreErrorMsg();    

 }

 /**
 *
 * @method public function SetElementHeaderAttr noHTML
 * @static Method Defined Element Header MEta attributes HTML  
 * Neat and clean noHTML
 * Html::_noHTML(SetElemAttr(['lang'],['en']));
 * Html::_HEAD();
 * Html::_ELEMENT('GPS-Site','meta', SetElemAttr(['charset'],['utf-8']));
 * Html::_ELEMENT('http-equiv','meta', SetElemAttr(['http-equiv','content'],['X-UA-Compatible','IE=edge']));
 *
 **/ 
 public function setElemAttr(

      array $attr_type
     ,array $array_set_2

  ) 
  { 
   
     return function_exists(__SetElemAttr__) ? 

        parent::set_Element_Attr($attr_type,$array_set_2) : 

           $this->EnhanceeCoreErrorMsg();     
 
 }

  /**
  *
  * @method public function __magicELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  * .__magicELSE( $par == TRUE ,'Yes','NO','FUNC_ASSOC'); // within the function
  * html::_PERFORM(__magicELSE( $par == TRUE ,'Yes','NO','FUNC_ASSOC')); // without the function 
  *
  **/
  public function __magicELSE(

      bool  $condition     =  null
     ,mixed $if_result     =  null
     ,mixed $else_result   =  null
     ,mixed $assoc         =  null

   )
   { 
 
      return function_exists(__DOELSE__) ? 

         parent::assoc_method_concat_else( $condition, $if_result, $else_result, $assoc) : 

           $this->EnhanceeCoreErrorMsg();      

  }

/**
  *
  * @method public function __magicELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  * .__magicIF( $par == TRUE ,'Yes','FUNC_ASSOC'); // within the function
  * html::_PERFORM(__magicIF( $par == TRUE ,'Yes','FUNC_ASSOC')); // without the function 
  *
  **/
  public function __magicIF(

      $condition     =  null
     ,$if_result     =  null
     ,$assoc         =  null

  )
  { 

     return function_exists(__DOIF__) ? 

       parent::assoc_method_concat_else( $condition, $if_result, null, $assoc) : 

          $this->EnhanceeCoreErrorMsg();  
  }
 
/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
   public function PERFORM(

      mixed $str     =  null
     ,mixed $assoc   =  null

  )
  { 

     return function_exists(__PERFORM__) ? 

       parent::is_true_set_string($str, $assoc) : 

         $this->EnhanceeCoreErrorMsg(); 
  }

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
   public function STRING(

      string $str     =  null
     ,mixed $assoc   =  null

  )
  { 

     return function_exists(__STRING__) ? 

       parent::is_true_set_string($str, $assoc) : 

          $this->EnhanceeCoreErrorMsg(); 
  }

/**
  *
  * @method public function PHPFileEnhancer
  * @static Method Defined Usage: CountFolderFromPath 
  * RETURN DATA FROM ARRAY PRINT FROM PAGE TO GET THE VALUE 
  * NEED TO BE REGISTER TO CONFIGP.HP
  * @since 27.10.2020
  *
  * $Enhancer->ATTR()
  *
  */
public function ATTR(

    string $tag 
   ,array|string $attr

 )
 {

  return function_exists(__ATTR__) ? 

    $this->cpe_FileHander_hdr($tag, $attr) : 

      $this->PERFORM($this->Enhance_ErrorMsg_att()); 

}

/**
  *
  * @method public function PHPFileEnhancer
  * @static Method Defined Usage: CountFolderFromPath 
  * RETURN DATA FROM ARRAY PRINT FROM PAGE TO GET THE VALUE 
  * NEED TO BE REGISTER TO CONFIGP.HP
  * @since 27.10.2020
  *
  * $Enhancer->ELEM()
  */
public function ELEM(

    $elem    =  null
   ,$value   =  null
   ,$attr    =  null
   ,$id      =  null
   ,$class   =  null

 )
 {
   
 return function_exists(__ELEM__) ? 

    $this->cpe_FileHandler_custom_elem($elem, $value, $attr, $id, $class) : 

      $this->PERFORM($this->Enhance_ErrorMsg_att()); 
 }

/**
  *
  * @method public function PHPFileEnhancer
  * @static Method Defined Usage: Switch Support/Valid GLOBAL ARRAY 
  * RETURN DATA FROM ARRAY METHOD ACCODING TO SWITCH 
  * NEED TO BE REGISTER TO CONFIGP.HP
  * @since 27.10.2020
  * USAGE: bring_to(GETFROM(['PATH','F']), 'file2.php'); || bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
  *
  *
  * MAP
   |- root
   |- library
     |- files.php
   |- files
     |- TEST 
       |- apps.php

   $PATH['REGISTERED'] = [
    
     'Library' => SET_DIR_PATH('library'),
     'FT'      => SET_DIR_PATH('files/TEST'),
     'F'       => SET_DIR_PATH('files')
 
   ];

  * $Enhancer->DO_PATH_SWITCH()
  */
public function GETFROM(

     $rPwhitch_to_swicth
    ,$gP_whitch_to_fetch


)
{

 return function_exists(__GETFROM__) ? 

   $this->cpe_ixb6_FielEnhancers_do_swicth_path($rPwhitch_to_swicth, $gP_whitch_to_fetch) : 

      $this->PERFORM($this->Enhance_ErrorMsg_att()); 
}

public function SET_DIR_PATH(

    $uri
    ,$serverHost

 )
 {
 
 // Trim any uri that sent to var
 $ReturnUri     = trim($uri);
 
 // remove given directory bby replacing emoty  
 ($serverHost === LOCALHOST || !empty($serverHost) || $serverHost !== null ) ? 

     $registeredURI = str_replace( __REPLACE_ABSOLUTE_PATH__[0] , __EMPTY__ , __DIR__ ) :

        $registeredURI = str_replace( __REPLACE_ABSOLUTE_PATH__[1] , __EMPTY__ , __DIR__ );
 
 // assigned direcotry return looking for "library" folder
 return function_exists(__SETDIRPATH__) ? 

    $registeredURI ."/". $ReturnUri . '/'  : 

       $this->PERFORM($this->Enhance_ErrorMsg_att()); 

}

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined defineCurrentPage() 
  * RETURN FOLDER Check CurrentPage 
  * 
  * @since 27.10.2020
  *
  **/
private function cpe_xib6_FileHandler_belongs_to($page, $page_file)  {

 # INPUT_CURRENT_PAGE_NAME_VALIDATE
 # CHECL_INPUT_IF_IT_IS_AN_ARRAY | IF_TRUE_THEN_RETURN_AS_ARRAY_IF_FALSE_RETURN_AS_SIGNLE_POST
 $getMultiPage__ = is_array($page) ? $page : $page; 

 # INPUT_CURRENT_PAGE_NAME_VALIDATE
 # CHECL_INPUT_IF_IT_IS_AN_ARRAY | IF_TRUE_THEN_RETURN_AS_ARRAY_IF_FALSE_RETURN_AS_SIGNLE_POST
 $getMultiPagesFile__ = is_array($page_file) ? $page_file : $page_file; 

 # CHECK_WHICH_PAGE_YOU_ARE_CUURENT_REQUEST
 # THEN_GET_THE_FILE_PAGE
 $checkCurrentPage__ = __SELF_REQUEST__;
   
   # CHECK_IF_SECOND_PARAM_IS_EQUAL_TO_MapFolderPath_OR___MAP_FOLDER_PATH__THEN_RETURN_FOLDER_MAP
   # ELSE_RETURN_TRUE_AS_BASE_ON_INT_PARAM_ASSIGNED_TO_BE_TRUE
   if ($page_file === 'GetKeyFolderPath' || $page_file === __GET_KEY_FOLDER_PATH__) {  $this->PERFORM( $this->GetKeyFolderPath() );
      
       # IF_THE_PAGE_FILE_IS_NULL_OR_EMPTY_THEN_DEFAULT_LEVEL_3
       # IF_IT_IS_TRUE_RETURN_DEFAULT 
     } elseif ( empty($page_file) || $page_file == NULL ) { 

        return $checkCurrentPage__[1];   
        
     }  else {

      # CHECK_IF_THE_PATH_IS_IN_ARRAY_THE_IF_TRUE_RETURN_ARRAYS_IF_FALSE_RETURN_SINGLE_PAGE 
      # REMOVE_PHP_EXTENSION_VALIDATE_FROM_PAGE_PARAM
      # IF_PARAM_AND_GIVE_IS_EQUAL_TRUE 
      $getData__ = parent::cpe_xib6_FileHandler_MultiPage_array($getMultiPage__, 

        # CHECK_IF_THE_PAGE_IS_IN_ARRAY_THE_IF_TRUE_RETURN_ARRAYS_IF_FALSE_RETURN_SINGLE_PAGE 
        str_replace( __PHPFILE__ , __EMPTY__ , parent::cpe_xib6_FileHandler_mulipath_array($getMultiPagesFile__, $checkCurrentPage__, $page_file)));

      return isset($getData__) ? $getData__ : '';

     }
      

} // End of Method 

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined cpe_FileHander_hdr() 
  * RETURN FOLDER Check ATTR 
  * 
  * @since 27.10.2020
  *
  **/
private function cpe_FileHander_hdr($tag, $attr) {
  
  # CHECK_IF_THE_QUICKSTART_vAR_IS_IN_ARRAY_AND_IF_IT_IS_TRUE
  # DO_ARRAY_RETURN_ESLE_SINGLE_VALUE
  is_array($attr) ? $attr = $attr : $quickStart_ = $attr;
  
  # CHECK THE PARAMTERS IF EQUAL TOO GIVEN REQUIRED PARAMETER 
  switch ($tag) {

     case __META__:
       
       parent::cpe_FileJandler_meta($attr, $tag);
       break;

     case __LINK__:
       
       parent::cpe_FileJandler_link($attr, $tag);
       break;     

     case __SCRIPT__:
       
       parent::cpe_FileJandler_script($attr, $tag);
       break;   

     case __TITLE__:
       
       $this->PERFORM(parent::TITLE($quickStart_));
       break;  

     case __CUSTOM_END__:
       
       parent::file_handler_custom_element_inline($attr, $tag);
       break;  

     case __BEGIN_CUSTOM_END__:
       
       parent::file_handler_custom_element_closing_tag($attr, $tag);
       break;  

     case '_xhtml_modify':
       
       parent::cpe_FileJandler_doctype(strtolower($attr));
       break; 

     default:
       $this->Enhance_ErrorMsg_att();
       break;
   } 

} // END OF METHOD

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined cps_ixb6_FileHandler_bring_to() 
  * RETURN bring_to(GETFROM(['PATH','F']), 'file',__PHP__, OPTIONAL); "Optional" // REQUIRE | INCLUDES | INCLUDES ONCE | REQUIREONCE DEFAULT
  * 
  * @since 08.11.2020
  *
  **/
private function cps_ixb6_FileHandler_bring_to($config=null, $fileName=null, $extension=null, $optional=null) {

   $designateDiR    = trim($config  . $fileName);
   $getDesignateDiR = $designateDiR . SetFileExT($extension); 

  switch ($optional) {
     
     case __INC__:

       empty($extension) || $extension == null ? include $designateDiR : include  $getDesignateDiR;
       break;
     
     case __INCONCE__:
        
       empty($extension) || $extension == null ? include_once $designateDiR : include_once $getDesignateDiR;        
       break;

     case __REQUIRE__:
        
       empty($extension) || $extension == null ? require $designateDiR : require $getDesignateDiR;       
       break;

     default:
        
       empty($extension) || $extension == null ? require_once $designateDiR : require_once $getDesignateDiR;        
       break;
       
  } 

}

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined cpe_FileHandler_custom_elem() 
  * RETURN CUSTOM ELEMENTS
  * 
  * @since 08.11.2020
  *
  **/
private function cpe_FileHandler_custom_elem($elem, $value, $attr, $id, $class) {
  
  # RETURN ELEMENT CUSTOM HTML 
  return parent::cpe_custom_elements($elem, $value, $attr, $id, $class);
  
}

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined enhancer_folder_count() 
  * GET PAGE DIRECTORY VALUE TO BE REGISTER IN  CONFIG.PHP
  * RETURN FOLDER CONFIG FROM FCONFIG.PHP
  * 
  * $PHPEnhancer['PAGE_FILE'] = ''; // Default
  * @since 27.10.2020
  *
  **/
private function cpe_xib6_FileHandler_count() {
 
 /**
  * @var $Folder : Define Main Folder
  * @var $Folder : Secondary Folder
  * @var $Folder : Rrrquest file
  **/ 
 $Folder          = 'Main-forder';
 $subFolder       = 'Sub-forder';
 $PathValue       =  __SELF_REQUEST__;  
  
 // CHECK IF THE FILE IS TRUE 
 if (  $PathValue == TRUE ) {
   
   // LOOP THE FILE IF IT IS TRUE THEN RETURN THEY KEY AND VALUE
  foreach ($PathValue  as $PathValue_key => $PathValue_val) 
  {
    
    // THEN COUNT RETURN NUMBER DESIGNATION WITH ARRAY VALUE
    for ($PathValue_i = $PathValue_key; $PathValue_i <= $PathValue_key; $PathValue_i++) 
    { 
     
     // CONCAT HTML WITH MERGE VERSION
     // EMTPY ARRAY 
     $Merge    = "";
     // BEGIN MERGE
     $Merge   .=  _MERGE('GetFolderKeyPath','PRE') .  $PathValue_i . '  => '; 
      
     // THEN CHECK i IF EQUAL ZERO MEANS WEB ROOT 
     if( $PathValue_i === 0 ) {
       
       // RETURN WEB ROOT
       $Merge .= '[\'Web-root, localhost\']'; 
       
      // ELSE THAT IS SECONDARY FOLDER SHOWS FOR MAPPING 
      } elseif ( $PathValue_i >= 2 )  { 
       
       // RETURN SUB FOLDER MAPPING
       $Merge .= '[\''. $subFolder . ' -> ' . $PathValue_val . '\']'; 
     
     // RETURN OTHER DIRECTORY FOLDER FOR MAPPING
     } else { 

     $Merge .=  '[\''. $Folder . ' -> ' . $PathValue_val . '\']'; 

     } 
     
     // END OF MERGE
     $Merge .= xMERGE('PRE');
     
     // THEN PERFORM MAPPING
     $this->PERFORM($Merge);

    }

  } 
  
  // RETURN MAP 
  $this->LINE();
  $this->PERFORM('$[PAGE_FILE] = ' . array_key_last($PathValue));
  $this->LINE();
  
  } else {
   
   // ELSE RETURN ERROR HANDLER MSG
   $this->PERFORM($this->Enhacer_ErrorMsg());

  }

}

/**
  *
  * @method protected function PHPFileEnhancer
  * @static Method Defined HANDLER ERROR MESSAGE 
  * RETURN FOLDER FILE CONFIG>PHP
  * @since 27.10.2020
  *
  */
private function Enhacer_ErrorMsg() {
        
  $ERROR_MSG  = " ";
  $ERROR_MSG .= " Classes Must be Instantiated <br />";
  $ERROR_MSG .= " For Developer support visit github submit issue: ".parent::ELEMENT('a','Submit Github Support', parent::IssueSubmitAttr()).$this->BREAK(METHOD_ASSOC);   
  $ERROR_MSG .= " Recomendation: ".parent::ELEMENT('a','Read Documentation Click Here',parent::DocxEnahncerSubmitAttr());      

  return ($ERROR_MSG);  

}

private function Enhance_ErrorMsg_att() {

  # PERFORM ERROR MASSGES
  $ERROR_MSG  = " ";
  $ERROR_MSG .= " Check ATTR('VALID_PARAM', [ ] ) only valid parameter can used <br />";
  $ERROR_MSG .= " For Developer support visit github submit issue: ".parent::ELEMENT('a','Submit Github Support', parent::IssueSubmitAttr()).$this->BREAK(METHOD_ASSOC);   
  $ERROR_MSG .= " Recomendation: ".parent::ELEMENT('a','Read Documentation Click Here',parent::DocxEnahncerSubmitAttr());      
  
   $this->PERFORM($ERROR_MSG);

}

private function EnhanceeCoreErrorMsg() {

  # PERFORM ERROR MASSGES
  $ERROR_MSG  = " ";
  $ERROR_MSG .= " Class can be extends But Function and Method Cannot be modify! <br />";
  $ERROR_MSG .= " Warning Retore all Modification PHPHtml-Optimizer use default! <br />";  
  $ERROR_MSG .= " For Developer support visit github submit issue: ".parent::ELEMENT('a','Submit Github Support', parent::IssueSubmitAttr()).$this->BREAK(METHOD_ASSOC);   
  $ERROR_MSG .= " Recomendation: ".parent::ELEMENT('a','Read Documentation Click Here',parent::DocxEnahncerSubmitAttr());      
  
   $this->PERFORM($ERROR_MSG);

}


} // End of class
