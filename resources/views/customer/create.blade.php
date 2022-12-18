@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card p-4">
                <form action="{{ route('customer.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Customer</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur Customer</label>
                        <input type="text" class="form-control" id="umur" name="umur">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Buat Customer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection