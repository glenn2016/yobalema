<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrajetController extends Controller
{
    public function create (){
        return view('edittrajet');
    }
    public function store(Request $request)
    {
        $request->validate([
            'depart' => ['required', 'string', 'max:255'],
            'destination' => ['required', 'string', 'max:255'],
            'prix' => ['required', 'integer',],
      
        ]);

        $trajet = new Trajet();
        $trajet->depart = $request->input('depart');
        $trajet->destination = $request->input('destination');
        $trajet->prix = $request->input('prix');
        $trajet->user_id = Auth::id();

        $trajet->save();

        return redirect()->route('accueil-admin');
    }

    public function index()
    {
        return view('trajet', ['trajets' => Trajet::all()]);
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'depart' => ['required', 'string', 'max:255'],
            'destination' => ['required', 'string', 'max:255'],
            'prix' => ['required', 'integer',],
        ]);

        $trajet = Trajet::find($id);
        $trajet->depart = $request->input('depart');
        $trajet->destination = $request->input('destination');
        $trajet->prix = $request->input('prix');

        
        $trajet->save();

        return redirect()->route('trajets.index');
    }

    public function destroy($id)
    {
        // Supprimer l'utilisateur de la base de données
        $trajet = Trajet::find($id);
        $trajet->delete();

        // Rediriger vers la liste des utilisateurs
        return redirect()->route('trajets.index');
    }




}
