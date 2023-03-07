<!doctype html>
<html lang="en">

<head>
    <title>Income Expense Mirror</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        box-sizing: border-box;
        font-size: 14px;
    }

    body {
        -webkit-font-smoothing: antialiased;
        -webkit-text-size-adjust: none;
        width: 100% !important;
        height: 100%;
        line-height: 1.6;
    }

    table td {
        vertical-align: top;
    }

    body {
        background-color: #fff;
    }

    .body-wrap {
        background-color: #fff;
        width: 100%;
    }

    .container {
        display: block !important;
        max-width: 600px !important;
        margin: 0 auto !important;
        /* makes it centered */
        clear: both !important;
    }

    .content {
        max-width: 600px;
        margin: 0 auto;
        display: block;
    }

    .content-block {
        padding: 0 0 20px;
    }

    h1,
    h2,
    h3 {
        font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        color: #000;
        margin: 40px 0 0;
        line-height: 1.2;
        font-weight: 400;
    }

    h1 {
        font-size: 32px;
        font-weight: 500;
    }

    h2 {
        font-size: 24px;
    }

    h3 {
        font-size: 18px;
    }

    h4 {
        font-size: 14px;
        font-weight: 600;
    }

    p,
    ul,
    ol {
        margin-bottom: 10px;
        font-weight: normal;
    }

    p li,
    ul li,
    ol li {
        margin-left: 5px;
        list-style-position: inside;
    }

    a {
        color: #1ab394;
        text-decoration: underline;
    }

    .btn-primary {
        text-decoration: none;
        color: #FFF;
        background-color: #1ab394;
        border: solid #1ab394;
        border-width: 5px 10px;
        line-height: 2;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
        display: inline-block;
        border-radius: 5px;
        text-transform: capitalize;
    }

    .last {
        margin-bottom: 0;
    }

    .first {
        margin-top: 0;
    }

    .aligncenter {
        text-align: center;
    }

    .alignright {
        text-align: right;
    }

    .alignleft {
        text-align: left;
    }

    .clear {
        clear: both;
    }

    .invoice {
        margin: 20px auto;
        text-align: left;
        width: 98%;
    }

    .invoice td {
        padding: 5px 0;
    }

    .invoice .invoice-items {
        width: 100%;
    }

    .invoice .invoice-items td {
        border-top: #eee 1px solid;
    }

    .invoice .invoice-items tbody td.title {
        padding-left: 15px;
    }

    .invoice .invoice-items .total td {
        border-top: 2px solid #333;
        border-bottom: 2px solid #333;
        font-weight: 700;
    }
    </style>
</head>

<body>
    <table class="body-wrap">
        <tbody>
            <tr>
                <td class="aligncenter">
                    <h2>Income Expense Statement</h2>
                    <p>Month: {{ $selected_month_name->name }}</p>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="body-wrap">

        <tbody>
            <tr>
                <td class="container" width="250">
                    <div class="content">
                        <table class="invoice">
                            <tbody>
                                <tr>
                                    <td class="content-block">
                                        <p>INCOME</p>
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="invoice-items" cellpadding="0" cellspacing="0">
                                            @if($monthly_incomes->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">
                                                        <p>Monthly</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($monthly_incomes as $monthly_income)
                                                <tr>
                                                    <td class="title">{{ $monthly_income->title }}</td>
                                                    <td class="alignright">{{ $monthly_income->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @endif

                                            @if($quarterly_incomes->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">
                                                        <p>Quarterly</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($quarterly_incomes as $quarterly_income)
                                                <tr>
                                                    <td class="title">{{ $quarterly_income->title }}</td>
                                                    <td class="alignright">{{ $quarterly_income->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @endif

                                            @if($halfyearly_incomes->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">
                                                        <p>Half Yearl</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($halfyearly_incomes as $halfyearly_income)
                                                <tr>
                                                    <td class="title">{{ $halfyearly_income->title }}</td>
                                                    <td class="alignright">{{ $halfyearly_income->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @endif

                                            @if($yearly_incomes->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">
                                                        <p>Yearly</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($yearly_incomes as $yearly_income)
                                                <tr>
                                                    <td class="title">{{ $yearly_income->title }}</td>
                                                    <td class="alignright">{{ $yearly_income->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @endif

                                            @if($onetime_incomes->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">
                                                        <p>One-time</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($onetime_incomes as $onetime_income)
                                                <tr>
                                                    <td class="title">{{ $onetime_income->title }}</td>
                                                    <td class="alignright">{{ $onetime_income->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @endif

                                            <tbody>
                                                <tr class="total">
                                                    <td class="alignright" width="80%">Total: &nbsp; &nbsp; </td>
                                                    <td class="alignright">{{ $income_total_sum }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="invoice">
                            <tbody>
                                <tr>
                                    <td class="content-block">
                                        <p>Total income: {{ $income_total_sum }}</p>
                                        <p>Total expense: {{ $expense_total_sum }}</p>
                                        <p>Balance: {{$balance}}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
                <td></td>
                <td class="container" width="250">
                    <div class="content">
                        <table class="invoice">
                            <tbody>
                                <tr>
                                    <td class="content-block">
                                        <p>EXPENSE</p>
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="invoice-items" cellpadding="0" cellspacing="0">
                                            @if($monthly_expenses->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">
                                                        <p>Monthly</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($monthly_expenses as $monthly_expense)
                                                <tr>
                                                    <td class="title">{{ $monthly_expense->title }}</td>
                                                    <td class="alignright">{{ $monthly_expense->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @endif

                                            @if($quarterly_expenses->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">
                                                        <p>Quarterly</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($quarterly_expenses as $quarterly_expense)
                                                <tr>
                                                    <td class="title">{{ $quarterly_expense->title }}</td>
                                                    <td class="alignright">{{ $quarterly_expense->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @endif

                                            @if($halfyearly_expenses->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">
                                                        <p>Half Year</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($halfyearly_expenses as $halfyearly_expense)
                                                <tr>
                                                    <td class="title">{{ $halfyearly_expense->title }}</td>
                                                    <td class="alignright">{{ $halfyearly_expense->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @endif

                                            @if($yearly_expenses->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">
                                                        <p>Yearly</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($yearly_expenses as $yearly_expense)
                                                <tr>
                                                    <td class="title">{{ $yearly_expense->title }}</td>
                                                    <td class="alignright">{{ $yearly_expense->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @endif

                                            @if($onetime_expenses->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">
                                                        <p>One-time</p>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($onetime_expenses as $onetime_expense)
                                                <tr>
                                                    <td class="title">{{ $onetime_expense->title }}</td>
                                                    <td class="alignright">{{ $onetime_expense->amount }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @endif

                                            <tbody>
                                                <tr class="total">
                                                    <td class="alignright" width="80%">Total: &nbsp; &nbsp; </td>
                                                    <td class="alignright">{{ $expense_total_sum }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="100%">
        <tbody>
            <tr>
                <td class="aligncenter content-block">Powerd by: <a
                        href="https://incomeexpensemirror.com">IncomeExpenseMirror.com</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>