@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Movimientosdetalle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Movimientosdetalle') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('movimientosdetalles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idmovimientos</th>
										<th>Idlotes</th>
										<th>Ean</th>
										<th>Idproductos</th>
										<th>Idlistaprecio</th>
										<th>Factordescuentolista</th>
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
                                    @foreach ($movimientosdetalles as $movimientosdetalle)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $movimientosdetalle->idMovimientos }}</td>
											<td>{{ $movimientosdetalle->idLotes }}</td>
											<td>{{ $movimientosdetalle->Ean }}</td>
											<td>{{ $movimientosdetalle->idProductos }}</td>
											<td>{{ $movimientosdetalle->idListaPrecio }}</td>
											<td>{{ $movimientosdetalle->FactorDescuentoLista }}</td>
											<td>{{ $movimientosdetalle->CantidadProductos }}</td>
											<td>{{ $movimientosdetalle->DescuentoAdicional }}</td>
											<td>{{ $movimientosdetalle->MontoNeto }}</td>
											<td>{{ $movimientosdetalle->MontoImpuestos }}</td>
											<td>{{ $movimientosdetalle->MontoTotal }}</td>
											<td>{{ $movimientosdetalle->idEstado }}</td>

                                            <td>
                                                <form action="{{ route('movimientosdetalles.destroy',$movimientosdetalle->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('movimientosdetalles.show',$movimientosdetalle->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('movimientosdetalles.edit',$movimientosdetalle->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $movimientosdetalles->links() !!}
            </div>
        </div>
    </div>
@endsection
