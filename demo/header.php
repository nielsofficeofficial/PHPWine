<?php 

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library/PHPWine/PHPWine.php';

use \PHPWine\VanillaFlavour\Optimizer\Html as Optimizer;
use \PHPWine\VanillaFlavour\Optimizer\Enhancers as OptimizerCare; 

$Html     = new Optimizer();
$Enhancer = new OptimizerCare();


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
 * @package    Authentication | Login Form | Registration | Reset Password | Register Email confirmation | Recovery Email confirmation
 *             Handling Form Validation | Same page CRUD | PHPOptimizer | Advance Form Builder
 *            
 *            
 * @author    nielfernandez <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.1.4
 *
 * 
 */


  
 if(  isbelongs(['register', 'contact']) ) {

  define('PHPWINE_MINIFIED',  true );
 
 }


    if( isbelongs(['index']) )           : _xH1("Welcome Home! ");
     elseif ( isbelongs(['register']) )  : _xH1("Welcome to Register! "); 
     elseif ( isbelongs(['login'] ) )    : _xH1("Welcome to Login! ");
     elseif ( isbelongs(['contact'] ) )  : _xH1("Welcome to Contact! ");
    endif;

    $main_menu =  _xUL( FUNC_ASSOC , 
   
     DOIF( !isbelongs(['index']  )     , ELEM('Li', ELEM('a', 'Home'    , [['href'],['index.php']])    ) ,  FUNC_ASSOC  )
    .DOIF( !isbelongs(['register']  )  , ELEM('Li', ELEM('a', 'Register', [['href'],['register.php']]) ) ,  FUNC_ASSOC  )
    .DOIF( !isbelongs(['login']  )     , ELEM('Li', ELEM('a', 'Login'   , [['href'],['login.php']])    ) ,  FUNC_ASSOC  )
    .DOIF( !isbelongs(['contact'] )    , ELEM('Li', ELEM('a', 'Contact' , [['href'],['contact.php']])  ) ,  FUNC_ASSOC  )

    , [['a'],['b']], 'MyClass', ' This is it ! ' );

    echo ($main_menu) ? $main_menu : false ;

    /*******************************************************************
     * 
     * BEGIN OPTIMIZER CHILD
     * 
     *******************************************************************/
    

    //  $attr2 = [ 'TEST' => [ 1, 'This is errors' ] ];  
      
    //  $tag_name = ['username'];

    //  var_dump($attr2);
    //  echo "<br />";

    //  $one = [ 1, 2, 3 ];
    //  $two = ['a','b','c'];

    //  $three = array_merge(  $tag_name , $attr2['TEST'] );
   
    //  var_dump( $three );
 



//   $optimizer =  [ 

//     'CHILD' => [
       
  
//       ['div', 'ATTR' => [ 'class' => 'my_class_1', 'id' => 'my_id' ] ] , 
//       ['div', 'ATTR' => [ 'class' => 'my_class_2'  ] ] ,  
//       ['div', 'ATTR' => [ 'class' => 'my_class_3' ] ,  'INNER' => [  ['div', 'ATTR' => [ 'class' => 'my_class_5' ]  ] ]  ]
  
//       ]


//     ];


//  echo ELEM('div', $optimizer );
 
//  echo ELEM('div',  $optimizer  );

//     $test = [ '1_GET' => [] ];
     
//     if( array_key_exists('1_GET' ,  $test) && array_key_exists('1_GET' ,  $test)  == NULL ) 
//     {
//       echo "Yes";
//     } else {
//       echo "No";
//     }

