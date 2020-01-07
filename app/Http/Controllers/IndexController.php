<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        return 'I am alan !!';
    }
    public function main123()
    {
        return 'I am alan !!';
    }
    public function ryanFormat($number, $format_type = 2)
    {
        if ($format_type > 36 || $format_type < 2) {
            $format_type = 2;
        }
        return base_convert($number, 10, $format_type);
    }
}
