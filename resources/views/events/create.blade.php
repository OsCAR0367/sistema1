@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Nuevo Evento</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre del Evento</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="mb-3">
            <label for="date_time" class="form-label">Fecha y Hora</label>
            <input type="datetime-local" class="form-control" id="date_time" name="date_time" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Evento</button>
    </form>
</div>
@endsection
