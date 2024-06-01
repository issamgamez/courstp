@extends('layout.app')

@section('title', 'Liste de cours')

@section('content')
<div class="container mt-5">
    <h1>Liste de cours</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Mase Horaire</th>
                <th scope="col">Specialité</th>
                <th scope="col">Bestseller</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <a class="badge badge-info" href="{{route('cours.create')}}">create a new cours</a>
            
            @foreach($cours as $course)
            <tr>
                <th scope="row">{{ $course->id }}</th>
                <td>
                    <a href="{{ route('cours.show', $course->id) }}">{{ $course->title }}</a>
                </td>
                <td>{{ $course->mase_horaire }}</td>
                <td>{{ $course->specialite }}</td>
                <td>
                    @if($course->bestseller)
                        <span class="badge badge-success">Bestseller</span>
                    @else
                        <span class="badge badge-secondary">-</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('cours.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('cours.destroy', $course->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('cours.objectifs', $course->id) }}" class="btn btn-warning btn-sm">objectifs</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
