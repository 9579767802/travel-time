@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-12 ">
                    <div class="card-header d-flex justify-content-between">Manage Vehicles
                        <a href="{{ route('vehicles.create') }}" class="btn btn-success btn-sm">Add Vehicle</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
    @push('scripts')
        {{ $dataTable->scripts() }}
    @endpush
@endsection
