<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use Illuminate\Http\Request;

/**
 * Class CreditCardController
 * @package App\Http\Controllers
 */
class CreditCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditCards = CreditCard::paginate();

        return view('credit-card.index', compact('creditCards'))
            ->with('i', (request()->input('page', 1) - 1) * $creditCards->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $creditCard = new CreditCard();
        return view('credit-card.create', compact('creditCard'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CreditCard::$rules);

        $creditCard = CreditCard::create($request->all());

        return redirect()->route('credit-cards.index')
            ->with('success', 'CreditCard created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $creditCard = CreditCard::find($id);

        return view('credit-card.show', compact('creditCard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $creditCard = CreditCard::find($id);

        return view('credit-card.edit', compact('creditCard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CreditCard $creditCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreditCard $creditCard)
    {
        request()->validate(CreditCard::$rules);

        $creditCard->update($request->all());

        return redirect()->route('credit-cards.index')
            ->with('success', 'CreditCard updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $creditCard = CreditCard::find($id)->delete();

        return redirect()->route('credit-cards.index')
            ->with('success', 'CreditCard deleted successfully');
    }
}
