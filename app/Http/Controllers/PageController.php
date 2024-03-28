<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events; // Import the Event model

class PageController extends Controller
{
    public function liste_event(){
        $events = Events::all();

return view('home.liste_event', compact('events'));

    }

    public function ajouter_event(){
        return view('home.ajouter');
    }

    public function ajouter_event_traitement(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'Nom_event' => 'required',
            'Description_event' => 'required',
            'Date_event' => 'required',
            'image'=>'required',
        ]);

        // Create a new instance of the Event model
        $events = new Events();

        // Assign values from the request to the Event model properties
        $events->Nom_event = $request->Nom_event;
        $events->Description_event = $request->Description_event;
        $events->Date_event = $request->Date_event;
        $events->image = $request->image;

        // Save the Event model instance to the database
        $events->save();

        // Redirect back to the "ajouter" page with a success message
        return redirect('/ajouter')->with('status', 'L\'événement a bien été ajouté avec succès.');
    }
    public function update_event($id){
        $events=Events::find($id);
        return view('home.update',compact('events'));
    }
    public function update_event_traitement(Request $request)
{
    // Valider les données de la requête entrante
    $request->validate([
        'Nom_event' => 'required',
        'Description_event' => 'required',
        'Date_event' => 'required',
        'image'=>'required',
    ]);

    // Trouver l'événement à mettre à jour par son ID
    $events = Events::find($request->id);

    // Mettre à jour les propriétés de l'événement avec les nouvelles valeurs
    $events->Nom_event = $request->Nom_event;
    $events->Description_event = $request->Description_event;
    $events->Date_event = $request->Date_event;
    $events->image = $request->image;


    // Sauvegarder les modifications apportées à l'événement
    $events->save();

    // Rediriger vers la liste des événements avec un message de succès
    return redirect('/home')->with('status', 'L\'événement a bien été modifié avec succès.');
}
public function acceuil(){
    return view('home.acceuil');
}
}
