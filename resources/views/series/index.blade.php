@extends('layouts.app')

@section('title', 'Series')

@section('content')

    <div class="form-group">
        <a href="{{ route('series.create') }}" class="btn btn-primary">Create</a>
    </div>
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>

@endsection
