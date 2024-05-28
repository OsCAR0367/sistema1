@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Eventos</h1>
    <a href="{{ route('events.create') }}" class="btn btn-primary">Registrar Nuevo Evento</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Fecha y Hora</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->name }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->date_time }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
