@extends('layouts.app')

@section('content')

<a class="btn btn-primary btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>

<div class="col-lg-12 margin-tb">
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white"><i class="fa fa-user-check"></i> 
            {{ __('Show Role')}}
        </div>
        <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('Name')}}</strong>
                    {{ $role->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('Permissions')}}:</strong>
                    @if(!empty($rolePermissions))
                        @foreach($rolePermissions as $v)
                        <br>
                        <span class="badge bg-success">{{ $v->name }}</span>
                            
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection