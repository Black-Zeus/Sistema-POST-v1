@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Personal Access Token
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personal Access Token') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personal-access-tokens.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Tokenable Type</th>
										<th>Tokenable Id</th>
										<th>Name</th>
										<th>Token</th>
										<th>Abilities</th>
										<th>Last Used At</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personalAccessTokens as $personalAccessToken)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $personalAccessToken->tokenable_type }}</td>
											<td>{{ $personalAccessToken->tokenable_id }}</td>
											<td>{{ $personalAccessToken->name }}</td>
											<td>{{ $personalAccessToken->token }}</td>
											<td>{{ $personalAccessToken->abilities }}</td>
											<td>{{ $personalAccessToken->last_used_at }}</td>

                                            <td>
                                                <form action="{{ route('personal-access-tokens.destroy',$personalAccessToken->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personal-access-tokens.show',$personalAccessToken->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personal-access-tokens.edit',$personalAccessToken->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $personalAccessTokens->links() !!}
            </div>
        </div>
    </div>
@endsection
