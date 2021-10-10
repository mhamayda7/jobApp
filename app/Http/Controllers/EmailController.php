<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        SendEmail::dispatch('Oday');
    }
}
