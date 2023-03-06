@extends('layouts.app')
@section('content')
<h1>Quarterly Fixed Expense</h1>
<div class="container">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">

            <div class="card">

                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="font-weight-bold text-primary">
                                {{ __('Quarterly Fixed Expense') }}
                            </h6>
                        </div>
                        <div class="col" style="text-align: right;">
                            <a href="{{ route('quarterly-fixed-expense.create') }}" class="btn btn-primary">
                                <span class="icon text-white-50">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="text">{{ __('Add expense') }}</span>
                            </a>
                        </div>

                    </div>


                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover datatable datatable-customer"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($quarterly_fixed_expenses as $quarterly_fixed_expense)
                                <tr data-entry-id="{{ $quarterly_fixed_expense->id }}">
                                    <td>{{ $quarterly_fixed_expense->title }}</td>
                                    <td>{{ $quarterly_fixed_expense->amount }}</td>
                                    
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('quarterly-fixed-expense.edit', $quarterly_fixed_expense->id) }}"
                                                class="btn btn-info">Edit
                                                <!-- <i class="fa fa-pencil-alt"></i> -->
                                            </a>
                                            <form onclick="return confirm('are you sure ? ')" class="d-inline"
                                                action="{{ route('quarterly-fixed-expense.destroy', $quarterly_fixed_expense->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"
                                                    style="border-top-left-radius: 0;border-bottom-left-radius: 0;">Delete
                                                    <!-- <i class="fa fa-trash"></i> -->
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
</div>
@endsection