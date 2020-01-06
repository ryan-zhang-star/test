<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function main(Request $request, $FirstDec, $SecBase)
    {
        if ($SecBase == 2) {
            $ans = base_convert($FirstDec, 10, 2);
            return "轉換成$SecBase 進制: $ans";
        } else if ($SecBase == 8) {
            $ans = base_convert($FirstDec, 10, 8);
            return "轉換成$SecBase 進制: $ans";
        } else if ($SecBase == 10) {
            $ans = base_convert($FirstDec, 10, 10);
            return "轉換成 $SecBase 進制: $ans";
        }else if ($SecBase == 16) {
            $ans = base_convert($FirstDec, 10, 16);
            return "轉換成 $SecBase 進制: $ans";
        } else {
            $ans = base_convert($FirstDec, 10, 2);
            return "不好意思！僅支援'2','8','10','16'，</br>轉換成 2 進制: $ans </br>5秒後幫你轉跳CornHub...";
        }
    }
}
