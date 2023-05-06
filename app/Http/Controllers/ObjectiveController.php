<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use Illuminate\Http\Request;

/**
 * Class ObjectiveController
 * @package App\Http\Controllers
 */
class ObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objectives = Objective::paginate();

        return view('objective.index', compact('objectives'))
            ->with('i', (request()->input('page', 1) - 1) * $objectives->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objective = new Objective();
        return view('objective.create', compact('objective'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Objective::$rules);

        $objective = Objective::create($request->all());

        return redirect()->route('objectives.index')
            ->with('success', 'Objective created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objective = Objective::find($id);

        return view('objective.show', compact('objective'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objective = Objective::find($id);

        return view('objective.edit', compact('objective'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Objective $objective
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objective $objective)
    {
        request()->validate(Objective::$rules);

        $objective->update($request->all());

        return redirect()->route('objectives.index')
            ->with('success', 'Objective updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $objective = Objective::find($id)->delete();

        return redirect()->route('objectives.index')
            ->with('success', 'Objective deleted successfully');
    }
}
