<?php

namespace App\Http\Controllers;

use App\Models\Chela;
use Illuminate\Http\Request;

/**
 * Class ChelaController
 * @package App\Http\Controllers
 */
class ChelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chelas = Chela::paginate();

        return view('chela.index', compact('chelas'))
            ->with('i', (request()->input('page', 1) - 1) * $chelas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chela = new Chela();
        return view('chela.create', compact('chela'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Chela::$rules);

        $chela = Chela::create($request->all());

        return redirect()->route('chelas.index')
            ->with('success', 'Chela created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chela = Chela::find($id);

        return view('chela.show', compact('chela'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chela = Chela::find($id);

        return view('chela.edit', compact('chela'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Chela $chela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chela $chela)
    {
        request()->validate(Chela::$rules);

        $chela->update($request->all());

        return redirect()->route('chelas.index')
            ->with('success', 'Chela updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chela = Chela::find($id)->delete();

        return redirect()->route('chelas.index')
            ->with('success', 'Chela deleted successfully');
    }
}
