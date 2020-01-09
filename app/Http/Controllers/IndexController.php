<?php

namespace App\Http\Controllers;

use Throwable;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main(Request $request, $number, $tobase = 2)
    {
        try {
            if ($this->validator($number, $tobase)) {
                return 'Result ' . base_convert($number, 10, $tobase);
            }
        } catch (Throwable $e) {
            abort(404);
        }

        abort(404);
    }

    private function validator($number, int $tobase)
    {
        $length = strlen($number);
        $map = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $isPass = true;

        if ($tobase > 1 && $tobase < 37) {
            for ($index = 0; $index < $length; $index++) {
                $char = substr($number, $index, 1);

                if (!in_array($char, $map)) {
                    $isPass = false;
                    break;
                }
            }
        } else {
            $isPass = false;
        }

        return $isPass;
    }
}
