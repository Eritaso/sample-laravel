<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile.index', [
            'profiles' => Auth::user()->profiles()->get(),
        ]);
    }

    public function create()
    {
        return view('profile.create');
    }
}
