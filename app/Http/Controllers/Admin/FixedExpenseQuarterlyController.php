<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FixedExpenseQuarterly;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Month;

class FixedExpenseQuarterlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quarterly_fixed_expenses = FixedExpenseQuarterly::all();
        return view('admin.expense.quarterly_fixed.index', compact('quarterly_fixed_expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $starting_months = Month::all();
        return view('admin.expense.quarterly_fixed.create', compact('starting_months'));
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
        
        $quarterly_fixed_expense = new FixedExpenseQuarterly();
        $quarterly_fixed_expense->starting_month_id = $request->starting_month_id;
        $quarterly_fixed_expense->title = $request->title;
        $quarterly_fixed_expense->description = $request->description;
        $quarterly_fixed_expense->amount = $request->amount;
        // $quarterly_fixed_expense->date = $request->date;
        $quarterly_fixed_expense->date = Carbon::now();
        $quarterly_fixed_expense->user_id = auth()->user()->id;
        //dd($quarterly_fixed_expense);
        $quarterly_fixed_expense->save();
      
        return redirect()->route('quarterly-fixed-expense.index')
        ->with('success', 'Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixedExpenseQuarterly  $fixedExpenseQuarterly
     * @return \Illuminate\Http\Response
     */
    public function show(FixedExpenseQuarterly $fixedExpenseQuarterly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FixedExpenseQuarterly  $fixedExpenseQuarterly
     * @return \Illuminate\Http\Response
     */
    public function edit(FixedExpenseQuarterly $fixedExpenseQuarterly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FixedExpenseQuarterly  $fixedExpenseQuarterly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FixedExpenseQuarterly $fixedExpenseQuarterly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixedExpenseQuarterly  $fixedExpenseQuarterly
     * @return \Illuminate\Http\Response
     */
    public function destroy(FixedExpenseQuarterly $fixedExpenseQuarterly)
    {
        //
    }
}
