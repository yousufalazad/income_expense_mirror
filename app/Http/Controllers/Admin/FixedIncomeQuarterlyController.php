<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FixedIncomeQuarterly;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Month;

class FixedIncomeQuarterlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quarterly_fixed_incomes = FixedIncomeQuarterly::all();
        return view('admin.income.quarterly_fixed.index', compact('quarterly_fixed_incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $starting_months = Month::all();
        return view('admin.income.quarterly_fixed.create', compact('starting_months'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'amount' => 'required',
            ]);
        
        $quarterly_fixed_income = new FixedIncomeQuarterly();
        $quarterly_fixed_income->starting_month_id = $request->starting_month_id;
        $quarterly_fixed_income->title = $request->title;
        $quarterly_fixed_income->description = $request->description;
        $quarterly_fixed_income->amount = $request->amount;
        // $quarterly_fixed_income->date = $request->date;
        $quarterly_fixed_income->date = Carbon::now();
        $quarterly_fixed_income->user_id = auth()->user()->id;
        //dd($quarterly_fixed_income);
        $quarterly_fixed_income->save();
      
        return redirect()->route('quarterly-fixed-income.index')
        ->with('success', 'Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixedIncomeQuarterly  $fixedIncomeQuarterly
     * @return \Illuminate\Http\Response
     */
    public function show(FixedIncomeQuarterly $fixedIncomeQuarterly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FixedIncomeQuarterly  $fixedIncomeQuarterly
     * @return \Illuminate\Http\Response
     */
    public function edit(FixedIncomeQuarterly $fixedIncomeQuarterly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FixedIncomeQuarterly  $fixedIncomeQuarterly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FixedIncomeQuarterly $fixedIncomeQuarterly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixedIncomeQuarterly  $fixedIncomeQuarterly
     * @return \Illuminate\Http\Response
     */
    public function destroy(FixedIncomeQuarterly $fixedIncomeQuarterly)
    {
        //
    }
}
