@extends('layouts.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="container py-4">
        <h1 class="mb-4">Belajar CRUD dengan livewire</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                @livewire('user-create')
            </div>
        </div>
        <div>
            @livewire('user-table')
        </div>
    </div>
@endsection
