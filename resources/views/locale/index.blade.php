@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Locale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Locale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('locales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idempresas</th>
										<th>Descripcion</th>
										<th>Idpaises</th>
										<th>Idciudades</th>
										<th>Direccion</th>
										<th>Email</th>
										<th>Fono</th>
										<th>Anexo</th>
										<th>Idencargados</th>
										<th>Idestado</th>
										<th>Idtipolocales</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($locales as $locale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $locale->idEmpresas }}</td>
											<td>{{ $locale->Descripcion }}</td>
											<td>{{ $locale->idPaises }}</td>
											<td>{{ $locale->idCiudades }}</td>
											<td>{{ $locale->Direccion }}</td>
											<td>{{ $locale->Email }}</td>
											<td>{{ $locale->Fono }}</td>
											<td>{{ $locale->Anexo }}</td>
											<td>{{ $locale->idEncargados }}</td>
											<td>{{ $locale->idEstado }}</td>
											<td>{{ $locale->idTipoLocales }}</td>

                                            <td>
                                                <form action="{{ route('locales.destroy',$locale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('locales.show',$locale->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('locales.edit',$locale->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $locales->links() !!}
            </div>
        </div>
    </div>
@endsection
