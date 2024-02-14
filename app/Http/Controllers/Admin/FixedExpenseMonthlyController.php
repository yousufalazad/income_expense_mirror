<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FixedExpenseMonthly;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FixedExpenseMonthlyController extends Controller
{
    
    public function index()
    {
        $monthly_fixed_expenses = FixedExpenseMonthly::all();
        return view('admin.expense.monthly_fixed.index', compact('monthly_fixed_expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expense.monthly_fixed.create');
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
        
        $monthly_fixed_expense = new FixedExpenseMonthly();
        $monthly_fixed_expense->title = $request->title;
        $monthly_fixed_expense->description = $request->description;
        $monthly_fixed_expense->amount = $request->amount;
        // $monthly_fixed_expense->date = $request->date;
        $monthly_fixed_expense->date = Carbon::now();
        $monthly_fixed_expense->user_id = auth()->user()->id;
        $monthly_fixed_expense->save();
      
        return redirect()->route('monthly-fixed-expense.index')
        ->with('success', 'Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixedExpenseMonthly  $fixedExpenseMonthly
     * @return \Illuminate\Http\Response
     */
    public function show(FixedExpenseMonthly $fixedExpenseMonthly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FixedExpenseMonthly  $fixedExpenseMonthly
     * @return \Illuminate\Http\Response
     */
    public function edit(FixedExpenseMonthly $fixedExpenseMonthly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FixedExpenseMonthly  $fixedExpenseMonthly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FixedExpenseMonthly $fixedExpenseMonthly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixedExpenseMonthly  $fixedExpenseMonthly
     * @return \Illuminate\Http\Response
     */
    public function destroy(FixedExpenseMonthly $fixedExpenseMonthly)
    {
        //
    }
}
