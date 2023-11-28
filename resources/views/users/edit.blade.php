@extends('layouts.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="container py-4">
        <div class="mb-4">
            <a href="{{ route('user.index') }}" class="text-primary">Back</a>
        </div>
        <h1 class="mb-4">Edit Data</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                @livewire('user-edit', ['user' => $user])
            </div>
        </div>
    </div>
@endsection
