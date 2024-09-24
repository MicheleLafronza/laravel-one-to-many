@extends('layouts.app')

@section('content')

<div class="card container-fluid">
    <div class="card-body">
      <h5 class="card-title">{{ $project->title }}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{ $project->client }}</h6>
      <p class="card-text">{{ $project->description }}</p>
      <a href="{{ route('admin.project.index') }}" class="card-link">Torna all'elenco</a>
    </div>
  </div>

@endsection