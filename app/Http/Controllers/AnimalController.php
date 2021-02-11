<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

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
        $newEntry->src = $request->src;
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
        $animal->src = $request->src;
        $animal->age = $request->age;
        $animal->description = $request->description;

        $animal->save();
        return redirect('/animal/show/'.$animal->id);
    }
}
