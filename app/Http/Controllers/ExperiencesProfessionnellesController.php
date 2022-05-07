<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperiencesProfessionnellesController extends Controller
{
    /**
     * Index général
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Permet de se rendre sur la page d'ajout d'une expérience
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ajouter');
    }

    /**
     * Permet de stocker en base de données la nouvelle expérience
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin.index');
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
     * Permet de se rendre sur la page d'edite d'une expérience
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.modifier');
    }

    /**
     * Permet de stocker en base de données l'édition de l'experience
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return view('admin.index');
    }

    /**
     * Supprimer l'expérience
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('admin.supprimer');
    }
}