//     var_dump( $test );

    //  class Child {
        
    //    public array $optimizer =  [ 

    //     'CHILD' => [
           
      
    //       ['div', 'ATTR' => [ 'class' => 'my_class_1', 'id' => 'my_id', 'name' => 0 ] ] , 
    //       ['div', 'ATTR' => [ 'class' => 'my_class_2' ] ] ,  
    //       ['div', 'ATTR' => [ 'class' => 'my_class_3' ] ,  'INNER' => [ ['div', 'ATTR' => [ 'class' => 'my_class_5',  'id' => 'my_id'  ]  ] ]  ]

         
           
    //     ]

  
    //     ];

  
    //     protected function getValues($valueKey,  $array)
    //     {

    //         if (array_key_exists($valueKey,  $array ) ) {
              
    //           return implode("", $array[$valueKey] );

    //         }

    //     }

    //     public function process( $optimizer )
    //     {

    //       if (array_key_exists('CHILD',  $optimizer ) ) {
          
    //         foreach ($optimizer['CHILD'] as $key => $values) {
    //           $value =  $this->getValues('VALUE',  $values);
    //           foreach ( $values as $key => $childs ) {
                      
              

    //                if (array_key_exists('ATTR', $values ) ) {
                      
    //                  foreach ($values['ATTR'] as $attr => $val) {
                   
    //                     echo $values[0] . " ";
                      
    //                     echo ' '.$attr. " ". $val. ' ' ; 
                 
    //                  }
    
    //                }
                
    //             }
              
    //         }
            
    //       }

    //     }

    //  }
  

    //   $get_child = NEW Child();

    // $get_child->process($get_child->optimizer);

    // echo "<br />";
    // echo "<hr />";

    // _xdiv( 'primary' ,  $get_child->optimizer  );

    // echo "<pre>";
    // var_dump( $get_child->optimizer );
    // echo "</pre>";

    /*******************************************************************
     * 
     * END OPTIMIZER CHILD
     * 
     *******************************************************************/

   /*******************************************************************
     * 
     * BEGIN ENHANCER NEXT_CHILD
     * 
     *******************************************************************/

  //   $new_child =  [ 

  //     'CHILD' => [
         
  //       ['div' , ATTR => [ 'class' => 'my_class_1' ]   , VALUE => ['Hello']  ] ,
  //       ['div' , ATTR => [ 'class' => 'my_class_2' ] ] ,
  //       ['div' , ATTR => [ 'class' => 'my_class_3' ] ] 

  //     ]

  //  ];

  //  $enhancer =  [ 

  //        'CHILD' => [
            
  //          ['div', ATTR => [ 'class' => 'my_class_1' ] , 
  //            VALUE => ['Hello'] ,
  //            INNER => [  
  //                 ['div' , ATTR => [ 'class' => 'class_inner_1', 'id'=>'inner_id1' ] , VALUE => ['Hello World Inner 1'] ]  ,
  //                 ['div' , ATTR => [ 'class' => 'class_inner_2', 'id'=>'inner_id2' ] , 
  //                   VALUE => [ 
  //                         ELEM('div', $new_child ) 
  //                   ]  
  //                ],
                   
  //            ]
  //          ],
           
  //          ['div' , ATTR => [ 'class' => 'my_class_2' ] ] ,
  //          ['div' , ATTR => [ 'class' => 'my_class_3' ] ] ,
  //          ['div' , ATTR => [ 'class' => 'my_class_4' ] ] ,
  //          ['div' , ATTR => [ 'class' => 'my_class_5' ] ] 
 
  //       ]
   
  //  ];
   
  //  _xdiv('id', $enhancer );
  //  echo "<br />";
  //  echo ELEM('div',$enhancer );
  // //     echo "<pre>";
  // //     var_dump( $enhancer );
  // //     echo "</pre>";


  //     echo "<br />";
  //     echo "<hr />";

  //     if (array_key_exists('NEXT_CHILD', $enhancer ) ) {
            
  //       foreach ($enhancer['NEXT_CHILD'] as $key => $values) {
                      
  //                      if (array_key_exists('ATTR', $values ) ) {
                          
  //                        foreach ($values['ATTR'] as $attr => $val) {
                       
  //                           echo ' <' . $values[0]. ' ' . $attr .'=' . $val . '>';
                                
  //                               echo getValues('VALUE', $values );                                
  //                               echo getInner('INNER' , $values );

  //                           echo "</".$values[0].">";
                           
        
  //                        }
        
  //                      }


  //       }

        
  //     }

  //     function getInner($getInner, $array)
  //     {

  //       if (array_key_exists($getInner,  $array) ) {
               
  //         foreach ($array[$getInner] as $key => $values) {
            
  //            if (array_key_exists('ATTR', $values ) ) {
                            
  //                          foreach ($values['ATTR'] as $attr => $val) {
                         
  //                             echo ' <' . $values[0]. ' ' . $attr .'=' . $val . '>';
                                  
  //                                 echo getValues('VALUE', $values ); 
  //                                 echo getInner('INNER' , $values );
  
  //                             echo "</".$values[0].">";
                              
          
  //                          }
          
  //                        }
  
  
  //         }

  //       }

  //     }

  // function getValues($valueKey,  $array)
  // {

  //         if (array_key_exists($valueKey,  $array ) ) {
        
  //       return implode("", $array[$valueKey] );

  //     }

  // }

   /*******************************************************************
     * 
     * END ENHANCER NEXT_CHILD
     * 
     *******************************************************************/
     
