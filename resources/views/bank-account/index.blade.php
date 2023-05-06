@extends('layouts.app')

@section('template_title')
    Bank Account
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Bank Account') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('bank-accounts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name Account</th>
										<th>Type Account</th>
										<th>Institution</th>
										<th>Number Account</th>
										<th>Current Balance</th>
										<th>Interest Rate</th>
										<th>Cut Off Date</th>
										<th>Date Paid</th>
										<th>User Id</th>
										<th>Status Id</th>
										<th>Notes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bankAccounts as $bankAccount)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $bankAccount->name_account }}</td>
											<td>{{ $bankAccount->type_account }}</td>
											<td>{{ $bankAccount->institution }}</td>
											<td>{{ $bankAccount->number_account }}</td>
											<td>{{ $bankAccount->current_balance }}</td>
											<td>{{ $bankAccount->interest_rate }}</td>
											<td>{{ $bankAccount->cut_off_date }}</td>
											<td>{{ $bankAccount->date_paid }}</td>
											<td>{{ $bankAccount->user_id }}</td>
											<td>{{ $bankAccount->status_id }}</td>
											<td>{{ $bankAccount->notes }}</td>

                                            <td>
                                                <form action="{{ route('bank-accounts.destroy',$bankAccount->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('bank-accounts.show',$bankAccount->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('bank-accounts.edit',$bankAccount->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $bankAccounts->links() !!}
            </div>
        </div>
    </div>
@endsection
