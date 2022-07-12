@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Model Has Role
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Model Has Role') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('model-has-roles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Role Id</th>
										<th>Model Type</th>
										<th>Model Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($modelHasRoles as $modelHasRole)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $modelHasRole->role_id }}</td>
											<td>{{ $modelHasRole->model_type }}</td>
											<td>{{ $modelHasRole->model_id }}</td>

                                            <td>
                                                <form action="{{ route('model-has-roles.destroy',$modelHasRole->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('model-has-roles.show',$modelHasRole->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('model-has-roles.edit',$modelHasRole->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $modelHasRoles->links() !!}
            </div>
        </div>
    </div>
@endsection