<?php

namespace App\Http\Controllers;

use App\Http\Requests\InformationsPersonnellesRequest;
use App\Models\InfoPerso;
use Illuminate\Http\Request;

class InformationsPersonnellesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(InformationsPersonnellesRequest $request)
    {
        $infosPersos = InfoPerso::query()->create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'localisation' => $request->localisation,
            'hobbies' => $request->hobbies,
            'points_forts' => $request->points_forts,
            'aPropos' => $request->aPropos,
            'raisonSite' => $request->raisonSite,
        ]);

        dd($infosPersos);

        return redirect()->route('admin')->with('success', 'Mise à jour effectuée');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
