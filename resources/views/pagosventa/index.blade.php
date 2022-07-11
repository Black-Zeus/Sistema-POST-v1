@extends('layouts.app')

@section('template_title')
    Pagosventa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pagosventa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pagosventas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idventas</th>
										<th>Idmetodospagos</th>
										<th>Codigoregistro</th>
										<th>Totalventas</th>
										<th>Montotemporal</th>
										<th>Saldoventas</th>
										<th>Idestado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pagosventas as $pagosventa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pagosventa->idVentas }}</td>
											<td>{{ $pagosventa->idMetodosPagos }}</td>
											<td>{{ $pagosventa->CodigoRegistro }}</td>
											<td>{{ $pagosventa->TotalVentas }}</td>
											<td>{{ $pagosventa->MontoTemporal }}</td>
											<td>{{ $pagosventa->SaldoVentas }}</td>
											<td>{{ $pagosventa->idEstado }}</td>

                                            <td>
                                                <form action="{{ route('pagosventas.destroy',$pagosventa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pagosventas.show',$pagosventa->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pagosventas.edit',$pagosventa->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $pagosventas->links() !!}
            </div>
        </div>
    </div>
@endsection
