<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\MainController;

class MainControllers extends Controller
{
    public function index()
    {
        echo 'Admin';
    }
}
