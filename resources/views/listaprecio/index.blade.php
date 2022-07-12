@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Listaprecio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listaprecio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('listaprecios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idtipolistaprecios</th>
										<th>Descripcion</th>
										<th>Fechainicio</th>
										<th>Fechatermino</th>
										<th>Idestado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listaprecios as $listaprecio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $listaprecio->idTipoListaPrecios }}</td>
											<td>{{ $listaprecio->Descripcion }}</td>
											<td>{{ $listaprecio->FechaInicio }}</td>
											<td>{{ $listaprecio->FechaTermino }}</td>
											<td>{{ $listaprecio->idEstado }}</td>

                                            <td>
                                                <form action="{{ route('listaprecios.destroy',$listaprecio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('listaprecios.show',$listaprecio->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('listaprecios.edit',$listaprecio->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $listaprecios->links() !!}
            </div>
        </div>
    </div>
@endsection
