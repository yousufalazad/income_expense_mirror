<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>Income Expense Mirror</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="images/fevicon.png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Font-awesome/6.1.1 -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
    .title-move-right {
        padding-left: 50px;
    }

    .amount-align {

        text-align: right;
    }
    </style>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Income Expense Statement</h2>
                <p>Statement month: {{$selected_month_name->name}}</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p>INCOME</p>
                        @if($monthly_incomes->count() > 0)
                        <p>Monthly income</p>
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
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    </script>
</body>

</html>