<?php

namespace App\Http\Controllers;

use App\Models\CoursModel;
use App\Models\SpecialiteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursController extends Controller
{
    // index
    public function index(){
        $cours = CoursModel::all();
        return view('cours.index',compact('cours'));
    }

    // create
    public function create(){
        $specialite = SpecialiteModel::all();
        return view('cours.create',compact('specialite'));
    }

    public function store(Request $request)
{
    $data = $request->all();

    if ($request->hasFile('images')) {
        $path = $request->file('images')->store('images', 'public');
        $data['images'] = Storage::url($path);
    }

    CoursModel::create($data);

    return redirect()->route('dashboard');
}
 
    // edit
    public  function edit($id){
        $cour = CoursModel::find($id);
        return view("cours.edit",compact('cour'));
    }

    // update
    public function update(Request $request, $id){
        $cour = CoursModel::find($id);
        $cour->update($request->all());
        return redirect()->route('dashboard');
    }

    // destroy
    public function destroy($id){
        $cour = CoursModel::find($id);
        $cour->delete();
        return redirect()->route('dashboard');
    }

    // show
    
    public function show($id){
        $cour = CoursModel::with('objectifs')->findOrFail($id);
        return view('cours.show', compact('cour'));
    }

    // Method to display objectives
    public function objectifs($id)
    {
        $course = CoursModel::findOrFail($id);
        $objectifs = $course->objectifs; // Assuming you have a relation defined in Course model
        return view('objectifs.objectifs', compact('course', 'objectifs'));
    }
}