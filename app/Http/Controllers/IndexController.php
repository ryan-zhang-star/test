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

    public function practice(Request $request,$aaa, $bbb)
    {
        print_r('Mike Test');
        echo '<br>';
        $ccc = base_convert($bbb,2,10);
        if ($ccc<2)
        {
            return '您輸入錯誤進制，請重新輸入!';
        };
        echo '將數值 "' . $aaa . '" 轉換成 ' . $bbb . ' 進制';
        echo '<br>';
        echo '答案為：' . base_convert($aaa, 10, $ccc);   //將aaa十進制轉換成bbb進制

    }

}
