<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $creditCard->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_card') }}
            {{ Form::text('number_card', $creditCard->number_card, ['class' => 'form-control' . ($errors->has('number_card') ? ' is-invalid' : ''), 'placeholder' => 'Number Card']) }}
            {!! $errors->first('number_card', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_expiration') }}
            {{ Form::text('date_expiration', $creditCard->date_expiration, ['class' => 'form-control' . ($errors->has('date_expiration') ? ' is-invalid' : ''), 'placeholder' => 'Date Expiration']) }}
            {!! $errors->first('date_expiration', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_limit') }}
            {{ Form::text('date_limit', $creditCard->date_limit, ['class' => 'form-control' . ($errors->has('date_limit') ? ' is-invalid' : ''), 'placeholder' => 'Date Limit']) }}
            {!! $errors->first('date_limit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('current_balance') }}
            {{ Form::text('current_balance', $creditCard->current_balance, ['class' => 'form-control' . ($errors->has('current_balance') ? ' is-invalid' : ''), 'placeholder' => 'Current Balance']) }}
            {!! $errors->first('current_balance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('interest_rate') }}
            {{ Form::text('interest_rate', $creditCard->interest_rate, ['class' => 'form-control' . ($errors->has('interest_rate') ? ' is-invalid' : ''), 'placeholder' => 'Interest Rate']) }}
            {!! $errors->first('interest_rate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cut_off_date') }}
            {{ Form::text('cut_off_date', $creditCard->cut_off_date, ['class' => 'form-control' . ($errors->has('cut_off_date') ? ' is-invalid' : ''), 'placeholder' => 'Cut Off Date']) }}
            {!! $errors->first('cut_off_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_paid') }}
            {{ Form::text('date_paid', $creditCard->date_paid, ['class' => 'form-control' . ($errors->has('date_paid') ? ' is-invalid' : ''), 'placeholder' => 'Date Paid']) }}
            {!! $errors->first('date_paid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_id') }}
            {{ Form::text('status_id', $creditCard->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Status Id']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notes') }}
            {{ Form::text('notes', $creditCard->notes, ['class' => 'form-control' . ($errors->has('notes') ? ' is-invalid' : ''), 'placeholder' => 'Notes']) }}
            {!! $errors->first('notes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>