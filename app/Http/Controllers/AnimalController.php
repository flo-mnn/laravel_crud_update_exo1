<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    public function index()
    {
        return view('welcome', ['animals'=> Animal::all(),'looping'=>true]);
    }

    public function create()
    {
        return view('pages.create', ['values'=>false]);
    }

    public function store(Request $request)
    {
        $newEntry = new Animal();
        $newEntry->name = $request->name;
        $newEntry->species = $request->species;
        Storage::put('public/img/', $request->file('src'));
        $newEntry->src = $request->file('src')->hashName();
        $newEntry->age = $request->age;
        $newEntry->description = $request->description;

        $newEntry->save();
        return redirect()->back();
    }

    public function show($id)
    {
        return view('pages.show',['animal'=> Animal::find($id), 'looping'=>false]);
    }

    public function destroy($id)
    {
        $destroy = Animal::find($id);
        $destroy->delete();

        return redirect('/');
    }

    public function edit($id)
    {
        return view('pages.edit',['animal'=> Animal::find($id), 'values'=>true]);
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::find($id);
        $animal->name = $request->name;
        $animal->species = $request->species;
        Storage::delete('public/img/'.$animal->src);
        Storage::put('public/img/', $request->file('src'));
        $animal->src = $request->file('src')->hashName();
        $animal->src = $request->src;
        $animal->age = $request->age;
        $animal->description = $request->description;

        $animal->save();
        return redirect('/animal/show/'.$animal->id);
    }

    public function download (Request $request, Animal $animal)
    {
        
        return Storage::download('public/img/'.$animal->src);
    }
}
