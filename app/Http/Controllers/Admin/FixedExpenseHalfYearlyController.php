<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FixedExpenseHalfYearly;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Month;

class FixedExpenseHalfYearlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $half_yearly_fixed_expenses = FixedExpenseHalfYearly::all();
        return view('admin.expense.half_yearly_fixed.index', compact('half_yearly_fixed_expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $starting_months = Month::all();
        return view('admin.expense.half_yearly_fixed.create', compact('starting_months'));
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
        
        $half_yearly_fixed_expense = new FixedExpenseHalfYearly();
        $half_yearly_fixed_expense->starting_month_id = $request->starting_month_id;
        $half_yearly_fixed_expense->title = $request->title;
        $half_yearly_fixed_expense->description = $request->description;
        $half_yearly_fixed_expense->amount = $request->amount;
        // $half_yearly_fixed_expense->date = $request->date;
        $half_yearly_fixed_expense->date = Carbon::now();
        $half_yearly_fixed_expense->user_id = auth()->user()->id;
        //dd($half_yearly_fixed_expense);
        $half_yearly_fixed_expense->save();
      
        return redirect()->route('half-yearly-fixed-expense.index')
        ->with('success', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixedExpenseHalfYearly  $fixedExpenseHalfYearly
     * @return \Illuminate\Http\Response
     */
    public function show(FixedExpenseHalfYearly $fixedExpenseHalfYearly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FixedExpenseHalfYearly  $fixedExpenseHalfYearly
     * @return \Illuminate\Http\Response
     */
    public function edit(FixedExpenseHalfYearly $fixedExpenseHalfYearly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FixedExpenseHalfYearly  $fixedExpenseHalfYearly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FixedExpenseHalfYearly $fixedExpenseHalfYearly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixedExpenseHalfYearly  $fixedExpenseHalfYearly
     * @return \Illuminate\Http\Response
     */
    public function destroy(FixedExpenseHalfYearly $fixedExpenseHalfYearly)
    {
        //
    }
}
