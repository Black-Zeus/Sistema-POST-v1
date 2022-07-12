@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Subproducto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Subproducto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subproductos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idproductos</th>
										<th>Descripcion</th>
										<th>Idgrupo</th>
										<th>Idsubgrupo</th>
										<th>Idtamano</th>
										<th>Idestado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subproductos as $subproducto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subproducto->idProductos }}</td>
											<td>{{ $subproducto->Descripcion }}</td>
											<td>{{ $subproducto->idGrupo }}</td>
											<td>{{ $subproducto->idSubGrupo }}</td>
											<td>{{ $subproducto->idTamano }}</td>
											<td>{{ $subproducto->idEstado }}</td>

                                            <td>
                                                <form action="{{ route('subproductos.destroy',$subproducto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subproductos.show',$subproducto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subproductos.edit',$subproducto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $subproductos->links() !!}
            </div>
        </div>
    </div>
@endsection
