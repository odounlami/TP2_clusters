<?php

namespace App\Http\Controllers;

use App\Models\Arrondissement;
use App\Models\Cluster;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Filiere;
use App\Models\Village;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    public function create(Request $request){
        $villages = Village::all();
        $arrondissements = Arrondissement::all();
        $communes = Commune::all();
        $departements = Departement::all();
        $filieres = Filiere::all();

        return view('createCluster', [
            'filieres' => $filieres,
            'departements'=>$departements,
            'communes' => $communes,
            'arrondissements' => $arrondissements,
            'villages' => $villages,        
        ]);
    }

    // Pour la sauvegarde 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'filliere_id' => 'required',
            // 'idDepartement' => 'required',
            // 'idCommune' => 'required',
            // 'idArrondissement' => 'required',
            'village_id' => 'required|integer',
            'nom' => 'required',
        ]);

        $clusters = new Cluster();
        $clusters->nom = $validated['nom'];
        $clusters->filliere_id = $validated['filliere_id'];
        $clusters->village_id = $validated['village_id'];

        $clusters->save();

        return redirect()->route('cluster.liste')->with('status', "Le cluster a été enregistrée avec succès !");
    }
    
    public function liste(){
        $clusters = Cluster::orderBy('nom')->get();
        return view('list',[
            'clusters' => $clusters,
        ]);
    }

    //controller for endpoint : 
        public function getCommunesByDepartement($departementId)
        {
              // Logique pour récupérer les communes en fonction de $departementId
             // Retourner les résultats au format JSON

            $communes = Commune::where('departement_id', $departementId)->pluck('nom', 'idCommune');

            return response()->json($communes);

        }
}
