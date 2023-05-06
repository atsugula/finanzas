@extends('layouts.app')

@section('template_title')
    {{ $transaction->name ?? "{{ __('Show') Transaction" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Transaction</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transactions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $transaction->date }}
                        </div>
                        <div class="form-group">
                            <strong>Bank Account Id:</strong>
                            {{ $transaction->bank_account_id }}
                        </div>
                        <div class="form-group">
                            <strong>Credit Card Id:</strong>
                            {{ $transaction->credit_card_id }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $transaction->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $transaction->description }}
                        </div>
                        <div class="form-group">
                            <strong>Value:</strong>
                            {{ $transaction->value }}
                        </div>
                        <div class="form-group">
                            <strong>Type Transaction:</strong>
                            {{ $transaction->type_transaction }}
                        </div>
                        <div class="form-group">
                            <strong>Account Balance:</strong>
                            {{ $transaction->account_balance }}
                        </div>
                        <div class="form-group">
                            <strong>Notes:</strong>
                            {{ $transaction->notes }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $transaction->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
