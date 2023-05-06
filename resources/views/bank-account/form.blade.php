<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_account') }}
            {{ Form::text('name_account', $bankAccount->name_account, ['class' => 'form-control' . ($errors->has('name_account') ? ' is-invalid' : ''), 'placeholder' => 'Name Account']) }}
            {!! $errors->first('name_account', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_account') }}
            {{ Form::text('type_account', $bankAccount->type_account, ['class' => 'form-control' . ($errors->has('type_account') ? ' is-invalid' : ''), 'placeholder' => 'Type Account']) }}
            {!! $errors->first('type_account', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('institution') }}
            {{ Form::text('institution', $bankAccount->institution, ['class' => 'form-control' . ($errors->has('institution') ? ' is-invalid' : ''), 'placeholder' => 'Institution']) }}
            {!! $errors->first('institution', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_account') }}
            {{ Form::text('number_account', $bankAccount->number_account, ['class' => 'form-control' . ($errors->has('number_account') ? ' is-invalid' : ''), 'placeholder' => 'Number Account']) }}
            {!! $errors->first('number_account', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('current_balance') }}
            {{ Form::text('current_balance', $bankAccount->current_balance, ['class' => 'form-control' . ($errors->has('current_balance') ? ' is-invalid' : ''), 'placeholder' => 'Current Balance']) }}
            {!! $errors->first('current_balance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('interest_rate') }}
            {{ Form::text('interest_rate', $bankAccount->interest_rate, ['class' => 'form-control' . ($errors->has('interest_rate') ? ' is-invalid' : ''), 'placeholder' => 'Interest Rate']) }}
            {!! $errors->first('interest_rate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cut_off_date') }}
            {{ Form::text('cut_off_date', $bankAccount->cut_off_date, ['class' => 'form-control' . ($errors->has('cut_off_date') ? ' is-invalid' : ''), 'placeholder' => 'Cut Off Date']) }}
            {!! $errors->first('cut_off_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_paid') }}
            {{ Form::text('date_paid', $bankAccount->date_paid, ['class' => 'form-control' . ($errors->has('date_paid') ? ' is-invalid' : ''), 'placeholder' => 'Date Paid']) }}
            {!! $errors->first('date_paid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $bankAccount->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_id') }}
            {{ Form::text('status_id', $bankAccount->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Status Id']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notes') }}
            {{ Form::text('notes', $bankAccount->notes, ['class' => 'form-control' . ($errors->has('notes') ? ' is-invalid' : ''), 'placeholder' => 'Notes']) }}
            {!! $errors->first('notes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>