@extends('layouts.app')

@section('template_title')
    Objective
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Objective') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('objectives.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Description</th>
										<th>Category Id</th>
										<th>Date Start</th>
										<th>Date End</th>
										<th>Amount</th>
										<th>Cumulative Savings</th>
										<th>Progress</th>
										<th>Status Id</th>
										<th>Notes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($objectives as $objective)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $objective->name }}</td>
											<td>{{ $objective->description }}</td>
											<td>{{ $objective->category_id }}</td>
											<td>{{ $objective->date_start }}</td>
											<td>{{ $objective->date_end }}</td>
											<td>{{ $objective->amount }}</td>
											<td>{{ $objective->cumulative_savings }}</td>
											<td>{{ $objective->progress }}</td>
											<td>{{ $objective->status_id }}</td>
											<td>{{ $objective->notes }}</td>

                                            <td>
                                                <form action="{{ route('objectives.destroy',$objective->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('objectives.show',$objective->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('objectives.edit',$objective->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $objectives->links() !!}
            </div>
        </div>
    </div>
@endsection
