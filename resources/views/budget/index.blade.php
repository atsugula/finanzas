@extends('layouts.app')

@section('template_title')
    Budget
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Budget') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('budgets.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Category Id</th>
										<th>Amount</th>
										<th>Period Of Time</th>
										<th>Date Start</th>
										<th>Date End</th>
										<th>Status Id</th>
										<th>Notes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($budgets as $budget)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $budget->name }}</td>
											<td>{{ $budget->category_id }}</td>
											<td>{{ $budget->amount }}</td>
											<td>{{ $budget->period_of_time }}</td>
											<td>{{ $budget->date_start }}</td>
											<td>{{ $budget->date_end }}</td>
											<td>{{ $budget->status_id }}</td>
											<td>{{ $budget->notes }}</td>

                                            <td>
                                                <form action="{{ route('budgets.destroy',$budget->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('budgets.show',$budget->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('budgets.edit',$budget->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $budgets->links() !!}
            </div>
        </div>
    </div>
@endsection
