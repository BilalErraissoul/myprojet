<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nom_event' => 'required',
            'Description_event' => 'required',
            'Date_event' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->storeAs('public/images', $imageName);
        }

        $events = new Events();
        $events->Nom_event = $request->Nom_event;
        $events->Description_event = $request->Description_event;
        $events->Date_event = $request->Date_event;
        $events->image_path = $imageName ?? null; // Store image path if uploaded
        $events->save();

        $formFields['image'] = $request->file('image')->store('events','public');
        return redirect('/events')->with('success', 'L\'événement a été créé avec succès.');
    }
}
