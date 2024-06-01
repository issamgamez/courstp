@extends('layout.app')

@section('title', 'Create Objectif')

@section('content')
<div class="container mt-5">
    <h1>Create Objectif</h1>
    <p>Course Numero: {{ $numero }}</p>

    <form action="{{ route('objectifs.store') }}" method="POST">
        @csrf
        <input type="hidden" name="coursid" value="{{ $numero }}">

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Objectif</button>
    </form>
</div>
@endsection
