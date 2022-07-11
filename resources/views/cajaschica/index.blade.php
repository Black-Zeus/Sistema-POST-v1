@extends('layouts.app')

@section('template_title')
    Cajaschica
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cajaschica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cajaschicas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Iduser</th>
										<th>Idempresas</th>
										<th>Idlocal</th>
										<th>Montoefectivo</th>
										<th>Idestado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cajaschicas as $cajaschica)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cajaschica->idUser }}</td>
											<td>{{ $cajaschica->idEmpresas }}</td>
											<td>{{ $cajaschica->idLocal }}</td>
											<td>{{ $cajaschica->MontoEfectivo }}</td>
											<td>{{ $cajaschica->idEstado }}</td>

                                            <td>
                                                <form action="{{ route('cajaschicas.destroy',$cajaschica->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cajaschicas.show',$cajaschica->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cajaschicas.edit',$cajaschica->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $cajaschicas->links() !!}
            </div>
        </div>
    </div>
@endsection
