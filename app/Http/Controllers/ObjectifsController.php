<?php

namespace App\Http\Controllers;

use App\Models\Objectif;
use App\Models\objectifsModel;
use Illuminate\Http\Request;

class ObjectifsController extends Controller
{
    public function index()
    {
        $objectifs = objectifsModel::all();
        return view('user.dashboard', compact('objectifs'));
    }

    public function create($numero)
    {
        return view('objectifs.create', ['numero' => $numero]);
    }

    public function store(Request $request)
    {

        objectifsModel::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Objectif created successfully.');
    }

    public function show($id)
    {
        $objectif = objectifsModel::findOrFail($id);
        return view('objectifs.show', compact('objectif'));
    }

    public function edit($id)
    {
        $objectif = objectifsModel::findOrFail($id);
        return view('objectifs.edit', compact('objectif'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string',
        ]);

        $objectif = objectifsModel::findOrFail($id);
        $objectif->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Objectif updated successfully.');
    }

    public function destroy($id)
    {
        $objectif = objectifsModel::findOrFail($id);
        $objectif->delete();
        return redirect()->route('dashboard')->with('success', 'Objectif deleted successfully.');
    }
}
