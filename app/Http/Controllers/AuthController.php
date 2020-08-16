<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function me()
    {
        return
        [
            "NIS" => "3103118122",
            "Name" => "Sasi Restuningrum",
            "Gender" => "Perempuan",
            "Phone" => "08971895588",
            "Kelas" => "XII RPL 4",
        ];
    }
}