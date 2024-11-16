@extends('layouts.app')

@section('content')

<div class="container">
    
    @include('fragment.error')
    @include('fragment.success')
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h1><i class="fa fa-users"></i> Administración de Roles</h1>
            </div>
            @can('user-create')
                <div class="pull-right mt-2 mb-2">
                    <a class="btn btn-success btn-lg" href="{{ route('roles.create') }}"><i class="fa fa-user-plus"></i> {{ __('Create New Role')}}</a>
                </div>
            @endcan
        </div>
    </div>

    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white">
            Administración de Roles
        </div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
<p class="text-center text-primary"><small>By silvio.ramirez.m@gmail.com</small></p>

@endsection

@push('scripts')

    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@endpush