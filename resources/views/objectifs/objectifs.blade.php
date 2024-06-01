@extends('layout.app')

@section('title', 'Objectifs du Cours')

@section('content')
<div class="container mt-5">
    <h1>Objectifs du Cours: {{ $course->title }}</h1>
   
    <a href="{{ route('objectifs.create', $course->numero) }}" class="btn btn-warning btn-sm">Add a new objectif</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($objectifs as $objectif)
            <tr>
                <th scope="row">{{ $objectif->id }}</th>
                <td>{{ $objectif->description }}</td>
                <td>
                    <a href="{{ route('objectifs.edit', $objectif->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('objectifs.destroy', $objectif->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
