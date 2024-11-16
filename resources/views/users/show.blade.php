@extends('layouts.app')

@section('content')

<a class="btn btn-primary btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>

{{-- BoostrapCard --}}
<div class="col-lg-12 margin-tb">
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white"><i class="fa fa-user-check"></i> 
            {{ __('Show User')}}
        </div>
        <div class="card-body">
            <div class="form-group">
                <strong>{{ __('Name')}}</strong>
                {{ $user->name }}
            </div>
            <div class="form-group">
                <strong>{{ __('Email')}}</strong>
                {{ $user->email }}
            </div>
            <div class="form-group">
                <strong>{{ __('Roles')}}</strong>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <span class="badge bg-success">{{ $v }}</span>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@endsection