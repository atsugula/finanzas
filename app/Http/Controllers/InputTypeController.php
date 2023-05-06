<?php

namespace App\Http\Controllers;

use App\Models\InputType;
use Illuminate\Http\Request;

/**
 * Class InputTypeController
 * @package App\Http\Controllers
 */
class InputTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputTypes = InputType::paginate();

        return view('input-type.index', compact('inputTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $inputTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inputType = new InputType();
        return view('input-type.create', compact('inputType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InputType::$rules);

        $inputType = InputType::create($request->all());

        return redirect()->route('input-types.index')
            ->with('success', 'InputType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inputType = InputType::find($id);

        return view('input-type.show', compact('inputType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputType = InputType::find($id);

        return view('input-type.edit', compact('inputType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InputType $inputType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InputType $inputType)
    {
        request()->validate(InputType::$rules);

        $inputType->update($request->all());

        return redirect()->route('input-types.index')
            ->with('success', 'InputType updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inputType = InputType::find($id)->delete();

        return redirect()->route('input-types.index')
            ->with('success', 'InputType deleted successfully');
    }
}
