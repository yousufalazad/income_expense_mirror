<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FixedIncomeYearly;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Month;

class FixedIncomeYearlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yearly_fixed_incomes = FixedIncomeYearly::all();
        return view('admin.income.yearly_fixed.index', compact('yearly_fixed_incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $starting_months = Month::all();
        return view('admin.income.yearly_fixed.create', compact('starting_months'));
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
        
        $yearly_fixed_income = new FixedIncomeYearly();
        $yearly_fixed_income->starting_month_id = $request->starting_month_id;
        $yearly_fixed_income->title = $request->title;
        $yearly_fixed_income->description = $request->description;
        $yearly_fixed_income->amount = $request->amount;
        // $yearly_fixed_income->date = $request->date;
        $yearly_fixed_income->date = Carbon::now();
        $yearly_fixed_income->user_id = auth()->user()->id;
        //dd($yearly_fixed_income);
        $yearly_fixed_income->save();
      
        return redirect()->route('yearly-fixed-income.index')
        ->with('success', 'Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixedIncomeYearly  $fixedIncomeYearly
     * @return \Illuminate\Http\Response
     */
    public function show(FixedIncomeYearly $fixedIncomeYearly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FixedIncomeYearly  $fixedIncomeYearly
     * @return \Illuminate\Http\Response
     */
    public function edit(FixedIncomeYearly $fixedIncomeYearly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FixedIncomeYearly  $fixedIncomeYearly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FixedIncomeYearly $fixedIncomeYearly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixedIncomeYearly  $fixedIncomeYearly
     * @return \Illuminate\Http\Response
     */
    public function destroy(FixedIncomeYearly $fixedIncomeYearly)
    {
        //
    }
}
