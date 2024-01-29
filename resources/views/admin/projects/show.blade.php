@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
      <a class="btn btn-success my-3" href="{{ route('admin.projects.index') }}">&LeftArrow; back</a>
      <h2>{{ $project->title }}</h2>
      <p>Type: {{ $project->type ? $project->type->name : 'No Type assigned' }}</p>

      <div>
        <p>{{ $project->content }}</p>

        <ul class="list-unstyled">
          <li>Data: {{ $project->created_at }}</li>
          <li>Slug: {{ $project->slug }}</li>
        </ul>

      </div>

    </div>
@endsection