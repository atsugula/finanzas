<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $objective->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $objective->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::text('category_id', $objective->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_start') }}
            {{ Form::text('date_start', $objective->date_start, ['class' => 'form-control' . ($errors->has('date_start') ? ' is-invalid' : ''), 'placeholder' => 'Date Start']) }}
            {!! $errors->first('date_start', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_end') }}
            {{ Form::text('date_end', $objective->date_end, ['class' => 'form-control' . ($errors->has('date_end') ? ' is-invalid' : ''), 'placeholder' => 'Date End']) }}
            {!! $errors->first('date_end', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amount') }}
            {{ Form::text('amount', $objective->amount, ['class' => 'form-control' . ($errors->has('amount') ? ' is-invalid' : ''), 'placeholder' => 'Amount']) }}
            {!! $errors->first('amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cumulative_savings') }}
            {{ Form::text('cumulative_savings', $objective->cumulative_savings, ['class' => 'form-control' . ($errors->has('cumulative_savings') ? ' is-invalid' : ''), 'placeholder' => 'Cumulative Savings']) }}
            {!! $errors->first('cumulative_savings', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('progress') }}
            {{ Form::text('progress', $objective->progress, ['class' => 'form-control' . ($errors->has('progress') ? ' is-invalid' : ''), 'placeholder' => 'Progress']) }}
            {!! $errors->first('progress', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_id') }}
            {{ Form::text('status_id', $objective->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Status Id']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notes') }}
            {{ Form::text('notes', $objective->notes, ['class' => 'form-control' . ($errors->has('notes') ? ' is-invalid' : ''), 'placeholder' => 'Notes']) }}
            {!! $errors->first('notes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>