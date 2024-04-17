<!-- resources/views/img_location/create.blade.php -->

@extends('layouts.app') <!-- Asume que tienes un layout base -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('img_location.store') }}">
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

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
