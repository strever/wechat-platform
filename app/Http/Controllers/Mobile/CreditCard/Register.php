<?php

namespace App\Http\Controllers\Mobile\CreditCard;

use App\Http\Controllers\Controller;

class Register extends Controller
{
    public function index()
    {
        return view('mobile.creditcard.register.index');
    }
}
