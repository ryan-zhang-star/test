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
    public function ryanFormat($number, $foramt_type = 2)
    {
        return base_convert($number, '10', $foramt_type);
    }
}
