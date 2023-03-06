<!doctype html>
<html lang="en">

<head>
    <title>PDF</title>
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
                <td></td>
                <td class="aligncenter">
                    <h2>Income Expense Statement</h2>
                    <p>Statement month: March</p>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <table class="body-wrap">

        <tbody>
            <tr>
                <td></td>
                <td class="container" width="280">
                    <div class="content">
                        <table class="invoice">
                            <tbody>
                                <tr>
                                    <td class="content-block">
                                        <p>INCOME</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="invoice-items" cellpadding="0" cellspacing="0">
                                            @if($monthly_incomes->count() > 0)
                                            <thead>
                                                <tr>
                                                    <td class="alignleft">Monthly</td>
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

                                            @if($onetime_incomes->count() > 0)
                                            <thead>
                                                <tr>
                                                    <th class="alignleft">One-time</th>
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
                                                    <td class="alignright" width="80%">
                                                        Total</td>
                                                    <td class="alignright">{{ $income_total_sum }}</td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </td>
                <td></td>
                <td class="container" width="280">
                    <div class="content">
                        <table class="invoice">
                            <tbody>
                                <tr>
                                    <td class="content-block">
                                        <p>EXPENSE</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="invoice-items" cellpadding="0" cellspacing="0">

                                            <thead>
                                                <tr>
                                                    <th class="alignleft">Month</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="title">Service 1</td>
                                                    <td class="alignright">$ 20.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="title">Service 2</td>
                                                    <td class="alignright">$ 10.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="title"> Service 3</td>
                                                    <td class="alignright">$ 6.00</td>
                                                </tr>
                                                <tr class="total">
                                                    <td class="alignright" width="80%">
                                                        Total</td>
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
                <td></td>
            </tr>
        </tbody>
    </table>
    <table class="body-wrap">
        <tbody>
            <tr>
                <td></td>
                <td class="aligncenter">
                    <p>Balance: {{$balance}}</p>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>


</html>