<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\OnetimeIncome;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Month;

class OnetimeIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $one_time_incomes = OnetimeIncome::all();
        return view('admin.income.one_time.index', compact('one_time_incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $months = Month::all();
        return view('admin.income.one_time.create', compact('months'));
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
        
        $one_time_income = new OnetimeIncome();
        $one_time_income->month_id = $request->month_id;
        $one_time_income->title = $request->title;
        $one_time_income->description = $request->description;
        $one_time_income->amount = $request->amount;
        // $one_time_income->date = $request->date;
        $one_time_income->date = Carbon::now();
        $one_time_income->user_id = auth()->user()->id;
        //dd($one_time_income);
        $one_time_income->save();
      
        return redirect()->route('one-time-income.index')
        ->with('success', 'Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OnetimeIncome  $onetimeIncome
     * @return \Illuminate\Http\Response
     */
    public function show(OnetimeIncome $onetimeIncome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OnetimeIncome  $onetimeIncome
     * @return \Illuminate\Http\Response
     */
    public function edit(OnetimeIncome $onetimeIncome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OnetimeIncome  $onetimeIncome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnetimeIncome $onetimeIncome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnetimeIncome  $onetimeIncome
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnetimeIncome $onetimeIncome)
    {
        //
    }
}
