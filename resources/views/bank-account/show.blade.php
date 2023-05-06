@extends('layouts.app')

@section('template_title')
    {{ $bankAccount->name ?? "{{ __('Show') Bank Account" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bank Account</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bank-accounts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Account:</strong>
                            {{ $bankAccount->name_account }}
                        </div>
                        <div class="form-group">
                            <strong>Type Account:</strong>
                            {{ $bankAccount->type_account }}
                        </div>
                        <div class="form-group">
                            <strong>Institution:</strong>
                            {{ $bankAccount->institution }}
                        </div>
                        <div class="form-group">
                            <strong>Number Account:</strong>
                            {{ $bankAccount->number_account }}
                        </div>
                        <div class="form-group">
                            <strong>Current Balance:</strong>
                            {{ $bankAccount->current_balance }}
                        </div>
                        <div class="form-group">
                            <strong>Interest Rate:</strong>
                            {{ $bankAccount->interest_rate }}
                        </div>
                        <div class="form-group">
                            <strong>Cut Off Date:</strong>
                            {{ $bankAccount->cut_off_date }}
                        </div>
                        <div class="form-group">
                            <strong>Date Paid:</strong>
                            {{ $bankAccount->date_paid }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $bankAccount->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $bankAccount->status_id }}
                        </div>
                        <div class="form-group">
                            <strong>Notes:</strong>
                            {{ $bankAccount->notes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
