<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function selectpassager(){
        return view('passager', ['users' => User::all()]);
    }
    public function selectchauffeur(){
        return view('chauffeur', ['users' => User::all()]);
    }

    public function destroypassager($id)
    {

        $user = User::find($id);
        $user->delete();

        // Rediriger vers la liste des utilisateurs
        return redirect()->route('passagers.index');
    }

    public function destroychauffeur($id)
    {

        $user = User::find($id);
        $user->delete();

        // Rediriger vers la liste des utilisateurs
        return redirect()->route('chauffeurs.index');
    }
}
