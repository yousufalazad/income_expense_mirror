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
                                {{ __('Add One Time Expense') }}
                            </h6>
                        </div>
                        <div class="col" style="text-align: right;">
                            <a href="{{ route('one-time-expense.index') }}" class="btn btn-primary">
                                <span class="icon text-white-50">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="text mx-3">{{ __('Back') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <form action="{{ route('one-time-expense.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="name">{{ __('Month') }}</label>
                        <select class="form-control " id="month_id" name="month_id" required>
                            <option value="">Month</option>
                            @foreach ($months as $month)
                                <option value="{{ $month->id }}">{{ $month->name }}</option>
                            @endforeach
                        </select>
                    </div>

    
                    

                    <button type="submit" class="btn btn-primary btn-block px-4 my-3">{{ __('Save Quarterly Expense') }}</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
</div>
@endsection