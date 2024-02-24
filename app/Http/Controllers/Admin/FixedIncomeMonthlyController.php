<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FixedIncomeMonthly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class FixedIncomeMonthlyController extends Controller
{
    public function index()
    {
        $monthly_fixed_incomes = FixedIncomeMonthly::all();
        return view('admin.income.monthly_fixed.index', compact('monthly_fixed_incomes'));
    }

    public function create()
    {
        return view('admin.income.monthly_fixed.create');
    }

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

    public function show( $id)
    {
        $fixedIncomeMonthly = FixedIncomeMonthly::find($id);
        return view('admin.income.monthly_fixed.show', compact('fixedIncomeMonthly'));
    }

    public function edit($id)
    {
        $fixedIncomeMonthly = FixedIncomeMonthly::find($id);
        return view('admin.income.monthly_fixed.edit', compact('fixedIncomeMonthly'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'amount' => 'required',
            ]);
        
        $fixedIncomeMonthly = FixedIncomeMonthly::find($id);

        $fixedIncomeMonthly->title = $request->title;
        $fixedIncomeMonthly->description = $request->description;
        $fixedIncomeMonthly->amount = $request->amount;
        // $monthly_fixed_income->date = $request->date;
        $fixedIncomeMonthly->date = Carbon::now();
        $fixedIncomeMonthly->user_id = auth()->user()->id;
        //dd($monthly_fixed_income);
        $fixedIncomeMonthly->update();
      
        return redirect()->route('monthly-fixed-income.index')
        ->with('success', 'Updated Successfully');
    }


    public function destroy($id)
    {
        $fixedIncomeMonthly = FixedIncomeMonthly::find($id);
        $fixedIncomeMonthly->delete();
        return redirect()->route('monthly-fixed-income.index')
        ->with('success', 'Delete Successfull');
    }
}
