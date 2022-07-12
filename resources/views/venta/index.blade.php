@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Venta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Venta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ventas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Idlocal</th>
										<th>Iduser</th>
										<th>Idmovimientos</th>
										<th>Iddocumentostipo</th>
										<th>Foliodocumentos</th>
										<th>Idcliente</th>
										<th>Idcontactos</th>
										<th>Cantidadproductos</th>
										<th>Descuentoadicional</th>
										<th>Montoneto</th>
										<th>Montoimpuestos</th>
										<th>Montototal</th>
										<th>Idestado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $venta->idEmpresas }}</td>
											<td>{{ $venta->idLocal }}</td>
											<td>{{ $venta->idUser }}</td>
											<td>{{ $venta->idMovimientos }}</td>
											<td>{{ $venta->idDocumentosTipo }}</td>
											<td>{{ $venta->FolioDocumentos }}</td>
											<td>{{ $venta->idCliente }}</td>
											<td>{{ $venta->idContactos }}</td>
											<td>{{ $venta->CantidadProductos }}</td>
											<td>{{ $venta->DescuentoAdicional }}</td>
											<td>{{ $venta->MontoNeto }}</td>
											<td>{{ $venta->MontoImpuestos }}</td>
											<td>{{ $venta->MontoTotal }}</td>
											<td>{{ $venta->idEstado }}</td>

                                            <td>
                                                <form action="{{ route('ventas.destroy',$venta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ventas.show',$venta->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ventas.edit',$venta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $ventas->links() !!}
            </div>
        </div>
    </div>
@endsection
