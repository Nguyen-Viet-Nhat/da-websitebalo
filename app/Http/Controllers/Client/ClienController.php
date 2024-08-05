<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Session;


class ClienController extends Controller
{
    public function viewClient()
    {
        return view('client.layouts.view');
    }
}
