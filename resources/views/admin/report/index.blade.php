@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Income Expense Statement</h2>
            <h4>Select Month</h4>
            <div>
                <form action="" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="1"
                        name="user_selected_month_id"> {{ __('January') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="2"
                        name="user_selected_month_id"> {{ __('February') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="3"
                        name="user_selected_month_id"> {{ __('March') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="4"
                        name="user_selected_month_id"> {{ __('April') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="5"
                        name="user_selected_month_id"> {{ __('May') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="6"
                        name="user_selected_month_id"> {{ __('June') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="7"
                        name="user_selected_month_id"> {{ __('July') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="8"
                        name="user_selected_month_id"> {{ __('August') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="9"
                        name="user_selected_month_id"> {{ __('September') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="10"
                        name="user_selected_month_id"> {{ __('October') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="11"
                        name="user_selected_month_id"> {{ __('November') }}</button>

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3" value="12"
                        name="user_selected_month_id"> {{ __('December') }}</button>
                        
                    <a type="button" class="btn btn-primary btn-block px-4 my-3" href="{{ route('generatePdf') }}">
                        {{ __('PDF') }}</a>
                </form>
                <br>
            </div>

            <div class="row">
                <div class="col-md-12 py-3">
                    <h4>Statement month: {{$selected_month_name}}</h4>
                </div>
                <div class="col-md-6 pe-5">
                    <h5>INCOME</h5>
                    <hr>

                    @if($monthly_incomes->count() > 0)
                    <h6>Monthly income</h6>
                    @foreach($monthly_incomes as $monthly_income)
                    <div class="row title-move-right">
                        <div class="col-8 col-md-7">
                            <p>{{ $monthly_income->title }}</p>
                        </div>
                        <div class="col-4 col-md-5 amount-align">
                            <p>{{ $monthly_income->amount }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if($quarterly_incomes->count() > 0)
                    <h6>Quarterly income</h6>
                    @foreach ($quarterly_incomes as $quarterly_income)
                    <div class="row title-move-right">
                        <div class="col-8 col-md-7">
                            <p>{{ $quarterly_income->title }}</p>
                        </div>
                        <div class="col-4 col-md-5 amount-align">
                            <p>{{ $quarterly_income->amount }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if($halfyearly_incomes->count() > 0)
                    <h6>Half Yearly income</h6>
                    @foreach ($halfyearly_incomes as $halfyearly_income)
                    <div class="row title-move-right">
                        <div class="col-8 col-md-7">
                            <p>{{ $halfyearly_income->title }}</p>
                        </div>
                        <div class="col-4 col-md-5 amount-align">
                            <p>{{ $halfyearly_income->amount }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif


                    @if($yearly_incomes->count() > 0)
                    <h6>Yearly income</h6>
                    @foreach ($yearly_incomes as $yearly_income)
                    <div class="row title-move-right">
                        <div class="col-8 col-md-7">
                            <p>{{ $yearly_income->title }}</p>
                        </div>
                        <div class="col-4 col-md-5 amount-align">
                            <p>{{ $yearly_income->amount }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if($onetime_incomes->count() > 0)
                    <h6>One-time income</h6>
                    @foreach ($onetime_incomes as $onetime_income)
                    <div class="row title-move-right">
                        <div class="col-8 col-md-7">
                            <p>{{ $onetime_income->title }}</p>
                        </div>
                        <div class="col-4 col-md-5 amount-align">
                            <p>{{ $onetime_income->amount }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <h5 class='amount-align'>Total: &nbsp; &nbsp; {{ $income_total_sum }}</h5>
                </div>
                <div class="col-md-6 ps-5">

                    <h5>EXPENSES</h5>
                    <hr>

                    @if($monthly_expenses->count() > 0)
                    <h6>Monthly income</h6>
                    @foreach($monthly_expenses as $monthly_expense)
                    <div class="row title-move-right">
                        <div class="col-8 col-md-7">
                            <p>{{ $monthly_expense->title }}</p>
                        </div>
                        <div class="col-4 col-md-5 amount-align">
                            <p>{{ $monthly_expense->amount }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if($quarterly_expenses->count() > 0)
                    <h6>Quarterly expense</h6>
                    @foreach ($quarterly_expenses as $quarterly_expense)
                    <div class="row title-move-right">
                        <div class="col-8 col-md-7">
                            <p>{{ $quarterly_expense->title }}</p>
                        </div>
                        <div class="col-4 col-md-5 amount-align">
                            <p>{{ $quarterly_expense->amount }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if($halfyearly_expenses->count() > 0)
                    <h6>Half Yearly expense</h6>
                    @foreach ($halfyearly_expenses as $halfyearly_expense)
                    <div class="row title-move-right">
                        <div class="col-8 col-md-7">
                            <p>{{ $halfyearly_expense->title }}</p>
                        </div>
                        <div class="col-4 col-md-5 amount-align">
                            <p>{{ $halfyearly_expense->amount }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if($yearly_expenses->count() > 0)
                    <h6>Yearly expense</h6>
                    @foreach ($yearly_expenses as $yearly_expense)
                    <div class="row title-move-right">
                        <div class="col-8 col-md-7">
                            <p>{{ $yearly_expense->title }}</p>
                        </div>
                        <div class="col-4 col-md-5 amount-align">
                            <p>{{ $yearly_expense->amount }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if($onetime_expenses->count() > 0)
                    <h6>One-time expense</h6>
                    @foreach ($onetime_expenses as $onetime_expense)
                    <div class="row title-move-right">
                        <div class="col-8 col-md-7">
                            <p>{{ $onetime_expense->title }}</p>
                        </div>
                        <div class="col-4 col-md-5 amount-align">
                            <p>{{ $onetime_expense->amount }}</p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <h5 class="amount-align">Total: &nbsp; &nbsp; {{ $expense_total_sum }}</h5>
                </div>
            </div>
            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Total income:&nbsp; &nbsp;</h5>
                                <h5>Total expense:&nbsp; &nbsp;</h5>

                                @if($balance >= 0)
                                <h5>Your savings:&nbsp; &nbsp;</h5>
                                @else
                                <h5>Your deficit:&nbsp; &nbsp;</h5>
                                @endif

                            </div>
                            <div class="col-md-1">
                                <h5>{{ $income_total_sum }}</h5>
                                <h5>{{ $expense_total_sum }}</h5>
                                <h5>{{ $balance }}</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-7"></div>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <table width="100%">
                <tbody>
                    <tr>
                        <td class="aligncenter content-block">Powerd by: <a
                                href="https://incomeexpensemirror.com">www.incomeexpensemirror.com</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection