@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Contactosproveedore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contactosproveedore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contactosproveedores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idproveedor</th>
										<th>Idencargados</th>
										<th>Nombre</th>
										<th>Idpaises</th>
										<th>Idciudades</th>
										<th>Direccion</th>
										<th>Email</th>
										<th>Fono</th>
										<th>Anexo</th>
										<th>Idestado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contactosproveedores as $contactosproveedore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contactosproveedore->idProveedor }}</td>
											<td>{{ $contactosproveedore->idEncargados }}</td>
											<td>{{ $contactosproveedore->Nombre }}</td>
											<td>{{ $contactosproveedore->idPaises }}</td>
											<td>{{ $contactosproveedore->idCiudades }}</td>
											<td>{{ $contactosproveedore->Direccion }}</td>
											<td>{{ $contactosproveedore->Email }}</td>
											<td>{{ $contactosproveedore->Fono }}</td>
											<td>{{ $contactosproveedore->Anexo }}</td>
											<td>{{ $contactosproveedore->idEstado }}</td>

                                            <td>
                                                <form action="{{ route('contactosproveedores.destroy',$contactosproveedore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contactosproveedores.show',$contactosproveedore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contactosproveedores.edit',$contactosproveedore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $contactosproveedores->links() !!}
            </div>
        </div>
    </div>
@endsection
