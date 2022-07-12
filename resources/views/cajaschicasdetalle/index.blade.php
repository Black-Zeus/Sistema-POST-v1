@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Cajaschicasdetalle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cajaschicasdetalle') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cajaschicasdetalles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idcajaschicas</th>
										<th>Idaccionescajaschicas</th>
										<th>Idtipocajaschicas</th>
										<th>Idtipomovimientoscajas</th>
										<th>Descripcion</th>
										<th>Monto</th>
										<th>Iduser</th>
										<th>Idlocal</th>
										<th>Idestado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cajaschicasdetalles as $cajaschicasdetalle)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cajaschicasdetalle->idCajasChicas }}</td>
											<td>{{ $cajaschicasdetalle->idAccionesCajasChicas }}</td>
											<td>{{ $cajaschicasdetalle->idTipoCajasChicas }}</td>
											<td>{{ $cajaschicasdetalle->idTipoMovimientosCajas }}</td>
											<td>{{ $cajaschicasdetalle->Descripcion }}</td>
											<td>{{ $cajaschicasdetalle->Monto }}</td>
											<td>{{ $cajaschicasdetalle->idUser }}</td>
											<td>{{ $cajaschicasdetalle->idLocal }}</td>
											<td>{{ $cajaschicasdetalle->idEstado }}</td>

                                            <td>
                                                <form action="{{ route('cajaschicasdetalles.destroy',$cajaschicasdetalle->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cajaschicasdetalles.show',$cajaschicasdetalle->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cajaschicasdetalles.edit',$cajaschicasdetalle->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $cajaschicasdetalles->links() !!}
            </div>
        </div>
    </div>
@endsection
