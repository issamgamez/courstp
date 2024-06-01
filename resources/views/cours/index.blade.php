@extends('layout.app')

@section('title', 'Liste de cours')

@section('content')
<div class="container mt-5">
    <h1>Liste de cours</h1>
    <div class="row">
        @foreach($cours as $course)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($course->images)
                        <img src="{{ $course->images }}" class="card-img-top" alt="{{ $course->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('cours.show', $course->id) }}">{{ $course->title }}</a>
                        </h5>
                        <p class="card-text">Mase Horaire: {{ $course->mase_horaire }}</p>
                        <p class="card-text">Specialité: {{ $course->specialite }}</p>
                        @if($course->bestseller)
                            <span class="badge badge-success">Bestseller</span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
