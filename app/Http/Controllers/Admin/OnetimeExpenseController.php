<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\OneTimeExpense;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Month;

class OneTimeExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $one_time_expenses = OneTimeExpense::all();
        return view('admin.expense.one_time.index', compact('one_time_expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $months = Month::all();
        return view('admin.expense.one_time.create', compact('months'));
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
        
        $one_time_expense = new OneTimeExpense();
        $one_time_expense->month_id = $request->month_id;
        $one_time_expense->title = $request->title;
        $one_time_expense->description = $request->description;
        $one_time_expense->amount = $request->amount;
        // $one_time_expense->date = $request->date;
        $one_time_expense->date = Carbon::now();
        $one_time_expense->user_id = auth()->user()->id;
        //dd($one_time_expense);
        $one_time_expense->save();
      
        return redirect()->route('one-time-expense.index')
        ->with('success', 'Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OnetimeExpense  $onetimeExpense
     * @return \Illuminate\Http\Response
     */
    public function show(OneTimeExpense $oneTimeExpense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OnetimeExpense  $onetimeExpense
     * @return \Illuminate\Http\Response
     */
    public function edit(OneTimeExpense $oneTimeExpense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OnetimeExpense  $onetimeExpense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OneTimeExpense $oneTimeExpense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnetimeExpense  $onetimeExpense
     * @return \Illuminate\Http\Response
     */
    public function destroy(OneTimeExpense $oneTimeExpense)
    {
        //
    }
}