//     $enhancer2 =  [ 

//       'NEXT_CHILD' => [
         
//         ['div', 'ATTR' => [ 'class' => 'my_class_1' ] ] ,
//         ['div', 'ATTR' => [ 'class' => 'my_class_2' ] ] ,
//         ['div', 'ATTR' => [ 'class' => 'my_class_3' ] ] 

//       ]

// ];
     
//    $enhancer =  [ 

//          'NEXT_CHILD' => [
            
//            ['div', 'ATTR' => [ 'class' => 'my_class_1' ]   , 'INNER'=> [ ['div', 'ATTR' => [ 'class' => 'my_class_1' ] , 'VALUE' => ['OkayChild']  ] ] ,'VALUE' => [ ELEM('div', $enhancer2 )] ]  ,
//            ['div', 'ATTR' => [ 'class' => 'my_class_2' ] ] ,
//            ['div', 'ATTR' => [ 'class' => 'my_class_3' ] 
//               ,'INNER'=> [ 
//                   ['div', 'ATTR' => [ 'class' => 'my_class_4' ] ]
//                  ,['div', 'ATTR' => [ 'class' => 'my_class_5' ] ]
//               ] 
              
//            ] 

//          ]
   
//    ];
    
//  echo ELEM('div', $enhancer, [['a'],['b']] );


//  class NextChild {

//    public array  $enhancers =  [ 

//     'NEXT_CHILD' => [
       
//       ['div', 'ATTR' => [ 'class' => 'my_class_1' ] , 'INNER'=> [ ['div', 'ATTR' => [ 'class' => 'my_class_1' ] , 'VALUE' => ['OkayChild']  ] ] ,'VALUE' => ['Okay'] ]  ,
//       ['div', 'ATTR' => [ 'class' => 'my_class_2' ] ] ,
//       ['div', 'ATTR' => [ 'class' => 'my_class_3' ] ] 

//     ]

// ];

  
//   protected function getValues($valueKey,  $array)
//   {

//           if (array_key_exists($valueKey,  $array ) ) {
        
//         return implode("", $array[$valueKey] );

//       }

//   }

//  protected function getInner($getInner, $array)
//       {

//         $next_child = [];
        
//         if (array_key_exists($getInner,  $array) ) {
               
//           foreach ($array[$getInner] as $key => $values) {
            
//              if (array_key_exists('ATTR', $values ) ) {
                            

//                            foreach ($values['ATTR'] as $attr => $val) {
                         
//                             $next_child[] = ' <' . $values[0]. ' ' . $attr .'=' . $val . '>'
                                  
//                             . $this->getValues('VALUE', $values )
//                             .  $this->getInner('INNER' , $values )
  
//                              . "</".$values[0].">";
                              
//                            }
                      

//                  }
  
  
//           }

//           return implode("", $next_child);
         
//         }


//     }

//     public function process($enhancer) {
      
//       $next_child = [];

//       if (array_key_exists('NEXT_CHILD', $enhancer ) ) {
            
//         foreach ($enhancer['NEXT_CHILD'] as $key => $values) {
                      
//                        if (array_key_exists('ATTR', $values ) ) {
                           
                  

//                          foreach ($values['ATTR'] as $attr => $val) {
                         
//                           $next_child[] = ' <' . $values[0]. ' ' . $attr .'=' . $val . '>'
                                  
//                           . $this->getValues('VALUE', $values )
//                           . $this->getInner('INNER' , $values )

//                           .  "</".$values[0].">";
                          
            
//                   }
                  
//             }
  
//         }

//         return implode("", $next_child);
        
        
//       }



//     }
      

//  } // end class

//  $enhancer = NEW NextChild();
 
//  // var_dump($enhancer->process($enhancer->enhancers));

// echo ELEM('div', $enhancer->process($enhancer->enhancers) );

