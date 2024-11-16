@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h1><i class="fa fa-users"></i> Administración de Usuarios</h1>
        </div>
        @can('user-create')
            <div class="pull-right mt-2 mb-2">
                <a class="btn btn-success btn-lg" href="{{ route('users.create') }}"><i class="fa fa-user-plus"></i> {{ __('Create New User')}}</a>
            </div>
        @endcan
    </div>
</div>

    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white">
            Administración de Usuarios
        </div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>

<p class="text-center text-primary"><small>By silvio.ramirez.m@gmail.com</small></p>

<!-- Button trigger modal -->
{{-- <button type="button" id="btnModal" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#defaultModal">
    <i class="fa fa-user-plus"></i> {{ __('Create New User')}}
</button> --}}

<!-- Modal -->
{{-- <div class="modal fade" id="defaultModal" tabindex="-1" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="defaultModalLabel">Modal title</h1>
                <button type="button" id="btnClose" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12" id="update_box">
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
        </div>
    </div>
</div> --}}







@endsection

@push('scripts')

    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

<script type="text/javascript">
    // Get the modal
/*     const modal = document.getElementById('defaultModal')
    const box = document.getElementById('update_box')

    modal.addEventListener('hidden.bs.modal', event =>{
        box.innerHTML = ''
    })

    modal.addEventListener('shown.bs.modal', () => {
        axios.get('/users/ajax/create')
            .then(function (response) {
                box.innerHTML = response.data
            })
    }) */

</script>

@endpush

