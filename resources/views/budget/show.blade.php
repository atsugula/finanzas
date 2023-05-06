@extends('layouts.app')

@section('template_title')
    {{ $budget->name ?? "{{ __('Show') Budget" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Budget</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('budgets.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $budget->name }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $budget->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $budget->amount }}
                        </div>
                        <div class="form-group">
                            <strong>Period Of Time:</strong>
                            {{ $budget->period_of_time }}
                        </div>
                        <div class="form-group">
                            <strong>Date Start:</strong>
                            {{ $budget->date_start }}
                        </div>
                        <div class="form-group">
                            <strong>Date End:</strong>
                            {{ $budget->date_end }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $budget->status_id }}
                        </div>
                        <div class="form-group">
                            <strong>Notes:</strong>
                            {{ $budget->notes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
