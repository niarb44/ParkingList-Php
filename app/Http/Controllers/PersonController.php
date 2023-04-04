<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = \App\Person::all();

        return view('viewpersons', ['allPersons' => $persons]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createperson');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        \App\Person::create([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'numbers' => $request->get('numbers'),
            'description' => $request->get('description'),
        ]);

        return redirect('/persons');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($person_numbers)
    {
        $myPerson = Person::where('numbers', $person_numbers)->first();

        return view('editperson', compact('myPerson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $person_numbers)
    {

        //dd($request->get("person->name"));
        //dd($request);
        //dd($person_numbers);

        //$data = $request->validated();

        $myPerson = Person::where('numbers', $person_numbers)->first();

        $myPerson->update([
             'name' => $request->get('person->name'),
             'surname' => $request->get('person->surname'),
             'numbers' => $request->get('person->numbers'),
             'description' => $request->get('person->description'),
        ]);

// $myPerson = Person::where('numbers', $person_numbers)->first();
//         $myPerson->name = $request->input('name');
//         $myPerson->surname = $request->input('surname');
//         $myPerson->numbers = $request->input('numbers');
//         $myPerson->description = $request->input('description');
//         $myPerson->update();
//
//         //dd($myPerson);

        return redirect('/persons');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($person_numbers)
    {


        $myPerson = Person::where('numbers', $person_numbers)->first();

        //$rekordy = Person::all();

        //dd($myPerson);
        //dd($rekordy);

        $myPerson->delete();
        return redirect('/persons');
    }
}
