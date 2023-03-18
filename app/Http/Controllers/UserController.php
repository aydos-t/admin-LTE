<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user() {
        return 'Hello user';
    }
    public function id() {
        return 'Your id 1';
    }

}