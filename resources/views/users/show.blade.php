@extends('layouts.master')

@section('content')
    <div class="container py-4">
        <div class="mb-4">
            <a href="{{ route('user.index') }}" class="text-primary">Back</a>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" disabled value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" disabled value="{{ $user->email }}">
        </div>
    </div>
@endsection
