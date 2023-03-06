<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FixedExpenseYearly;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Month;

class FixedExpenseYearlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yearly_fixed_expenses = FixedExpenseYearly::all();
        return view('admin.expense.yearly_fixed.index', compact('yearly_fixed_expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $starting_months = Month::all();
        return view('admin.expense.yearly_fixed.create', compact('starting_months'));
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
        
        $yearly_fixed_expense = new FixedExpenseYearly();
        $yearly_fixed_expense->starting_month_id = $request->starting_month_id;
        $yearly_fixed_expense->title = $request->title;
        $yearly_fixed_expense->description = $request->description;
        $yearly_fixed_expense->amount = $request->amount;
        // $yearly_fixed_expense->date = $request->date;
        $yearly_fixed_expense->date = Carbon::now();
        $yearly_fixed_expense->user_id = auth()->user()->id;
        //dd($yearly_fixed_expense);
        $yearly_fixed_expense->save();
      
        return redirect()->route('yearly-fixed-expense.index')
        ->with('success', 'Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixedExpenseYearly  $fixedExpenseYearly
     * @return \Illuminate\Http\Response
     */
    public function show(FixedExpenseYearly $fixedExpenseYearly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FixedExpenseYearly  $fixedExpenseYearly
     * @return \Illuminate\Http\Response
     */
    public function edit(FixedExpenseYearly $fixedExpenseYearly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FixedExpenseYearly  $fixedExpenseYearly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FixedExpenseYearly $fixedExpenseYearly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixedExpenseYearly  $fixedExpenseYearly
     * @return \Illuminate\Http\Response
     */
    public function destroy(FixedExpenseYearly $fixedExpenseYearly)
    {
        //
    }
}
