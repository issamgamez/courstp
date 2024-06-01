@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1>Create Course</h1>
    <form action="{{ route('cours.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="images">Image</label>
            <input type="file" class="form-control" id="images" name="images" required>
        </div>
        <div class="form-group">
            <label for="numero">Numero</label>
            <input type="text" class="form-control" id="numero" name="numero" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="mase_horaire">Mase Horaire</label>
            <input type="text" class="form-control" id="mase_horaire" name="mase_horaire" required>
        </div>
        <div class="form-group">
            <label for="specialite">Specialité</label>
            <input type="text" class="form-control" id="specialite" name="specialite" required>
        </div>
        <div class="form-group form-check">
            <input type="hidden" name="bestseller" value="0">
            <input type="checkbox" class="form-check-input" id="bestseller" name="bestseller" value="1">
            <label class="form-check-label" for="bestseller">Bestseller</label>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
