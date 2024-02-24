<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FixedIncomeHalfYearly;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Month;

class FixedIncomeHalfYearlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $half_yearly_fixed_incomes = FixedIncomeHalfYearly::all();
        return view('admin.income.half_yearly_fixed.index', compact('half_yearly_fixed_incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $starting_months = Month::all();
        return view('admin.income.half_yearly_fixed.create', compact('starting_months'));
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
        
        $half_yearly_fixed_income = new FixedIncomeHalfYearly();
        $half_yearly_fixed_income->starting_month_id = $request->starting_month_id;
        $half_yearly_fixed_income->title = $request->title;
        $half_yearly_fixed_income->description = $request->description;
        $half_yearly_fixed_income->amount = $request->amount;
        // $half_yearly_fixed_income->date = $request->date;
        $half_yearly_fixed_income->date = Carbon::now();
        $half_yearly_fixed_income->user_id = auth()->user()->id;
        //dd($half_yearly_fixed_income);
        $half_yearly_fixed_income->save();
      
        return redirect()->route('half-yearly-fixed-income.index')
        ->with('success', 'Successfully Added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixedIncomeHalfYearly  $fixedIncomeHalfYearly
     * @return \Illuminate\Http\Response
     */
    public function show(FixedIncomeHalfYearly $fixedIncomeHalfYearly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FixedIncomeHalfYearly  $fixedIncomeHalfYearly
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fixedIncomeHalfYearly = FixedIncomeHalfYearly::find($id);
        $starting_months = Month::all();
        return view('admin.income.half_yearly_fixed.edit', compact('fixedIncomeHalfYearly', 'starting_months'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FixedIncomeHalfYearly  $fixedIncomeHalfYearly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'amount' => 'required',
            ]);
        
        $half_yearly_fixed_income = FixedIncomeHalfYearly::find($id);
        $half_yearly_fixed_income->starting_month_id = $request->starting_month_id;
        $half_yearly_fixed_income->title = $request->title;
        $half_yearly_fixed_income->description = $request->description;
        $half_yearly_fixed_income->amount = $request->amount;
        // $half_yearly_fixed_income->date = $request->date;
        $half_yearly_fixed_income->date = Carbon::now();
        $half_yearly_fixed_income->user_id = auth()->user()->id;
        //dd($half_yearly_fixed_income);
        $half_yearly_fixed_income->update();
      
        return redirect()->route('half-yearly-fixed-income.index')
        ->with('success', 'Update Successfull'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixedIncomeHalfYearly  $fixedIncomeHalfYearly
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $half_yearly_fixed_income = FixedIncomeHalfYearly::find($id);
        $half_yearly_fixed_income->delete();
        return redirect()->route('half-yearly-fixed-income.index')->with('success', 'Delete successfull');
    }
}
