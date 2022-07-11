@extends('layouts.app', ['activePage' => 'countries', 'titlePage' => __('List of Countries')])

@section('template_title')
  Paises
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

                      <th>Codpaises</th>
                      <th>Nombre</th>
                      <th>Idestado</th>

                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($paises as $paise)
                      <tr>
                        <td>{{ ++$i }}</td>

                        <td>{{ $paise->CodPaises }}</td>
                        <td>{{ $paise->Nombre }}</td>
                        <td>{{ $paise->estado->Descripcion }} </td>

                        <td>
                          <form
                            action="{{ route('paises.destroy', $paise->id) }}"
                            method="POST">
                            <a class="btn btn-sm btn-primary "
                              href="{{ route('paises.show', $paise->id) }}"><i
                                class="fa fa-fw fa-eye"></i> Show</a>
                            <a class="btn btn-sm btn-success"
                              href="{{ route('paises.edit', $paise->id) }}"><i
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
                  {!! $paises->links() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
