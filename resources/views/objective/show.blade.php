@extends('layouts.app')

@section('template_title')
    {{ $objective->name ?? "{{ __('Show') Objective" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Objective</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('objectives.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $objective->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $objective->description }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $objective->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Date Start:</strong>
                            {{ $objective->date_start }}
                        </div>
                        <div class="form-group">
                            <strong>Date End:</strong>
                            {{ $objective->date_end }}
                        </div>
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $objective->amount }}
                        </div>
                        <div class="form-group">
                            <strong>Cumulative Savings:</strong>
                            {{ $objective->cumulative_savings }}
                        </div>
                        <div class="form-group">
                            <strong>Progress:</strong>
                            {{ $objective->progress }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $objective->status_id }}
                        </div>
                        <div class="form-group">
                            <strong>Notes:</strong>
                            {{ $objective->notes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
