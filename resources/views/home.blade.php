@extends('layouts.main')
@section('title','Home')

@section('content')
    <h3 class="text-center mb-5">Ecco le nostre offerte di oggi</h3>
    @if($trains)      
    @foreach($trains as $train)
    <p><strong>Agenzia:</strong> {{ $train->company }}</p>
    <p><strong>Partenza:</strong>  {{ $train->departure }}</p>
    <p><strong>Arrivo:</strong>  {{ $train->arrival }}</p>
    <p><strong> Ora partenza:</strong> {{ $train->departure_time }}</p>
    <p><strong> Ora arrivo:</strong> {{ $train->arrival_time }}</p>
    <p><strong>Treno numero:</strong> {{ $train->reference }}</p>
    <p><strong>Numero carrozze:</strong>{{ $train->carriages }}</p>
    <p><strong>Ritardo:</strong> {{ $train->delay }} minuti</p>
    <p>Cancellato: {{ $train->is_deleted }}</p>
    <hr>
    @endforeach
@else
<h2>Nessun treno disponibile, riprovare.</h2>
@endif
@endsection