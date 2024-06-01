@extends('layout.app')

@section('title', 'Edit Objectif')

@section('content')
<div class="container mt-5">
    <h1>Edit Objectif</h1>
    <form action="{{ route('objectifs.update', $objectif->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $objectif->description }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Objectif</button>
    </form>
</div>
@endsection
