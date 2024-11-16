@extends('layouts.app')

@section('content')

<a class="btn btn-primary btn-sm mb-2" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> {{ __('Back')}}</a>


<div class="col-lg-12 margin-tb">
    @include('fragment.error')
    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white"><i class="fa fa-edit"></i> 
            {{ __('Edit')}} Producto
        </div>
        <div class="card-body">

            {!! Form::model($product, ['method' => 'PATCH','route' => ['products.update', $product->id]]) !!}
                @include('products.partials.form')
            {!! Form::close() !!}

        </div>
    </div>
</div>
<p class="text-center text-primary"><small>By silvio.ramirez.m@gmail.com</small></p>
@endsection