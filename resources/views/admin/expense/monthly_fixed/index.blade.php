@extends('layouts.app')
@section('content')
<h1>Expense</h1>
<div class="container">

    <!-- Content Row -->
    <div class="row">
    <div class="col-md-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        </div>
        <div class="col-md-12">

            <div class="card">

                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="font-weight-bold text-primary">
                                {{ __('Monthly Fixed Expense') }}
                            </h6>
                        </div>
                        <div class="col" style="text-align: right;">
                            <a href="{{ route('monthly-fixed-expense.create') }}" class="btn btn-primary">
                                <span class="icon text-white-50">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="text">{{ __('Add Expense') }}</span>
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
                                @foreach($monthly_fixed_expenses as $monthly_fixed_expense)
                                <tr data-entry-id="{{ $monthly_fixed_expense->id }}">
                                    <td>{{ $monthly_fixed_expense->title }}</td>
                                    <td>{{ $monthly_fixed_expense->amount }}</td>
                                    
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('monthly-fixed-expense.edit', $monthly_fixed_expense->id) }}"
                                                class="btn btn-info">Edit
                                                <!-- <i class="fa fa-pencil-alt"></i> -->
                                            </a>
                                            <form onclick="return confirm('are you sure ? ')" class="d-inline"
                                                action="{{ route('monthly-fixed-expense.destroy', $monthly_fixed_expense->id) }}"
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