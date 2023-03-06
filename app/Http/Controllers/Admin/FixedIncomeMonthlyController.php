<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FixedIncomeMonthly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class FixedIncomeMonthlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monthly_fixed_incomes = FixedIncomeMonthly::all();
        return view('admin.income.monthly_fixed.index', compact('monthly_fixed_incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.income.monthly_fixed.create');
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
        
        $monthly_fixed_income = new FixedIncomeMonthly();
        $monthly_fixed_income->title = $request->title;
        $monthly_fixed_income->description = $request->description;
        $monthly_fixed_income->amount = $request->amount;
        // $monthly_fixed_income->date = $request->date;
        $monthly_fixed_income->date = Carbon::now();
        $monthly_fixed_income->user_id = auth()->user()->id;
        //dd($monthly_fixed_income);
        $monthly_fixed_income->save();
      
        return redirect()->route('monthly-fixed-income.index')
        ->with('success', 'Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixedIncomeMonthly  $fixedIncomeMonthly
     * @return \Illuminate\Http\Response
     */
    public function show(FixedIncomeMonthly $fixedIncomeMonthly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FixedIncomeMonthly  $fixedIncomeMonthly
     * @return \Illuminate\Http\Response
     */
    public function edit(FixedIncomeMonthly $fixedIncomeMonthly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FixedIncomeMonthly  $fixedIncomeMonthly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FixedIncomeMonthly $fixedIncomeMonthly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixedIncomeMonthly  $fixedIncomeMonthly
     * @return \Illuminate\Http\Response
     */
    public function destroy(FixedIncomeMonthly $fixedIncomeMonthly)
    {
        //
    }
}
