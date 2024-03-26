<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Trajet;
use App\Models\Vehicule;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    public function store(Request $request){
        $commande = new Commande();
        $commande->trajet_id = $request->input('trajet_id');
        $commande->passager_id = $request->input('passager_id');

        $commande->etat = 1;
        $commande->save();

        return redirect()->route('passagertrajets.index')->with('success', 'Vous avez passé commande avec succès');
    }

    public function index()
    {
        return view('homechauffeur', ['commandes' => Commande::with('passager', 'trajet')->get()]);
    }

    public function commandespassager()
    {
        return view('adminCommande', ['commandes' => Commande::with('chauffeur','passager', 'trajet')->get()]);
    }

    public function update(Request $request, $id)
    {
        $commande = Commande::findOrFail($id);
        $commande->chauffeur_id = $request->input('chauffeur_id');
        $commande->save();
        return redirect()->route('commandeschauffeurs')->with('success', 'Vous avez accepté la commande');
    }

    public function commandespasser()
    {
        $commandes = Commande::with('chauffeur','passager', 'trajet')->get();
        $vehicules = Vehicule::all();
        return view('homepassager', ['commandes' => $commandes, 'vehicules' => $vehicules]);
    }

    public function Mesvihicules()
    {

        // Récupérer l'ID de l'utilisateur connecté
        $userId = Auth::id();

        // Récupérer les véhicules où user_id correspond à l'utilisateur connecté
        $vehicules = Vehicule::where('user_id', $userId)->get();

        return view('Mesvihicules', ['vehicules' => $vehicules]);
  
    }

    public function Mesvihicule(Request $request)
    {
        $request->validate([
            'types' => ['required', 'string', 'max:255'],
            'date_achat' => ['required', 'string', 'max:255'],
            'depart' => ['required', 'string', 'max:255'],
            'matricule' => ['required', 'string', 'max:255'],
            'statut' => ['required', 'string', 'max:255'],
            
        ]);

        $vehicule = new Vehicule();
        $vehicule->types = $request->input('types');
        $vehicule->date_achat = $request->input('date_achat');
        $vehicule->depart = $request->input('depart');
        $vehicule->matricule = $request->input('matricule');
        $vehicule->statut = $request->input('statut');

        $vehicule->etat = 1;
        $vehicule->user_id = Auth::id();

        $vehicule->save();
        

        return redirect()->route('Mesvihicules');
    }

    public function allvehicules()
    {

    }
}
