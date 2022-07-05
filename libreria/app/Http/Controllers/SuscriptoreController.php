<?php

namespace App\Http\Controllers;

use App\Models\Suscriptore;
use Illuminate\Http\Request;

/**
 * Class SuscriptoreController
 * @package App\Http\Controllers
 */
class SuscriptoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suscriptores = Suscriptore::paginate();

        return view('suscriptore.index', compact('suscriptores'))
            ->with('i', (request()->input('page', 1) - 1) * $suscriptores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suscriptore = new Suscriptore();
        return view('suscriptore.create', compact('suscriptore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Suscriptore::$rules);

        $suscriptore = Suscriptore::create($request->all());

        return redirect()->route('suscriptores.index')
            ->with('success', 'Suscriptore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suscriptore = Suscriptore::find($id);

        return view('suscriptore.show', compact('suscriptore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suscriptore = Suscriptore::find($id);

        return view('suscriptore.edit', compact('suscriptore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Suscriptore $suscriptore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suscriptore $suscriptore)
    {
        request()->validate(Suscriptore::$rules);

        $suscriptore->update($request->all());

        return redirect()->route('suscriptores.index')
            ->with('success', 'Suscriptore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $suscriptore = Suscriptore::find($id)->delete();

        return redirect()->route('suscriptores.index')
            ->with('success', 'Suscriptore deleted successfully');
    }
}
