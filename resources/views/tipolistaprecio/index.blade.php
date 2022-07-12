@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
  Tipolistaprecio
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('List of Countries') }}</h4>
              <p class="card-category">{{ __('User information') }}</p>
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

                      <th>Descripcion</th>
                      <th>Estado</th>

                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tipolistaprecios as $tipolistaprecio)
                      <tr>
                        <td>{{ ++$i }}</td>

                        <td>{{ $tipolistaprecio->Descripcion }}</td>
                        <td>{{ $tipolistaprecio->estado->Descripcion }}</td>

                        <td>
                          <form
                            action="{{ route('tipolistaprecios.destroy', $tipolistaprecio->id) }}"
                            method="POST">
                            <a class="btn btn-sm btn-primary "
                              href="{{ route('tipolistaprecios.show', $tipolistaprecio->id) }}"><i
                                class="fa fa-fw fa-eye"></i> Show</a>
                            <a class="btn btn-sm btn-success"
                              href="{{ route('tipolistaprecios.edit', $tipolistaprecio->id) }}"><i
                                class="fa fa-fw fa-edit"></i> Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                              class="btn btn-danger btn-sm"><i
                                class="fa fa-fw fa-trash"></i> Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-end">
                  {!! $tipolistaprecios->links() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
