{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.app')

@section('content')

<div class="container my-5">

    <h1 class="text-center">Modifica il progetto selezionato</h1>

    @if($errors->any())

        <div class="alert alert-dark" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>    
        </div>

    @endif

<form action="{{ route('admin.project.update', $project) }}" method="POST">
    
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $project->title }}">
        @error('title')
            <small class="text-danger"> {{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" >{{ $project->description }}</textarea>
        @error('description')
            <small class="text-danger"> {{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="client" class="form-label">Cliente</label>
        <input type="text" class="form-control @error('client') is-invalid @enderror" id="client" name="client" value="{{ $project->client }}">
        @error('client')
            <small class="text-danger"> {{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>




@endsection