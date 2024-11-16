@extends('layouts.app')

@section('content')

<div class="container">
    
    @include('fragment.error')
    @include('fragment.success')
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h1><i class="fa fa-users"></i> Calendario de Mantenimiento de Software</h1>
            </div>
            @can('user-create')
                <div class="pull-right mt-2 mb-2">
                    <a class="btn btn-success btn-lg" href="{{ route('roles.create') }}"><i class="fa fa-user-plus"></i> {{ __('Crear Nuevo Evento') }}</a>
                    <button class="btn btn-danger" id="link-calendario"> Calendario</button>
                </div>
            @endcan
        </div>
    </div>

    <div class="card border-light mb-3 shadow">
        <div class="card-header bg-primary text-white">
            Calendario de Mantenimiento de Software
        </div>
        <div class="card-body">
            <div id='calendar'></div>
        </div>
    </div>
</div>
<p class="text-center text-primary"><small>Contraloria del Estado Trujillo</small></p>

@endsection

@push('scripts')

<script type="module">

$("#link-calendario").click(function(){  
    calendario_citas();
});

function calendario_citas(){
    var calendar_c = $('#calendarioCitas').fullCalendar({  // assign calendar
    

    });
}
    /* document.addEventListener('livewire:load', function() {
            alert('hola');

            var calendarEl = document.getElementById('calendar');
            var calendar = new Calendar(calendarEl, {

                plugins: [dayGridPlugin, timeGridPlugin, listPlugin, rrulePlugin, interaction],

                initialView: "timeGridWeek",
                locale: deLocale,

                events: [],
            });

            calendar.render();
        }); */

</script>
@endpush