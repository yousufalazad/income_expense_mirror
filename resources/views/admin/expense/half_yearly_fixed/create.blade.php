@extends('layouts.app')
@section('content')
<div class="container">

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="font-weight-bold text-primary">
                                {{ __('Add Half Yearly Fixed Expense') }}
                            </h6>
                        </div>
                        <div class="col" style="text-align: right;">
                            <a href="{{ route('half-yearly-fixed-expense.index') }}" class="btn btn-primary">
                                <span class="icon text-white-50">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="text mx-3">{{ __('Back') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <form action="{{ route('half-yearly-fixed-expense.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">{{ __('Title') }}</label>
                        <input type="text" class="form-control" id="title" name="title" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">{{ __('Amount') }}</label>
                        <input type="number" class="form-control" id="amount" name="amount" required/>
                    </div>

                    <div class="form-group">
                        <label for="name">{{ __('Starting Month') }}</label>
                        <select class="form-control " id="starting_month_id" name="starting_month_id" required>
                            <option value="">Starting Month</option>
                            @foreach ($starting_months as $starting_month)
                                <option value="{{ $starting_month->id }}">{{ $starting_month->name }}</option>
                            @endforeach
                        </select>
                    </div>

    
                    

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3">{{ __('Save Half Yearly expense') }}</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
</div>
@endsection