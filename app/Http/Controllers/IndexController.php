<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main(Request $request, $aaa, $ccc = null)
    {
        $zzz = array($aaa, $ccc);
        
        $this->changeValue($zzz);
        return $this->myFunction($zzz);
    }

    private function changeValue(&$zzz)
    {
        $zzz[1] = 'fuck';
    }

    private function myFunction($zzz)
    {
        return "Yeeeeee$zzz[0]----$zzz[1]";
    }
}
