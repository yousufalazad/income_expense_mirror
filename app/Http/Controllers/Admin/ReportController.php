<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Month;

use App\Models\FixedIncomeMonthly;
use App\Models\FixedIncomeQuarterly;
use App\Models\FixedIncomeHalfYearly;
use App\Models\FixedIncomeYearly;
use App\Models\OnetimeIncome;

use App\Models\FixedExpenseMonthly;
use App\Models\FixedExpenseQuarterly;
use App\Models\FixedExpenseHalfYearly;
use App\Models\FixedExpenseYearly;
use App\Models\OneTimeExpense;

use PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;


class ReportController extends Controller
{
    public function generatePdf(Request $request)
    {
        $user_id=auth()->user()->id;
        //$selected_month_id = 1;
        $date = Carbon::now();
        $selected_month_id = $date->format('F');
         
        if($request->user_selected_month_id == !NULL){
            $selected_month_id= $request->user_selected_month_id;
        }
        else{
            $date = Carbon::now();
            $selected_month_id = $date->format('F');

            if($selected_month_id == "January"){
                $selected_month_id = 1;
            }
            elseif($selected_month_id == "February"){
                $selected_month_id = 2;
            }
            elseif($selected_month_id == "March"){
                $selected_month_id = 3;
            }
            elseif($selected_month_id == "April"){
                $selected_month_id = 4;
            }
            elseif($selected_month_id == "May"){
                $selected_month_id = 5;
            }
            elseif($selected_month_id == "June"){
                $selected_month_id = 6;
            }
            elseif($selected_month_id == "July"){
                $selected_month_id = 7;
            }
            elseif($selected_month_id == "August"){
                $selected_month_id = 8;
            }
            elseif($selected_month_id == "September"){
                $selected_month_id = 9;
            }
            elseif($selected_month_id == "October"){
                $selected_month_id = 10;
            }
            elseif($selected_month_id == "November"){
                $selected_month_id = 11;
            }
            else{
                $selected_month_id = 12;       
            }
        }



        // -----------------------------Start Income Calculation------------------------------------
         $monthly_incomes = FixedIncomeMonthly::where([["user_id", "=", $user_id]])
         ->orderBy('date')
         ->get();
        
        $quarterly_incomes = FixedIncomeQuarterly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $halfyearly_incomes = FixedIncomeHalfYearly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $yearly_incomes = FixedIncomeYearly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $onetime_incomes = OnetimeIncome::where([["user_id", "=", $user_id]])->where([["month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $income_total_sum = $onetime_incomes->sum('amount') + $monthly_incomes->sum('amount') + $quarterly_incomes->sum('amount') + $halfyearly_incomes->sum('amount') + $yearly_incomes->sum('amount');
        //dd($income_total_sum);
        // -----------------------------End Income Calculation------------------------------------

        //-----------------------------Start Expense Calculation----------------------------------
        $monthly_expenses = FixedExpenseMonthly::where([["user_id", "=", $user_id]])
        ->orderBy('date')
        ->get();

        $quarterly_expenses = FixedExpenseQuarterly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $halfyearly_expenses = FixedExpenseHalfYearly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $yearly_expenses = FixedExpenseYearly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $onetime_expenses = OnetimeExpense::where([["user_id", "=", $user_id]])->where([["month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $expense_total_sum = $onetime_expenses->sum('amount') + $monthly_expenses->sum('amount') + $quarterly_expenses->sum('amount') + $halfyearly_expenses->sum('amount')+ $yearly_expenses->sum('amount') + $onetime_expenses->sum('amount');
        //-----------------------------End Expense Calculation----------------------------------

        $balance = $income_total_sum - $expense_total_sum;
    
        //$starting_months = Month::all();
        $selected_month_name = Month::find($selected_month_id);
        

        $html = View::make('pdf.report', compact('selected_month_name', 'monthly_incomes', 'quarterly_incomes', 'halfyearly_incomes', 'yearly_incomes', 'onetime_incomes', 'income_total_sum',
         'monthly_expenses', 'quarterly_expenses', 'halfyearly_expenses', 'yearly_expenses', 'onetime_expenses', 'expense_total_sum', 'balance'))->render();
        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        return $pdf->stream('report.pdf');

        // $data['member'] = Member::find($id);
        // $data['memberImages'] = MemberImage::Select('member_images.id as  image_id', 'member_images.image_path')->where([["member_id", "=", $id]])->get();

        // $pdf = PDF::loadView('pdf.report', compact('starting_months', 'selected_month_name', 'monthly_incomes', 'quarterly_incomes', 'halfyearly_incomes', 'yearly_incomes', 'onetime_incomes', 'income_total_sum',
        // 'monthly_expenses', 'quarterly_expenses', 'halfyearly_expenses', 'yearly_expenses', 'onetime_expenses', 'expense_total_sum', 'balance'));
        // $pdf->setPaper('A4', 'portrait');
        // $pdf->render();


        // return $pdf->download('member.pdf');
        // return $pdf->stream('member.pdf');
    }


    public function index(Request $request)
    {

        
        if($request->user_selected_month_id == !NULL){
            $selected_month_id= $request->user_selected_month_id;
        }
        else{
            $date = Carbon::now();
            $selected_month_id = $date->format('F');

            if($selected_month_id == "January"){
                $selected_month_id = 1;
            }
            elseif($selected_month_id == "February"){
                $selected_month_id = 2;
            }
            elseif($selected_month_id == "March"){
                $selected_month_id = 3;
            }
            elseif($selected_month_id == "April"){
                $selected_month_id = 4;
            }
            elseif($selected_month_id == "May"){
                $selected_month_id = 5;
            }
            elseif($selected_month_id == "June"){
                $selected_month_id = 6;
            }
            elseif($selected_month_id == "July"){
                $selected_month_id = 7;
            }
            elseif($selected_month_id == "August"){
                $selected_month_id = 8;
            }
            elseif($selected_month_id == "September"){
                $selected_month_id = 9;
            }
            elseif($selected_month_id == "October"){
                $selected_month_id = 10;
            }
            elseif($selected_month_id == "November"){
                $selected_month_id = 11;
            }
            else{
                $selected_month_id = 12;       
            }
        }
        
        
        
        $user_id=auth()->user()->id;

        // $date = Carbon::now();
        // $selected_month_id = $date->format('F');

        // -----------------------------Start Income Calculation------------------------------------
        $monthly_incomes = FixedIncomeMonthly::where([["user_id", "=", $user_id]])
        ->orderBy('date')
        ->get();
        
        $quarterly_incomes = FixedIncomeQuarterly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $halfyearly_incomes = FixedIncomeHalfYearly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $yearly_incomes = FixedIncomeYearly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $onetime_incomes = OnetimeIncome::where([["user_id", "=", $user_id]])->where([["month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $income_total_sum = $onetime_incomes->sum('amount') + $monthly_incomes->sum('amount') + $quarterly_incomes->sum('amount') + $halfyearly_incomes->sum('amount') + $yearly_incomes->sum('amount');
        //dd($income_total_sum);
        // -----------------------------End Income Calculation------------------------------------

        //-----------------------------Start Expense Calculation----------------------------------
        $monthly_expenses = FixedExpenseMonthly::where([["user_id", "=", $user_id]])
        ->orderBy('date')
        ->get();

        $quarterly_expenses = FixedExpenseQuarterly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $halfyearly_expenses = FixedExpenseHalfYearly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $yearly_expenses = FixedExpenseYearly::where([["user_id", "=", $user_id]])->where([["starting_month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $onetime_expenses = OnetimeExpense::where([["user_id", "=", $user_id]])->where([["month_id", "=", $selected_month_id]])
        ->orderBy('date')
        ->get();

        $expense_total_sum = $onetime_expenses->sum('amount') + $monthly_expenses->sum('amount') + $quarterly_expenses->sum('amount') + $halfyearly_expenses->sum('amount')+ $yearly_expenses->sum('amount') + $onetime_expenses->sum('amount');
        //-----------------------------Start Expense Calculation----------------------------------

        $balance = $income_total_sum - $expense_total_sum;
    
        $starting_months = Month::all();
        $selected_month_name = Month::find($selected_month_id);
        return view('admin.report.index', compact('starting_months', 'selected_month_name', 'monthly_incomes', 'quarterly_incomes', 'halfyearly_incomes', 'yearly_incomes', 'onetime_incomes', 'income_total_sum',
        'monthly_expenses', 'quarterly_expenses', 'halfyearly_expenses', 'yearly_expenses', 'onetime_expenses', 'expense_total_sum', 'balance'));
    }
    
    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}