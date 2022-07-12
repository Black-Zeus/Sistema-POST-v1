@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Update Locale
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Locale</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('locales.update', $locale->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('locale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
