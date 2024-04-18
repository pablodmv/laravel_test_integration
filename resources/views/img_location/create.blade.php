<!-- resources/views/img_location/create.blade.php -->

@extends('adminlte::page')

@section('title', 'Agregar imagen')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.10.0/toastify.js" integrity="sha512-mwSdINqQLRATPXGW3x8ce1DFtv+qX8V1sq1ciyGdOyqtFGbU6oU2a+o3ol5QcoXfiX9pI6gZOq9i3k14AQL0UQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('img_location.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="location">Ubicación:</label>
                            <select name="location" id="location" class="form-control">
                                <option value="{{ $imgLocationEnum }}">Portada 1</option>
                                {{-- <option value="{{ imgLocationEnum::PORTADA2 }}">Portada 2</option>
                                <option value="{{ imgLocationEnum::LOGO }}">Logo</option> --}}
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="url">URL:</label>
                            <input type="text" name="url" id="url" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="category">Categoría:</label>
                            <input type="text" name="category" id="category" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="tags">Etiquetas:</label>
                            <input type="text" name="tags" id="tags" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Imagen:</label>
                            <input type="file" name="image" id="image" class="form-control-file" accept="image/*" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
