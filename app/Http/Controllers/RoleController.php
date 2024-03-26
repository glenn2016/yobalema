<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        return view('auth.register', ['roles' => Role::all()]);
    }

    public function lien(Request $request){
        if ($request->user()->roles()->where('nom','admin')->exists()) return view('homeadmin');
        if ($request->user()->roles()->where('nom','chauffeur')->exists()) return view('homechauffeur');
        if ($request->user()->roles()->where('nom','passager')->exists()) return view('homepassager');
    }
}
