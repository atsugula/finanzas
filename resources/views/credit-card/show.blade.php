@extends('layouts.app')

@section('template_title')
    {{ $creditCard->name ?? "{{ __('Show') Credit Card" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Credit Card</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('credit-cards.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $creditCard->name }}
                        </div>
                        <div class="form-group">
                            <strong>Number Card:</strong>
                            {{ $creditCard->number_card }}
                        </div>
                        <div class="form-group">
                            <strong>Date Expiration:</strong>
                            {{ $creditCard->date_expiration }}
                        </div>
                        <div class="form-group">
                            <strong>Date Limit:</strong>
                            {{ $creditCard->date_limit }}
                        </div>
                        <div class="form-group">
                            <strong>Current Balance:</strong>
                            {{ $creditCard->current_balance }}
                        </div>
                        <div class="form-group">
                            <strong>Interest Rate:</strong>
                            {{ $creditCard->interest_rate }}
                        </div>
                        <div class="form-group">
                            <strong>Cut Off Date:</strong>
                            {{ $creditCard->cut_off_date }}
                        </div>
                        <div class="form-group">
                            <strong>Date Paid:</strong>
                            {{ $creditCard->date_paid }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $creditCard->status_id }}
                        </div>
                        <div class="form-group">
                            <strong>Notes:</strong>
                            {{ $creditCard->notes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
