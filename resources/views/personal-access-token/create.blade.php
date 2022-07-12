@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users List')]) 

@section('template_title')
    Create Personal Access Token
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Personal Access Token</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('personal-access-tokens.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('personal-access-token.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
