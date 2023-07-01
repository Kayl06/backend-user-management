<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Form extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = auth()->user()->id;

        $role = User::find($userId)->role;

        return view('form', ['role' => $role]);
    }
}
