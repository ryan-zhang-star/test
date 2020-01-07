<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        return 'Yeeeeee';
    }
    public function main123()
    {
        return 'Yeeeee123123e';
    }
    public function index($input,$change=2){
        if(is_numeric($input))
         {
             if($change<2 || $change>36)
             {
                 return "傻Ｂ超過進制轉換了";
 
             } else {
 
                 $value = base_convert($input,10,$change);
                 return "結果:$value";
 
             }
        } else{
             return "他媽給我輸入數字";
        }
        
        
       
   
     }
}
