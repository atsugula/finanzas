@extends('layouts.app')

@section('template_title')
    Credit Card
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Credit Card') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('credit-cards.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Number Card</th>
										<th>Date Expiration</th>
										<th>Date Limit</th>
										<th>Current Balance</th>
										<th>Interest Rate</th>
										<th>Cut Off Date</th>
										<th>Date Paid</th>
										<th>Status Id</th>
										<th>Notes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($creditCards as $creditCard)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $creditCard->name }}</td>
											<td>{{ $creditCard->number_card }}</td>
											<td>{{ $creditCard->date_expiration }}</td>
											<td>{{ $creditCard->date_limit }}</td>
											<td>{{ $creditCard->current_balance }}</td>
											<td>{{ $creditCard->interest_rate }}</td>
											<td>{{ $creditCard->cut_off_date }}</td>
											<td>{{ $creditCard->date_paid }}</td>
											<td>{{ $creditCard->status_id }}</td>
											<td>{{ $creditCard->notes }}</td>

                                            <td>
                                                <form action="{{ route('credit-cards.destroy',$creditCard->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('credit-cards.show',$creditCard->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('credit-cards.edit',$creditCard->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $creditCards->links() !!}
            </div>
        </div>
    </div>
@endsection
