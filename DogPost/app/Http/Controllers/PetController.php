<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use Carobon\Cabon;

class PetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::where('adopted', '=', false)->orderBy('created_at', 'desc');
        return view('feed', ['pets' => $pets]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetPost $request)
    {
        if ($request->validated())
        {
            $pet = new Pet;
            $pet->name = $request->input('pet_name');
            $pet->type = $request->input('pet_type');
            $pet->ge = $request->input('pet_age');

            // get the coordinates using Here api.
            $pet->latitude = 0.0;
            $pet->longitude = 0.0;

            // assign owner id
            $pet->owner_id = Auth::user()->id;
            $pet->created_at = Carbon::now();

            $pet->save();

            return redirect()->route('allPets');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = Pet::find($id);

        if ($pet)
        {
            return view('petDetail', ['pet' => $pet])
        }
        else
        {
            return view('petNotFound', [], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "404";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "404";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "404";
    }
}
