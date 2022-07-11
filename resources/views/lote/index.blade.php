@extends('layouts.app')

@section('template_title')
    Lote
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lote') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lotes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Idsubproducto</th>
										<th>Ean</th>
										<th>Stock</th>
										<th>Stockcritico</th>
										<th>Stockcomprometido</th>
										<th>Idlocal</th>
										<th>Idestado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lotes as $lote)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $lote->idEmpresas }}</td>
											<td>{{ $lote->idSubProducto }}</td>
											<td>{{ $lote->Ean }}</td>
											<td>{{ $lote->Stock }}</td>
											<td>{{ $lote->StockCritico }}</td>
											<td>{{ $lote->StockComprometido }}</td>
											<td>{{ $lote->idLocal }}</td>
											<td>{{ $lote->idEstado }}</td>

                                            <td>
                                                <form action="{{ route('lotes.destroy',$lote->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lotes.show',$lote->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lotes.edit',$lote->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $lotes->links() !!}
            </div>
        </div>
    </div>
@endsection
