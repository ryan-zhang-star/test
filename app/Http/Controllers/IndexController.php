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
        $mike = 123;
        return 'Yeeeee';
    }

    public function practice(Request $request,$aaa, $bbb = 2)
    {
        print_r('Mike Test');
        echo '<br>';
            if (is_numeric($bbb)&& $bbb>1)
            {
             echo '將數值 "' . $aaa . '" 轉換成 ' . $bbb . ' 進制';
             echo '<br>';    
                echo '答案為：' . base_convert($aaa, 10, $bbb);   //將aaa十進制轉換成bbb進制    
            }else{
                if (preg_match("/^[\x7f-\xff]+$/", $bbb))
                {
                    return '請不要亂打中文好嗎????';
                }
                if(preg_match("/[a-zA-Z]/",$bbb))
                {
                    return '英文很好逆????';
                }
                if(preg_match("/[\Q~!@#$%^&*()+-_=.:?<>\E]/",$bbb))
                {
                    return '愛打符號????';
                }
                if ($bbb < 2)
                {
                    return '請輸入大於1的數值';
                }        
            }
        }
}
