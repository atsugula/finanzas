<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $transaction->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bank_account_id') }}
            {{ Form::text('bank_account_id', $transaction->bank_account_id, ['class' => 'form-control' . ($errors->has('bank_account_id') ? ' is-invalid' : ''), 'placeholder' => 'Bank Account Id']) }}
            {!! $errors->first('bank_account_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('credit_card_id') }}
            {{ Form::text('credit_card_id', $transaction->credit_card_id, ['class' => 'form-control' . ($errors->has('credit_card_id') ? ' is-invalid' : ''), 'placeholder' => 'Credit Card Id']) }}
            {!! $errors->first('credit_card_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::text('category_id', $transaction->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $transaction->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('value') }}
            {{ Form::text('value', $transaction->value, ['class' => 'form-control' . ($errors->has('value') ? ' is-invalid' : ''), 'placeholder' => 'Value']) }}
            {!! $errors->first('value', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_transaction') }}
            {{ Form::text('type_transaction', $transaction->type_transaction, ['class' => 'form-control' . ($errors->has('type_transaction') ? ' is-invalid' : ''), 'placeholder' => 'Type Transaction']) }}
            {!! $errors->first('type_transaction', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('account_balance') }}
            {{ Form::text('account_balance', $transaction->account_balance, ['class' => 'form-control' . ($errors->has('account_balance') ? ' is-invalid' : ''), 'placeholder' => 'Account Balance']) }}
            {!! $errors->first('account_balance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('notes') }}
            {{ Form::text('notes', $transaction->notes, ['class' => 'form-control' . ($errors->has('notes') ? ' is-invalid' : ''), 'placeholder' => 'Notes']) }}
            {!! $errors->first('notes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $transaction->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>