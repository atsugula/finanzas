@extends('layouts.app')

@section('template_title')
    Transaction
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Transaction') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('transactions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Date</th>
										<th>Bank Account Id</th>
										<th>Credit Card Id</th>
										<th>Category Id</th>
										<th>Description</th>
										<th>Value</th>
										<th>Type Transaction</th>
										<th>Account Balance</th>
										<th>Notes</th>
										<th>User Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $transaction->date }}</td>
											<td>{{ $transaction->bank_account_id }}</td>
											<td>{{ $transaction->credit_card_id }}</td>
											<td>{{ $transaction->category_id }}</td>
											<td>{{ $transaction->description }}</td>
											<td>{{ $transaction->value }}</td>
											<td>{{ $transaction->type_transaction }}</td>
											<td>{{ $transaction->account_balance }}</td>
											<td>{{ $transaction->notes }}</td>
											<td>{{ $transaction->user_id }}</td>

                                            <td>
                                                <form action="{{ route('transactions.destroy',$transaction->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('transactions.show',$transaction->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('transactions.edit',$transaction->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $transactions->links() !!}
            </div>
        </div>
    </div>
@endsection
