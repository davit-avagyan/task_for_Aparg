<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    protected $db;

    public function __construct()
    {

    }

    public function allUsers()
    {
        $myId = Auth::id();

        $allUsers = User::select('id', 'name')->whereNotIn('id', [$myId])->get()->toArray();

        return $allUsers;
    }
}
