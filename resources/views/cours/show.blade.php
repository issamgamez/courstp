@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $cour->title }}</h1>
    @if($cour->images)
        <img src="{{ $cour->images }}" alt="{{ $cour->title }}" class="img-fluid mb-4">
    @endif
    <p><strong>Numero:</strong> {{ $cour->numero }}</p>
    <p><strong>Description:</strong> {{ $cour->description }}</p>
    <p><strong>Mase Horaire:</strong> {{ $cour->mase_horaire }}</p>
    <p><strong>Specialité:</strong> {{ $cour->specialite }}</p>
    <p><strong>Bestseller:</strong> {{ $cour->bestseller ? 'Yes' : 'No' }}</p>
    <p><strong>Created At:</strong> {{ $cour->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $cour->updated_at }}</p>
    
    <h2>Objectifs</h2>
    @if($cour->objectifs->isEmpty())
        <p>No objectifs available.</p>
    @else
        <ul>
            @foreach($cour->objectifs as $objectif)
                <li>{{ $objectif->id }} : {{ $objectif->description }}</li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('cours.index') }}" class="btn btn-primary">Back to Courses</a>
</div>
@endsection
