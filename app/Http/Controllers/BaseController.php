<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function main(Request $request, $FirstDec, $SecBase = 2)
    {
        if (is_numeric($FirstDec)&&is_numeric($SecBase)) {
            $ans = base_convert($FirstDec, 10, $SecBase);
            return "轉換成$SecBase 進制: $ans";
        } else {
            return "是在哈囉？寫數字很難嗎？</br>5秒後幫你轉跳CornHub...";
        }
    }
}
