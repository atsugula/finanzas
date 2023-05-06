<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

/**
 * Class BudgetController
 * @package App\Http\Controllers
 */
class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::paginate();

        return view('budget.index', compact('budgets'))
            ->with('i', (request()->input('page', 1) - 1) * $budgets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $budget = new Budget();
        return view('budget.create', compact('budget'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Budget::$rules);

        $budget = Budget::create($request->all());

        return redirect()->route('budgets.index')
            ->with('success', 'Budget created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $budget = Budget::find($id);

        return view('budget.show', compact('budget'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budget = Budget::find($id);

        return view('budget.edit', compact('budget'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Budget $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budget $budget)
    {
        request()->validate(Budget::$rules);

        $budget->update($request->all());

        return redirect()->route('budgets.index')
            ->with('success', 'Budget updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $budget = Budget::find($id)->delete();

        return redirect()->route('budgets.index')
            ->with('success', 'Budget deleted successfully');
    }
}
