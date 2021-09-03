@extends('layouts.app')

@section('content')
    <form class="form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('series.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection
