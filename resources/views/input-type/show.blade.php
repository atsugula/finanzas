@extends('layouts.app')

@section('template_title')
    {{ $inputType->name ?? "{{ __('Show') Input Type" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Input Type</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('input-types.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $inputType->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
